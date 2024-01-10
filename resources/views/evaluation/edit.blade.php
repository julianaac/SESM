@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">10. AVALIAÇÃO</h1>
    <form class="forms-sample" action="{{route('evaluation.update', $evaluation->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @include('evaluation.form')
    <a href="{{route('evaluation.index')}}">Voltar</a>
    </form>
    @endsection
