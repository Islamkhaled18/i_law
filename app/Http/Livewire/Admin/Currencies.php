<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Cuurency;

class Currencies extends Component
{
    public $name_ar,$name_en,$name_fr,$code,$is_active,$excange_value;
    public $upd_name_ar,$upd_name_en,$upd_name_fr,$upd_code,$upd_is_active,$upd_excange_value,$currency_id;
    protected $listeners =['destroy'];

    public function render()
    {
        return view('livewire.admin.currencies',[
            'currencies'=>Cuurency::orderBy('id','asc')->get(),
        ]);
    }

    public function OpenAddCurrencyModal(){
        $this->name_ar = '';
        $this->name_en = '';
        $this->name_fr = '';
        $this->code = '';
        $this->is_active='';
        $this->excange_value='';
        $this->dispatchBrowserEvent('OpenAddCurrencyModal');
    }

    public function saveCurrency(){
        $this->validate([
            'name_ar'=>'required',
            'name_en'=>'required',
            'name_fr'=>'required',
            'code'=>'required',
            'is_active'=>'required',
            'excange_value'=>'required',
        ]);

        $save = Cuurency::insert([
            'name_ar'=>$this->name_ar,
            'name_en'=>$this->name_en,
            'name_fr'=>$this->name_fr,
            'code'=>$this->code,
            'is_active'=>$this->is_active,
            'excange_value'=>$this->excange_value,
        ]);

        if($save){
            $this->dispatchBrowserEvent('CloseAddCurrencyModal');
        }
    }

    public function OpenEditCurrencyModal($id){
        $info = Cuurency::find($id);
        $this->upd_name_ar = $info->name_ar;
        $this->upd_name_en = $info->name_en;
        $this->upd_name_fr = $info->name_fr;
        $this->upd_code = $info->code;
        $this->upd_is_active = $info->is_active;
        $this->upd_excange_value = $info->excange_value;
        $this->currency_id = $info->id;
        $this->dispatchBrowserEvent('OpenEditCurrencyModal',[
            'id'=>$id
        ]);
    }

    public function updateCurrency(){
        $currency_id = $this->currency_id;
        $this->validate([
            'upd_name_ar'=>'required',
            'upd_name_en'=>'required',
            'upd_name_fr'=>'required',
            'upd_code'=>'required',
            'upd_is_active'=>'required',
            'upd_excange_value'=>'required',

        ],[
            'upd_name_ar.required'=>'Enter  name',
            'upd_name_en.required'=>'Enter  name',
            'upd_name_fr.required'=>'Enter  name',
            'upd_code.required'=>'Code require',
            'upd_is_active.required'=>'Status require',            
            'upd_excange_value'=>'Excange value required',
        ]);

        $update = Cuurency::find($currency_id)->update([
            'name_ar'=>$this->upd_name_ar,
            'name_en'=>$this->upd_name_en,
            'name_fr'=>$this->upd_name_fr,
            'code'=>$this->upd_code,
            'is_active'=>$this->upd_is_active,
            'excange_value'=>$this->upd_excange_value,
        ]);

        if($update){
            $this->dispatchBrowserEvent('CloseEditCurrencyModal');
        }
    }


    public function deleteCurrencyConfirm($id){
        $info = Cuurency::find($id);
        $this->dispatchBrowserEvent('SwalCurrencyConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->name_ar.'</strong>',
            'id'=>$id
        ]);
    }


    public function destroy($id){
        $del =  Cuurency::find($id)->delete();
        if($del){
            $this->dispatchBrowserEvent('destroyed');
        }
    }


}
