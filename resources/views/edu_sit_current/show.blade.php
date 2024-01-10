@extends('layouts.base')
@section('content')
    {{--{{isset($edu_sit_current->edu_sit_current_name) ? $$edu_sit_current->edu_sit_current_name: null}}--}}

<fieldset readonly="true">
    <fieldset>
        <label>Criança em idade escolar?</label>
        <div class="custom-control custom-radio">
            <input type="radio" id="iYes2" disabled="disabled" {{ $edu_sit_current->age_school == '1' ? 'checked' : '' }} class="custom-control-input" name="edu_sit_current_age_school" >
            <label class="custom-control-label" for="iYes2">Sim</label>
            <fieldset>
                <label>A criança possui rotinas estabelecidas para a realização das tarefas/trabalhos escolares com acompanhamento?</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="iYes3" disabled="disabled" {{ $edu_sit_current->routine_assignment == '1' ? 'checked' : '' }} class="custom-control-input" name="edu_sit_current_routine_assignment" >
                    <label class="custom-control-label" for="iYes3">Sim</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="iNo3" disabled="disabled"  {{ $edu_sit_current->routine_assignment == '0' ? 'checked' : '' }} class="custom-control-input" name="edu_sit_current_routine_assignment">
                    <label class="custom-control-label" for="iNo3">Não</label>
                </div>
            </fieldset>
            <div class="form-group">
                <label for="edu_sit_current_matter_interest">Em qual(is) matéria(s)/área(s) de conhecimento a criança demonstra maior interesse e habilidade?</label>
                <input type="text" class="form-control" id="edu_sit_current_matter_interest" name="edu_sit_current_matter_interest" value="{{isset($edu_sit_current->matter_interest) ? $edu_sit_current->matter_interest: null}}" readonly=“true”>
            </div>
            <div class="form-group">
                <label for="edu_sit_current_matter_difficulty">E em qual(is) demonstra maior dificuldade?</label>
                <input type="text" class="form-control" id="edu_sit_current_matter_difficulty" name="edu_sit_current_matter_difficulty" value="{{isset($edu_sit_current->matter_difficulty) ? $edu_sit_current->matter_difficulty: null}}" readonly=“true”>
            </div>
            <fieldset>
                <label>Há indícios de que a criança tenha alguma dificuldade específica de aprendizagem?</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="iYes4" disabled="disabled" {{ $edu_sit_current->difficulty_learning == '1' ? 'checked' : '' }} class="custom-control-input" name="edu_sit_current_difficulty_learning" >
                    <label class="custom-control-label" for="iYes4">Sim</label>
                    
    <div class="form-group">
        <label for="edu_sit_current_difficulty_learning_description">Em caso positivo, quem identificou tais indícios? Quais os encaminhamentos realizados?</label>
        <input type="text" class="form-control" id="edu_sit_current_difficulty_learning_description" name="edu_sit_current_difficulty_learning_description" value="{{isset($edu_sit_current->difficulty_learning_description) ? $edu_sit_current->difficulty_learning_description: null}}" readonly=“true”>
    </div>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="iNo4" disabled="disabled"  {{ $edu_sit_current->difficulty_learning == '0' ? 'checked' : '' }} class="custom-control-input" name="edu_sit_current_difficulty_learning">
                    <label class="custom-control-label" for="iNo4">Não</label>
                </div>
            </fieldset>
            
    <div class="form-group">
        <label for="edu_sit_current_interest_school">A criança demonstra vontade/interesse em frequentar a escola ou, ao contrário, demonstra resistência ou desinteresse?</label>
        <input type="text" class="form-control" id="edu_sit_current_interest_school" name="edu_sit_current_interest_school" value="{{isset($edu_sit_current->interest_school) ? $edu_sit_current->interest_school: null}}" readonly=“true”>
    </div>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="iNo2" disabled="disabled"  {{ $edu_sit_current->age_school == '0' ? 'checked' : '' }} class="custom-control-input" name="edu_sit_current_age_school">
            <label class="custom-control-label" for="iNo2">Não</label>
            <fieldset>
                <label>Há espaço na estrutura e rotina da instituição para atividades que estimulem o desenvolvimento infantil?</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="iYes5" disabled="disabled" {{ $edu_sit_current->room_activities == '1' ? 'checked' : '' }} class="custom-control-input" name="edu_sit_current_room_activities" >
                    <label class="custom-control-label" for="iYes5">Sim</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="iNo5" disabled="disabled"  {{ $edu_sit_current->room_activities == '0' ? 'checked' : '' }} class="custom-control-input" name="edu_sit_current_room_activities">
                    <label class="custom-control-label" for="iNo5">Não</label>
                </div>
            </fieldset>
            <fieldset>
                <label>A criança apresenta desenvolvimento conforme o esperado para sua faixa etária?</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="iYes6" disabled="disabled" {{ $edu_sit_current->development_expected == '1' ? 'checked' : '' }} class="custom-control-input" name="edu_sit_current_development_expected" >
                    <label class="custom-control-label" for="iYes6">Sim</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="iNo6" disabled="disabled"  {{ $edu_sit_current->development_expected == '0' ? 'checked' : '' }} class="custom-control-input" name="edu_sit_current_development_expected">
                    <label class="custom-control-label" for="iNo6">Não</label>
                </div>
            </fieldset>
            <div class="form-group">
                <label for="edu_sit_current_development_expected_description">Descreva os aspectos observados.</label>
                <input type="text" class="form-control" id="edu_sit_current_development_expected_description" name="edu_sit_current_development_expected_description" value="{{isset($edu_sit_current->development_expected_description) ? $edu_sit_current->development_expected_description: null}}" readonly=“true”>
            </div>
        </div>
    </fieldset>

    <div class="form-group">
        <label for="edu_sit_current_interventions_initials">INTERVENÇÕES INICIAIS</label>
        <input type="text" class="form-control" id="edu_sit_current_interventions_initials" name="edu_sit_current_interventions_initials" value="{{isset($edu_sit_current->interventions_initials) ? $edu_sit_current->interventions_initials: null}}" readonly=“true”>
    </div>
    





    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {{-- <button type="submit" class="btn btn-primary">Salvar</button> --}}
            <a class="btn btn-link" href="{{route('edu_sit_current.edit', $edu_sit_current->id)}}">Editar</a>
            <a class="btn btn-secondary" href="{{route('pia.show', $edu_sit_current->kid_id)}}">Visualizar  PIA</a>
        </div>
    </div>
</fieldset>
@endsection
