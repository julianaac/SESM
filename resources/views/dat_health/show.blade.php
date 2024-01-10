@extends('layouts.base')
@section('content')
    {{--{{isset($kid->kid_name) ? $$kid->kid_name: null}}--}}

<fieldset readonly="true">
    <div class="form-group">
        <label for="dat_health_weight">Peso: </label>
        <input type="text" class="form-control" id="dat_health_weight" name="dat_health_weight" value="{{isset($dat_health->weight) ? $dat_health->weight:null}}"  readonly=“true”>
    </div>

    <div class="form-group">
        <label for="dat_health_height">Altura:</label>
        <input type="text" class="form-control" id="dat_health_height" name="dat_health_height" value="{{isset($dat_health->height) ? $dat_health->height: null}}" readonly=“true”>
    </div>
    <fieldset>
        <label>A criança faz uso de medicação?</label>
        <div class="custom-control custom-radio">
            <input type="radio" id="iYes" {{ $dat_health->use_medication == '1' ? 'checked' : '' }} class="custom-control-input" name="dat_health_deficiency">
            <label class="custom-control-label" for="iYes">Sim</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="iNo" {{ $dat_health->use_medication == '0' ? 'checked' : '' }} class="custom-control-input" name="dat_health_deficiency" >
            <label class="custom-control-label" for="iNo">Não</label>
        </div>
    </fieldset>

    <div class="form-group">
  
    <div class="col-sm-offset-2 col-sm-10">
        {{-- <button type="submit" class="btn btn-primary">Salvar</button> --}}
        <a class="btn btn-link" href="{{route('dat_health.edit', $dat_health->id)}}">Editar</a>
        <a class="btn btn-secondary" href="{{route('pia.show', $dat_health->kid_id)}}">Visualizar  PIA</a>
    </div>
</div>
</fieldset>
@endsection
