@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">2.  Medicação</h1>
    <form class="forms-sample" method="post" action="{{route('medicine.store')}}">
        {{csrf_field()}}
        @include('medicine.form')

    </form>
    @endsection
