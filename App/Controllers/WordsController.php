<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\WordCategory;
use App\Models\Word;

class WordsController extends Controller
{    
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $word_list = Word::all();
        foreach($word_list as $word) {
            $cat = WordCategory::where('word_id', $word->id)->get('category_id');
            foreach($cat as $c) {
                $word->categories = Category::where('id', $c->category_id)->get('name');
            }
        };
        json($word_list, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        /*
        |--------------------------------------------------------------------------
        |
        | This is an example which deletes a particular row. 
        | You can un-comment it to use this example
        |
        */
        // $session = new \Leaf\Http\Session(true);
        $word = new Word;
        $word->word = requestData('word');
        $word->definition = requestData('definition');
        $word->is_valid = 0;
        /* Get user id based on session */
        // $word->user = $session->get('id');
        /* For testing purpose */
        $word->user = requestData('id', true, true);
        $word->upvotes = 0;
        $word->downvotes = 0;
        $word->save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $word = Word::find($id);
        $cat = WordCategory::where('word_id', $word->id)->get('category_id');
        foreach ($cat as $c) {
            $word->categories = Category::where('id', $c->category_id)->get('name');
        }
        json($word);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        /*
        |--------------------------------------------------------------------------
        |
        | This is an example which edits a particular row. 
        | You can un-comment it to use this example
        |
        */
        // $row = Word::find($id);
        // $row->column = requestData("id");
        // $row->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        /*
        |--------------------------------------------------------------------------
        |
        | This is an example which deletes a particular row. 
        | You can un-comment it to use this example
        |
        */
        $row = Word::find($id);
        $row->delete();
    }
}
