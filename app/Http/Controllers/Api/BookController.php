<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookCollection;
use App\Http\Resources\BookResource;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function allbooks()
    {
        $books = Book::with('authors')->orderBy('id', 'DESC')->paginate(5);

        return new BookCollection($books);
    }

    public function book(Request $request, $id)
    {
        if($request->keyword):
            $book = Book::where('title', 'LIKE', '%'.$request->keyword.'%')->with('authors')->firstOrFail();
        else:
            $book = Book::with('authors')->findOrFail($id);
        endif;

        return new BookResource($book);
    }
}
