@extends('layouts.master')

@section('title')
    Cars in stock
@endsection

@section('content')
   <h2>Cars in stock</h2>
   <ul>
    @foreach($cars as $car)
        
       <li> <a href="{{route('single-car', ['id' => $car->id])}}">{{ $car->title  }}</a></li>
           
    @endforeach        
    </ul>
@endsection 