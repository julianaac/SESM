{{--{{isset($information_family->information_family_name) ? $$information_family->information_family_name: null}}--}}


<div class="form-group">
    <label for="iNome">Nome Completo:</label>
    <input type="text" class="form-control" id="iNome" name="information_family_name" value="{{isset($information_family->name) ? $information_family->name:null}}">
</div>
<div class="form-group">
    <label for="iSex">Sexo:</label>
    <select class="form-control" id="iSex" name="information_family_sex" value="{{isset($information_family->sex) ? $information_family->sex: null}}">
        <option>Selecione</option>
        <option>Masculino</option>
        <option>Feminino</option>
    </select>
</div>
<p> <label for="iDate">Nascimento: </label> <input type="date" id="iDate" name="information_family_birthday" value="{{isset($information_family->birthday) ? $information_family->birthday:null}}" ></p>
<fieldset>
    <div class="form-group" >
        <label for="kMother">Nome da Mãe:</label>
        <input type="text" class="form-control" id="kMother" name="information_family_mother" value="{{isset($information_family->mother_name) ? $information_family->mother_name:null}}">
    </div>
    <div class="form-group">
        <label for="kFather">Nome do Pai:</label>
        <input type="text" class="form-control" id="kFather" name="information_family_father" value="{{isset($information_family->father_name) ? $information_family->father_name:null}}">
    </div>
</fieldset>

<div class="form-group">
    <label for="iAdress">Endereço em que residia - Identificação do responsável (familiar/guardião/cuidador) local:</label>
    <input type="text" class="form-control" id="iAdress" name="information_family_adress" value="{{isset($information_family->last_adress) ? $information_family->last_adress:null}}" >
</div>


<div class="form-group">
    <label for="iNacio">Nacionalidade</label>
    <input type="text" class="form-control" id="iNacio" name="information_family_nacionality" value="{{isset($information_family->nacionality) ? $information_family->nacionality: null}}">
</div>

<div class="form-group">
    <label for="iNatu">Naturalidade</label>
    <input type="text" class="form-control" id="iNatu" name="information_family_naturalness" value="{{isset($information_family->naturalness) ? $information_family->naturalness: null}}">
</div>


<div class="form-group">
    <label for="iEtinia">Cor/Etnia:</label>
    <select class="form-control" id="iEtinia" name="information_family_ethnicity" value="{{isset($information_family->ethnicity) ? $information_family->ethnicity: null}}">
        <option>Pardo</option>
        <option>Preto</option>
        <option>Branco</option>
        <option>Indigena</option>
    </select>
</div>

<div class="form-group">
    <label for="iReli">Religião</label>
    <input type="text" class="form-control" id="iReli" name="information_family_religion" value="{{isset($information_family->religion) ? $information_family->religion: null}}">
</div>

<fieldset>
    <label>A criança tem deficiência?</label>
    <div class="custom-control custom-radio">
        <input type="radio" id="iNo" class="custom-control-input" value="iNo" name="information_family_deficiency">
        <label class="custom-control-label" for="iNo">Não</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="iYes"class="custom-control-input" value="iYes" name="information_family_deficiency" >
        <label class="custom-control-label" for="iYes">Sim</label>
        <div class="form-group">
            <label for="information_family_def_desc">Qual?</label>
            <input type="text" class="form-control" id="information_family_def_desc" placeholder="Descreva a deficiência" name="information_family_def_desc" value="{{isset($information_family->deficiency_desc) ? $information_family->deficiency_desc: null}}">
        </div>
    </div>
</fieldset>

<div class="form-group">
    <label for="iNecessity">Se tiver algum tipo de deficiência, a criança necessita de equipamentos/recursos de tecnologia assistiva?</label>
    <input type="text" class="form-control" id="iNecessity" placeholder="Descreva a situação" name="information_family_necessity" value="{{isset($information_family->special_necessity) ? $information_family->special_necessity: null}}">
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
