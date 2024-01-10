@extends('layouts.base')
@section('content')
    {{--{{isset($ticket_host->ticket_host_name) ? $$ticket_host->ticket_host_name: null}}--}}

<fieldset readonly="true">
    <p> <label for="ticket_host_date_input">Data de entrada no serviço de acolhimento:</label> <input type="date" id="ticket_host_date_input" name="ticket_host_date_input" value="{{isset($ticket_host->date_input) ? $ticket_host->date_input:null}}" readonly=“true”></p>
   
    <div class="form-group">
        <label for="ticket_host_hour_input">Horário de entrada no serviço de acolhimento:</label>
        <input type="text" class="form-control" id="ticket_host_hour_input" name="ticket_host_hour_input" value="{{isset($ticket_host->hour_input) ? $ticket_host->hour_input: null}}" readonly=“true”>
    </div>
    <div class="form-group">
        <label for="ticket_host_organ_forwarder">Órgão encaminhador: </label>
        <input type="text" class="form-control" id="ticket_host_organ_forwarder" name="ticket_host_organ_forwarder" value="{{isset($ticket_host->organ_forwarder) ? $ticket_host->organ_forwarder: null}}" readonly=“true”>
    </div>
    <div class="form-group">
        <label for="ticket_host_professional_delivery">Profissional responsável pela entrega da criança:</label>
        <input type="text" class="form-control" id="ticket_host_professional_delivery" name="ticket_host_professional_delivery" value="{{isset($ticket_host->professional_delivery) ? $ticket_host->professional_delivery: null}}" readonly=“true”>
    </div>
    <div class="form-group">
        <label for="ticket_host_professional_receptor">Profissional que recebeu a criança no Educandário: </label>
        <input type="text" class="form-control" id="ticket_host_professional_receptor" name="ticket_host_professional_receptor" value="{{isset($ticket_host->professional_receptor) ? $ticket_host->professional_receptor: null}}" readonly=“true”>
    </div>
    <div class="form-group">
        <label for="ticket_host_professional_office">cargo</label>
        <input type="text" class="form-control" id="ticket_host_professional_office" name="ticket_host_professional_office" value="{{isset($ticket_host->professional_office) ? $ticket_host->professional_office: null}}" readonly=“true”>
    </div>
    <div class="form-group">
        <label for="ticket_host_reason_host">Motivo do acolhimento:</label>
        <input type="text" class="form-control" id="ticket_host_reason_host" name="ticket_host_reason_host" value="{{isset($ticket_host->reason_host) ? $ticket_host->reason_host: null}}" readonly=“true”>
    </div>

    <fieldset>
        <label>Encaminhamento realizado pela autoridade judiciária?</label>
        <div class="custom-control custom-radio">
            <input type="radio" id="iNo" disabled="disabled"  {{ $ticket_host->referral_judicial == '0' ? 'checked' : '' }} class="custom-control-input" name="ticket_host_referral_judicial">
            <label class="custom-control-label" for="iNo">Não</label>
            <div class="form-group">
                <label for="ticket_host_time_after">No caso do encaminhamento não ter sido realizado pela autoridade judiciária, quanto tempo depois esta foi comunicada?</label>
                <input type="text" class="form-control" disabled="disabled" id="ticket_host_time_after"  name="ticket_host_time_after" value="{{isset($ticket_host->time_after) ? $ticket_host->time_after: null}}" readonly=“true”>
            </div>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="iYes" {{ $ticket_host->referral_judicial == '1' ? 'checked' : '' }} class="custom-control-input" name="ticket_host_referral_judicial" >
            <label class="custom-control-label" for="iYes">Sim</label>
        </div>
    </fieldset>
    <div class="form-group">
        <label for="ticket_host_number_guide">Número do Guia de Acolhimento:</label>
        <input type="text" class="form-control" id="ticket_host_number_guide" name="ticket_host_number_guide" value="{{isset($ticket_host->number_guide) ? $ticket_host->number_guide: null}}" readonly=“true”>
    </div>
    <div class="form-group">
        <label for="ticket_host_number_process">Número do processo: </label>
        <input type="text" class="form-control" id="ticket_host_number_process" name="ticket_host_number_process" value="{{isset($ticket_host->number_process) ? $ticket_host->number_process: null}}" readonly=“true”>
    </div>
    <div class="form-group">
        <label for="ticket_host_observation_kid">Observação/ões sobre a criança no momento do acolhimento: </label>
        <input type="text" class="form-control" id="ticket_host_observation_kid" name="ticket_host_observation_kid" value="{{isset($ticket_host->observation_kid) ? $ticket_host->observation_kid: null}}" readonly=“true”>
    </div>

    <div class="form-group">
  
    <div class="col-sm-offset-2 col-sm-10">
        {{-- <button type="submit" class="btn btn-primary">Salvar</button> --}}
        <a class="btn btn-link" href="{{route('ticket_host.edit', $ticket_host->id)}}">Editar</a>
        <a class="btn btn-secondary" href="{{route('pia.show', $ticket_host->kid_id)}}">Visualizar  PIA</a>
    </div>
</div>
</fieldset>
@endsection
