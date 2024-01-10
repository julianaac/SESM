{{--{{isset($ticket_host->ticket_host_name) ? $$ticket_host->ticket_host_name: null}}--}}
<p> <label for="ticket_host_date_input">Data de entrada no serviço de acolhimento:</label> <input type="date" id="ticket_host_date_input" name="ticket_host_date_input" value="{{isset($ticket_host->date_input) ? $ticket_host->date_input:null}}" ></p>

<div class="form-group">
    <label for="ticket_host_hour_input">Horário de entrada no serviço de acolhimento:</label>
    <input type="text" class="form-control" id="ticket_host_hour_input" name="ticket_host_hour_input" value="{{isset($ticket_host->last_hour_input) ? $ticket_host->last_hour_input:null}}" >
</div>
<div class="form-group" >
    <label for="ticket_host_organ_forwarder">Órgão encaminhador: </label>
    <input type="text" class="form-control" id="ticket_host_organ_forwarder" name="ticket_host_organ_forwarder" value="{{isset($ticket_host->organ_forwarder) ? $ticket_host->organ_forwarder:null}}">
</div>
<div class="form-group">
    <label for="ticket_host_professional_receptor">Profissional responsável pela entrega da criança: </label>
    <input type="text" class="form-control" id="ticket_host_professional_receptor" name="ticket_host_professional_receptor" value="{{isset($ticket_host->professional_receptor) ? $ticket_host->professional_receptor: null}}">
</div>

<div class="form-group">
    <label for="ticket_host_professional_delivery">Profissional que recebeu a criança no Educandário:</label>
    <input type="text" class="form-control" id="ticket_host_professional_delivery" name="ticket_host_professional_delivery" value="{{isset($ticket_host->professional_delivery) ? $ticket_host->professional_delivery: null}}">
</div>
<div class="form-group">
    <label for="ticket_host_professional_office">cargo</label>
    <input type="text" class="form-control" id="ticket_host_professional_office" name="ticket_host_professional_office" value="{{isset($ticket_host->professional_office) ? $ticket_host->professional_office: null}}">
</div>
<div class="form-group">
    <label for="ticket_host_reason_host">Motivo do acolhimento:</label>
    <input type="text" class="form-control" id="ticket_host_reason_host" name="ticket_host_reason_host" value="{{isset($ticket_host->reason_host) ? $ticket_host->reason_host: null}}">
</div>

<fieldset>
    <label>encaminhamento realizado pela autoridade judiciária?</label>
    <div class="custom-control custom-radio">
        <input type="radio" id="iNo" class="custom-control-input" value="0" name="ticket_host_referral_judicial">
        <label class="custom-control-label" for="iNo">Não</label>
        <div class="form-group">
            <label for="ticket_host_time_after">No caso do encaminhamento não ter sido realizado pela autoridade judiciária, quanto tempo depois esta foi comunicada?</label>
            <input type="text" class="form-control" id="ticket_host_time_after" name="ticket_host_time_after" value="{{isset($ticket_host->time_after) ? $ticket_host->time_after: null}}">
        </div>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="iYes"class="custom-control-input" value="1" name="ticket_host_referral_judicial" >
        <label class="custom-control-label" for="iYes">Sim</label>
    </div>
</fieldset>
<div class="form-group">
    <label for="ticket_host_number_guide">Número do Guia de Acolhimento:</label>
    <input type="text" class="form-control" id="ticket_host_number_guide" name="ticket_host_number_guide" value="{{isset($ticket_host->number_guide) ? $ticket_host->number_guide: null}}">
</div>
<div class="form-group">
    <label for="ticket_host_number_process">Número do processo: </label>
    <input type="text" class="form-control" id="ticket_host_number_process" name="ticket_host_number_process" value="{{isset($ticket_host->number_process) ? $ticket_host->number_process: null}}">
</div>
<div class="form-group">
    <label for="ticket_host_observation_kid">Observação/ões sobre a criança no momento do acolhimento: </label>
    <input type="text" class="form-control" id="ticket_host_observation_kid" name="ticket_host_observation_kid" value="{{isset($ticket_host->observation_kid) ? $ticket_host->observation_kid: null}}">
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
