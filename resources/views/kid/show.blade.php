@extends('layouts.base')
@section('content')
    {{--{{isset($kid->kid_name) ? $$kid->kid_name: null}}--}}

<fieldset readonly="true">
    <div class="form-group">
        <label for="iNome">Nome Completo:</label>
        <input type="text" class="form-control" id="iNome" name="kid_name" value="{{isset($kid->name) ? $kid->name:null}}"  readonly=“true”>
    </div>
    <div class="form-group">
        <label for="iSex">Sexo:</label>
        <input class="form-control" id="iSex" name="kid_sex" value="{{isset($kid->sex) ? $kid->sex: null}}" readonly=“true”>
    </div>
    <p> <label for="iDate">Nascimento: </label> <input type="date" id="iDate" name="kid_birthday" value="{{isset($kid->birthday) ? $kid->birthday:null}}" readonly=“true”></p>
    <fieldset>
        <div class="form-group" >
            <label for="kMother">Nome da Mãe:</label>
            <input type="text" class="form-control" id="kMother" name="kid_mother" value="{{isset($kid->mother_name) ? $kid->mother_name:null}}" readonly=“true”>
        </div>
        <div class="form-group">
            <label for="kFather">Nome do Pai:</label>
            <input type="text" class="form-control" id="kFather" name="kid_father" value="{{isset($kid->father_name) ? $kid->father_name:null}}" readonly=“true”>
        </div>
    </fieldset>

    <div class="form-group">
        <label for="iAdress">Endereço em que residia - Identificação do responsável (familiar/guardião/cuidador) local:</label>
        <input type="text" class="form-control" id="iAdress" name="kid_adress" value="{{isset($kid->last_adress) ? $kid->last_adress:null}}" readonly=“true”>
    </div>


    <div class="form-group">
        <label for="iNacio">Nacionalidade</label>
        <input type="text" class="form-control" id="iNacio" name="kid_nacionality" value="{{isset($kid->nacionality) ? $kid->nacionality: null}}" readonly=“true”>
    </div>

    <div class="form-group">
        <label for="iNatu">Naturalidade</label>
        <input type="text" class="form-control" id="iNatu" name="kid_naturalness" value="{{isset($kid->naturalness) ? $kid->naturalness: null}}" readonly=“true”>
    </div>


    <div class="form-group">
        <label for="iEtinia">Cor/Etnia:</label>
        <input class="form-control" id="iEtinia" name="kid_ethnicity" value="{{isset($kid->ethnicity) ? $kid->ethnicity: null}}" readonly=“true”>
    </div>

11    <div class="form-group">
        <label for="iReli">Religião</label>
        <input type="text" class="form-control" id="iReli" name="kid_religion" value="{{isset($kid->religion) ? $kid->religion: null}}" readonly=“true”>
    </div>

    <fieldset>
        <label>A criança tem deficiência?</label>
        <div class="custom-control custom-radio">
            <input type="radio" id="iNo" disabled="disabled"  {{ $kid->deficiency == 'iNo' ? 'checked' : '' }} class="custom-control-input" name="kid_deficiency">
            <label class="custom-control-label" for="iNo">Não</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="iYes" disabled="disabled" {{ $kid->deficiency == 'iYes' ? 'checked' : '' }} class="custom-control-input" name="kid_deficiency" >
            <label class="custom-control-label" for="iYes">Sim</label>
            <div class="form-group">
                <label for="kid_def_desc">Qual?</label>
                <input type="text" class="form-control" id="kid_def_desc"  name="kid_def_desc" value="{{isset($kid->deficiency_desc) ? $kid->deficiency_desc: null}}" readonly=“true”>
            </div>
        </div>
    </fieldset>

    <div class="form-group">
        <label for="iNecessity">Se tiver algum tipo de deficiência, a criança necessita de equipamentos/recursos de tecnologia assistiva?</label>
        <input type="text" class="form-control" id="iNecessity"  name="kid_necessity" value="{{isset($kid->special_necessity) ? $kid->special_necessity: null}}" readonly=“true”>
    </div>
    <div class="form-group">
  
    <div class="col-sm-offset-2 col-sm-10">
        {{-- <button type="submit" class="btn btn-primary">Salvar</button> --}}
        <a class="btn btn-link" href="{{route('kid.edit', $kid->id)}}">Editar</a>
        <a class="btn btn-secondary" href="{{route('pia.show', $kid->id)}}">Visualizar  PIA</a>
    </div>
</div>
</fieldset>
@endsection
