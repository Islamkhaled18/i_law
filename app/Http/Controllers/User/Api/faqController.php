<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ;
use App\Http\Resources\faqResource;
use Illuminate\Support\Facades\Validator;
use App\Traits\Api\faqTrait;


class faqController extends Controller
{
    use faqTrait;

    public function index(Request $request){

        $lang = $request->header('lang');
        $list = [];
        $faq = faqResource::collection(FAQ::get());
        foreach ($faq as $key => $value) {
            $list[] = [
                'id' => $value['id'],
                'question' => $value['question_'.$lang],
                'answer' => $value['answer_'.$lang]
            ];
        }
        return $this->faqApiResponse($list,'ok',200);

    }

    public function show($id){

        $faq = FAQ::find($id);

        if($faq){
            return $this->faqApiResponse(new faqResource($faq),'ok',200);
        }
        return $this->faqApiResponse(null,'The FAQ Not Found',404);

    }


    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'question_ar' => 'required',
            'question_en' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->faqApiResponse(null,$validator->errors(),400);
        }
        $faq = new FAQ();
        $faq->question_ar = $request->question_ar;
        $faq->question_en = $request->question_en;
        $faq->question_fr = $request->question_fr;
        $faq->answer_ar = $request->answer_ar;
        $faq->answer_en = $request->answer_en;
        $faq->answer_fr = $request->answer_fr;
        $faq->save();

        if($faq){
            return $this->faqApiResponse(new faqResource($faq),'The FAQ Saved',201);
        }

        return $this->faqApiResponse(null,'The AboutUs Not Save',400);
    }



    public function update(Request $request ,$id){

        $validator = Validator::make($request->all(), [
            'question_ar' => 'required',
            'question_en' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->faqApiResponse(null,$validator->errors(),400);
        }

        $faq = FAQ::find($id);
        if(!$faq){
            return $this->faqApiResponse(null,'The FAQ Not Found',404);
        }

       
        $faq->update([
            'question_ar' => $request->question_ar,
            'question_en' => $request->question_en,
            'question_fr' => $request->question_fr,
            'answer_ar' => $request->answer_ar,
            'answer_en' => $request->answer_en,
            'answer_fr' => $request->answer_fr,
        ]);

        if($faq){
            return $this->faqApiResponse(new faqResource($faq),'The FAQ update',201);
        }

    }

    public function destroy($id){

        $faq = FAQ::find($id);

        if(!$faq){
            return $this->faqApiResponse(null,'The FAQ Not Found',404);
        }

        $faq->delete($id);

        if($faq){
            return $this->faqApiResponse(null,'The FAQ deleted',200);
        }
    }
}
