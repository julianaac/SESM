@extends('layouts.base')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Crianças Cadastradas</h1>
        </div>

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Idade Escolar</th>
                            <th>Rotina</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($edu_sit_currents as $edu_sit_current)
                            <tr>
                                <td><a href="{{route('edu_sit_current.show', $edu_sit_current->id)}}">{{$edu_sit_current->edu_sit_current}}</a></td>
                                <td>{{$edu_sit_current->routine_assignment}}</td>
                                <td><a class="btn btn-link" href="{{route('edu_sit_current.edit', $edu_sit_current->id)}}">Editar Cadastro</a>
{{--                                    <form style="display: inline;" action="{{route('edu_sit_current.destroy', $driver->id)}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button class="btn btn-link" type="submit">Delete</button>
                                    </form>--}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td><p>Nenhuma criança cadastrada.</p></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

                <a class="btn btn-secondary" href="{{route('edu_sit_current.create')}}">Cadastrar</a>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">

            </div>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">


                <div class="col-lg-6 mb-4">
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
