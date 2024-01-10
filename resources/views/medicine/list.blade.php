<!-- Botão para acionar modal -->
<br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
    Adição de Medicação
  </button>
  
  <!-- start add Modal -->
  <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adição de Medicação</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="forms-sample" method="post" action="{{action('MedicineController@store')}}">
            {{csrf_field()}}
        <div class="modal-body">
                <div class="form-group">
                        <label for="medicine_data_health_id" style="display: none;">ID Saude</label>
                        <input type="text" class="form-control"  id="medicine_data_health_id" name="medicine_data_health_id" value="@php
                        echo $teste;
                    @endphp"  readonly=“true” style="display: none;">
                    </div>
            <div class="form-group">
                <label for="medicine_doctor">Medico:</label>
                <input type="text" class="form-control" id="medicine_doctor" name="medicine_doctor" value="{{isset($medicine->doctor) ? $medicine->doctor: null}}">
            </div>
            
            <div class="form-group">
                <label for="medicine_name">Medicação</label>
                <input type="text" class="form-control" id="medicine_name" name="medicine_name" value="{{isset($medicine->name) ? $medicine->name: null}}">
            </div>
            <div class="form-group">
                <label for="medicine_dosage">Dosagem:</label>
                <input type="text" class="form-control" id="medicine_dosage" name="medicine_dosage" value="{{isset($medicine->dosage) ? $medicine->dosage: null}}">
            </div>
            <div class="form-group">
                <label for="medicine_administration">Administração:</label>
                <input type="text" class="form-control" id="medicine_administration" name="medicine_administration" value="{{isset($medicine->administration) ? $medicine->administration: null}}">
            </div>
            <div class="form-group">
                <label for="medicine_period">Periodo:</label>
                <input type="text" class="form-control" id="medicine_period" name="medicine_period" value="{{isset($medicine->period) ? $medicine->period: null}}">
            </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="subimit" class="btn btn-primary">Salvar mudanças</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- and add Modal -->


  <br>
  <br>
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
        @forelse($medicine_list as $medicine)
            <tr>
                {{-- <td><a href="{{route('medicine.show', $medicine->id)}}">{{$medicine->studies_reports}}</a>{{$medicine->id}}</td>--}}
                <td>{{$medicine->id}}</td>
                <td>{{$medicine->doctor}}</td>
                <td>{{$medicine->name}}</td>
                <td>{{$medicine->dosage}}</td>
                <td>{{$medicine->administration}}</td>
                <td>{{$medicine->period}}</td>
                {{--<td> <a class="btn btn-link" href="{{route('medicine.edit', $medicine->id)}}">Editar Cadastro</a>
                                   <form style="display: inline;" action="{{route('medicine.destroy', $medicine->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button class="btn btn-link" type="submit">Delete</button>
                    </form>
                </td>--}}
            </tr>
        @empty
            <tr>
                <td><p>Nenhuma criança cadastrada.</p></td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{--<a class="btn btn-secondary" href="{{route('medicine.create')}}">Adicionar medicação</a>--}}
</div>