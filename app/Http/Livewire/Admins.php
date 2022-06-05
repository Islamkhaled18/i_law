<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Admin;
use App\Models\profileAdmin;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Admins extends Component
{
    use WithFileUploads;


    public $name,$email,$user_name,$password,$phone,$is_active,$default_language='Arabic';
    public $upd_name,$upd_email,$upd_user_name,$upd_password,$admin_id,$upd_status ,$upd_phone ,$upd_is_active;
    protected $listeners =['delete'];
    public $image, $upd_image;

    public function render()
    {
    
        return view('livewire.admins',[
            'admins'=>Admin::orderBy('id','asc')->get(),
        ]);
    }
    public function OpenAddAdminModal(){
        $this->name = '';
        $this->email = '';
        $this->user_name = '';
        $this->password = '';
        $this->phone='';
        $this->is_active='';
        $this->default_language='';
        $this->dispatchBrowserEvent('OpenAddAdminModal');
    }

    public function save(){
        $this->validate([
            'name'=>'required',
            'email'=>'required|unique:admins',
            'user_name'=>'required',
            'password'=>'required',
            'phone'=>'required',
            'is_active'=>'required',
            'image'=>'required', 
        ]);

        $save = Admin::updateOrCreate([
            'name'=>$this->name,
            'email'=>$this->email,
            'user_name'=>$this->user_name,
            'phone'=>$this->phone,
            'default_language'=>$this->default_language,
            'is_active'=>$this->is_active,
            'password'=>bcrypt($this->password),
            'image'=>$this->image->hashName()
        ]);


        if (!empty($this->image)){
     
            $this->image->store('photos/admins','public');
        }

        toastr()->success('Data has been saved successfully!');

        $save->profileAdmin()->save(new profileAdmin());

        if($save){
            $this->dispatchBrowserEvent('CloseAddAdminModal');
        }
    }

    public function OpenEditAdminModal($id){
        $info = Admin::find($id);
        $this->upd_name = $info->name;
        $this->upd_email = $info->email;
        $this->upd_user_name = $info->user_name;
        $this->upd_password = $info->password;
        $this->upd_is_active = $info->is_active;
        $this->upd_phone = $info->phone;
        $this->upd_default_language = $info->default_language;
        $this->upd_image = $info->image;
        $this->admin_id = $info->id;
        $this->dispatchBrowserEvent('OpenEditAdminModal',[
            'id'=>$id
        ]);
    }

    public function update(){
        $admin_id = $this->admin_id;
        $this->validate([
            'upd_name'=>'required',
            'upd_email'=>'required|unique:admins,email,'.$admin_id,
            'upd_user_name'=>'required',
            'upd_password'=>'required',
            'upd_is_active'=>'required',
            'upd_phone'=>'required',
            

        ]);


        $update = Admin::find($admin_id)->update([
            'name'=>$this->upd_name,
            'email'=>$this->upd_email,
            'user_name'=>$this->upd_user_name,
            'is_active'=>$this->upd_is_active,
            'default_language'=>$this->upd_default_language,
            'phone'=>$this->upd_phone,
            'password'=>$this->upd_password,
            'image'=>$this->image->hashName()
        ]);

        $dt = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();

        $activityLog =
        [
            'name'=>$this->upd_name,
            'email'=>$this->upd_email,
            'user_name'=>$this->upd_user_name,
            'is_active'=>$this->upd_is_active,
            'default_language'=>$this->upd_default_language,
            'phone'=>$this->upd_phone,
            'password'=>$this->upd_password,
            'image'=>$this->image->hashName(),
            'date_time'=>$todayDate
        ];

        DB::table('admin_activity_logs')->insert($activityLog);


        // if(Storage::exists($this->image)){
        //     unlink($this->image);
        // }

        $this->image->store('photos/admins','public');

        

        if($update){
            $this->dispatchBrowserEvent('CloseEditAdminModal');
        }
    }

    public function deleteConfirm($id){
        $info = Admin::find($id);
        $this->dispatchBrowserEvent('SwalConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->name.'</strong>',
            'id'=>$id
        ]);
    }


    public function delete($id){
        $del =  Admin::find($id)->delete();
        // if (auth()->user()->image){
        //     Storage::delete('/public/images/'.auth()->user()->image);
        //   }
        if($del){
            $this->dispatchBrowserEvent('deleted');
        }
    }

}
