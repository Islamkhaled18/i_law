<?php

namespace App\Http\Livewire\Admin;

use App\Models\Book;
use App\Models\Section;
use App\Models\Vendor;
use App\Models\Writer;
use Livewire\Component;

class Books extends Component
{
    public $name_ar,$name_en,$name_fr,$desc_ar,$desc_en,$desc_fr,$index_ar,$index_en,$index_fr,
    $writer,$vendor,$stock,$price,$offer,$type,$is_active,$section;
    public $upd_name_ar,$upd_name_en,$upd_name_fr,$upd_desc_ar,$upd_desc_en,$upd_desc_fr,$upd_index_ar,$upd_index_en,$upd_index_fr,
    $upd_writer,$upd_vendor,$upd_stock,$upd_price,$upd_offer,$upd_type,$upd_is_active;
    public $book_id,$upd_section;
    

    protected $listeners =['sss'];

    public function render()
    {
        return view('livewire.admin.books',[

            
            'books'=>Book::orderBy('id','asc')->paginate(5),
            'writers'=>Writer::orderBy('id','asc')->get(),
            'vendors'=>Vendor::orderBy('id','asc')->get(),
            'sections'=>Section::orderBy('id','asc')->get(),
        ]);
    }

    public function OpenAddBooksModal(){
        $this->name_ar = '';
        $this->name_en = '';
        $this->name_fr = '';
        $this->desc_ar = '';
        $this->desc_en ='';
        $this->desc_fr ='';
        $this->index_ar = '';
        $this->index_en ='';
        $this->index_fr ='';
        $this->writer='';
        $this->vendor='';
        $this->section='';
        $this->stock='';
        $this->price='';
        $this->offer='';
        $this->type='';
        $this->is_active='';
        $this->dispatchBrowserEvent('OpenAddBooksModal');
    }
    public function saveBook(){
        $this->validate([
            'name_ar'=>'required',
            'name_en'=>'required',
            'name_fr'=>'required',
            'desc_ar'=>'required',
            'desc_en'=>'required',
            'desc_fr'=>'required',
            'index_ar'=>'required',
            'index_en'=>'required',
            'index_fr'=>'required',
            'writer'=>'required',
            'vendor'=>'required',
            'stock'=>'required',
            'price'=>'required',
            'offer'=>'required',
            'type'=>'required',
            'is_active'=>'required',
        ]);

        $save = Book::create([
            'name_ar'=>$this->name_ar,
            'name_en'=>$this->name_en,
            'name_fr'=>$this->name_fr,
            'desc_ar'=>$this->desc_ar,
            'desc_en'=>$this->desc_en,
            'desc_fr'=>$this->desc_fr,
            'index_ar'=>$this->index_ar,
            'index_en'=>$this->index_en,
            'index_fr'=>$this->index_fr,
            'writer_id'=>$this->writer,
            'vendor_id'=>$this->vendor,
            'stock'=>$this->stock,
            'price'=>$this->price,
            'offer'=>$this->offer,
            'type'=>$this->type,
            'is_active'=>$this->is_active,
            'section_id'=>$this->section,
        ]);
        if($save){
            $this->dispatchBrowserEvent('CloseAddBooksModal');
        }
    }

    public function OpenEditBookModal($id){
        $info = Book::find($id);
        $this->upd_name_ar = $info->name_ar;
        $this->upd_name_en = $info->name_en;
        $this->upd_name_fr = $info->name_fr;
        $this->upd_desc_ar = $info->desc_ar;
        $this->upd_desc_en = $info->desc_en;
        $this->upd_desc_fr = $info->desc_fr;
        $this->upd_index_ar = $info->index_ar;
        $this->upd_index_en = $info->index_en;
        $this->upd_index_fr = $info->index_fr;
        $this->upd_writer = $info->writer_id;
        $this->upd_vendor = $info->vendor_id;
        $this->upd_section = $info->section_id;
        $this->upd_stock = $info->stock;
        $this->upd_price = $info->price;
        $this->upd_offer = $info->offer;
        $this->upd_type = $info->type;
        $this->upd_is_active = $info->is_active;
        $this->book_id = $info->id;
        $this->dispatchBrowserEvent('OpenEditBookModal',[
            'id'=>$id
        ]);
    }

    public function updateBook(){
        $book_id = $this->book_id;
        $this->validate([
            'upd_name_ar'=>'required',
            'upd_name_en'=>'required',
            'upd_name_fr'=>'required',
            'upd_desc_ar'=>'required',
            'upd_desc_en'=>'required',
            'upd_desc_fr'=>'required',
            'upd_index_ar'=>'required',
            'upd_index_ar'=>'required',
            'upd_index_ar'=>'required',
            'upd_writer'=>'required',
            'upd_vendor'=>'required',
            'upd_stock'=>'required',
            'upd_price'=>'required',
            'upd_offer'=>'required',
            'upd_type'=>'required',
            'upd_is_active'=>'required',
        ]);

        $update = Book::find($book_id)->update([
            'name_ar'=>$this->upd_name_ar,
            'name_en'=>$this->upd_name_en,
            'name_fr'=>$this->upd_name_fr,
            'desc_ar'=>$this->upd_desc_ar,
            'desc_en'=>$this->upd_desc_en,
            'desc_fr'=>$this->upd_desc_fr,
            'index_ar'=>$this->upd_index_ar,
            'index_en'=>$this->upd_index_en,
            'index_fr'=>$this->upd_index_fr,
            'writer_id'=>$this->upd_writer,
            'vendor_id'=>$this->upd_vendor,
            'section_id'=>$this->upd_section,
            'stock'=>$this->upd_stock,
            'price'=>$this->upd_price,
            'offer'=>$this->upd_offer,
            'type'=>$this->upd_type,
            'is_active'=>$this->upd_is_active,
        ]);
        if($update){
            $this->dispatchBrowserEvent('CloseEditBookModal');
        }
    }


    public function deleteBookConfirm($id){
        $info = Book::find($id);
        $this->dispatchBrowserEvent('SwalBookConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->name_ar.'</strong>',
            'id'=>$id
        ]);
    }


    public function sss($id){
        $del =  Book::find($id)->delete();
        if($del){
            $this->dispatchBrowserEvent('sssd');
        }
    }
}
