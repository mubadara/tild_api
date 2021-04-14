<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Question;
use App\Models\Quizz;
use App\Models\QuizzCategory;
use App\Models\Response;
use App\Models\Word;

class QuizzsController extends Controller
{    
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $quizz_list = Quizz::all();
        foreach($quizz_list as $quizz) {
            $cat = QuizzCategory::where('quizz_id', $quizz->id)->get('category_id');
            $questions = Question::where('quizz', $quizz->id)->get();
            foreach($cat as $c){
                $quizz->categories = Category::where('id', $c->category_id)->get('name');
            }
            // foreach($questions as $q) {
            //     $reponses = Response::where('question', $q->id)->get();
            //     $quizz->questions = Word::where('id', $q->word)->get();
            //     $quizz->responses = $reponses;
            // }
        }
        json($quizz_list, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        // $row = new Quizz;
        // $row->column = requestData("column");
        // $row->delete();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $quizz = Quizz::find($id);
        $questions = Question::where('quizz', $quizz->id)->get();
        $cat = QuizzCategory::where('quizz_id', $quizz->id)->get();
        foreach($questions as $q) {
            $quizz->questions = Word::where('id', $q->word)->get();
            $quizz->reponses = Response::where('question', $q->id)->get();
        }
        foreach($cat as $c) {
            $quizz->categories = Category::where('category_id', $c->id);
        }
        json($quizz);
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
        // $row = Quizz::find($id);
        // $row->column = requestData("column");
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
        // $row = Quizz::find($id);
        // $row->delete();
    }
}
