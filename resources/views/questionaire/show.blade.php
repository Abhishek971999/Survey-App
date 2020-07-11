@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{$questionaire->title}}</div>
                <div class="card-body">
                    <a href="/questionaire/{{$questionaire->id}}/question/create" class="btn btn-primary">Add Questions</a>
                    <a href="/survey/{{$questionaire->id}}-{{Str::slug($questionaire->title)}}" class="btn btn-primary">Take Survey</a>
                </div>
            </div>
   
            @foreach ($questionaire->questions as $question)
            <div class="card mt-4">
                <div class="card-header">{{$question->question}}</div>
                 <div class="card-body">
                    <ul class="list-group">
                        @foreach ($question->answers as $answer)
                            <li class="list-group-item">{{$answer->answer}}</li>
                        @endforeach
                      </ul>
                </div>
                    
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
