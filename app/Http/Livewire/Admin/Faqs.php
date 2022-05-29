<?php

namespace App\Http\Livewire\Admin;

use App\Models\FAQ;
use Livewire\Component;

class Faqs extends Component
{
    public $question_ar,$question_en,$question_fr,$answer_ar,$answer_en,$answer_fr;
    public $upd_question_ar,$upd_question_en,$upd_question_fr,$upd_answer_ar,$upd_answer_en,$upd_answer_fr;
    public $faq_id;

    protected $listeners =['fff'];
    public function render()
    {
        return view('livewire.admin.faqs',[
            'faqs'=>FAQ::orderBy('id','asc')->paginate(5)
        ]);
    }
    public function OpenAddFAQModal(){
        $this->question_ar = '';
        $this->question_en = '';
        $this->question_fr = '';
        $this->answer_ar = '';
        $this->answer_en ='';
        $this->answer_fr ='';
        
        $this->dispatchBrowserEvent('OpenAddFAQModal');
    }
    public function saveFAQ(){
        $this->validate([
            'question_ar'=>'required',
            'answer_ar'=>'required',
        ]);

        $save = FAQ::create([
            'question_ar'=>$this->question_ar,
            'question_en'=>$this->question_en,
            'question_fr'=>$this->question_fr,
            'answer_ar'=>$this->answer_ar,
            'answer_en'=>$this->answer_en,
            'answer_fr'=>$this->answer_fr,
            
        ]);
        if($save){
            $this->dispatchBrowserEvent('CloseAddFAQModal');
        }
    }

    public function OpenEditFAQModal($id){
        $info = FAQ::find($id);
        $this->upd_question_ar = $info->question_ar;
        $this->upd_question_en = $info->question_en;
        $this->upd_question_fr = $info->question_fr;
        $this->upd_answer_ar = $info->answer_ar;
        $this->upd_answer_en = $info->answer_en;
        $this->upd_answer_fr = $info->answer_fr;

        $this->faq_id = $info->id;
        $this->dispatchBrowserEvent('OpenEditFAQModal',[
            'id'=>$id
        ]);
    }

    public function updateFAQ(){
        $faq_id = $this->faq_id;
        $this->validate([
            'upd_question_ar'=>'required',
            'upd_answer_ar'=>'required',
        ]);

        $update = FAQ::find($faq_id)->update([
            'question_ar'=>$this->upd_question_ar,
            'question_en'=>$this->upd_question_en,
            'question_fr'=>$this->upd_question_fr,
            'answer_ar'=>$this->upd_answer_ar,
            'answer_en'=>$this->upd_answer_en,
            'uanswer_fr'=>$this->upd_answer_fr,

        ]);
        if($update){
            $this->dispatchBrowserEvent('CloseEditFAQModal');
        }
    }
    public function deleteFAQConfirm($id){
        $info = FAQ::find($id);
        $this->dispatchBrowserEvent('SwalFAQConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->question_ar.'</strong>',
            'id'=>$id
        ]);
    }
    public function fff($id){
        $del =  FAQ::find($id)->delete();
        if($del){
            $this->dispatchBrowserEvent('fffd');
        }
    }
    
}
