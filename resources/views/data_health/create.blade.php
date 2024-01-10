@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">4.  DADOS DE SAÚDE</h1>
    <form class="forms-sample" method="post" action="{{route('data_health.store')}}">
        {{csrf_field()}}
        @include('data_health.form')

    </form>
    @endsection
