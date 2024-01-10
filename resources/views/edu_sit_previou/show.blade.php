@extends('layouts.base')
@section('content')
    {{--{{isset($edu_sit_previou->edu_sit_previou_name) ? $$edu_sit_previou->edu_sit_previou_name: null}}--}}

<fieldset readonly="true">

    <fieldset>
        <label>Criança em idade escolar?</label>
        <div class="custom-control custom-radio">
            <input type="radio" id="iYes" disabled="disabled" {{ $edu_sit_previou->age_school == '1' ? 'checked' : '' }} class="custom-control-input" name="edu_sit_previou_age_school" >
            <label class="custom-control-label" for="iYes">Sim</label>
            <fieldset>
                <label>A criança estava frequentando a escola? </label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="iYes2" disabled="disabled" {{ $edu_sit_previou->frequent_school == '1' ? 'checked' : '' }} class="custom-control-input" name="edu_sit_previou_frequent_school" >
                    <label class="custom-control-label" for="iYes2">Sim</label>
                    <div class="form-group">
                        <label for="edu_sit_previou_school">Escola</label>
                        <input type="text" class="form-control" id="edu_sit_previou_school" name="edu_sit_previou_school" value="{{isset($edu_sit_previou->school) ? $edu_sit_previou->school: null}}" readonly=“true”>
                    </div>
                    <div class="form-group">
                        <label for="edu_sit_previou_grade">Serie</label>
                        <input type="text" class="form-control" id="edu_sit_previou_grade" name="edu_sit_previou_grade" value="{{isset($edu_sit_previou->grade) ? $edu_sit_previou->grade: null}}" readonly=“true”>
                    </div>
                    <div class="form-group">
                        <label for="edu_sit_previou_shift">Turno</label>
                        <input type="text" class="form-control" id="edu_sit_previou_shift" name="edu_sit_previou_shift" value="{{isset($edu_sit_previou->shift) ? $edu_sit_previou->shift: null}}" readonly=“true”>
                    </div>
                    <div class="form-group">
                        <label for="edu_sit_previou_life_school">Em relação à vida escolar da criança, descreva: frequência / socialização / interesse nas atividades escolares / rendimento escolar / participação da família na escola.</label>
                        <input type="text" class="form-control" id="edu_sit_previou_life_school" name="edu_sit_previou_life_school" value="{{isset($edu_sit_previou->life_school) ? $edu_sit_previou->life_school: null}}" readonly=“true”>
                    </div>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="iNo2" disabled="disabled"  {{ $edu_sit_previou->frequent_school == '0' ? 'checked' : '' }} class="custom-control-input" name="edu_sit_previou_frequent_school">
                    <label class="custom-control-label" for="iNo2">Não</label>
                    <div class="form-group">
                        <label for="edu_sit_previou_justification">Justifique</label>
                        <input type="text" class="form-control" id="edu_sit_previou_justification" name="edu_sit_previou_justification" value="{{isset($edu_sit_previou->justification) ? $edu_sit_previou->justification: null}}" readonly=“true”>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="iNo" disabled="disabled"  {{ $edu_sit_previou->age_school == '0' ? 'checked' : '' }} class="custom-control-input" name="edu_sit_previou_age_school">
            <label class="custom-control-label" for="iNo">Não</label>
        </div>
    </fieldset>
    <div class="col-sm-offset-2 col-sm-10">
        {{-- <button type="submit" class="btn btn-primary">Salvar</button> --}}
        <a class="btn btn-link" href="{{route('edu_sit_previou.edit', $edu_sit_previou->id)}}">Editar</a>
        <a class="btn btn-secondary" href="{{route('pia.show', $edu_sit_previou->kid_id)}}">Visualizar  PIA</a>
    </div>
</fieldset>
@endsection
