@extends('layouts.base')
@section('content')
    {{--{{isset($kid->kid_name) ? $$kid->kid_name: null}}--}}

<fieldset readonly="true">
        <fieldset>
                <label>A criança está inserida em alguma atividade do serviço de psicologia?</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="iYes" {{ $pro_ins_host->service_psychological == '1' ? 'checked' : '' }} class="custom-control-input" disabled="disabled" name="pro_ins_service_psychological">
                    <label class="custom-control-label" for="iYes">Sim</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="iNo" {{ $pro_ins_host->service_psychological == '0' ? 'checked' : '' }} class="custom-control-input" disabled="disabled" name="pro_ins_service_psychological" >
                    <label class="custom-control-label" for="iNo">Não</label>
                </div>
            </fieldset>
    <div class="form-group">
        <label for="pro_ins_host_justification"> Justifique e ou especifique.</label>
        <input type="text" class="form-control" id="pro_ins_host_justification" name="pro_ins_host_justification" value="{{isset($pro_ins_host->justification) ? $pro_ins_host->justification: null}}" readonly=“true”>
    </div>
    <fieldset>
        <label>Há serviços e ou profissionais externos à instituição de acolhimento atuando no caso?</label>
        <div class="custom-control custom-radio">
            <input type="radio" id="iYes2" {{ $pro_ins_host->service_external == '1' ? 'checked' : '' }} class="custom-control-input" disabled="disabled" name="pro_ins_host_deficiency">
            <label class="custom-control-label" for="iYes2">Sim</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="iNo2" {{ $pro_ins_host->service_external == '0' ? 'checked' : '' }} class="custom-control-input" disabled="disabled" name="pro_ins_host_deficiency" >
            <label class="custom-control-label" for="iNo2">Não</label>
        </div>
    </fieldset>

    <div class="form-group">
  
    <div class="col-sm-offset-2 col-sm-10">
        {{-- <button type="submit" class="btn btn-primary">Salvar</button> --}}
        <a class="btn btn-link" href="{{route('pro_ins_host.edit', $pro_ins_host->id)}}">Editar</a>
        <a class="btn btn-secondary" href="{{route('pia.show', $pro_ins_host->kid_id)}}">Visualizar  PIA</a>
    </div>
</div>
</fieldset>
@endsection
