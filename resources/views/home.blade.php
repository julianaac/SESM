@extends('layouts.base')

@section('content')

<table class="table">
    <thead>
    <tr>
        <th>Nome</th>
    </tr>

    </thead>
    <tbody>
    @isset($results)
        @foreach($results as $result)
            <tr>
                <td>{{$result->name}}</td>
                <td><a class="btn btn-link" href="{{route('kid.show', $result->id)}}">Visualizar</a></td>
            </tr>
        @endforeach
    @else
            <tr>
                <td>Sem resultados.</td>
            </tr>
    @endisset
    </tbody>
</table>
@endsection








{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
