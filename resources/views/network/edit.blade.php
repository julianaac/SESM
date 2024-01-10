@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">7. ACOMPANHAMENTO DA REDE</h1>
    <form class="forms-sample" action="{{route('network.update', $network->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @include('network.form')
    <a href="{{route('network.index')}}">Voltar</a>
    </form>
    @endsection
