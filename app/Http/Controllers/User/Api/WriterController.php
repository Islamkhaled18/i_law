<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Writer;
use App\Http\Resources\WriterResource;
use Illuminate\Support\Facades\Validator;
use App\Traits\Api\writerTrait;

class WriterController extends Controller
{
    use writerTrait;

    public function index(Request $request)
    {

        $lang = $request->header('lang');
        $list = [];
        $writer = Writer::get();
        foreach ($writer as $key => $value) {
            $list[] = [
                'id' => $value['id'],
                'name' => $value['name_' . $lang],
                'bio' => $value['bio'],
                'image' => asset('storage/photos/writers/' . $value->image),
            ];
        }
        return $this->writerApiResponse($list, 'ok', 200);
    }

    public function show($id,Request $request)
    {

        $writer = Writer::find($id);

        if ($writer) {
            $lang = $request->header('lang');            
                $data = [
                    'id' => $writer['id'],
                    'name' => $writer['name_' . $lang],
                    'bio' => $writer['bio'],
                    'image' => asset('storage/photos/writers/' . $writer->image),
                ];
            
            return $this->writerApiResponse($data, 'ok', 200);
        }
        return $this->writerApiResponse(null, 'The writer Not Found', 404);
    }


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name_ar' => 'required|max:255',
            'name_en' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return $this->writerApiResponse(null, $validator->errors(), 400);
        }
        $writer = new Writer();
        $writer->name_ar = $request->name_ar;
        $writer->name_en = $request->name_en;
        $writer->bio = $request->bio;
        $writer->save();

        if ($writer) {
            return $this->writerApiResponse(new WriterResource($writer), 'The writer Saved', 201);
        }

        return $this->writerApiResponse(null, 'The writer Not Save', 400);
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name_ar' => 'required|max:255',
            'name_en' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return $this->writerApiResponse(null, $validator->errors(), 400);
        }

        $writer = Writer::find($id);
        if (!$writer) {
            return $this->writerApiResponse(null, 'The writer Not Found', 404);
        }


        $writer->update([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'bio' => $request->bio,

        ]);

        if ($writer) {
            return $this->faqApiResponse(new WriterResource($writer), 'The writer update', 201);
        }
    }

    public function destroy($id)
    {

        $writer = Writer::find($id);

        if (!$writer) {
            return $this->writerApiResponse(null, 'The writer Not Found', 404);
        }

        $writer->delete($id);

        if ($writer) {
            return $this->writerApiResponse(null, 'The writer deleted', 200);
        }
    }
}
