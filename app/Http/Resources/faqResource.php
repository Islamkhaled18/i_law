<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class faqResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
 
        return [
            
            'id'=>$this->id,
            'question_ar'=>$this->question_ar,
            'question_en'=>$this->question_en,
            'question_fr'=>$this->question_fr,
            'answer_ar'=>$this->answer_ar,
            'answer_en'=>$this->answer_en,
            'answer_fr'=>$this->answer_fr,
          
        ];
    }
    
}
