@extends('layout.master')

@section('title', 'Index title')

@section('sidebar')
   @parent

<p>This refers to the master sidebar.</p>
@endsection


@section('content')
    <h3>fullname: {{$item->fullname}}</h3>
    <h3>age: {{$item-> age}}</h3>
    <h3>birth_place: {{$item->birth_place}}</h3>
    <h3>phone: {{$item->phonr}}</h3>
    <h3>gender: {{$item->gender}}</h3>
@endsection