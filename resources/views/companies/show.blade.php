@extends('layout.app');
@section('main')
<main>
    <div class="container">
        <a href="{{ route('companies.index') }}">BACK TO COMPANY</a>
            <div class="posts">
                <h2>{{$company->name}}</h2>
                <p>{{$company->address}}</p>
                <p>{{$company->worker}}</p>
            </div>
    </div>
</main>
@endsection