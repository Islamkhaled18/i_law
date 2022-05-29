<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
use App\Http\Resources\SectionResource;
use Illuminate\Support\Facades\Validator;
use App\Traits\Api\SectionTrait;

class SectionController extends Controller
{
    use SectionTrait;

    public function index(Request $request){
        $lang = $request->header('lang');
        $list = [];
        $section = SectionResource::collection(Section::get());
        foreach ($section as $key => $value) {
            $list[] = [
                'id' => $value['id'],
                'name' => $value['name_'.$lang]
            ];
        }
        return $this->SectionApiResponse($list,'ok',200);


    }

    public function show($id){

        $section = Section::find($id);

        if($section){
            return $this->SectionApiResponse(new SectionResource($section),'ok',200);
        }
        return $this->SectionApiResponse(null,'The section Not Found',404);

    }


    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name_ar' => 'required',
            'name_en' => 'required',
            'name_fr' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->SectionApiResponse(null,$validator->errors(),400);
        }
        $section = new Section();
        $section->name_ar = $request->name_ar;
        $section->name_en = $request->name_en;
        $section->name_fr = $request->name_fr;
        $section->parent_id = $request->parent_id;
        $section->save();

        if($section){
            return $this->SectionApiResponse(new SectionResource($section),'The section Saved',201);
        }

        return $this->SectionApiResponse(null,'The section Not Save',400);
    }



    public function update(Request $request ,$id){

        $validator = Validator::make($request->all(), [
            'name_ar' => 'required',
            'name_en' => 'required',
            'name_fr' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->SectionApiResponse(null,$validator->errors(),400);
        }

        $section = Section::find($id);
        if(!$section){
            return $this->SectionApiResponse(null,'The section Not Found',404);
        }

       
        $section->update([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'name_fr' => $request->name_fr,
            'parent_id' => $request->parent_id,
          
        ]);

        if($section){
            return $this->SectionApiResponse(new SectionResource($section),'The section update',201);
        }

    }

    public function destroy($id){

        $section = Section::find($id);

        if(!$section){
            return $this->SectionApiResponse(null,'The section Not Found',404);
        }

        $section->delete($id);

        if($section){
            return $this->SectionApiResponse(null,'The section deleted',200);
        }
    }
}
