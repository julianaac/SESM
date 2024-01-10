{{--{{isset($medicine->medicine_name) ? $$medicine->medicine_name: null}}--}}


{{-- <div class="form-group">
    <label for="iNome">Nome Completo:</label>
    <input type="text" class="form-control" id="iNome" name="medicine_name" value="{{isset($medicine->name) ? $medicine->name:null}}">
</div> --}}
<div class="form-group">
    <label for="medicine_doctor">Medico:</label>
    <input type="text" class="form-control" id="medicine_doctor" name="medicine_doctor" value="{{isset($medicine->doctor) ? $medicine->doctor: null}}">
</div>

<div class="form-group">
    <label for="medicine_name">Outro(s) Documento(s):</label>
    <input type="text" class="form-control" id="medicine_name" name="medicine_name" value="{{isset($medicine->name) ? $medicine->name: null}}">
</div>
<div class="form-group">
    <label for="medicine_dosage">Outro(s) Documento(s):</label>
    <input type="text" class="form-control" id="medicine_dosage" name="medicine_dosage" value="{{isset($medicine->dosage) ? $medicine->dosage: null}}">
</div>
<div class="form-group">
    <label for="medicine_administration">Outro(s) Documento(s):</label>
    <input type="text" class="form-control" id="medicine_administration" name="medicine_administration" value="{{isset($medicine->administration) ? $medicine->administration: null}}">
</div>
<div class="form-group">
    <label for="medicine_period">Outro(s) Documento(s):</label>
    <input type="text" class="form-control" id="medicine_period" name="medicine_period" value="{{isset($medicine->period) ? $medicine->period: null}}">
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
