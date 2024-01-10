@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">5.2 SITUAÇÃO ATUAL</h1>
    <form class="forms-sample" method="post" action="{{route('edu_sit_current.store')}}">
        {{csrf_field()}}
        @include('edu_sit_current.form')

    </form>
    @endsection
