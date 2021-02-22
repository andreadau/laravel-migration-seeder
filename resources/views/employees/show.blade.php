@extends('layout.app');
@section('main')
    <main>
    <div class="container">
        <a href="{{ route('employees.index') }}">BACK TO EMPLOYEE</a>
                <div class="posts">
                    <h2>{{$employee->fullname}}</h2>
                    <h2>{{$employee->company}}</h2>
                    <p>{{$employee->role}}</p>
                    <p>{{$employee->salary}}</p>
                </div>
    </div>
    </main>
@endsection