<?php

namespace App\Http\Livewire\Admin;

use App\Models\City;
use App\Models\Country;
use App\Models\Cuurency;
use App\Models\Governorate;
use Livewire\Component;
use Livewire\WithPagination;

class Countries extends Component
{
    use WithPagination;

    public $showGovenorateCountry = false; 
    public $selectedCountry;

    //public $view = 'livewire.admin.countries';
    public $name_ar, $name_en, $name_fr, $country_code, $country_phone_code;
    public $currency ;
    public $upd_name_ar, $upd_name_en, $upd_name_fr, $upd_country_code, $upd_country_phone_code,$country_id,$city_id;
    public $upd_currency;
    protected $listeners =['damage','country'];

    public $currencies;
    public $countries;
    public $governorates;
    public $cities;
    public $data = [];

    public function mount () 
    {
        $this->currencies = Cuurency::orderBy('id','asc')->get();
        $this->countries = Country::orderBy('id', 'desc')->get();
        $this->governorates = Governorate::where('country_id',$this->id)->orderBy('id', 'desc')->get();
        $this->cities = City::where('governorate_id',$this->id)->orderBy('id', 'desc')->get();
    }
    public function render()
    {
        return view('livewire.admin.countries', $this->data);
    }
    public function OpenAddCountryModal()
    {
        $this->name_ar = '';
        $this->name_en = '';
        $this->name_fr = '';
        $this->country_code = '';
        $this->country_phone_code = '';
        $this->currency = '';
        $this->dispatchBrowserEvent('OpenAddCountryModal');
    }
    public function saveCountry()
    {
        $this->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'name_fr' => 'required',
            'country_code' => 'required',
            'country_phone_code' => 'required',
            'currency' => 'required',
        ]);

        $country = Country::create([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'name_fr' => $this->name_fr,
            'country_code' => $this->country_code,
            'country_phone_code' => $this->country_phone_code,
            'currency_id' => $this->currency,
        ]);

        if ($country) {
            $this->dispatchBrowserEvent('CloseAddCountryModal');
        }
    }
    public function OpenEditCountryModal($id){
        $info = Country::find($id);
        $this->upd_name_ar = $info->name_ar;
        $this->upd_name_en = $info->name_en;
        $this->upd_name_fr = $info->name_fr;
        $this->upd_country_code = $info->country_code;
        $this->upd_country_phone_code = $info->country_phone_code;
        $this->country_id = $info->id;
        $this->dispatchBrowserEvent('OpenEditCountryModal',[
            'id'=>$id
        ]);
    }
    public function updateCountry(){
        $country_id = $this->country_id;
        $this->validate([
            'upd_name_ar'=>'required',
            'upd_name_en'=>'required',
            'upd_name_fr'=>'required',
            'upd_country_code'=>'required',
            'upd_country_phone_code'=>'required',
            'upd_currency'=>'required',
        ],[
            'upd_name_ar.required'=>'Enter  name',
            'upd_name_en.required'=>'Enter  name',
            'upd_name_fr.required'=>'Enter  name',
            'upd_country_code.required'=>'Country Code require',
            'upd_country_phone_code.required'=>'Country phone code require',            
            'upd_currency'=>'Currency required',
        ]);

        $country = Country::find($country_id);

        $country->name_ar=$this->upd_name_ar;
        $country->name_en=$this->upd_name_en;
        $country->name_fr=$this->upd_name_fr;
        $country->country_code=$this->upd_country_code;
        $country->country_phone_code=$this->upd_country_phone_code;

        $currency = $this->upd_currency;
        $country->currencies()->sync($currency);

        if($country){
            $this->dispatchBrowserEvent('CloseEditCountryModal');
        }
    }
    public function deleteCountryConfirm($id){
        $info = Country::find($id);
        $this->dispatchBrowserEvent('SwalCountryConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->name_ar.'</strong>',
            'id'=>$id
        ]);
    }
    public function damage($id){
        $del =  Country::find($id)->delete();
        if($del){
            $this->dispatchBrowserEvent('damaged');
        }
    }

    public function GovenorateCountry(Country $country){

        // $this->view = 'livewire.admin.governorates'; //write view path
        // $this->data = [
        //     'country' => $country->id,
        //     'governorates' => Governorate::where('country_id',$this->id)->orderBy('id', 'desc')->get()
        // ];

        $this->showGovenorateCountry = true;
        $this->selectedCountry = $country->id;
    }


}
