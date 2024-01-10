@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">1.  DADOS PESSOAIS</h1>
    <form class="forms-sample" action="{{route('kid.update', $kid->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @include('kid.form')
    <a href="{{route('kid.index')}}">Voltar</a>
    </form>
    @endsection
