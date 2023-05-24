@extends('layouts.default')

@section('content')
<div class="col-lg-2">

</div>
<div class="col-lg-8 mt-5 mb-5">
    <div class="container bg-secondary">
        <h5 class="text-white">Book list</h5>
    </div>

    <div class="container">
        <div class="row">
            @foreach($books as $book)
            <div class="col-lg-3">
                <div class="card mt-3 mb-3">
                    <img src="{{$book->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$book->title}}</h5>
                        <div class="card-text">
                            <p>by</p>
                            <p>{{$book->author}}</p>
                        </div>
                        <a href="{{route('detail',$book->id)}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div> 
            @endforeach

            {{$books->links()}}
            
            
        </div>
    </div>
</div>
<div class="col-lg-2"></div>

@endsection