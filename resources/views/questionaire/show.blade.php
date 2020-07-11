@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{$questionaire->title}}</div>

                <div class="card-body">
                    <a href="/questionaire/{{$questionaire->id}}/question/create" class="btn btn-primary">Add Questions</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
