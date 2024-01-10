@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">6. INFORMAÇÕES SOBRE A FAMÍLIA DE ORIGEM/EXTENSA E TERCEIROS</h1>
    <form class="forms-sample" action="{{route('information_family.update', $information_family->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @include('information_family.formedit')
    <a href="{{route('information_family.index')}}">Voltar</a>
    </form>
    @endsection
