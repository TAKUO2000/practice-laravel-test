<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookPostRequest;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BookController extends Controller
{
    //

    public function index():Response
    {
        $books = Book::all();

        return response()
            ->view('admin/book/index',['books' => $books])
            ->header('Content=Type','text/html')
            ->header('Content-Encoding','UTF-8');
    }

    public function show(string $id)
    {
        $book = Book::findOrFail($id);
        return $book::with('category')
                        ->orderBy('category_id')
                        ->orderBy('title')
                        ->get();
    }

    public function create():View
    {
        $categories = Category::all();

        return view('admin/book/create',[
            'categories' => $categories
        ]);
    }

    public function store(BookPostRequest $request): RedirectResponse
    {
        $book = new Book();

        $book->category_id = $request->category_id;
        $book->title = $request->title;
        $book->price = $request->price;

        $book->save();

        return redirect(route('book.index'))
            ->with('message' , $book->title . 'を追加しました。');
    }
}


