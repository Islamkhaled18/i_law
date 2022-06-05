<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class loginController extends Controller
{
    public function login()
    {
        return view('vendor.auth.login');
    } // end of login route

    public function postLogin(Request $request)
    {
        
        $this->validate($request, [
            'login'    => 'required',
            'password' => 'required',
        ]);
    
        $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL ) 
            ? 'email' 
            : 'user_name';

    
        $request->merge([
            $login_type => $request->input('login')
        ]);
    
        
        if (auth()->guard('vendor')->attempt($request->only($login_type, 'password'))) {
            return redirect()->to('/vendor');
        }
    
        return redirect()->back()
                ->withInput()
                ->withErrors([
                    'login' => 'These credentials do not match our records.',
                ]);

    }// end of login to dashboard route

    public function logout()
    {
        // $gaurd = $this->getGaurd();
        auth()->guard('vendor')->logout();
        return redirect()->route('vendor.login');
    }// end of loOut route

    private function getGaurd()
    {
        return auth('vendor');
    } // end of gaurd

    public function showForgotForm(){
        return view('vendor.auth.forget_form');
    }// forget form page

    public function sendResetLink(Request $request){

         $request->validate([
               'email'=>'required|email|exists:vendors,email'
           ]);

           $token = \Str::random(64);
           \DB::table('password_resets')->insert([
                 'email'=>$request->email,
                 'token'=>$token,
                 'created_at'=>Carbon::now(),
           ]);
           $action_link = route('reset.password.form',['token'=>$token,'email'=>$request->email]);
           $body = "We have received a request to reset the password for <b>Your App Name</b> account associated with ".$request->email.". You can reset your password by clicking the link below.";

           \Mail::send('email-forgot',['action_link'=>$action_link,'body'=>$body], function($message) use ($request){
                $message->from('noreply@example.com', 'Your App Name');
                $message->to($request->email, 'Admin Name')
                        ->subject('Reset Password');
           });

           return back()->with('success', 'We have e-mailed your password reset link');

    }//forget link to email

    public function showResetForm(Request $request, $token = null){
        return view('vendor.auth.reset')->with(['token'=>$token,'email'=>$request->email]);
    }

    public function resetPassword(Request $request){
        $request->validate([
            'email'=>'required|email|exists:vendors,email',
            'password'=>'required|min:5|confirmed',
            'password_confirmation'=>'required',
       ]);

       $check_token = \DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token,
       ])->first();

       if(!$check_token){
           return back()->withInput()->with('fail', 'Invalid token');
       }else{
           Vendor::where('email', $request->email)->update([
               'password'=>\Hash::make($request->password)
           ]);

           \DB::table('password_resets')->where([
               'email'=>$request->email
           ])->delete();

           return redirect()->route('vendor.login')
           ->with('info', 'Your password has been changed! You can login with new password');
        }
    }
}
