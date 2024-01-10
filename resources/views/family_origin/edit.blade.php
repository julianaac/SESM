@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">6.1 FAMÍLIA DE ORIGEM</h1>
    <form class="forms-sample" action="{{route('family_origin.update', $family_origin->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @include('family_origin.formedit')
    <a href="{{route('family_origin.index')}}">Voltar</a>
    </form>
    @endsection
