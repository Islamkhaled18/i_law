<?php

namespace App\Http\Livewire\Admin;

use App\Models\profileAdmin;
use Livewire\Component;

class Adminprofile extends Component
{
    public $upd_name,$upd_email,$upd_user_name,
    $upd_password,$admin_id,$upd_status ,$upd_phone ,$upd_is_active,$upd_image;


    public function render()
    {
        return view('livewire.admin.adminprofile',[
            'profile'=>profileAdmin::where('admin_id',auth()->user()->id)->first()
        ]);
    }


    public function OpenEditAdminProfileModal($id){
        $info = profileAdmin::find($id);
        $this->upd_name = $info->name;
        $this->upd_email = $info->email;
        $this->upd_user_name = $info->user_name;
        $this->upd_password = $info->password;
        $this->upd_is_active = $info->is_active;
        $this->upd_phone = $info->phone;
        $this->upd_default_language = $info->default_language;
        $this->upd_image = $info->image;
        $this->admin_id = $info->id;
        $this->dispatchBrowserEvent('OpenEditAdminProfileModal',[
            'id'=>$id
        ]);
    }

    public function updateProfile(){
        $admin_id = $this->admin_id;
        // $this->validate([
        //     'upd_name'=>'required',
        //     'upd_email'=>'required|unique:admins,email,'.$admin_id,
        //     'upd_user_name'=>'required',
        //     'upd_password'=>'required',
        //     'upd_is_active'=>'required',
        //     'upd_phone'=>'required',
        //     'upd_default_language'=>'required'

        // ]);

        $update = profileAdmin::find($admin_id)->update([
            'name'=>$this->upd_name,
            'email'=>$this->upd_email,
            'user_name'=>$this->upd_user_name,
            'is_active'=>$this->upd_is_active,
            'default_language'=>$this->upd_default_language,
            'phone'=>$this->upd_phone,
            'password'=>$this->upd_password,
            'image'=>$this->upd_image
        ]);

        if($update){
            $this->dispatchBrowserEvent('CloseEditAdminProfileModal');
        }
    }

}
