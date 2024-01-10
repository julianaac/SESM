@extends('layouts.base')
@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">10. AVALIAÇÃO</h1>
    <form class="forms-sample" method="post" action="{{route('evaluation.store')}}">
        {{csrf_field()}}
        @include('evaluation.form')

    </form>
    @endsection