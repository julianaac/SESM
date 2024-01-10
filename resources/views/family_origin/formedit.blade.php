{{--{{isset($family_origin->family_origin_name) ? $$family_origin->family_origin_name: null}}--}}
<div class="form-group">
    <label for="family_origin_mother">Sobre a mãe:</label>
</div>
<div class="form-group">
    <label for="family_origin_mother_name">Nome:</label>
    <input type="text" class="form-control" id="family_origin_mother_name" name="family_origin_mother_name" value="{{isset($family_origin->mother_name) ? $family_origin->mother_name: null}}">
</div>
<div class="form-group">
    <label for="family_origin_mother_age">Idade:</label>
    <input type="text" class="form-control" id="family_origin_mother_age" name="family_origin_mother_age" value="{{isset($family_origin->mother_age) ? $family_origin->mother_age: null}}">
</div>
<div class="form-group">
    <label for="family_origin_mother_address">Endereço:</label>
    <input type="text" class="form-control" id="family_origin_mother_address" name="family_origin_mother_address" value="{{isset($family_origin->mother_address) ? $family_origin->mother_address: null}}">
</div>
<div class="form-group">
    <label for="family_origin_mother_phone">Telefone</label>
    <input type="text" class="form-control" id="family_origin_mother_phone" name="family_origin_mother_phone" value="{{isset($family_origin->mother_phone) ? $family_origin->mother_phone: null}}">
</div>
<div class="form-group">
    <label for="family_origin_mother_documente">Documentos pessoais:</label>
</div>
<div class="form-group">
    <label for="family_origin_mother_cpf">CPF:</label>
    <input type="text" class="form-control" id="family_origin_mother_cpf" name="family_origin_mother_cpf" value="{{isset($family_origin->mother_cpf) ? $family_origin->mother_cpf: null}}">
</div>
<div class="form-group">
    <label for="family_origin_mother_rg">RG:</label>
    <input type="text" class="form-control" id="family_origin_mother_rg" name="family_origin_mother_rg" value="{{isset($family_origin->mother_rg) ? $family_origin->mother_rg: null}}">
</div>
<div class="form-group">
    <label for="family_origin_mother_occupation">Ocupação</label>
    <input type="text" class="form-control" id="family_origin_mother_occupation" name="family_origin_mother_occupation" value="{{isset($family_origin->mother_occupation) ? $family_origin->mother_occupation: null}}">
</div>
<div class="form-group">
    <label for="family_origin_mother_situation">Situações específicas:</label>
    <select class="form-control" id="family_origin_mother_situation" name="family_origin_mother_situation" value="{{isset($family_origin->mother_situation) ? $family_origin->mother_situation: null}}">
        <option>Selecione</option>
        <option>mãe falecida</option>
        <option>mãe reclusa no sistema prisional</option>
        <option>mãe não localizada</option>
        <option>mãe desconhecida</option>
        <option>sem vínculo com a mãe</option>
    </select>
</div>

<div class="form-group">
    <label for="family_origin_dad">Sobre a pai:</label>
</div>
<div class="form-group">
    <label for="family_origin_dad_name">Nome:</label>
    <input type="text" class="form-control" id="family_origin_dad_name" name="family_origin_dad_name" value="{{isset($family_origin->dad_name) ? $family_origin->dad_name: null}}">
</div>
<div class="form-group">
    <label for="family_origin_dad_age">Idade:</label>
    <input type="text" class="form-control" id="family_origin_dad_age" name="family_origin_dad_age" value="{{isset($family_origin->dad_age) ? $family_origin->dad_age: null}}">
</div>
<div class="form-group">
    <label for="family_origin_dad_address">Endereço:</label>
    <input type="text" class="form-control" id="family_origin_dad_address" name="family_origin_dad_address" value="{{isset($family_origin->dad_address) ? $family_origin->dad_address: null}}">
</div>
<div class="form-group">
    <label for="family_origin_dad_phone">Telefone:</label>
    <input type="text" class="form-control" id="family_origin_dad_phone" name="family_origin_dad_phone" value="{{isset($family_origin->dad_phone) ? $family_origin->dad_phone: null}}">
</div>
<div class="form-group">
    <label for="family_origin_dad_documente">Documentos pessoais:</label>
</div>
<div class="form-group">
    <label for="family_origin_dad_cpf">CPF:</label>
    <input type="text" class="form-control" id="family_origin_dad_cpf" name="family_origin_dad_cpf" value="{{isset($family_origin->dad_cpf) ? $family_origin->dad_cpf: null}}">
</div>
<div class="form-group">
    <label for="family_origin_dad_rg">RG:</label>
    <input type="text" class="form-control" id="family_origin_dad_rg" name="family_origin_dad_rg" value="{{isset($family_origin->dad_rg) ? $family_origin->dad_rg: null}}">
</div>
<div class="form-group">
    <label for="family_origin_dad_occupation">Ocupação</label>
    <input type="text" class="form-control" id="family_origin_dad_occupation" name="family_origin_dad_occupation" value="{{isset($family_origin->dad_occupation) ? $family_origin->dad_occupation: null}}">
</div>
<div class="form-group">
    <label for="family_origin_dad_situation">Situações específicas:</label>
    <select class="form-control" id="family_origin_dad_situation" name="family_origin_dad_situation" value="{{isset($family_origin->dad_situation) ? $family_origin->dad_situation: null}}">
        <option>Selecione</option>
        <option>pai falecido</option>
        <option>pai recluso no sistema prisional</option>
        <option>pai não localizado</option>
        <option>pai desconhecido</option>
        <option>sem vínculo com o pai</option>
    </select>
</div>

<div class="form-group">
    <label for="family_origin_resposible">Sobre a pessoa responsável (pessoa de referência com quem a criança morava, no caso de não residir com os pais):</label>
</div>
<div class="form-group">
    <label for="family_origin_responsible_bond">Vínculo / Grau de parentesco:</label>
    <input type="text" class="form-control" id="family_origin_responsible_bond" name="family_origin_responsible_bond" value="{{isset($family_origin->responsible_bond) ? $family_origin->responsible_bond: null}}">
</div>
<div class="form-group">
    <label for="family_origin_responsible_name">Nome:</label>
    <input type="text" class="form-control" id="family_origin_responsible_name" name="family_origin_responsible_name" value="{{isset($family_origin->responsible_name) ? $family_origin->responsible_name: null}}">
</div>
<div class="form-group">
    <label for="family_origin_responsible_age">Idade</label>
    <input type="text" class="form-control" id="family_origin_responsible_age" name="family_origin_responsible_age" value="{{isset($family_origin->responsible_age) ? $family_origin->responsible_age: null}}">
</div>
<div class="form-group">
    <label for="family_origin_responsible_address">Endereço:</label>
    <input type="text" class="form-control" id="family_origin_responsible_address" name="family_origin_responsible_address" value="{{isset($family_origin->responsible_address) ? $family_origin->responsible_address: null}}">
</div>
<div class="form-group">
    <label for="family_origin_responsible_phone">Telefone:</label>
    <input type="text" class="form-control" id="family_origin_responsible_phone" name="family_origin_responsible_phone" value="{{isset($family_origin->responsible_phone) ? $family_origin->responsible_phone: null}}">
</div>
<div class="form-group">
    <label for="family_origin_responsible_cpf">CPF</label>
    <input type="text" class="form-control" id="family_origin_responsible_cpf" name="family_origin_responsible_cpf" value="{{isset($family_origin->responsible_cpf) ? $family_origin->responsible_cpf: null}}">
</div>
<div class="form-group">
    <label for="family_origin_responsible_rg">RG:</label>
    <input type="text" class="form-control" id="family_origin_responsible_rg" name="family_origin_responsible_rg" value="{{isset($family_origin->responsible_rg) ? $family_origin->responsible_rg: null}}">
</div>
<div class="form-group">
    <label for="family_origin_responsible_occupation">Nacionalidade</label>
    <input type="text" class="form-control" id="family_origin_responsible_occupation" name="family_origin_responsible_occupation" value="{{isset($family_origin->responsible_occupation) ? $family_origin->responsible_occupation: null}}">
</div>
<fieldset>
    <label>Os pais/responsáveis ou familiares oferecem as condições de cuidado e proteção necessárias para o retorno ao convívio com a criança?</label>
    <div class="custom-control custom-radio">
        <input type="radio" id="iYes"class="custom-control-input" value="iYes" {{ $family_origin->conditions == 'iYes' ? 'checked' : '' }}  name="family_origin_conditions" >
        <label class="custom-control-label" for="iYes">Sim</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="iNo" class="custom-control-input" value="iNo"  {{ $family_origin->conditions == 'iNo' ? 'checked' : '' }}  name="family_origin_conditions">
        <label class="custom-control-label" for="iNo">Não</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="iNo" class="custom-control-input" value="ievaluation"  {{ $family_origin->conditions == 'ievaluation' ? 'checked' : '' }}  name="family_origin_conditions">
        <label class="custom-control-label" for="ievaluation">Faz-se necessária um avaliação aprofundada</label>
    </div>
    
</fieldset>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
