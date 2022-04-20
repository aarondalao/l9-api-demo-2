<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Validator;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        //
        $authors = Author::all();

        return response()->json([
            'success' => true,
            'message' => 'Author list',
            'data' => $authors,
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
            'given_name'=>['nullable','max:128'],
            'family_name' =>['required','max:128'],
            'company'=>['required','boolean'],
        ]);

        if($validator->fails()){
            return $this->sendError('validation error', $validator->errors());
        }

        $author = Author::create($inputs);

        return response()->json([
            'success' => true,
            'message' => 'author created',
            'data' => $author,
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
        $author = Author::find($id);

        if(is_null($author)){
            return $this->sendError('author not found');
        }

        return response()->json([
            'success' => true,
            'message' => 'author retrieved successfully',
            'data' => $author,
        ],200);
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

        $author = Author::find($id);

        if(is_null($author)){
            return $this->sendError('author not found');
        }

        $inputs = $request->all();

        $validator = Validator::make($inputs,[
            'given_name' =>['max:128','nullable'],
            'family_name' =>['max:128','required'],
            'company' => ['required','boolean'],
        ]);

        if($validator->fails()){
            return $this->sendError('validation error', $validator->errors());
        }

        if($author->given_name !== $inputs->given_name){ $author->given_name = $inputs->given_name; }
        if($author->last_name !== $inputs->last_name){ $author->last_name = $inputs->last_name; }
        if($author->company !== $inputs->company){ $author->company = $inputs->company; }

        $author->save();

        return response()->json([
            'success' => true,
            'message' => 'author updated',
            'data' => $author,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy(Author $author)
    {
        //
        $author->delete();

        return response()->json([
            'success' => true,
            'message' => 'author deleted',
            'data' => $author,
        ]);

    }
}
