{{--{{isset($network->network_name) ? $$network->network_name: null}}--}}


<fieldset>
    <label>Há instituições/serviços/programas que estiveram ou estão acompanhando os pais/responsáveis e/ou a criança?</label>
    <div class="custom-control custom-radio">
            <input type="radio" id="iYes"class="custom-control-input" value="1" {{ $network->following == '1' ? 'checked' : '' }} name="network_following" >
            <label class="custom-control-label" for="iYes">Sim</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="iNo" class="custom-control-input" value="0"  {{ $network->following == '0' ? 'checked' : '' }} name="network_following">
        <label class="custom-control-label" for="iNo">Não</label>
    </div>
</fieldset>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>