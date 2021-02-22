@extends('layout.app')
@section('main')
    <main>
        <div class="container">
            @foreach($departments as $department)
                <div class="posts">
                    <p>{{$department->company}}</p>
                    <h2>{{$department->name}}</h2>
                    <p>{{$department->location}}</p>
                    <p>{{$department->utility}}</p>
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
