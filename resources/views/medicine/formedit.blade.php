{{--{{isset($documentation->documentation_name) ? $$documentation->documentation_name: null}}--}}


{{-- <div class="form-group">
    <label for="iNome">Nome Completo:</label>
    <input type="text" class="form-control" id="iNome" name="documentation_name" value="{{isset($documentation->name) ? $documentation->name:null}}">
</div> --}}
<fieldset>
    <div class="form-group">
        <label for="documentation_document_admission">Documentos apresentados no momento do ingresso da criança no serviço de acolhimento:</label>
        <input type="text" class="form-control" id="documentation_document_admission" placeholder="Insira os documentos" name="documentation_document_admission" value="{{isset($documentation->document_admission) ? $documentation->document_admission: null}}">
    </div>
    <label>Certidão de nascimento:</label>
    <div class="custom-control custom-radio">
        <input type="radio" id="POS" value="POS" {{ $documentation->certificate_birth == 'POS' ? 'checked' : '' }} class="custom-control-input" name="documentation_certificate_birth" >
        <label class="custom-control-label" for="POS" >Possui.</label>
        <div class="form-group">
            <label for="documentation_number_certificate">Número:</label>
            <input type="text" class="form-control" id="documentation_number_certificate" placeholder="Insira o Numero da certidão de nascimentoa" name="documentation_number_certificate" value="{{isset($documentation->number_certificate) ? $documentation->number_certificate: null}}">
        </div>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="NPS" value="NPS" {{ $documentation->certificate_birth == 'NPS' ? 'checked' : '' }} class="custom-control-input" name="documentation_certificate_birth">
        <label class="custom-control-label" for="NPS">Não possui</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="SIN" value="SIN" {{ $documentation->certificate_birth == 'SIN' ? 'checked' : '' }} class="custom-control-input" name="documentation_certificate_birth">
        <label class="custom-control-label" for="SIN">Sem informação</label>
    </div>
</fieldset>
<fieldset>
    <label>Carteira de Vacinação:</label>
    <div class="custom-control custom-radio">
        <input type="radio" id="PVD" value="PVD" {{ $documentation->card_vaccination == 'PVD' ? 'checked' : '' }} class="custom-control-input" name="documentation_card_vaccination" >
        <label class="custom-control-label" for="PVD">Possui, com vacinação em dia</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="PVI" value="PVI" {{ $documentation->card_vaccination == 'PVI' ? 'checked' : '' }} class="custom-control-input" name="documentation_card_vaccination">
        <label class="custom-control-label" for="PVI">Possui, com vacinação incompleta</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="NPO" value="NPO" {{ $documentation->card_vaccination == 'NPO' ? 'checked' : '' }} class="custom-control-input" name="documentation_card_vaccination">
        <label class="custom-control-label" for="NPO">Não possui</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="SEI" value="SEI" {{ $documentation->card_vaccination == 'SEI' ? 'checked' : '' }} class="custom-control-input" name="documentation_card_vaccination">
        <label class="custom-control-label" for="SEI">Sem informação</label>
    </div>
</fieldset>
<fieldset>
    <label>Histórico Escolar:</label>
    <div class="custom-control custom-radio">
        <input type="radio" id="PFE" value="PFE" {{ $documentation->historic_school == 'PFE' ? 'checked' : '' }} class="custom-control-input" name="documentation_historic_school" >
        <label class="custom-control-label" for="PFE">Possui; estava frequentando a escola</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="PNF" value="PNF" {{ $documentation->historic_school == 'PNF' ? 'checked' : '' }} class="custom-control-input" name="documentation_historic_school">
        <label class="custom-control-label" for="PNF">Possui; não estava frequentando a escola</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="NPI" value="NPI" {{ $documentation->historic_school == 'NPI' ? 'checked' : '' }} class="custom-control-input" name="documentation_historic_school">
        <label class="custom-control-label" for="NPI">Não possui</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="SIF" value="SIF" {{ $documentation->historic_school == 'SIF' ? 'checked' : '' }} class="custom-control-input" name="documentation_historic_school">
        <label class="custom-control-label" for="SIF">Sem informação</label>
    </div>
</fieldset>
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="1" {{ $documentation->studies_reports == '1' ? 'checked' : '' }} id="documentation_studies_reports" name="documentation_studies_reports">
    <label class="form-check-label" for="documentation_studies_reports">
        Estudo(s) e relatório(s).
    </label>
    <div class="form-group">
        <label for="documentation_studies_which">Qual(is)?</label>
        <input type="text" class="form-control" id="documentation_studies_which" placeholder="Insira os estudos e relatorios" name="documentation_studies_which" value="{{isset($documentation->studies_which) ? $documentation->studies_which: null}}">
    </div>
</div>


<div class="form-group">
    <label for="documentation_other_documents">Outro(s) Documento(s):</label>
    <input type="text" class="form-control" id="documentation_other_documents" name="documentation_other_documents" value="{{isset($documentation->other_documents) ? $documentation->other_documents: null}}">
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
