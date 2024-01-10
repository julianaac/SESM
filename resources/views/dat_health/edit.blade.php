@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">4. DADOS DE SAÚDE</h1>
    <form class="forms-sample" action="{{route('dat_health.update', $dat_health->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @include('dat_health.formedit')
    <a href="{{route('dat_health.index')}}">Voltar</a>
    </form>
    @endsection
