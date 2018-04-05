@extends('layouts.master')

@section('title')
    Car
@endsection

@section('content')
    <h3 class="text-center">Car details:</h3>
   <table class="table">
        <tr>
            <th>Make</th>
            <th>Model</th>
            <th>Number of doors</th>
        </tr>
        <tr>
            <td>{{$car->producer}}</td>
            <td>{{$car->title}}</td>
            <td>{{$car->number_of_doors}}</td>
        </tr>
   </table>
@endsection 