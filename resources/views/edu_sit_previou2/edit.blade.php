@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">5.1  EDUCAÇÃO: SITUAÇÃO ANTERIOR AO ACOLHIMENTO</h1>
    <form class="forms-sample" action="{{route('edu_sit_previou.update', $edu_sit_previou->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @include('edu_sit_previou.form')
    <a href="{{route('edu_sit_previou.index')}}">Voltar</a>
    </form>
    @endsection
