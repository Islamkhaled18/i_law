<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Validator;
use App\Traits\Api\BookTrait;

class BookController extends Controller
{
    use BookTrait;

    public function index(Request $request)
    {
        $lang = $request->header('lang');
        $list = [];

        $book = Book::get();

        foreach ($book as $key => $value) {
            $list[] = [
                'id' => $value['id'],
                'name' => $value['name_' . $lang],
                'desc' => $value['desc_' . $lang],
                'index' => $value['index_' . $lang],
                
                'writer_id' => $value['writer_id'],
                'vendor_id' => $value['vendor_id'],
                'stock' => $value['stock'],
                'price' => $value['price'],
                'offer' => $value['offer'],
                'type' => $value['type'],
                'is_active' => $value['is_active'],
            ];
        }
        return $this->bookApiResponse($list, 'ok', 200);
    }

    public function show($id, Request $request)
    {

        $book = Book::find($id);

        if ($book) {
            $lang = $request->header('lang');
            $data = [
                'id' => $book['id'],
                'name' => $book['name_' . $lang],
                'desc' => $book['desc_' . $lang],
                'index' => $book['index_' . $lang],
                'writer_id' => $book['writer_id'],
                'vendor_id' => $book['vendor_id'],
                'stock' => $book['stock'],
                'price' => $book['price'],
                'offer' => $book['offer'],
                'type' => $book['type'],
                'is_active' => $book['is_active'],
            ];

            return $this->bookApiResponse($data, 'ok', 200);
        }
        return $this->bookApiResponse(null, 'The book Not Found', 404);
    }
}
