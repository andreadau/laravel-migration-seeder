@extends('layout.app');
@section('main')
    <main>
    <div class="container">
    <a href="{{ route('departments.index') }}">BACK TO DEPARTMENT</a>
        <div class="posts">
            <p>{{$department->company}}</p>
            <h2>{{$department->name}}</h2>
            <p>{{$department->location}}</p>
            <p>{{$department->utility}}</p>
        </div>
    </div>
    </main>
@endsection