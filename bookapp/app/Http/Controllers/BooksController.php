<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Book;

class BooksController extends BaseController{
    public function index(){
        return Book::all();
    }

    //CARA 1
    // public function show($id){
    //     if($book = Book::find($id)){
    //         return $book;
    //     }else{
    //         return response('Book Not Found', 404);
    //     }
    // }
    
    //CARA 2
    public function getBookById($id){
        try{
            $book = Book::findOrFail($id);
        } catch(ModelNotFoundException $e){
            return response()->json(['message' => 'book not found', 404]);
        }
        $book_by_id = Book::find($id);
        return response(json_encode($book_by_id), 200);
    }

    public function postBook(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'author' => 'required'
        ]);
        $book = Book::create($request->only(['title', 'description', 'author']));
        return response()->json([
            'created' => true,
            'data' => $book
        ], 201);
    }

    public function putBookById(Request $request, $id){
        try{
            $book = Book::findOrFail($id);
        } catch(ModelNotFoundException $e){
            return response()->json(['message' => 'book not found'], 404);
        }
        $book->fill($request->only(['title', 'description', 'author']));
        $book->save();
        return response()->json([
            'updated' => true,
            'data' => $book
        ], 200);
    }

    public function deleteBookById($id){
        try{
            $book = Book::findOrFail($id);
        } catch(ModelNotFoundException $e){
            return response()->json(['error' => ['message' => 'book not found']], 404);
        }
        $book->delete();
        return response()->json(['deleted' => true], 200);
    }
}