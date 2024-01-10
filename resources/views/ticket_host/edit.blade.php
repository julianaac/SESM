@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">3. INGRESSO NO ACOLHIMENTO INSTITUCIONAL</h1>
    <form class="forms-sample" action="{{route('ticket_host.update', $ticket_host->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        @include('ticket_host.formedit')
    <a href="{{route('ticket_host.index')}}">Voltar</a>
    </form>
    @endsection
