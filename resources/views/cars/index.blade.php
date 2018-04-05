@extends('layouts.master')

@section('title')
    Cars in stock
@endsection

@section('content')
   <h2 class="text-center">Cars in stock</h2>
   <ul class="list-group col-md-6 center">
    @foreach($cars as $car)
        
       <li class="list-group-item text-center"> <a href="{{route('single-car', ['id' => $car->id])}}">{{ $car->title  }}</a></li>
           
    @endforeach        
    </ul>
@endsection 