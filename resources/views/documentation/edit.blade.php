@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">2.  DOCUMENTAÇÃO</h1>
    <form class="forms-sample" action="{{route('documentation.update', $documentation->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @include('documentation.formedit')
    <a href="{{route('documentation.index')}}">Voltar</a>
    </form>
    @endsection
