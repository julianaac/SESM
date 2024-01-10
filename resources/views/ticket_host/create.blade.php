@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">3. INGRESSO NO ACOLHIMENTO INSTITUCIONAL</h1>
    <form class="forms-sample" method="post" action="{{route('ticket_host.store')}}">
        {{csrf_field()}}
        @include('ticket_host.form')

    </form>
    @endsection
