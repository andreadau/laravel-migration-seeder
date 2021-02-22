@extends('layout.app');
@section('main')
    <main>
    <div class="container">
        <a href="{{ route('employees.index') }}">BACK TO EMPLOYEE</a>
                <div class="posts">
                    <h2>{{$employee->fullname}}</h2>
                    <p>Company : {{$employee->company}}</p>
                    <p>Role : {{$employee->role}}</p>
                    <p>Salary : {{$employee->salary}}</p>
                </div>
    </div>
    </main>
@endsection