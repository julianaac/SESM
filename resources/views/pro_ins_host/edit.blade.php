@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">4.1 PROVIDÊNCIAS DA INSTITUIÇÃO DE ACOLHIMENTO</h1>
    <form class="forms-sample" action="{{route('pro_ins_host.update', $pro_ins_host->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @include('pro_ins_host.formedit')
    <a href="{{route('pro_ins_host.index')}}">Voltar</a>
    </form>
    @endsection
