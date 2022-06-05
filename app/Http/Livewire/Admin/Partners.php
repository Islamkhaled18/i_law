<?php

namespace App\Http\Livewire\Admin;

use App\Models\Partner;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Filesystem\FilesystemManager as Storage;


class Partners extends Component
{
    use WithFileUploads;

    public $image;
    public $name;
    public $upd_name;
    protected $listeners =['partner'];

    public function render()
    {
        return view('livewire.admin.partners',[
            'partners'=>Partner::orderBy('id','desc')->paginate(5),
        ]);
    }

    public function OpenAddPartnersModal(){
        $this->name = '';
        $this->dispatchBrowserEvent('OpenAddPartnersModal');
    }
    public function savePartner(){
    
        $this->validate([
            'name'=>'required',
        ]);

        $save = Partner::create([
            'name'=>$this->name,
            'image'=>$this->image->hashName()
            
        ]);

        if (!empty($this->image)){
     
            $this->image->store('photos/partners','public');
        }

        if($save){
            toastr()->success('Data has been saved successfully!');
            $this->dispatchBrowserEvent('CloseaddPartnerModal');
        }
    }
    public function OpenEditPartnerModal($id){
        $info = Partner::find($id);
        $this->upd_name = $info->name;
        $this->partner_id = $info->id;
        $this->dispatchBrowserEvent('OpenEditPartnerModal',[
            'id'=>$id
        ]);
    }
    public function updatePartner(){
        $partner_id = $this->partner_id;
        $this->validate([
            'upd_name'=>'required',            
        ]);

        $update = Partner::find($partner_id)->update([
            'name'=>$this->upd_name,
            'image'=>$this->image->hashName()
        ]);
        $this->image->store('photos/partners','public');
        
        if($update){
            $this->dispatchBrowserEvent('CloseEditPartnerModal');
        }
    }
    public function deletePartnerConfirm($id){
        $info = Partner::find($id);
        $this->dispatchBrowserEvent('SwalPartnerConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->name.'</strong>',
            'id'=>$id
        ]);
    }


    public function partner($id){
        $del =  Partner::find($id)->delete();
        if($del){
            $this->dispatchBrowserEvent('partnerd');
        }
    }
}
