@extends('layout.app');
@section('main')
    <main>
    <div class="container">
    <a href="{{ route('departments.index') }}">BACK TO DEPARTMENT</a>
        <div class="posts">
            <h2>Department : {{$department->name}}</h2>
            <p>Company : {{$department->company}}</p>
            <p>Location : {{$department->location}}</p>
            <p>Utility : {{$department->utility}}</p>
        </div>
    </div>
    </main>
@endsection