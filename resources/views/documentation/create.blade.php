@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">2.  DOCUMENTAÇÃO</h1>
    <form class="forms-sample" method="post" action="{{route('documentation.store')}}">
        {{csrf_field()}}
        @include('documentation.form')

    </form>
    @endsection
