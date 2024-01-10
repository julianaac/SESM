@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">6.1 FAMÍLIA DE ORIGEM</h1>
    <form class="forms-sample" method="post" action="{{route('family_origin.store')}}">
        {{csrf_field()}}
        @include('family_origin.form')

    </form>
    @endsection
