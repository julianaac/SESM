{{--{{isset($data_health->data_health_name) ? $$data_health->data_health_name: null}}--}}


{{-- <div class="form-group">
    <label for="iNome">Nome Completo:</label>
    <input type="text" class="form-control" id="iNome" name="data_health_name" value="{{isset($data_health->name) ? $data_health->name:null}}">
</div> --}}
<fieldset>
    <div class="form-group">
        <label for="data_health_weight">Peso:</label>
        <input type="text" class="form-control" id="data_health_weight" placeholder="Insira os documentos" name="data_health_weight" value="{{isset($data_health->weight) ? $data_health->weight: null}}">
    </div>

<div class="form-group">
    <label for="data_health_height">Altura:</label>
    <input type="text" class="form-control" id="data_health_height" name="data_health_height" value="{{isset($data_health->height) ? $data_health->height: null}}">
</div>
</fieldset>
<fieldset>
    <label>A criança faz uso de medicação?</label>
    <div class="custom-control custom-radio">
        <input type="radio" id="iYes"class="custom-control-input" value="1" name="data_health_use_medication" >
        <label class="custom-control-label" for="iYes">Sim</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="iNo" class="custom-control-input" value="0" name="data_health_use_medication">
        <label class="custom-control-label" for="iNo">Não</label>
    </div>
</fieldset>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
