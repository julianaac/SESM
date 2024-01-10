@extends('layouts.base')
@section('content')
    {{--{{isset($documentation->documentation_name) ? $$documentation->documentation_name: null}}--}}

<fieldset readonly="true">
        <div class="form-group">
                <label for="documentation_document_admission">Documentos apresentados no momento do ingresso da criança no serviço de acolhimento:</label>
                <input type="text" class="form-control" id="documentation_document_admission" name="documentation_document_admission" value="{{isset($documentation->document_admission) ? $documentation->document_admission:null}}"  readonly=“true”>
            </div>
        <fieldset>
                <label>A criança tem deficiência?</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="POS" disabled="disabled" {{ $documentation->certificate_birth == 'POS' ? 'checked' : '' }} class="custom-control-input" name="documentation_certificate_birth" >
                    <label class="custom-control-label" for="POS">Possui.</label>
                    <div class="form-group">
                        <label for="documentation_number_certificate">Número:</label>
                        <input type="text" class="form-control" id="documentation_number_certificate"  name="documentation_number_certificate" value="{{isset($documentation->number_certificate) ? $documentation->number_certificate: null}}" readonly=“true”>
                    </div>
                </div>
                <div class="custom-control custom-radio">
                        <input type="radio" id="NPS" disabled="disabled" {{ $documentation->certificate_birth == 'NPS' ? 'checked' : '' }} class="custom-control-input" name="documentation_certificate_birth">
                        <label class="custom-control-label" for="NPS">Não possui</label>
                </div>
                <div class="custom-control custom-radio">
                        <input type="radio" id="SIN" disabled="disabled" {{ $documentation->certificate_birth == 'SIN' ? 'checked' : '' }} class="custom-control-input" name="documentation_certificate_birth">
                        <label class="custom-control-label" for="SIN">Sem informação</label>
                </div>
            </fieldset>

            <fieldset>
                    <label>Carteira de Vacinação:</label>
                    <div class="custom-control custom-radio">
                            <input type="radio" id="PVD" disabled="disabled" {{ $documentation->card_vaccination == 'PVD' ? 'checked' : '' }} class="custom-control-input" name="documentation_card_vaccination" >
                            <label class="custom-control-label" for="PVD">Possui, com vacinação em dia</label>
                        </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="PVI" disabled="disabled" {{ $documentation->card_vaccination == 'PVI' ? 'checked' : '' }} class="custom-control-input" name="documentation_card_vaccination">
                        <label class="custom-control-label" for="PVI">Possui, com vacinação incompleta</label>
                    </div>
                    <div class="custom-control custom-radio">
                            <input type="radio" id="NPO" disabled="disabled" {{ $documentation->card_vaccination == 'NPO' ? 'checked' : '' }} class="custom-control-input" name="documentation_card_vaccination">
                            <label class="custom-control-label" for="NPO">Não possui</label>
                    </div>
                    <div class="custom-control custom-radio">
                            <input type="radio" id="SEI" disabled="disabled" {{ $documentation->card_vaccination == 'SEI' ? 'checked' : '' }} class="custom-control-input" name="documentation_card_vaccination">
                            <label class="custom-control-label" for="SEI">Sem informação</label>
                    </div>
                    
                </fieldset>
                <fieldset>
                        <label>Histórico Escolar:</label>
                        <div class="custom-control custom-radio">
                                <input type="radio" id="PFE" disabled="disabled" {{ $documentation->historic_school == 'PFE' ? 'checked' : '' }} class="custom-control-input" name="documentation_card_vaccination" >
                                <label class="custom-control-label" for="PFE">Possui; estava frequentando a escola</label>
                            </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="PNF" disabled="disabled" {{ $documentation->historic_school == 'PNF' ? 'checked' : '' }} class="custom-control-input" name="documentation_card_vaccination">
                            <label class="custom-control-label" for="PNF">Possui; não estava frequentando a escola</label>
                        </div>
                        <div class="custom-control custom-radio">
                                <input type="radio" id="NPI" disabled="disabled" {{ $documentation->historic_school == 'NPI' ? 'checked' : '' }} class="custom-control-input" name="documentation_card_vaccination">
                                <label class="custom-control-label" for="NPI">Não possui</label>
                        </div>
                        <div class="custom-control custom-radio">
                                <input type="radio" id="SIF" disabled="disabled" {{ $documentation->historic_school == 'SIF' ? 'checked' : '' }} class="custom-control-input" name="documentation_card_vaccination">
                                <label class="custom-control-label" for="SIF">Sem informação</label>
                        </div>
                        
                    </fieldset>
    <div class="form-check">
                            <input class="form-check-input" disabled="disabled" type="checkbox" value="" id="documentation_studies_reports">
                            <label class="form-check-label" for="documentation_studies_reports">
                                Estudo(s) e relatório(s).
                            </label>
                            <div class="form-group">
                                    <label for="documentation_studies_which">Qual(is)?</label>
                                    <input type="text" class="form-control" id="documentation_studies_which" name="documentation_studies_which" value="{{isset($documentation->studies_which) ? $documentation->studies_which:null}}"  readonly=“true”>
                                </div>
                        </div>
    <div class="form-group">
        <label for="documentation_other_documents">Outro(s) Documento(s):</label>
        <input type="text" class="form-control" id="documentation_other_documents" name="documentation_other_documents" value="{{isset($documentation->other_documents) ? $documentation->other_documents:null}}"  readonly=“true”>
    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a class="btn btn-link" href="{{route('documentation.edit', $documentation->id)}}">Editar</a>
            <a class="btn btn-secondary" href="{{route('pia.show', $documentation->kid_id)}}">Visualizar  PIA</a>
        </div>
    </div>
</fieldset>
@endsection
