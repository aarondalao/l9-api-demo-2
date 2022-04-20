<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Book;
use Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse // <--- copy this and replace all ATreturn \illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::all();

        return response()->json([
            'success' => true,
            'message' => "Book List",
            'data' => $books,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        //
        $inputs = $request ->all();

        $validator = Validator::make($inputs, [
            'title' =>['required','max:128'],
            'subtitle' => ['nullable','max:255'],
            'description' => ['nullable','min:150','max:65535'],
            'isbn_10' => ['nullable','min:10','max:10'],
            'isbn_13' => ['nullable','min:13','max:13'],
            'edition' => ['nullable','integer'],
            'pages' => ['nullable','integer'],
            'year_pub' => ['nullable','integer'],
        ]);

        if($validator->fails()){
            return $this->sendError('Validator Error', $validator->errors());
        }

        $book = Book::create($inputs);

        return response()->json([
            'success' => true,
            'message' => 'book created successfully',
            'data' => $book,
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id)
    {
        //
        $book = Book::find($id);

        if(is_null($book)){
            return $this->sendError('Book not found');
        }

        return response()->json([
            'success' => true,
            'message' => 'book retrieved successfully',
            'data' => $book,
        ], 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
        //

        $book = Book::find($id);

        if(is_null($book)){
            return $this->sendError('book not found');
        }

        $inputs = $request->all();

        $validator = Validator::make($inputs, [
            'title' => ['required','max:128'],
            'subtitle' => ['nullable','max:255'],
            'description' => ['nullable','min:150', 'max:65535'],
            'isbn_10' => ['nullable','min:10','max:10'],
            'isbn_13' => ['nullable','min:13', 'max:13'],
            'edition' => ['nullable','integer'],
            'pages' => ['nullable','integer'],
            'year_pub' => ['nullable','integer'],
        ]);

        if($validator->fails()){
            return $this->sendError('Validation error', $validator->errors());
        }

        if($book->title !== $inputs->title){ $book->title = $inputs->title; }
        if($book->subtitle !== $inputs->subtitle){ $book->subtitle = $inputs->subtitle; }
        if($book->description !== $inputs->description){ $book->description = $inputs->description; }
        if($book->isbn_10 !== $inputs->isbn_10){ $book->isbn_10 = $inputs->isbn_10; }
        if($book->isbn_13 !== $inputs->isbn_13){ $book->isbn_13 = $inputs->isbn_13; }
        if($book->edition !== $inputs->edition){ $book->edition = $inputs->edition; }
        if($book->pages !== $inputs->pages){ $book->pages = $inputs->pages; }
        if($book->year_pub !== $inputs->year_pub){ $book->year_pub = $inputs->year_pub; }

        $book->save();

        return response()->json([
            'success' => true,
            'message' => 'book update successfully',
            'data' => $book,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy(Book $book)
    {
        //

        $book->delete();
        return response()->json([
            'success' => true,
            'message' => 'book destroyed successfully',
            'data' => $book,
        ]);
    }
}
