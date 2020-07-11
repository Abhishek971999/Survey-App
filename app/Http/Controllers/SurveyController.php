<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function show(\App\Questionaire $questionaire,$slug){
        $questionaire->load('questions.answers');
        return view('survey.show',compact('questionaire'));
    }
    public function store(\App\Questionaire $questionaire,$slug){
        $data = request()->validate([
            'responses.*.answer_id'=>'required',
            'responses.*.question_id'=>'required',
            'survey.name'=>'required',
            'survey.email'=>'required|email',
        ]);
        
        $survey = $questionaire->surveys()->create($data['survey']);
        $survey->responses()->createMany($data['responses']);
        
        return 'Thank you';
    }
}
