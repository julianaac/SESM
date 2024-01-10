@extends('layouts.base')
@section('content')
    {{--{{isset($evaluation->evaluation_name) ? $$evaluation->evaluation_name: null}}--}}

<fieldset readonly="true">
<div class="form-group">
    <label for="interesse">Qual o interesse manifesto e os compromissos assumidos por cada um dos membros da família para assumir/reassumir a guarda da criança?</label>
    <input type="text" class="form-control" id="interesse" name="evaluation_interest" value="{{isset($evaluation->interest) ? $evaluation->interest:null}}" readonly=“true”>
</div>


<fieldset>
        <label>Após intervenções da equipe técnica, ocorreram modificações na situação e/ou no relacionam  ento familiar que resultaram na superação da(s) causa(s) do acolhimento, justificando a retomada da guarda?</label>
        <div class="custom-control custom-radio">
            <input type="radio" id="iYes" disabled="disabled" {{ $evaluation->modifications == '1' ? 'checked' : '' }} class="custom-control-input" name="evaluation_modifications">
            <label class="custom-control-label" for="iYes">Sim</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="iNo" disabled="disabled" {{ $evaluation->modifications == '0' ? 'checked' : '' }} class="custom-control-input" name="evaluation_modifications" >
            <label class="custom-control-label" for="iNo">Não</label>
        </div>
</fieldset>
<div class="form-group">
    <label for="modificacoes">Quais modificações? </label>
    <input type="text" class="form-control" id="modificacoes" name="evaluation_modifications_wich" value="{{isset($evaluation->modifications_wich ) ? $evaluation->modifications_wich: null}}" readonly=“true”>
</div>

<div class="form-group">
    <label for="reinserir">Há indicativos da possibilidade imediata ou em curto/médio prazo da reinserção familiar da criança? Justifique.</label>
    <input type="text" class="form-control" id="reinserir" name="evaluation_reinsertion" value="{{isset($evaluation->reinsertion ) ? $evaluation->reinsertion: null}}" readonly=“true”>
</div>


<div class="form-group">
    <label for="avaliacao">Avaliação da Equipe:</label>
    <input type="text" class="form-control" id="avaliacao" name="evaluation_avaliation" value="{{isset($evaluation->avaliation ) ? $evaluation->avaliation: null}}" readonly=“true”>
</div>


<div class="form-group">
    <label for="metodologia">Metodologia utilizada para a avaliação:</label>
    <input type="text" class="form-control" id="metodologia" name="evaluation_methodology" value="{{isset($evaluation->methodology ) ? $evaluation->methodology: null}}" readonly=“true”>
</div>

<div class="form-group">
  
  <div class="col-sm-offset-2 col-sm-10">
      {{-- <button type="submit" class="btn btn-primary">Salvar</button> --}}
      <a class="btn btn-link" href="{{route('evaluation.edit', $evaluation->id)}}">Editar</a>
      <a class="btn btn-secondary" href="{{route('pia.show', $evaluation->kid_id)}}">Visualizar  PIA</a>
  </div>
</div>
</fieldset>
@endsection
