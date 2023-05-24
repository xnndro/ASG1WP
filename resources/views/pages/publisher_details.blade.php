@extends('layouts.default')

@section('content')
<div class="col-lg-2">

</div>
<div class="col-lg-8 mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="container-fluid bg-secondary text-white">
                    <p class="fs-3">Publisher Name: {{$publisher->name}}</p>
                    <p class="fs-3">Address: {{$publisher->address}} </p>
                    <p class="fs-3">Phone: {{$publisher->phone}}</p>
                    <p class="fs-3">Email: {{$publisher->email}}</p>
                </div>
            </div>
            @foreach($publisher->books as $book)
            <div class="col-lg-3">
                <div class="card mt-3 mb-3">
                    <img src="{{$book->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$book->title}}</h5>
                        <div class="card-text">
                            <p>by</p>
                            <p>{{$book->publisher->name}}</p>
                        </div>
                        <a href="{{route('detail',$book->id)}}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div> 
            @endforeach

            
        
        </div>
    </div>
</div>
<div class="col-lg-2"></div>

@endsection