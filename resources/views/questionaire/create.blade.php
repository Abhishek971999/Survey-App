@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Questionaire</div>

                <div class="card-body">
                    <form action="/questionaire" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="Enter Title of Questionaire">
                        <small id="purpose" class="form-text text-muted">Give a suitable title for the questionaire.</small>
                        @error('title')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>

                      <div class="form-group">
                            <label for="purpose">Purpose</label>
                            <input type="text" class="form-control" id="purpose" aria-describedby="purpose" name="purpose" placeholder="Enter Purpose of the Questionaire">
                            <small id="purpose" class="form-text text-muted">Giving a purpose will increase responses.</small>
                            @error('purpose')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        
                      
                      <button type="submit" class="btn btn-primary">Create Questionaire</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
