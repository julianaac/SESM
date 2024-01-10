@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">6. INFORMAÇÕES SOBRE A FAMÍLIA DE ORIGEM/EXTENSA E TERCEIROS</h1>
    <form class="forms-sample" method="post" action="{{route('information_family.store')}}">
        {{csrf_field()}}
        @include('information_family.form')

    </form>
    @endsection
