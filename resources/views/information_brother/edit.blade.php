@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">6.1.1 IRMÃOS</h1>
    <form class="forms-sample" action="{{route('information_brother.update', $information_brother->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @include('information_brother.formedit')
    <a href="{{route('information_brother.index')}}">Voltar</a>
    </form>
    @endsection
