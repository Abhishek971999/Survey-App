@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Question</div>

                <div class="card-body">
                <form action="/questionaire/{{$questionaire->id}}/question" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="question">Question</label>
                    <input type="text" class="form-control" id="question" aria-describedby="question" name="question[question]" placeholder="Enter Title of Question" value="{{old('question.question')}}">
                        <small id="purpose" class="form-text text-muted">Write a suitable question.</small>
                        @error('question.question')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>

                      <div class="form-group">
                          <fieldset>
                              <legend>Choices</legend>
                              <small id="choiceHelp" class="form-text text-muted">Give choices that give you most insight into your question.</small>
                              <div>
                                <div class="form-group">
                                    <label for="question">Answer 1</label>
                                    <input type="text" class="form-control" id="answer" aria-describedby="choiceHelp" name="answers[][answer]" placeholder="Enter Choice 1" value="{{old('answers.0.answer')}}" >
                                    
                                    @error('answers.0.answer')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                  </div>
                              </div>

                              <div>
                                <div class="form-group">
                                    <label for="question">Answer 2</label>
                                    <input type="text" class="form-control" id="answer" aria-describedby="choiceHelp" name="answers[][answer]" placeholder="Enter Choice 1" value="{{old('answers.1.answer')}}">
                                    
                                    @error('answers.1.answer')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                  </div>
                              </div>

                              <div>
                                <div class="form-group">
                                    <label for="question">Answer 3</label>
                                    <input type="text" class="form-control" id="answer" aria-describedby="choiceHelp" name="answers[][answer]" placeholder="Enter Choice 1" value="{{old('answers.2.answer')}}">
                                    
                                    @error('answers.2.answer')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                  </div>
                              </div>

                              <div>
                                <div class="form-group">
                                    <label for="question">Answer 4</label>
                                    <input type="text" class="form-control" id="answer" aria-describedby="choiceHelp" name="answers[][answer]" placeholder="Enter Choice 4" value="{{old('answers.3.answer')}}">
                                    
                                    @error('answers.3.answer')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                  </div>
                              </div>

                          </fieldset>
                      </div>
                        
                      
                      <button type="submit" class="btn btn-primary">Add Question</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
