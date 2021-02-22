@extends('layout.app');
@section('main')
<main>
    <div class="container">
        <a href="{{ route('companies.index') }}">BACK TO COMPANY</a>
            <div class="posts">
                <h2>Name : {{$company->name}}</h2>
                <p>Address : {{$company->address}}</p>
                <p>CEO : {{$company->worker}}</p>
            </div>
    </div>
</main>
@endsection