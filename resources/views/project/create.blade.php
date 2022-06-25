@extends('layout.master')

@section('title', 'Index title')

@section('sidebar')
   @parent

<p>This refers to the master sidebar.</p>
@endsection


@section('content')
    <div class="container">
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
        @endif
        <form action="{{ route('projects.store') }}"  method="POST">
            @csrf
            <label for="fullname">Fullname: </label>
            <input type="text" id="fullname" name="fullname"><br><br>

            <label for="age">Age: </label>
            <input type="number" id="age" name="age"><br><br>

            <label for="birth_place">adress: </label>
            <input type="text" id="birth_place" name="birth_place"><br><br>

            <label for="phone">phone: </label>
            <input type="text" id="phone" name="phone"><br><br>

            <label for="gender">gender: </label>
            <input type="text" id="gender" name="gender"><br><br>
            
            <a href="/projects" class="btn btn-dark">go back</a>
            <input type="submit" value="Submet" class="btn btn-primary">
            
        </form>
    </div>

@endsection
</body>
</html>