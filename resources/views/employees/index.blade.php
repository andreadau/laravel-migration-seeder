@extends('layout.app')
@section('main')
    <main>
        <div class="container">
            @foreach($employees as $employee)
                <div class="posts">
                    <h2>{{$employee->fullname}}</h2>
                    <h2>{{$employee->company}}</h2>
                    <p>{{$employee->role}}</p>
                    <p>{{$employee->salary}}</p>
                    <div class="form-button">
                        <a href="{{ route('employees.show', ['employee' => $employee->id]) }}">
                            <i class="fas fa-eye fa-md fa-fw"></i>
                            VIEW
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
