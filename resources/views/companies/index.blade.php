@extends('layout.app')
@section('main')
    <main>
        <div class="container">
            @foreach($companies as $company)
                <div class="posts">
                    <h2>Name : {{$company->name}}</h2>
                    <p>Address : {{$company->address}}</p>
                    <p>CEO : {{$company->worker}}</p>
                    <div class="form-button">
                        <a href="{{ route('companies.show', ['company' => $company->id]) }}">
                            <i class="fas fa-eye fa-md fa-fw"></i>
                            VIEW
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
