@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">2.  DOCUMENTAÇÃO</h1>
    <form class="forms-sample" action="{{route('data_health.update', $data_health->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @include('data_health.formedit')
    <a href="{{route('data_health.index')}}">Voltar</a>
    </form>
    @endsection
