{{--{{isset($family_extended->family_extended_name) ? $$family_extended->family_extended_name: null}}--}}


{{-- <div class="form-group">
    <label for="iNome">Nome Completo:</label>
    <input type="text" class="form-control" id="iNome" name="family_extended_name" value="{{isset($family_extended->name) ? $family_extended->name:null}}">
</div> --}}

<fieldset>
    <label>Dentre os parentes identificados, há interessado(s) em acolher a criança?</label>
    <div class="custom-control custom-radio">
        <input type="radio" id="iYes"class="custom-control-input" value="1" {{ $family_extended->interested_hosting == '1' ? 'checked' : '' }}  name="family_extended_interested_hosting" >
        <label class="custom-control-label" for="iYes">Sim</label>
        <div class="form-group">
            <label for="family_extended_who_interested">Quem?</label>
            <input type="text" class="form-control" id="family_extended_who_interested" placeholder="Insira os estudos e relatorios" name="family_extended_who_interested" value="{{isset($family_extended->who_interested) ? $family_extended->who_interested: null}}">
        </div>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="iNo" class="custom-control-input" value="0"  {{ $family_extended->interested_hosting == '0' ? 'checked' : '' }}  name="family_extended_interested_hosting">
        <label class="custom-control-label" for="iNo">Não</label>
    </div>
</fieldset>
<fieldset>
    <label>O(s) parente(s) interessado(s) oferece(m) as condições de cuidado e proteção necessárias para o retorno ao convívio com a criança?</label>
    <div class="custom-control custom-radio">
        <input type="radio" id="SIM" value="SIM" {{ $family_extended->conditions_care == 'SIM' ? 'checked' : '' }} class="custom-control-input" name="family_extended_conditions_care" >
        <label class="custom-control-label" for="SIM" >Sim</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="NAO" value="NAO" {{ $family_extended->conditions_care == 'NAO' ? 'checked' : '' }} class="custom-control-input" name="family_extended_conditions_care">
        <label class="custom-control-label" for="NAO">Não</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="AVA" value="AVA" {{ $family_extended->conditions_care == 'AVA' ? 'checked' : '' }} class="custom-control-input" name="family_extended_conditions_care">
        <label class="custom-control-label" for="AVA">Faz-se necessária um avaliação aprofundada</label>
    </div>
</fieldset>
<div class="form-group">
    <label for="family_extended_opinion_kid">Qual a opinião da criança quanto à possibilidade de ficar sob os cuidados desse(s) parente(s)?</label>
    <input type="text" class="form-control" id="family_extended_opinion_kid" placeholder="Insira os documentos" name="family_extended_opinion_kid" value="{{isset($family_extended->opinion_kid) ? $family_extended->opinion_kid: null}}">
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
