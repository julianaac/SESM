@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">5.2 SITUAÇÃO ATUAL</h1>
    <form class="forms-sample" action="{{route('edu_sit_current.update', $edu_sit_current->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @include('edu_sit_current.formedit')
    <a href="{{route('edu_sit_current.index')}}">Voltar</a>
    </form>
    @endsection
