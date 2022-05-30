<?php

namespace App\Http\Livewire\Admin;

use App\Models\Section;
use Livewire\Component;

class SubSections extends Component
{
    public $name_ar,$name_en,$name_fr,$parent_id;
    public $upd_name_ar,$upd_name_en,$upd_name_fr,$upd_parent_id;
   


    public function render()
    {
        return view('livewire.admin.sub-sections',[
            'sections'=>Section::where('parent_id','!=',null)->orderBy('id','asc')->get(),
        ]);
    
    }
}
