{{--{{isset($edu_sit_previou->edu_sit_previou_name) ? $$edu_sit_previou->edu_sit_previou_name: null}}--}}

<fieldset>
    <label>Criança em idade escolar?</label>
    <div class="custom-control custom-radio">
        <input type="radio" id="iYes"class="custom-control-input" value="1" name="edu_sit_previou_age_school" >
        <label class="custom-control-label" for="iYes">Sim</label>
        <fieldset>
            <label>A criança estava frequentando a escola?</label>
            <div class="custom-control custom-radio">
                <input type="radio" id="iYes2"class="custom-control-input" value="1" name="edu_sit_previou_frequent_school" >
                <label class="custom-control-label" for="iYes2">Sim</label>
                <div class="form-group">
                    <label for="edu_sit_previou_school">Escola</label>
                    <input type="text" class="form-control" id="edu_sit_previou_school" name="edu_sit_previou_school" value="{{isset($edu_sit_previou->school) ? $edu_sit_previou->school: null}}">
                </div>
                <div class="form-group">
                    <label for="edu_sit_previou_grade">Serie</label>
                    <input type="text" class="form-control" id="edu_sit_previou_grade" name="edu_sit_previou_grade" value="{{isset($edu_sit_previou->grade) ? $edu_sit_previou->grade: null}}">
                </div>
                <div class="form-group">
                    <label for="edu_sit_previou_shift">Turno</label>
                    <input type="text" class="form-control" id="edu_sit_previou_shift" name="edu_sit_previou_shift" value="{{isset($edu_sit_previou->shift) ? $edu_sit_previou->shift: null}}">
                </div>
                <div class="form-group">
                    <label for="edu_sit_previou_life_school">Em relação à vida escolar da criança, descreva: frequência / socialização / interesse nas atividades escolares / rendimento escolar / participação da família na escola.</label>
                    <input type="text" class="form-control" id="edu_sit_previou_life_school" name="edu_sit_previou_life_school" value="{{isset($edu_sit_previou->life_school) ? $edu_sit_previou->life_school: null}}">
                </div>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="iNo2" class="custom-control-input" value="0" name="edu_sit_previou_frequent_school">
                <label class="custom-control-label" for="iNo2">Não</label>
                <div class="form-group">
                    <label for="edu_sit_previou_justification">Justifique</label>
                    <input type="text" class="form-control" id="edu_sit_previou_justification" name="edu_sit_previou_justification" value="{{isset($edu_sit_previou->justification) ? $edu_sit_previou->justification: null}}">
                </div>
            </div>
        </fieldset>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="iNo" class="custom-control-input" value="0" name="edu_sit_previou_age_school">
        <label class="custom-control-label" for="iNo">Não</label>
    </div>
</fieldset>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
