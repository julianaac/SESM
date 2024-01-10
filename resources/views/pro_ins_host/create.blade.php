@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">4.1 PROVIDÊNCIAS DA INSTITUIÇÃO DE ACOLHIMENTO</h1>
    <form class="forms-sample" method="post" action="{{route('pro_ins_host.store')}}">
        {{csrf_field()}}
        @include('pro_ins_host.form')

    </form>
    @endsection
