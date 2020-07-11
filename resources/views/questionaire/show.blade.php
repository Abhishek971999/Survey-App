@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col">
                    <h2>{{$questionaire->title}}</h2>
                </div>
                <div class="col text-right">
                    <a href="/questionaire/{{$questionaire->id}}/question/create" class="btn btn-primary btn-sm">Add Questions</a>
                    <a href="/survey/{{$questionaire->id}}-{{Str::slug($questionaire->title)}}" class="btn btn-success btn-sm">Take Survey</a>
                </div>
            </div>
   
            @if ($questionaire->questions->count()>0)
            @foreach ($questionaire->questions as $question)
            <div class="card mt-4">
                <div class="card-header">
                <div class="row">
                    <div class="col">
                        {{$question->question}}
                    </div>
                    <div class="col text-right">
                    <form action="/questionaire/{{$questionaire->id}}/question/{{$question->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
                </div>
                 <div class="card-body">
                    <ul class="list-group">
                        @foreach ($question->answers as $answer)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        {{$answer->answer}}
                                    </div>
                                    @if ($question->responses->count()>0)
                                    <div class="col text-right">
                                        {{intval(($answer->responses->count())/($question->responses->count())*100).'%'}}
                                    </div>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                      </ul>
                </div>
                    
                </div>
            @endforeach
            @else
                <h4>No Questions Found ! <br> Add Questions to your Survey Now </h4>
            @endif
        </div>
    </div>
</div>
@endsection
