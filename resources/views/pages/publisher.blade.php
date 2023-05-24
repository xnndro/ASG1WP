@extends('layouts.default')

@section('content')
<div class="col-lg-2">

</div>
<div class="col-lg-8 mt-5 mb-5">
    <div class="container bg-secondary">
        <h5 class="text-white">Publisher List</h5>
    </div>

    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Publisher Name</th>
                <th scope="col">Detail</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach($publishers as $publisher)
                <tr>
                  <th scope="row">{{$no}}</th>
                    @php
                        $no++;
                    @endphp
                  <td>{{$publisher->name}}</td>
                  <td>
                      <a href="{{route('publisher_details',$publisher->id)}}" class="btn btn-primary btn-sm">Detail</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>
<div class="col-lg-2"></div>

@endsection