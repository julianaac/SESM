@extends('layouts.base')
@section('content')
    {{--{{isset($family_origin->family_origin_name) ? $$family_origin->family_origin_name: null}}--}}

<fieldset readonly="true">
    <div class="form-group">
        <label for="family_origin_mother">Sobre a mãe:</label>
    </div>
    <div class="form-group">
        <label for="family_origin_mother_name">Nome:</label>
        <input type="text" class="form-control" id="family_origin_mother_name" name="family_origin_mother_name" value="{{isset($family_origin->mother_name) ? $family_origin->mother_name: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_mother_age">Idade:</label>
        <input type="text" class="form-control" id="family_origin_mother_age" name="family_origin_mother_age" value="{{isset($family_origin->mother_age) ? $family_origin->mother_age: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_mother_address">Endereço:</label>
        <input type="text" class="form-control" id="family_origin_mother_address" name="family_origin_mother_address" value="{{isset($family_origin->mother_address) ? $family_origin->mother_address: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_mother_phone">Telefone</label>
        <input type="text" class="form-control" id="family_origin_mother_phone" name="family_origin_mother_phone" value="{{isset($family_origin->mother_phone) ? $family_origin->mother_phone: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_mother_documente">Documentos pessoais:</label>
    </div>
    <div class="form-group">
        <label for="family_origin_mother_cpf">CPF:</label>
        <input type="text" class="form-control" id="family_origin_mother_cpf" name="family_origin_mother_cpf" value="{{isset($family_origin->mother_cpf) ? $family_origin->mother_cpf: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_mother_rg">RG:</label>
        <input type="text" class="form-control" id="family_origin_mother_rg" name="family_origin_mother_rg" value="{{isset($family_origin->mother_rg) ? $family_origin->mother_rg: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_mother_occupation">Ocupação</label>
        <input type="text" class="form-control" id="family_origin_mother_occupation" name="family_origin_mother_occupation" value="{{isset($family_origin->mother_occupation) ? $family_origin->mother_occupation: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_mother_situation">Situações específicas:</label>
        <input type="text" class="form-control" id="family_origin_mother_situation" name="family_origin_mother_situation" value="{{isset($family_origin->mother_situation) ? $family_origin->mother_situation: null}}" readonly="true">
    </div>
    
    <div class="form-group">
        <label for="family_origin_dad">Sobre a pai:</label>
    </div>
    <div class="form-group">
        <label for="family_origin_dad_name">Nome:</label>
        <input type="text" class="form-control" id="family_origin_dad_name" name="family_origin_dad_name" value="{{isset($family_origin->dad_name) ? $family_origin->dad_name: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_dad_age">Idade:</label>
        <input type="text" class="form-control" id="family_origin_dad_age" name="family_origin_dad_age" value="{{isset($family_origin->dad_age) ? $family_origin->dad_age: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_dad_address">Endereço:</label>
        <input type="text" class="form-control" id="family_origin_dad_address" name="family_origin_dad_address" value="{{isset($family_origin->dad_address) ? $family_origin->dad_address: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_dad_phone">Telefone:</label>
        <input type="text" class="form-control" id="family_origin_dad_phone" name="family_origin_dad_phone" value="{{isset($family_origin->dad_phone) ? $family_origin->dad_phone: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_dad_documente">Documentos pessoais:</label>
    </div>
    <div class="form-group">
        <label for="family_origin_dad_cpf">CPF:</label>
        <input type="text" class="form-control" id="family_origin_dad_cpf" name="family_origin_dad_cpf" value="{{isset($family_origin->dad_cpf) ? $family_origin->dad_cpf: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_dad_rg">RG:</label>
        <input type="text" class="form-control" id="family_origin_dad_rg" name="family_origin_dad_rg" value="{{isset($family_origin->dad_rg) ? $family_origin->dad_rg: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_dad_occupation">Ocupação</label>
        <input type="text" class="form-control" id="family_origin_dad_occupation" name="family_origin_dad_occupation" value="{{isset($family_origin->dad_occupation) ? $family_origin->dad_occupation: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_dad_situation">Situações específicas:</label>
        <input type="text" class="form-control" id="family_origin_dad_situation" name="family_origin_dad_situation" value="{{isset($family_origin->dad_situation) ? $family_origin->dad_situation: null}}" readonly="true">
    </div>

    <div class="form-group">
        <label for="family_origin_resposible">Sobre a pessoa responsável (pessoa de referência com quem a criança morava, no caso de não residir com os pais):</label>
    </div>
    <div class="form-group">
        <label for="family_origin_responsible_bond">Vínculo / Grau de parentesco:</label>
        <input type="text" class="form-control" id="family_origin_responsible_bond" name="family_origin_responsible_bond" value="{{isset($family_origin->responsible_bond) ? $family_origin->responsible_bond: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_responsible_name">Nome:</label>
        <input type="text" class="form-control" id="family_origin_responsible_name" name="family_origin_responsible_name" value="{{isset($family_origin->responsible_name) ? $family_origin->responsible_name: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_responsible_age">Idade</label>
        <input type="text" class="form-control" id="family_origin_responsible_age" name="family_origin_responsible_age" value="{{isset($family_origin->responsible_age) ? $family_origin->responsible_age: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_responsible_address">Endereço:</label>
        <input type="text" class="form-control" id="family_origin_responsible_address" name="family_origin_responsible_address" value="{{isset($family_origin->responsible_address) ? $family_origin->responsible_address: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_responsible_phone">Telefone:</label>
        <input type="text" class="form-control" id="family_origin_responsible_phone" name="family_origin_responsible_phone" value="{{isset($family_origin->responsible_phone) ? $family_origin->responsible_phone: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_responsible_cpf">CPF</label>
        <input type="text" class="form-control" id="family_origin_responsible_cpf" name="family_origin_responsible_cpf" value="{{isset($family_origin->responsible_cpf) ? $family_origin->responsible_cpf: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_responsible_rg">RG:</label>
        <input type="text" class="form-control" id="family_origin_responsible_rg" name="family_origin_responsible_rg" value="{{isset($family_origin->responsible_rg) ? $family_origin->responsible_rg: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="family_origin_responsible_occupation">Nacionalidade</label>
        <input type="text" class="form-control" id="family_origin_responsible_occupation" name="family_origin_responsible_occupation" value="{{isset($family_origin->responsible_occupation) ? $family_origin->responsible_occupation: null}}" readonly="true">
    </div>
    <fieldset>
        <label>Os pais/responsáveis ou familiares oferecem as condições de cuidado e proteção necessárias para o retorno ao convívio com a criança?</label>
        <div class="custom-control custom-radio">
            <input type="radio" id="iYes"class="custom-control-input" value="iYes" disabled="disabled" {{ $family_origin->conditions == 'iYes' ? 'checked' : '' }}  name="family_origin_conditions" >
            <label class="custom-control-label" for="iYes">Sim</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="iNo" class="custom-control-input" value="iNo" disabled="disabled" {{ $family_origin->conditions == 'iNo' ? 'checked' : '' }}  name="family_origin_conditions">
            <label class="custom-control-label" for="iNo">Não</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="iNo" class="custom-control-input" value="ievaluation" disabled="disabled" {{ $family_origin->conditions == 'ievaluation' ? 'checked' : '' }}  name="family_origin_conditions">
            <label class="custom-control-label" for="ievaluation">Faz-se necessária um avaliação aprofundada</label>
        </div>
        
    </fieldset>
    <div class="form-group">
  
    <div class="col-sm-offset-2 col-sm-10">
        {{-- <button type="submit" class="btn btn-primary">Salvar</button> --}}
        <a class="btn btn-link" href="{{route('family_origin.edit', $family_origin->id)}}">Editar</a>
        <a class="btn btn-secondary" href="{{route('pia.show', $family_origin->kid_id)}}">Visualizar  PIA</a>
    </div>
</div>
</fieldset>
@endsection
