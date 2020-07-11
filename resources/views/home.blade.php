@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header m-0">
                    <div class="row">
                        <div class="col">
                            <h3>My Questionaires</h3>
                        </div>
                        <div class="col text-right">
                            <a href="/questionaire/create" class="mb-4 btn btn-primary btn-sm">Create Questionaire</a>
                        </div>
                    </div>
                    
                </div>

                <div class="card-body">
                    
                    <ul class="list-group">
                        @foreach ($questionaires as $questionaire)
                    <li class="list-group-item">
                        <a href="/questionaire/{{$questionaire->id}}">{{$questionaire->title}}</a>
                        <div class="mt-2">
                            <small><strong>Share URL :</strong> <a href="{{$questionaire->publicPath()}}">
                                {{$questionaire->publicPath()}}
                            </a></small>
                        </div>
                    </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
