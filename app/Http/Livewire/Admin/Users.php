<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\City;
use App\Models\Country;
use App\Models\Governorate;
use App\Models\User;

class Users extends Component
{
    public $name,$email,$user_name,$password,$is_active,$default_language,
    $country,$governorate,$city,$address, $land_line,$phone, $fax, $whatsApp;

    public $upd_name,$upd_email,$upd_user_name,$upd_password,$upd_is_active,$upd_default_language,
    $upd_country,$upd_governorate,$upd_city,$upd_address, $upd_land_line,$upd_phone, $upd_fax, $upd_whatsApp,$user_id;
    protected $listeners =['uuu'];

    public function render()
    {
        return view('livewire.admin.users',[
            'governorates'=>Governorate::orderBy('id','asc')->get(),
            'countries'=>Country::orderBy('id','asc')->get(),
            'cities'=>City::orderBy('id','asc')->get(),
            'users'=>User::orderBy('id','asc')->paginate(5)
        ]);
    }

    public function OpenAddUsersModal(){
        $this->name = '';
        $this->email = '';
        $this->user_name = '';
        $this->password = '';
        $this->is_active = '';
        $this->default_language = '';
        $this->country = '';
        $this->governorate  = '';
        $this->city = '';
        $this->address = '';
        $this->land_line = '';
        $this->phone = '';
        $this->fax ='';
        $this->whatsApp ='';
        $this->dispatchBrowserEvent('OpenAddUsersModal');
    }
    public function saveUser(){
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'user_name' => 'required',
            'password' => 'required',
            'is_active' => 'required',
            'default_language' => 'required',
            'country' => 'required',
            'governorate'  => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);

        $save = User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'user_name'=>$this->user_name,
            'password'=>$this->password,
            'is_active'=>$this->is_active,
            'default_language'=>$this->default_language,
            'country_id'=>$this->country,
            'governorate_id'=>$this->governorate,
            'city_id'=>$this->city,
            'address'=>$this->address,
            'land_line'=>$this->land_line,
            'phone'=>$this->phone,
            'fax'=>$this->fax,
            'whatsApp'=>$this->whatsApp,
        ]);
        if($save){
            $this->dispatchBrowserEvent('CloseAddUserModal');
        }
    }

    public function OpenEditUserModal($id){
        $info = User::find($id);
        $this->upd_name = $info->name;
        $this->upd_email = $info->email;
        $this->upd_user_name = $info->user_name;
        $this->upd_password = $info->password;
        $this->upd_is_active = $info->is_active;
        $this->upd_default_language = $info->default_language;
        $this->upd_country = $info->country_id;
        $this->upd_governorate = $info->governorate_id;
        $this->upd_city = $info->city_id;
        $this->upd_address = $info->address;
        $this->upd_land_line = $info->land_line;
        $this->upd_phone = $info->phone;
        $this->upd_fax = $info->fax;
        $this->upd_whatsApp = $info->whatsApp;
        $this->user_id = $info->id;
        $this->dispatchBrowserEvent('OpenEditUserModal',[
            'id'=>$id
        ]);
    }

    public function updateUser(){
        $user_id = $this->user_id;
        $this->validate([
            'upd_name'=>'required',
            'upd_email'=>'required',
            'upd_user_name'=>'required',
            'upd_password'=>'required',
            'upd_is_active'=>'required',
            'upd_default_language'=>'required',
            'upd_country'=>'required',
            'upd_governorate'=>'required',
            'upd_city'=>'required',
            'upd_address'=>'required',
            'upd_land_line'=>'required',
            'upd_phone'=>'required',
            'upd_fax'=>'required',
            'upd_whatsApp'=>'required',
        ]);

        $update = User::find($user_id)->update([
            'name'=>$this->upd_name,
            'email'=>$this->upd_email,
            'user_name'=>$this->upd_user_name,
            'password'=>$this->upd_password,
            'is_active'=>$this->upd_is_active,
            'default_language'=>$this->upd_default_language,
            'country_id'=>$this->upd_country,
            'governorate_id'=>$this->upd_governorate,
            'city_id'=>$this->upd_city,
            'address'=>$this->upd_address,
            'land_line'=>$this->upd_land_line,
            'phone'=>$this->upd_phone,
            'fax'=>$this->upd_fax,
            'whatsApp'=>$this->upd_whatsApp,
        ]);
        if($update){
            $this->dispatchBrowserEvent('CloseEditUserModal');
        }
    }


    public function deleteUserConfirm($id){
        $info = User::find($id);
        $this->dispatchBrowserEvent('SwalUserConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->name.'</strong>',
            'id'=>$id
        ]);
    }
    public function uuu($id){
        $del =  User::find($id)->delete();
        if($del){
            $this->dispatchBrowserEvent('uuud');
        }
    }
}
