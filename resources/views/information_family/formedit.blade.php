{{--{{isset($information_family->information_family_name) ? $$information_family->information_family_name: null}}--}}

<div class="form-group">
    <label for="information_family_situation_family">Situação familiar da criança:</label>
    <select class="form-control" id="information_family_situation_family" name="information_family_situation_family" value="{{isset($information_family->situation_family) ? $information_family->situation_family: null}}">
        <option>Selecione</option>
        <option>com vínculo</option>
        <option>sem  vínculo</option>
        <option>família desaparecida</option>
        <option>órfão</option>
        <option>destituído do poder familiar</option>
        <option>com impedimento judicial de contato</option>
        <option>sem informação</option>
        <option>outra situação.</option>
    </select>
</div>
<div class="form-group" >
    <label for="information_family_situation_family_which">Qual?</label>
    <input type="text" class="form-control" id="information_family_situation_family_which" name="information_family_situation_family_which" value="{{isset($information_family->situation_family_which) ? $information_family->situation_family_which:null}}">
</div>

<div class="form-group">
    <label for="information_family_opinion_family">Qual a opinião dos familiares em relação à situação de acolhimento da criança?</label>
    <input type="text" class="form-control" id="information_family_opinion_family" name="information_family_opinion_family" value="{{isset($information_family->opinion_family) ? $information_family->opinion_family: null}}">
</div>


<fieldset>
    <label>Demonstram interesse no retorno da criança ao convívio familiar?</label>
    <div class="custom-control custom-radio">
        <input type="radio" id="iYes"class="custom-control-input" value="1" {{ $information_family->interest_family == '1' ? 'checked' : '' }}  name="information_family_interest_family" >
        <label class="custom-control-label" for="iYes">Sim</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="iNo" class="custom-control-input" value="0"  {{ $information_family->interest_family == '0' ? 'checked' : '' }}  name="information_family_interest_family">
        <label class="custom-control-label" for="iNo">Não</label>
        <div class="form-group">
            <label for="information_family_motives_family">Em caso negativo, por quais motivos?</label>
            <input type="text" class="form-control" id="information_family_motives_family" name="information_family_motives_family" value="{{isset($information_family->motives_family) ? $information_family->motives_family: null}}">
        </div>
    </div>
</fieldset>



<div class="form-group">
    <label for="information_family_opinion_kid">Qual a opinião da criança em relação à situação de acolhimento?</label>
    <input type="text" class="form-control" id="information_family_opinion_kid" name="information_family_opinion_kid" value="{{isset($information_family->opinion_kid) ? $information_family->opinion_kid: null}}">
</div>

<fieldset>
    <label>Demonstra vontade de retornar ao convívio familiar?</label>
    <div class="custom-control custom-radio">
        <input type="radio" id="iYes2"class="custom-control-input" value="1" {{ $information_family->interest_kid == '1' ? 'checked' : '' }}  name="information_family_interest_kid" >
        <label class="custom-control-label" for="iYes2">Sim</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="iNo2" class="custom-control-input" value="0"  {{ $information_family->interest_kid == '0' ? 'checked' : '' }}  name="information_family_interest_kid">
        <label class="custom-control-label" for="iNo2">Não</label>
        <div class="form-group">
            <label for="information_family_motives_kid">Em caso negativo, por quais motivos?</label>
            <input type="text" class="form-control" id="information_family_motives_kid" name="information_family_motives_kid" value="{{isset($information_family->motives_kid) ? $information_family->motives_kid: null}}">
        </div>
    </div>
</fieldset>


<fieldset>
    <label>Existe alguma medida de restrição de contato à criança / proibição de visitas?</label>
    <div class="custom-control custom-radio">
        <input type="radio" id="iYes3"class="custom-control-input" value="1" {{ $information_family->restriction_contact == '1' ? 'checked' : '' }}  name="information_family_restriction_contact" >
        <label class="custom-control-label" for="iYes3">Sim</label>
        <div class="form-group">
            <label for="information_family_who_impediment">Em caso positivo, quem estabeleceu o impedimento?</label>
            <input type="text" class="form-control" id="information_family_who_impediment" name="information_family_who_impediment" value="{{isset($information_family->who_impediment) ? $information_family->who_impediment: null}}">
        </div>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="iNo3" class="custom-control-input" value="0"  {{ $information_family->restriction_contact == '0' ? 'checked' : '' }}  name="information_family_restriction_contact">
        <label class="custom-control-label" for="iNo3">Não</label>
    </div>
</fieldset>

<div class="form-group">
    <label for="information_family_who_hindered">Quem está impedido?</label>
    <input type="text" class="form-control" id="information_family_who_hindered" name="information_family_who_hindered" value="{{isset($information_family->who_hindered) ? $information_family->who_hindered: null}}">
</div>
<div class="form-group">
    <label for="information_family_descript">Há indícios de que os pais/responsáveis ou familiares estejam envolvidos com:</label>

<div class="form-check">
    <input class="form-check-input" type="checkbox" value="1" {{ $information_family->information_family_alcohol == '1' ? 'checked' : '' }} id="information_family_information_family_alcohol" name="information_family_information_family_alcohol">
    <label class="form-check-label" for="information_family_information_family_alcohol">
        uso abusivo de álcool.
    </label>
    <div class="form-group">
        <label for="information_family_alcohol_who">Quem?</label>
        <input type="text" class="form-control" id="information_family_alcohol_who" name="information_family_alcohol_who" value="{{isset($information_family->alcohol_who) ? $information_family->alcohol_who: null}}">
    </div>
    
</div>

<div class="form-check">
    <input class="form-check-input" type="checkbox" value="1" {{ $information_family->drugs == '1' ? 'checked' : '' }} id="information_family_drugs" name="information_family_drugs">
    <label class="form-check-label" for="information_family_drugs">
        uso abusivo de outra(s) droga(s)?
    </label>

    <div class="form-group">
        <label for="information_family_drugs_which">Qual?</label>
        <input type="text" class="form-control" id="information_family_drugs_which" name="information_family_drugs_which" value="{{isset($information_family->drugs_which) ? $information_family->drugs_which: null}}">
    </div>
    <div class="form-group">
        <label for="information_family_drugs_who">Quem?</label>
        <input type="text" class="form-control" id="information_family_drugs_who" name="information_family_drugs_who" value="{{isset($information_family->drugs_who) ? $information_family->drugs_who: null}}">
    </div>    
    
</div>


<div class="form-check">
    <input class="form-check-input" type="checkbox" value="1" {{ $information_family->abuse == '1' ? 'checked' : '' }} id="information_family_abuse" name="information_family_abuse">
    <label class="form-check-label" for="information_family_abuse">
        abuso/exploração sexual.
    </label>
    <div class="form-group">
        <label for="information_family_abuse_who">Quem?</label>
        <input type="text" class="form-control" id="information_family_abuse_who" name="information_family_abuse_who" value="{{isset($information_family->abuse_who) ? $information_family->abuse_who: null}}">
    </div>
    
</div>

</div>
<div class="form-group">
    <label for="information_family_descript2">Os pais/responsáveis ou familiares enquadram-se na(s) categoria(s) abaixo:</label>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" {{ $information_family->street == '1' ? 'checked' : '' }} id="information_family_street" name="information_family_street">
        <label class="form-check-label" for="information_family_street">
            em situação de rua.
        </label>
        <div class="form-group">
            <label for="information_family_street_who">Quem?</label>
            <input type="text" class="form-control" id="information_family_street_who" name="information_family_street_who" value="{{isset($information_family->street_who) ? $information_family->street_who: null}}">
        </div>
        
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" {{ $information_family->system_prison == '1' ? 'checked' : '' }} id="information_family_system_prison" name="information_family_system_prison">
        <label class="form-check-label" for="information_family_system_prison">
            em cumprimento de pena no sistema prisional.
        </label>

        <div class="form-group">
            <label for="information_family_system_prison_who">Quem?</label>
            <input type="text" class="form-control" id="information_family_system_prison_who" name="information_family_system_prison_who" value="{{isset($information_family->system_prison_who) ? $information_family->system_prison_who: null}}">
        </div>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" {{ $information_family->disorder_mental == '1' ? 'checked' : '' }} id="information_family_disorder_mental" name="information_family_disorder_mental">
        <label class="form-check-label" for="information_family_disorder_mental">
            com transtorno mental. 
        </label>
        <div class="form-group">
            <label for="information_family_disorder_mental_which">Qual?</label>
            <input type="text" class="form-control" id="information_family_disorder_mental_which" name="information_family_disorder_mental_which" value="{{isset($information_family->disorder_mental_which) ? $information_family->disorder_mental_which: null}}">
        </div>
        
        <div class="form-group">
            <label for="information_family_disorder_mental_who">Quem?</label>
            <input type="text" class="form-control" id="information_family_disorder_mental_who" name="information_family_disorder_mental_who" value="{{isset($information_family->disorder_mental_who) ? $information_family->disorder_mental_who: null}}">
        </div>
        
    </div>


    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" {{ $information_family->disease_serious == '1' ? 'checked' : '' }} id="information_family_disease_serious" name="information_family_disease_serious">
        <label class="form-check-label" for="information_family_disease_serious">
            com doença grave/degenerativa.
        </label>
        <div class="form-group">
            <label for="information_family_disease_serious_which">Qual?</label>
            <input type="text" class="form-control" id="information_family_disease_serious_which" name="information_family_disease_serious_which" value="{{isset($information_family->disease_serious_which) ? $information_family->disease_serious_which: null}}">
        </div>
        
        <div class="form-group">
            <label for="information_family_disease_serious_who">Quem?</label>
            <input type="text" class="form-control" id="information_family_disease_serious_who" name="information_family_disease_serious_who" value="{{isset($information_family->disease_serious_who) ? $information_family->disease_serious_who: null}}">
        </div>
        
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" {{ $information_family->rehabilitation == '1' ? 'checked' : '' }} id="information_family_rehabilitation" name="information_family_rehabilitation">
        <label class="form-check-label" for="information_family_rehabilitation">
            em processo de reabilitação. 
        </label>
        <div class="form-group">
            <label for="information_family_rehabilitation_who">Quem?</label>
            <input type="text" class="form-control" id="information_family_rehabilitation_who" name="information_family_rehabilitation_who" value="{{isset($information_family->rehabilitation_who) ? $information_family->rehabilitation_who: null}}">
        </div>  
        
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" {{ $information_family->threat_death == '1' ? 'checked' : '' }} id="information_family_threat_death" name="information_family_threat_death">
        <label class="form-check-label" for="information_family_threat_death">
            em situação de ameaça de morte.
        </label>
        <div class="form-group">
            <label for="information_family_threat_death_who">Quem?</label>
            <input type="text" class="form-control" id="information_family_threat_death_who" name="information_family_threat_death_who" value="{{isset($information_family->threat_death_who) ? $information_family->threat_death_who: null}}">
        </div>
        
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" {{ $information_family->none == '1' ? 'checked' : '' }} id="information_family_none" name="information_family_none">
        <label class="form-check-label" for="information_family_none">
            Nenhuma das categorias citadas.
        </label>
        
        
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
