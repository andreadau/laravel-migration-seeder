@extends('layout.app')
@section('main')
    <main>
        <div class="container">
            @foreach($employees as $employee)
                <div class="posts">
                    <h2>{{$employee->fullname}}</h2>
                    <p>Company : {{$employee->company}}</p>
                    <p>Role : {{$employee->role}}</p>
                    <p>Salary : {{$employee->salary}}</p>
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
