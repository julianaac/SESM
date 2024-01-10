@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">7. ACOMPANHAMENTO DA REDE</h1>
    <form class="forms-sample" method="post" action="{{route('network.store')}}">
        {{csrf_field()}}
        @include('network.form')

    </form>
    @endsection