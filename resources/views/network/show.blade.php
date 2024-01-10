@extends('layouts.base')
@section('content')
    {{--{{isset($network->network_name) ? $$network->network_name: null}}--}}


<fieldset>
        <label>Há instituições/serviços/programas que estiveram ou estão acompanhando os pais/responsáveis e/ou a criança?</label>
        <div class="custom-control custom-radio">
            <input type="radio" id="iYes" disabled ="disabled" {{ $network->following == '1' ? 'checked' : '' }} class="custom-control-input" name="network_following">
            <label class="custom-control-label" for="iYes">Sim</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="iNo" disabled ="disabled" {{ $network->following == '0' ? 'checked' : '' }} class="custom-control-input" name="network_following" >
            <label class="custom-control-label" for="iNo">Não</label>
        </div>
</fieldset>


<div class="form-group">
  
  <div class="col-sm-offset-2 col-sm-10">
      {{-- <button type="submit" class="btn btn-primary">Salvar</button> --}}
      <a class="btn btn-link" href="{{route('network.edit', $network->id)}}">Editar</a>
      <a class="btn btn-secondary" href="{{route('pia.show', $network->kid_id)}}">Visualizar  PIA</a>
  </div>
</div>
</fieldset>
@endsection
