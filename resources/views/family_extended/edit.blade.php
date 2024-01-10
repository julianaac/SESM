@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">6.2  FAMÍLIA EXTENSA</h1>
    <form class="forms-sample" action="{{route('family_extended.update', $family_extended->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @include('family_extended.formedit')
    <a href="{{route('family_extended.index')}}">Voltar</a>
    </form>
    @endsection
