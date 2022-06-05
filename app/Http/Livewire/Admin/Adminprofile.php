<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use App\Models\profileAdmin;
use Livewire\Component;
use Livewire\WithFileUploads;


class Adminprofile extends Component
{
    use WithFileUploads;


    public $upd_name,$upd_email,$upd_user_name,
    $upd_password,$admin_id,$upd_status ,$upd_phone ,$upd_is_active,$upd_image,$image;


    public function render()
    {
        return view('livewire.admin.adminprofile',[
            'profile'=>profileAdmin::where('admin_id',auth('admin')->user()->id)->first()
        ]);
    }


    public function OpenEditAdminProfileModal($id){
        $id = auth('admin')->user()->id;
        $info = profileAdmin::where('admin_id',$id)->first();
        $this->upd_name = $info->admin->name;
        $this->upd_email = $info->admin->email;
        $this->upd_user_name = $info->admin->user_name;
        $this->upd_password = $info->admin->password;
        $this->upd_is_active = $info->admin->is_active;
        $this->upd_phone = $info->admin->phone;
        $this->upd_default_language = $info->admin->default_language;
        $this->upd_image = $info->admin->image;
        $this->admin_id = $info->admin->id;
        $this->dispatchBrowserEvent('OpenEditAdminProfileModal',[
            'id'=>$id
        ]);
    }

    public function updateProfile(){
        $id = auth('admin')->user()->id;
        $admin_id = profileAdmin::where('admin_id',$id)->first();
        

        $admin_id = $this->admin_id;
        $update = Admin::where('id',$id)->update([
            'name'=>$this->upd_name,
            'email'=>$this->upd_email,
            'user_name'=>$this->upd_user_name,
            'is_active'=>$this->upd_is_active,
            'default_language'=>$this->upd_default_language,
            'phone'=>$this->upd_phone,
            'password'=>$this->upd_password,
            'image'=>$this->image->hashName()
        ]);
        $this->image->store('photos/admins','public');

       

        if($update){
            $this->dispatchBrowserEvent('CloseEditAdminProfileModal');
        }
    }

}
