<?php

namespace App\Http\Livewire\Admin;

use App\Models\Country;
use Livewire\Component;
use App\Models\Governorate;


class Governorates extends Component
{
    public $name_ar,$name_en,$name_fr,$governorate_code,$country, $country_id;
    public $upd_name_ar,$upd_name_en,$upd_name_fr,$upd_governorate_code,$governorate_id,$upd_country;
    protected $listeners =['enhaa'];


    public function render()
    {
        return view('livewire.admin.governorates',[
            'governorates'=>Governorate::where('country_id',$this->country_id)->orderBy('id','asc')->paginate(5),
            'countries'=>Country::orderBy('id','asc')->get()
        ]);
    }

    public function OpenAddGovernoratesModal(){
        $this->name_ar = '';
        $this->name_en = '';
        $this->name_fr = '';
        $this->governorate_code = '';
        $this->country ='';
        $this->dispatchBrowserEvent('OpenAddGovernoratesModal');
    }

    public function saveGovernorate(){
        $this->validate([
            'name_ar'=>'required',
            'name_en'=>'required',
            'name_fr'=>'required',
            'governorate_code'=>'required',
            'country'=>'required'
        ]);

        $save = Governorate::create([
            'name_ar'=>$this->name_ar,
            'name_en'=>$this->name_en,
            'name_fr'=>$this->name_fr,
            'governorate_code'=>$this->governorate_code,
            'country_id'=>$this->country
        ]);
        if($save){
            $this->dispatchBrowserEvent('CloseAddGovernorateModal');
        }
    }

    public function OpenEditGovernorateModal($id){
        $info = Governorate::find($id);
        $this->upd_name_ar = $info->name_ar;
        $this->upd_name_en = $info->name_en;
        $this->upd_name_fr = $info->name_fr;
        $this->upd_governorate_code = $info->governorate_code;
        $this->upd_country = $info->country_id;
        $this->governorate_id = $info->id;
        $this->dispatchBrowserEvent('OpenEditGovernorateModal',[
            'id'=>$id
        ]);
    }

    public function updateGovernorate(){
        $governorate_id = $this->governorate_id;
        $this->validate([
            'upd_name_ar'=>'required',
            'upd_name_en'=>'required',
            'upd_name_fr'=>'required',
            'upd_governorate_code'=>'required',
            'upd_country'=>'required'
        ],[
            'upd_name_ar.required'=>'Enter name',
            'upd_name_en.required'=>'Enter name',
            'upd_name_fr.required'=>'Enter name',
            'upd_governorate_code.required'=>' Governorate Code require',
            'upd_country'=>'required'
        ]);

        $update = Governorate::find($governorate_id)->update([
            'name_ar'=>$this->upd_name_ar,
            'name_en'=>$this->upd_name_en,
            'name_fr'=>$this->upd_name_fr,
            'governorate_code'=>$this->upd_governorate_code,
            'country_id'=>$this->upd_country,
        ]);
        if($update){
            $this->dispatchBrowserEvent('CloseEditGovernorateModal');
        }
    }


    public function deleteGovernorateConfirm($id){
        $info = Governorate::find($id);
        $this->dispatchBrowserEvent('SwalGovernorateConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->name_ar.'</strong>',
            'id'=>$id
        ]);
    }


    public function enhaa($id){
        $del =  Governorate::find($id)->delete();
        if($del){
            $this->dispatchBrowserEvent('enhaad');
        }
    }
}
