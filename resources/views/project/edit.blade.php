@extends('layout.master')

@section('title', 'Index title')

@section('sidebar')
   @parent

<p>This refers to the master sidebar.</p>
@endsection


@section('content')
    <form action="{{ route('projects.update', $item->id) }}"  method="POST">
        @csrf
        @method('PUT')
        <label for="fullname">Fullname: </label>
        <input type="text" id="fullname" name="fullname" value="{{ $item->fullname }}"><br><br>

        <label for="age">Age: </label>
        <input type="number" id="age" name="age" value="{{ $item->age }}"><br><br>

        <label for="birth_place">adress: </label>
        <input type="text" id="birth_place" name="birth_place" value="{{ $item->birth_place }}"><br><br>

        <label for="phone">phone: </label>
        <input type="text" id="phone" name="phone" value="{{ $item->phone }}"><br><br>

        <label for="gender">gender: </label>
        <input type="text" id="gender" name="gender" value="{{ $item->gender }}"><br><br>

        <input type="submit" value="Submet">
        <a href="{{ Route('projects.index') }}">go back</a>
    </form>
@endsection