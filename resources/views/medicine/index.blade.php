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
                            <th>ID</th>
                            <th>MÉDICO</th>
                            <th>MEDICAMENTO</th>
                            <th>POSOLOGIA</th>
                            <th>ADMINISTRAÇÃO</th>
                            <th>PERÍODO</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($medicines as $medicine)
                            <tr>
                                <td><a href="{{route('medicine.show', $medicine->id)}}">{{$medicine->studies_reports}}</a></td>
                                <td>{{$medicine->id}}</td>
                                <td>{{$medicine->doctor}}</td>
                                <td>{{$medicine->name}}</td>
                                <td>{{$medicine->dosage}}</td>
                                <td>{{$medicine->administration}}</td>
                                <td>{{$medicine->period}}</td>
                                <td><a class="btn btn-link" href="{{route('medicine.edit', $medicine->id)}}">Editar Cadastro</a>
{{--                                    <form style="display: inline;" action="{{route('medicine.destroy', $driver->id)}}" method="post">
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

                <a class="btn btn-secondary" href="{{route('medicine.create')}}">Cadastrar</a>
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
