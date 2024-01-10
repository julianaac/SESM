@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">1.  DADOS PESSOAIS</h1>
    <form class="forms-sample" method="post" action="{{route('kid.store')}}">
        {{csrf_field()}}
        @include('kid.form')

    </form>
    @endsection
