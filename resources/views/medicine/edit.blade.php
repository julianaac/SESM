@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">2.  DOCUMENTAÇÃO</h1>
    <form class="forms-sample" action="{{route('medicine.update', $medicine->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @include('medicine.form')
    <a href="{{route('medicine.index')}}">Voltar</a>
    </form>
    @endsection
