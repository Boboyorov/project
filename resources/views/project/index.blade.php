@extends('layout.master')

@section('title', 'Index title')

@section('sidebar')
   @parent

<p>This refers to the master sidebar.</p>
@endsection


@section('content')
<div class="container">
<a href="projects/create" class="btn btn-primary mb-3 mt-3">Create a new person</a>

<table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Fullname</th>
                <th scope="col">Age</th>
                <th scope="col">Adress</th>
                <th scope="col">phone</th>
                <th scope="col">gender</th>
                <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($items as $key => $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->fullname}}</td>
                    <td>{{$item->age}}</td>
                    <td>{{$item->birth_place}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->gender}}</td>
                    <td>
                        <form action="{{ route('projects.destroy', $item->id)}}" method="POST">
                            <a href="{{ route('projects.edit', $item->id)}}" class="btn btn-primary">edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="delete" class="btn btn-dark">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
</table>
</div>
    

@endsection
