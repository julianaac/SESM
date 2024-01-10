@extends('layouts.base')
@section('content')
    {{--{{isset($family_extended->family_extended_name) ? $$family_extended->family_extended_name: null}}--}}

<fieldset readonly="true">
    <fieldset>
        <label>Dentre os parentes identificados, há interessado(s) em acolher a criança?</label>
        <div class="custom-control custom-radio">
            <input type="radio" id="iYes" disabled="disabled" class="custom-control-input" value="1" {{ $family_extended->interested_hosting == '1' ? 'checked' : '' }}  name="family_extended_interested_hosting" >
            <label class="custom-control-label" for="iYes">Sim</label>
            <div class="form-group">
                <label for="family_extended_who_interested">Quem?</label>
                <input type="text" class="form-control" id="family_extended_who_interested" placeholder="Insira os estudos e relatorios" name="family_extended_who_interested" value="{{isset($family_extended->who_interested) ? $family_extended->who_interested: null}}" readonly="true">
            </div>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="iNo" class="custom-control-input" disabled="disabled" value="0"  {{ $family_extended->interested_hosting == '0' ? 'checked' : '' }}  name="family_extended_interested_hosting">
            <label class="custom-control-label" for="iNo">Não</label>
        </div>
    </fieldset>
    <fieldset>
        <label>O(s) parente(s) interessado(s) oferece(m) as condições de cuidado e proteção necessárias para o retorno ao convívio com a criança?</label>
        <div class="custom-control custom-radio">
            <input type="radio" id="SIM" value="SIM" disabled="disabled" {{ $family_extended->conditions_care == 'SIM' ? 'checked' : '' }} class="custom-control-input" name="family_extended_conditions_care" >
            <label class="custom-control-label" for="SIM" >Sim</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="NAO" value="NAO" disabled="disabled" {{ $family_extended->conditions_care == 'NAO' ? 'checked' : '' }} class="custom-control-input" name="family_extended_conditions_care">
            <label class="custom-control-label" for="NAO">Não</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="AVA" value="AVA" disabled="disabled" {{ $family_extended->conditions_care == 'AVA' ? 'checked' : '' }} class="custom-control-input" name="family_extended_conditions_care">
            <label class="custom-control-label" for="AVA">Faz-se necessária um avaliação aprofundada</label>
        </div>
    </fieldset>
    <div class="form-group">
        <label for="family_extended_opinion_kid">Documentos apresentados no momento do ingresso da criança no serviço de acolhimento:</label>
        <input type="text" class="form-control" id="family_extended_opinion_kid" placeholder="Insira os documentos" name="family_extended_opinion_kid" value="{{isset($family_extended->opinion_kid) ? $family_extended->opinion_kid: null}}" readonly="true">
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a class="btn btn-link" href="{{route('family_extended.edit', $family_extended->id)}}">Editar</a>
        <a class="btn btn-secondary" href="{{route('pia.show', $family_extended->kid_id)}}">Visualizar  PIA</a>
        </div>
    </div>
</fieldset>
@endsection
