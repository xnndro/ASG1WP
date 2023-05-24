@extends('layouts.default')

@section('content')
<div class="col-lg-2">

</div>
<div class="col-lg-8 mt-5 mb-5">
    <div class="container bg-secondary">
        <h5 class="text-white">Book Detail</h5>
    </div>

    <div class="card">
        <img src="{{$book->image}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Title: {{$book->title}}</h5>
            <div class="card-text">
                <p>Author: {{$book->author}}</p>
                <p>Publisher: {{$book->publisher->name}} </p>
                <p>Year: {{$book->year}}</p>
                <p>Synopsis:</p>
                <p>
                    {{$book->synopsis}}
                </p>
            </div>
        </div>
    </div>


</div>
<div class="col-lg-2"></div>

@endsection