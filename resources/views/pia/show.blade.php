@extends('layouts.base')
@section('content')
    {{--{{isset($kid->kid_name) ? $$kid->kid_name: null}}--}}
    <fieldset readonly="true">
    <h1 class="h3 mb-4 text-gray-800">PLANO INDIVIDUAL DE ACOLHIMENTO (PIA) </h1>
    
        <div class="form-group">
            <label for="iNome">Nome Completo:</label>
            <input type="text" class="form-control" id="iNome" name="kid_name" value="{{isset($kid->name) ? $kid->name:null}}"  readonly=“true”>
        </div>
    
        <div>
            <a href="{{route('kid.show', $kid->id)}}">1. DADOS PESSOAIS</a>
            </div>
            {{-- <div>
            <a href="{{route('documentacao.show', $kid->id)}}">2- DOCUMENTAÇÃO</a>
        </div> --}}
        <div>
                <a href="{{route('documentation.show', $kid->id)}}">2. DOCUMENTAÇÃO</a>
            </div>
            <div>
                    <a href="{{route('ticket_host.show', $kid->id)}}">3. INGRESSO NO ACOLHIMENTO INSTITUCIONAL</a>
                </div>
                <div>
                        <a href="{{route('data_health.show', $kid->id)}}">4. DADOS DE SAÚDE</a>
                    </div>
                    <div>
                            <a href="{{route('pro_ins_host.show', $kid->id)}}">4.1 PROVIDÊNCIAS DA INSTITUIÇÃO DE ACOLHIMENTO</a>
                    </div>
                    <div>
                            <a href="{{route('edu_sit_previou.show', $kid->id)}}">5.1 SITUAÇÃO ANTERIOR AO ACOLHIMENTO</a>
                        </div>
                        <div>
                                <a href="{{route('edu_sit_current.show', $kid->id)}}">5.2 SITUAÇÃO ATUAL</a>
                            </div>
                            <div>
                                <a href="{{route('information_family.show', $kid->id)}}">6. INFORMAÇÕES SOBRE A FAMÍLIA DE ORIGEM/EXTENSA E TERCEIROS</a>
                            </div>
                            <div>
                                <a href="{{route('information_brother.show', $kid->id)}}">6.1.1 IRMÃOS</a>
                            </div>
                            <div>
                                <a href="{{route('family_origin.show', $kid->id)}}">6.1 FAMÍLIA DE ORIGEM</a>
                            </div>
                            <div>
                                <a href="{{route('family_extended.show', $kid->id)}}">6.2  FAMÍLIA EXTENSA</a>
                            </div>
                            <div>
                                <a href="{{route('network.show', $kid->id)}}">7. ACOMPANHAMENTO DA REDE</a>
                            </div>
                            <div>
                                <a href="{{route('evaluation.show', $kid->id)}}">10. AVALIAÇÃO</a>
                            </div>
    
    
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{-- <a href="{{route('kid.show', $kid->id)}}">Voltar</a> --}}
                <a class="btn btn-secondary" href="{{route('kid.show', $kid->id)}}">Voltar</a>
                {{-- <button type="submit" class="btn btn-primary" href="{{route('kid.show', $kid->id)}">VOLTAR</button> --}}
            </div>
        </div>
    </fieldset>


@endsection
