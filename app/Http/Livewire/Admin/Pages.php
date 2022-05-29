<?php

namespace App\Http\Livewire\Admin;

use App\Models\Page;
use Livewire\Component;

class Pages extends Component
{
    public $name_ar,$name_en,$name_fr,$desc_ar,$desc_en,$desc_fr,$meta_desc,$meta_keywords;
    public $upd_name_ar,$upd_name_en,$upd_name_fr,$upd_desc_ar,$upd_desc_en,$upd_desc_fr,$upd_meta_desc,$upd_meta_keywords;
    public $page_id;

    protected $listeners =['ppp'];

    public function render()
    {
        return view('livewire.admin.pages',[
            'pages'=>Page::orderBy('id','asc')->paginate(5)
        ]);
    }
    public function OpenAddPageModal(){
        $this->name_ar = '';
        $this->name_en = '';
        $this->name_fr = '';
        $this->desc_ar = '';
        $this->desc_en ='';
        $this->desc_fr ='';
        $this->meta_desc = '';
        $this->meta_keywords ='';
        $this->dispatchBrowserEvent('OpenAddPageModal');
    }
    public function savePage(){
        $this->validate([
            'name_ar'=>'required',
            'name_en'=>'required',
            'name_fr'=>'required',
            'desc_ar'=>'required',
            'desc_en'=>'required',
            'desc_fr'=>'required',
            'meta_desc'=>'required',
            'meta_keywords'=>'required',
        ]);

        $save = Page::create([
            'name_ar'=>$this->name_ar,
            'name_en'=>$this->name_en,
            'name_fr'=>$this->name_fr,
            'desc_ar'=>$this->desc_ar,
            'desc_en'=>$this->desc_en,
            'desc_fr'=>$this->desc_fr,
            'meta_desc'=>$this->meta_desc,
            'meta_keywords'=>$this->meta_keywords,
        ]);
        if($save){
            $this->dispatchBrowserEvent('CloseAddPageModal');
        }
    }

    public function OpenEditPageModal($id){
        $info = Page::find($id);
        $this->upd_name_ar = $info->name_ar;
        $this->upd_name_en = $info->name_en;
        $this->upd_name_fr = $info->name_fr;
        $this->upd_desc_ar = $info->desc_ar;
        $this->upd_desc_en = $info->desc_en;
        $this->upd_desc_fr = $info->desc_fr;
        $this->upd_meta_desc = $info->meta_desc;
        $this->upd_meta_keywords = $info->meta_keywords;
        $this->page_id = $info->id;
        $this->dispatchBrowserEvent('OpenEditPageModal',[
            'id'=>$id
        ]);
    }

    public function updatePage(){
        $page_id = $this->page_id;
        $this->validate([
            'upd_name_ar'=>'required',
            'upd_name_en'=>'required',
            'upd_name_fr'=>'required',
            'upd_desc_ar'=>'required',
            'upd_desc_en'=>'required',
            'upd_desc_fr'=>'required',
            'upd_meta_desc'=>'required',
            'upd_meta_keywords'=>'required',
        ]);

        $update = Page::find($page_id)->update([
            'name_ar'=>$this->upd_name_ar,
            'name_en'=>$this->upd_name_en,
            'name_fr'=>$this->upd_name_fr,
            'desc_ar'=>$this->upd_desc_ar,
            'desc_en'=>$this->upd_desc_en,
            'desc_fr'=>$this->upd_desc_fr,
            'meta_desc'=>$this->upd_meta_desc,
            'meta_keywords'=>$this->upd_meta_keywords,
        ]);
        if($update){
            $this->dispatchBrowserEvent('CloseEditPageModal');
        }
    }
    public function deletePageConfirm($id){
        $info = Page::find($id);
        $this->dispatchBrowserEvent('SwalPageConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->name_ar.'</strong>',
            'id'=>$id
        ]);
    }
    public function ppp($id){
        $del =  Page::find($id)->delete();
        if($del){
            $this->dispatchBrowserEvent('pppd');
        }
    }
}
