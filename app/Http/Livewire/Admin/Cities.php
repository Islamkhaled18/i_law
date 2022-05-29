<?php

namespace App\Http\Livewire\Admin;

use App\Models\City;
use App\Models\Governorate;
use Livewire\Component;

class Cities extends Component
{
    public $name_ar,$name_en,$name_fr,$city_code,$governorate;
    public $upd_name_ar,$upd_name_en,$upd_name_fr,$upd_city_code,$city_id,$upd_governorate;
    protected $listeners =['hazf'];

    public function render()
    {
        return view('livewire.admin.cities',[
            'governorates'=>Governorate::orderBy('id','asc')->get(),
            'cities'=>City::orderBy('id','asc')->get()
        ]);
    }

    public function OpenAddCitiesModal(){
        $this->name_ar = '';
        $this->name_en = '';
        $this->name_fr = '';
        $this->city_code = '';
        $this->governorate ='';
        $this->dispatchBrowserEvent('OpenAddCitiesModal');
    }

    public function saveCity(){
        $this->validate([
            'name_ar'=>'required',
            'name_en'=>'required',
            'name_fr'=>'required',
            'city_code'=>'required',
            'governorate'=>'required'
        ]);

        $save = City::create([
            'name_ar'=>$this->name_ar,
            'name_en'=>$this->name_en,
            'name_fr'=>$this->name_fr,
            'city_code'=>$this->city_code,
            'governorate_id'=>$this->governorate
        ]);
        if($save){
            $this->dispatchBrowserEvent('CloseAddCityModal');
        }
    }

    public function OpenEditCityModal($id){
        $info = City::find($id);
        $this->upd_name_ar = $info->name_ar;
        $this->upd_name_en = $info->name_en;
        $this->upd_name_fr = $info->name_fr;
        $this->upd_city_code = $info->city_code;
        $this->upd_governorate = $info->governorate_id;
        $this->city_id = $info->id;
        $this->dispatchBrowserEvent('OpenEditCityModal',[
            'id'=>$id
        ]);
    }

    public function updateCity(){
        $city_id = $this->city_id;
        $this->validate([
            'upd_name_ar'=>'required',
            'upd_name_en'=>'required',
            'upd_name_fr'=>'required',
            'upd_city_code'=>'required',
            'upd_governorate'=>'required'
        ],[
            'upd_name_ar.required'=>'Enter name',
            'upd_name_en.required'=>'Enter name',
            'upd_name_fr.required'=>'Enter name',
            'upd_city_code.required'=>' Governorate Code require',
            'upd_governorate'=>'required'
        ]);

        $update = City::find($city_id)->update([
            'name_ar'=>$this->upd_name_ar,
            'name_en'=>$this->upd_name_en,
            'name_fr'=>$this->upd_name_fr,
            'city_code'=>$this->upd_city_code,
            'governorate_id'=>$this->upd_governorate,
        ]);
        if($update){
            $this->dispatchBrowserEvent('CloseEditCityModal');
        }
    }

    public function deleteCityConfirm($id){
        $info = City::find($id);
        $this->dispatchBrowserEvent('SwalCityConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->name_ar.'</strong>',
            'id'=>$id
        ]);
    }


    public function hazf($id){
        $del =  City::find($id)->delete();
        if($del){
            $this->dispatchBrowserEvent('hazfd');
        }
    }
}
