{{--{{isset($kid->kid_name) ? $$kid->kid_name: null}}--}}


<div class="form-group">
    <label for="iIdadeEscolar">Criança em idade escolar?</label>

    <div class="custom-control custom-radio">
        <input type="radio" id="iYes2" value="1" class="custom-control-input" name="edu_sit_previou_age_school" >
        <label class="custom-control-label" for="iYes2">Sim</label>
        <div class="form-group">
            <label for="iIdadeEscolar">A criança estava frequentando a escola? </label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="iYes" value="1" class="custom-control-input" name="edu_sit_previou_frequent_school" >
                    <label class="custom-control-label" for="iYes">Sim</label>
                    <div class="form-group">
                        <label for="edu_sit_previou_school">Escola </label>
                        <input type="text" class="form-control" id="edu_sit_previou_school" placeholder="Nome da Escola" name="edu_sit_previous_school" value="{{isset($edu_sit_previou->school) ? $edu_sit_previou->school: null}}">
                        <label for="edu_sit_previou_grade">Série </label>
                        <input type="text" class="form-control" id="edu_sit_previou_grade" placeholder="Série" name="edu_sit_previou_grade" value="{{isset($edu_sit_previou->grade) ? $edu_sit_previou->grade: null}}">
                        <label for="edu_sit_previou_shift">Turno</label>
                        <input type="text" class="form-control" id="edu_sit_previou_shift" placeholder="Turno" name="edu_sit_previou_shift" value="{{isset($edu_sit_previou->shift) ? $edu_sit_previou->shift: null}}">
                        <label for="edu_sit_previou_life_school">Em relação à vida escolar da criança, descreva: frequência / socialização / interesse nas atividades escolares / rendimento escolar / participação da família na escola.</label>
                        <input type="textarea" class="form-control" id="edu_sit_previou_life_school" placeholder="Descreva a vida academica" name="edu_sit_previou_life_school" value="{{isset($edu_sit_previou->life_school) ? $edu_sit_previou->life_school: null}}">

                    </div>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="iNo" value="0" class="custom-control-input" name="edu_sit_previous_frequent_school">
                    <label class="custom-control-label" for="iNo">Não</label>
                    <label for="edu_sit_previou_justification">Justifique:</label>
                    <input type="textarea" class="form-control" id="edu_sit_previou_justification" placeholder="Justifique" name="edu_sit_previou_justification" value="{{isset($edu_sit_previou->justification) ? $edu_sit_previou->justification: null}}">

                </div>
        </div>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="iNo2" value="0" class="custom-control-input" name="edu_sit_previou_age_school">
        <label class="custom-control-label" for="iNo2">Não</label>
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
