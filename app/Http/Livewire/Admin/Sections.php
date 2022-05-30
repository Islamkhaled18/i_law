<?php

namespace App\Http\Livewire\Admin;

use App\Models\Section;
use Livewire\Component;

class Sections extends Component
{
    public $showSubSection = false; 
    public $selectedSection;


    public $name_ar,$name_en,$name_fr,$parent_id;
    public $upd_name_ar,$upd_name_en,$upd_name_fr,$upd_parent_id;
    protected $listeners =['ccc'];
  

    public function render()
    {
        return view('livewire.admin.sections',[
            'sections'=>Section::where('parent_id',null)->orderBy('id','asc')->get(),
        ]);
    }

    public function OpenAddSectionsModal(){
        $this->name_ar = '';
        $this->name_en = '';
        $this->name_fr = '';
        $this->parent_id ='0';
        $this->dispatchBrowserEvent('OpenAddSectionsModal');
    }
    public function saveSection(){
        $this->validate([
            'name_ar'=>'required',
            'name_en'=>'required',
            'name_fr'=>'required',
            'parent_id' => 'nullable|numeric'
        ]);
        $save = Section::create([
            'name_ar'=>$this->name_ar,
            'name_en'=>$this->name_en,
            'name_fr'=>$this->name_fr,
            'parent_id'=>$this->parent_id
            
        ]);
        if($save){
            $this->dispatchBrowserEvent('CloseAddSectionModal');
        }
    }


    public function OpenEditSectionModal($id){
        $info = Section::find($id);
        $this->upd_name_ar = $info->name_ar;
        $this->upd_name_en = $info->name_en;
        $this->upd_name_fr = $info->name_fr;
        $this->upd_parent_id = $info->parent_id;
        $this->section_id = $info->id;
        $this->dispatchBrowserEvent('OpenEditSectionModal',[
            'id'=>$id
        ]);
    }
    public function updateSection(){
        $section_id = $this->section_id;
        $this->validate([
            'upd_name_ar'=>'required',
            'upd_name_en'=>'required',
            'upd_name_fr'=>'required',
            'upd_parent_id'=>'required',
        ]);

        $update = Section::find($section_id)->update([
            'name_ar'=>$this->upd_name_ar,
            'name_en'=>$this->upd_name_en,
            'name_fr'=>$this->upd_name_fr,
            'parent_id'=>$this->upd_parent_id,
        ]);
        if($update){
            $this->dispatchBrowserEvent('CloseEditSectionModal');
        }
    }

    public function deleteSectionConfirm($id){
        $info = Section::find($id);
        $this->dispatchBrowserEvent('SwalSectionConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->name_ar.'</strong>',
            'id'=>$id
        ]);
    }


    public function ccc($id){
        $del =  Section::find($id)->delete();
        if($del){
            $this->dispatchBrowserEvent('cccd');
        }
    }

    public function SubSection(Section $section){

    
        $this->showSubSection = true;
        $this->selectedSection = $section->id;
    }
}
