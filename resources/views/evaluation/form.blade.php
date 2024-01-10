{{--{{isset($evaluation->evaluation_name) ? $$evaluation->evaluation_name: null}}--}}


<div class="form-group">
    <label for="interesse">Qual o interesse manifesto e os compromissos assumidos por cada um dos membros da família para assumir/reassumir a guarda da criança?</label>
    <input type="text" class="form-control" id="interesse" name="evaluation_interest" value="{{isset($evaluation->interest) ? $evaluation->interest:null}}">
</div>


<fieldset>
    <label>Após intervenções da equipe técnica, ocorreram modificações na situação e/ou no relacionam  ento familiar que resultaram na superação da(s) causa(s) do acolhimento, justificando a retomada da guarda?</label>
    <div class="custom-control custom-radio">
            <input type="radio" id="iYes"class="custom-control-input" value="1" {{ $evaluation->modifications == '1' ? 'checked' : '' }} name="evaluation_modifications" >
            <label class="custom-control-label" for="iYes">Sim</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="iNo" class="custom-control-input" value="0" {{ $evaluation->modifications == '0' ? 'checked' : '' }} name="evaluation_modifications">
        <label class="custom-control-label" for="iNo">Não</label>
    </div>
</fieldset>



<div class="form-group">
    <label for="modificacoes">Quais modificações? </label>
    <input type="text" class="form-control" id="modificacoes" name="evaluation_modifications_wich" value="{{isset($evaluation->modifications_wich ) ? $evaluation->modifications_wich: null}}">
</div>

<div class="form-group">
    <label for="reinserir">Há indicativos da possibilidade imediata ou em curto/médio prazo da reinserção familiar da criança? Justifique.</label>
    <input type="text" class="form-control" id="reinserir" name="evaluation_reinsertion" value="{{isset($evaluation->reinsertion ) ? $evaluation->reinsertion: null}}">
</div>


<div class="form-group">
    <label for="avaliacao">Avaliação da Equipe:</label>
    <input type="text" class="form-control" id="avaliacao" name="evaluation_avaliation" value="{{isset($evaluation->avaliation ) ? $evaluation->avaliation: null}}">
</div>


<div class="form-group">
    <label for="metodologia">Metodologia utilizada para a avaliação:</label>
    <input type="text" class="form-control" id="metodologia" name="evaluation_methodology" value="{{isset($evaluation->methodology ) ? $evaluation->methodology: null}}">
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>