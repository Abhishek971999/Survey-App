@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>{{$questionaire->title}}</h1>
        <form action="/survey/{{$questionaire->id}}-{{Str::slug($questionaire->title)}}" method="post">
            @csrf
            @foreach ($questionaire->questions as $key=>$question)
            <div class="card mt-4">
            <div class="card-header"><strong>{{$key+1}}.{{$question->question}}</strong></div>
                 <div class="card-body">
                    @error('responses.'.$key.'.answer_id')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                    <ul class="list-group">
                        @foreach ($question->answers as $answer)
                        <label for="answer{{$answer->id}}">
                        <li class="list-group-item">
                            <input type="radio" name="responses[{{$key}}][answer_id]" id="answer{{$answer->id}}" value="{{$answer->id}}" class="mr-2"  {{ old('responses.'.$key.'.answer_id') == $answer->id ? 'checked' : '' }}>{{$answer->answer}}
                        <input type="hidden" name="responses[{{$key}}][question_id]" value="{{$question->id}}">
                        </li>
                        </label>
                        @endforeach
                      </ul>
                     
                </div>
                    
                </div>
            @endforeach
            <div class="card mt-4">
                <div class="card-header">
                    <h4>User Information</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" name="survey[name]" placeholder="Eg. John Doe">
                    @error('survey.name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                    </div>
    
                   <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="email" name="survey[email]" placeholder="Eg. xyz@domain.com">
                    @error('survey.email')
                    <small class="text-danger">{{$message}}</small>
                    @enderror   
                </div>
                    <small id="email" class="form-text text-muted">Your email won't be shared with anyone.</small>
                </div>
                <button type="submit mt-2" class="btn btn-primary">Submit Survey</button>
            </div>
            
        </form>
           
        </div>
    </div>
</div>
@endsection
