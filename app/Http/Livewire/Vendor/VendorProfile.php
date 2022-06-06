<?php

namespace App\Http\Livewire\Vendor;

use App\Models\City;
use App\Models\Country;
use App\Models\Governorate;
use App\Models\ProfileVendor;
use App\Models\Vendor;
use Livewire\Component;

class VendorProfile extends Component
{
    public $upd_name,$upd_email,$upd_user_name,$upd_password,$upd_is_active,$upd_default_language,
    $upd_country,$upd_governorate,$upd_city,$upd_address, $upd_land_line,$upd_phone, $upd_fax, $upd_whatsApp,$upd_company_name,$vendor_id,$upd_bio;

    public $image;


    public function render()
    {
        return view('livewire.vendor.vendor-profile',[
            'profile'=>ProfileVendor::where('vendor_id',auth('vendor')->user()->id)->first(),
            'governorates'=>Governorate::orderBy('id','asc')->get(),
            'countries'=>Country::orderBy('id','asc')->get(),
            'cities'=>City::orderBy('id','asc')->get(),
        ]);
    }

    public function OpenEditVendorProfileModal($id){
        $id = auth('vendor')->user()->id;
        $info = ProfileVendor::where('vendor_id',$id)->first();
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

    public function updateVendorProfile(){
        $id = auth('vendor')->user()->id;
        $vendor_id = ProfileVendor::where('vendor_id',$id)->first();
        $vendor_id = $this->vendor_id;
        $update = Vendor::where('id',$id)->update([
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
            $this->dispatchBrowserEvent('CloseEditVendorProfileModal');
        }
    }
}
