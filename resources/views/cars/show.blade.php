@extends('layouts.master')

@section('title')
    Car
@endsection

@section('content')
   <table>
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