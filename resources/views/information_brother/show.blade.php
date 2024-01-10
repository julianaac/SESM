@extends('layouts.base')
@section('content')
    {{--{{isset($information_brother->information_brother_name) ? $$information_brother->information_brother_name: null}}--}}

<fieldset readonly="true">
    <fieldset>
        <label>A criança possui irmãos neste serviço de acolhimento?</label>
        <div class="custom-control custom-radio">
            <input type="radio" id="iYes"class="custom-control-input" value="1" disabled="disabled" {{ $information_brother->this_service == '1' ? 'checked' : '' }}  name="information_brother_this_service" >
            <label class="custom-control-label" for="iYes">Sim</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="iNo" class="custom-control-input" value="0" disabled="disabled"  {{ $information_brother->this_service == '0' ? 'checked' : '' }}  name="information_brother_this_service">
            <label class="custom-control-label" for="iNo">Não</label>
        </div>
    </fieldset>
    <fieldset>
        <label>A criança possui irmãos em outros serviços de acolhimento?</label>
        <div class="custom-control custom-radio">
            <input type="radio" id="iYes2"class="custom-control-input" value="1" disabled="disabled" {{ $information_brother->other_service == '1' ? 'checked' : '' }}  name="information_brother_other_service" >
            <label class="custom-control-label" for="iYes2">Sim</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="iNo2" class="custom-control-input" value="0" disabled="disabled" {{ $information_brother->other_service == '0' ? 'checked' : '' }}  name="information_brother_other_service">
            <label class="custom-control-label" for="iNo2">Não</label>
        </div>
    </fieldset>
    <fieldset>
        <label>A criança conhece ou tem vínculo com o(s) irmão(s) em outro(s) serviço(s) de acolhimento?</label>
        <div class="custom-control custom-radio">
            <input type="radio" id="SIM"class="custom-control-input" disabled="disabled" value="SIM" {{ $information_brother->bond_brothers == 'SIM' ? 'checked' : '' }}  name="information_brother_bond_brothers" >
            <label class="custom-control-label" for="SIM">Sim</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="NAO" class="custom-control-input" value="NAO" disabled="disabled" {{ $information_brother->bond_brothers == 'NAO' ? 'checked' : '' }}  name="information_brother_bond_brothers">
            <label class="custom-control-label" for="NAO">Não</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="NAOPOSSUI"class="custom-control-input" value="NAOPOSSUI" disabled="disabled" {{ $information_brother->bond_brothers == 'NAOPOSSUI' ? 'checked' : '' }}  name="information_brother_bond_brothers" >
            <label class="custom-control-label" for="NAOPOSSUI">Não possui irmãos em outro serviço de acolhimento</label>
        </div>
    </fieldset>
    <div class="form-group">
        <label for="information_brother_reason_separation">Por que todo o grupo de irmãos não foi acolhido no mesmo serviço de acolhimento?</label>
        <input type="text" class="form-control" id="information_brother_reason_separation" name="information_brother_reason_separation" value="{{isset($information_brother->reason_separation) ? $information_brother->reason_separation: null}}" readonly="true">
    </div>
    <div class="form-group">
        <label for="information_brother_brother_adopted">A criança possui irmão(s) que foi(ram) adotado(s)?</label>
        <input type="text" class="form-control" id="information_brother_brother_adopted" name="information_brother_brother_adopted" value="{{isset($information_brother->brother_adopted) ? $information_brother->brother_adopted: null}}" readonly="true">
    </div>
    <div class="form-group">
  
    <div class="col-sm-offset-2 col-sm-10">
        {{-- <button type="submit" class="btn btn-primary">Salvar</button> --}}
        <a class="btn btn-link" href="{{route('information_brother.edit', $information_brother->id)}}">Editar</a>
        <a class="btn btn-secondary" href="{{route('pia.show', $information_brother->kid_id)}}">Visualizar  PIA</a>
    </div>
</div>
</fieldset>
@endsection
