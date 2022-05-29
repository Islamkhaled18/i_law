<?php

namespace App\Http\Livewire\Admin;

use App\Models\Writer;
use Livewire\Component;
use Livewire\WithFileUploads;


class Writers extends Component
{
    use WithFileUploads;

    public $image;
    public $name_ar,$name_en,$bio;
    public $upd_name_ar,$upd_name_en,$upd_bio;
    protected $listeners =['sss'];

    public function render()
    {
        return view('livewire.admin.writers',[
            'writers'=>Writer::orderBy('id','desc')->paginate(5),
        ]);
    }
    public function OpenAddWritersModal(){
        $this->name_ar = '';
        $this->name_en = '';
        $this->bio = '';  
        $this->dispatchBrowserEvent('OpenAddWritersModal');
    }
    public function saveWriter(){
    
        $this->validate([
            'name_ar'=>'required',
            'name_en'=>'required',
            'bio'=>'required',
        ]);

        $save = Writer::create([
            'name_ar'=>$this->name_ar,
            'name_en'=>$this->name_en,
            'bio'=>$this->bio,
            'image'=>$this->image->hashName()
            
        ]);

        if (!empty($this->image)){
     
            $this->image->store('photos/writers');
        }

        if($save){
            $this->dispatchBrowserEvent('CloseAddWriterModal');
        }
    }
    public function OpenEditWriterModal($id){
        $info = Writer::find($id);
        $this->upd_name_ar = $info->name_ar;
        $this->upd_name_en = $info->name_en;
        $this->upd_bio = $info->bio;
        $this->writer_id = $info->id;
        $this->dispatchBrowserEvent('OpenEditWriterModal',[
            'id'=>$id
        ]);
    }
    public function updateWriter(){
        $writer_id = $this->writer_id;
        $this->validate([
            'upd_name_ar'=>'required',
            'upd_name_en'=>'required',
            'bio'=>'required',
            
        ],[
            'upd_name_ar.required'=>'Enter name',
            'upd_name_en.required'=>'Enter name',
            'bio.required'=>'Enter name',
        ]);

        $update = Writer::find($writer_id)->update([
            'name_ar'=>$this->upd_name_ar,
            'name_en'=>$this->upd_name_en,
            'bio'=>$this->upd_bio,
        ]);
        if($update){
            $this->dispatchBrowserEvent('CloseEditWriterModal');
        }
    }
    public function deleteWriterConfirm($id){
        $info = Writer::find($id);
        $this->dispatchBrowserEvent('SwalWriterConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->name_ar.'</strong>',
            'id'=>$id
        ]);
    }


    public function sss($id){
        $del =  Writer::find($id)->delete();
        if($del){
            $this->dispatchBrowserEvent('sssd');
        }
    }
}
