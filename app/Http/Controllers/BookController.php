<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Author;
use App\Models\booktag;
use App\Models\Publisher;
use Illuminate\Http\Request;
use App\Models\eloquent\Book;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    
    $books = Book::with(['author','tags' ,'publisher'])->paginate(5);

     //  $books = Book::paginate(5);
      return view('books.index',['books'=>$books,]);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $publishers = Publisher::all()->pluck('name','id');
      $tags = Tag::all()->pluck('name','id');
       return view('books.create')
                 ->with('publishers',$publishers)
                 ->with('tags',$tags);
               
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $author =  Author::create($request->input());

       $book  =  Book::create([
            'title'=>$request->title,
            'pages_count'=> $request->pages_count,
            'description'=>$request->description,
             'author_id' => $author->id,
              'publisher_id' => $request->publisher_id      
                ]);

                $book->tags()->attach($request->input('tag_id'));

             /*   booktag::create([
                    'book_id' => $book->id,
                   'tag_id' => $request->tag_id
                   ]);
                   */

            
       return redirect()->action([BookController::class,'index']);   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show')
               ->with('books',$book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {

        $publishers = Publisher::all()->pluck('name','id');
        $tags = Tag::all()->pluck('name','id');

        $booktag= Booktag::where('book_id',$book->id)->first();

         return view('books.edit')
              ->with('book',$book)
              ->with('publishers',$publishers)
              ->with('tags',$tags)
              ->with('booktag',$booktag);
          
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        
        $book->fill($request->input());
        $book->save();
        $book->author()->update($request->only(['first_name','last_name']));
        $book->publisher()->update($request->only(['name']));

        $book->tags()->sync([$request->input('tag_id')]);


      /*  Booktag::where('book_id',$book->id)
             ->update([
            'tag_id'=> $request->tag_id
       */
      //  ]);
        
        return redirect()->action([BookController::class,'index']);   

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->tags()->detach();
        $book->delete();
        $book->author()->delete();
        return redirect()->action([BookController::class,'index']);
    }
}
