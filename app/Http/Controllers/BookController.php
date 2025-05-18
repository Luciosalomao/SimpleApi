<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Books::all();
        return response()->json($books);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = Books::create([
            'name' => $request->name,
            'author' => $request->author,
            'publish_date' => $request->publish_date
        ]);

        return response()->json($book, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Books::find($id);  
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);  
        }

        return response()->json($book);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Books::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $book->update([
            'name' => $request->name,
            'author' => $request->author,
            'publish_date' => $request->publish_date
        ]);

        return response()->json($book, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Books::find($id);  

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);  
        }

        $book->delete();  
        return response()->json(['message' => 'Book deleted successfully'], 200);  
    }
}
