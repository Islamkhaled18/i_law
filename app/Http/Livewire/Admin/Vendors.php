<?php

namespace App\Http\Livewire\Admin;

use App\Models\City;
use App\Models\Country;
use App\Models\Governorate;
use App\Models\Vendor;
use Livewire\Component;
use Livewire\WithFileUploads;

class Vendors extends Component
{
    use WithFileUploads;

    public $name,$email,$user_name,$password,$is_active,$default_language,
    $country,$governorate,$city,$address, $land_line,$phone, $fax, $whatsApp,$company_name,$bio;

    public $upd_name,$upd_email,$upd_user_name,$upd_password,$upd_is_active,$upd_default_language,
    $upd_country,$upd_governorate,$upd_city,$upd_address, $upd_land_line,$upd_phone, $upd_fax, $upd_whatsApp,$upd_company_name,$vendor_id,$upd_bio;

    protected $listeners =['zzz'];
    public $image;


    public function render()
    {
        return view('livewire.admin.vendors',[
            'governorates'=>Governorate::orderBy('id','asc')->get(),
            'countries'=>Country::orderBy('id','asc')->get(),
            'cities'=>City::orderBy('id','asc')->get(),
            'vendors'=>Vendor::orderBy('id','asc')->paginate(5)
        ]);
    }
    public function OpenAddVendorsModal(){
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
        $this->company_name ='';
        $this->bio = '';  
        $this->dispatchBrowserEvent('OpenAddVendorsModal');
    }
    public function saveVendor(){
        
        $save = Vendor::updateOrCreate([
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
            'company_name'=>$this->company_name,
            'bio'=>$this->bio,
            'image'=>$this->image->hashName(),
        ]);
        


        if (!empty($this->image)){
     
            $this->image->store('photos/vendors','public');

        }
        



        if($save){
            $this->dispatchBrowserEvent('CloseAddVendorModal');
        }
    }
    public function OpenEditVendorModal($id){
        $info = Vendor::find($id);
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
        $this->upd_company_name = $info->company_name;
        $this->upd_bio = $info->bio;
        $this->vendor_id = $info->id;
        $this->dispatchBrowserEvent('OpenEditVendorModal',[
            'id'=>$id
        ]);
    }

    public function updateVendor(){
        $vendor_id = $this->vendor_id;
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
            'upd_company_name'=>'required'
        ]);

        $update = Vendor::find($vendor_id)->update([
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
            'company_name'=>$this->upd_company_name,
            'bio'=>$this->upd_bio,
            'image'=>$this->image->hashName()
        ]);
        $this->image->store('photos/vendors','public');
        
        if($update){
            $this->dispatchBrowserEvent('CloseEditVendorModal');
        }
    }

    public function deleteVendorConfirm($id){
        $info = Vendor::find($id);
        $this->dispatchBrowserEvent('SwalVendorConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->name.'</strong>',
            'id'=>$id
        ]);
    }
    public function zzz($id){
        $del =  Vendor::find($id)->delete();
        if($del){
            $this->dispatchBrowserEvent('zzzd');
        }
    }

}

