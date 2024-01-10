@extends('layouts.base')
@section('content')
    {{--{{isset($data_health->data_health_name) ? $$data_health->data_health_name: null}}--}}

<fieldset readonly="true">
        <div class="form-group">
                <label for="data_health_weight">Peso:</label>
                <input type="text" class="form-control" id="data_health_weight" name="data_health_weight" value="{{isset($data_health->weight) ? $data_health->weight:null}}"  readonly=“true”>
            </div>
    <div class="form-group">
        <label for="data_health_height">Altura:</label>
        <input type="text" class="form-control" id="data_health_height" name="data_health_height" value="{{isset($data_health->height) ? $data_health->height:null}}"  readonly=“true”>
    </div>
    
    <fieldset>
        <label>A criança faz uso de medicação?</label>
        <div class="custom-control custom-radio">
            <input type="radio" id="iYes" disabled="disabled" {{ $data_health->use_medication == '1' ? 'checked' : '' }} class="custom-control-input" name="data_health_use_medication" >
            <label class="custom-control-label" for="iYes">Sim</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="iNo" disabled="disabled"  {{ $data_health->use_medication == '0' ? 'checked' : '' }} class="custom-control-input" name="data_health_use_medication">
            <label class="custom-control-label" for="iNo">Não</label>
        </div>
    </fieldset>
       @include('medicine.list', ['medicine_list' => $data_health->medicines], ['teste'=> $data_health->id])
<br>
<br>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a class="btn btn-link" href="{{route('data_health.edit', $data_health->id)}}">Editar</a>
            <a class="btn btn-secondary" href="{{route('pia.show', $data_health->kid_id)}}">Visualizar  PIA</a>
        </div>
    </div>
</fieldset>
@endsection
