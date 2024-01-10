{{--{{isset($kid->kid_name) ? $$kid->kid_name: null}}--}}
<div class="form-group">
    <label for="dat_health_weight">Peso:</label>
    <input type="text" class="form-control" id="dat_health_weight" name="dat_health_weight" value="{{isset($dat_health->weight) ? $dat_health->weight:null}}">
</div>


<div class="form-group">
    <label for="dat_health_height">Altura: </label>
    <input type="text" class="form-control" id="dat_health_height" name="dat_health_height" value="{{isset($dat_health->height) ? $dat_health->height: null}}">
</div>

<fieldset>
    <label>A criança faz uso de medicação?</label>
    <div class="custom-control custom-radio">
        <input type="radio" id="iYes"class="custom-control-input" value="1" {{ $dat_health->use_medication == '1' ? 'checked' : '' }} name="dat_health_use_medication" >
        <label class="custom-control-label" for="iYes">Sim</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="iNo" class="custom-control-input" value="0" {{ $dat_health->use_medication == '0' ? 'checked' : '' }} name="dat_health_use_medication">
        <label class="custom-control-label" for="iNo">Não</label>
    </div>
</fieldset>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
