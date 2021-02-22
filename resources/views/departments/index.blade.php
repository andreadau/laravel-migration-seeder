@extends('layout.app')
@section('main')
    <main>
        <div class="container">
            @foreach($departments as $department)
                <div class="posts">
                <h2>Department : {{$department->name}}</h2>
                <p>Company : {{$department->company}}</p>
                <p>Location : {{$department->location}}</p>
                <p>Utility : {{$department->utility}}</p>
                    <div class="form-button">
                        <a href="{{ route('departments.show', ['department' => $department->id]) }}">
                            <i class="fas fa-eye fa-md fa-fw"></i>
                            VIEW
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
