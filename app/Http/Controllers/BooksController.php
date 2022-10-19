<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Author;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $books = Books::all();

        return view('index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "<pre>";
        // dd($request);
        // echo "</pre>";

        // $book = Books::all();
        // dd($book);
        $authorId = Author::where('name', $request->book_author)->get();

        $this->validate($request, [
            'book_title'         => 'required',
            'book_image'         => 'required',
            'description'   => 'required',
            'book_author'   => 'required',

            
        ]);
        $book = new Books();

        $book->book_title = $request->book_title;
        $book->book_author = $request->book_author;
        $book->book_image = $request->book_image;
        $book->description = $request->description;
        $book->author_id  = $authorId[0]->id;

        $book->save();
        return redirect('/index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $findBook = Books::find($id);
        // dd($findBook);

        return view('update', ['request' => $findBook, 'id' => $id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Books::find($id);
        $book->delete();
        return redirect('/index');
    }

    public function updateBook(Request $request, $id)
    {
        $authorId = Author::where('name', $request->book_author)->get();

        # code...
        $book = Books::find($id);
        $book->book_title = $request->book_title;
        $book->description = $request->description;
        $book->book_author = $request->book_author;
        $book->book_image = $request->book_image;
        $book->author_id  = $authorId[0]->id;

        $book->save();
        return redirect('/index');
    }

    public function findBook(Request $request)
    {
        $book = Books::where('book_title', 'like', '%' . $request->search . '%')->get();

        // dd($book);
        return view('viewbook', ['books' => $book]);
    }
    public function trash(Request $request)
    {
    
        $books = Books::onlyTrashed()->get();
        return view('trash', ['books' => $books]);
    }
    public function restore($id)
    {
    
        $books = Books::withTrashed()->find($id)->restore();

        return  redirect('index');
    } 
    
    public function fdelete($id)
    {
    
        $books = Books::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect('trash');
    } 
}