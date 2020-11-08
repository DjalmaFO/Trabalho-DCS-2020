<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Aos Condôminos') }}
        </h2>
    </x-slot>

    <div class="py-12 container">
        <div class="row">
            <div class="col-4">
                <div class="card rounded-3 shadow-lg justify-center" style="width: 24rem; height: 60vh">
                    <img class="card-img-top" src="{{ asset('img/covid-19.jpg') }}" alt="Uso de mascara">
                    <div class="card-body">
                        <h2 class="card-title h5 italic font-weight-bold">Política de Segurança COVID-19</h5>
                        <p class="card-text">Fica estabelecido a obrigatoriedade de uso de máscara em todas as áreas
                            sociais do condomínio</p>
                        <p class="card-text">As mascaras devem cobrir nariz e boca simultaneamente</p>
                        <p class="card-text">O uso dos elevadores devem ser dividido apenas em familia, respeitando ordem de chegada</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card rounded-3 shadow-lg justify-center" style="width: 24rem; height: 60vh">
                    <img class="card-img-top" src="{{ asset('img/brinquedoteca.jpg') }}" alt="brinquedoteca">
                    <div class="card-body">
                        <h2 class="card-title h5 italic font-weight-bold">Controle de fluxo a brinquedoteca</h5>
                        <p class="card-text">Devido a pandemia pedimos que o uso da brinquedoteca seja intercalado.</p>
                        <p class="card-text">O fluxo deve ser observado pelos dos pais, babás e responsaveis das crianças</p>
                        <p class="card-text">Antes e depois da utulização, pedimos que seja realizado a higienização dos aparelhos e brinquedos</p>
                        <p class="card-text">As políticas de segurança contra o COVID-19 continuam em vigor.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card rounded-3 shadow-lg justify-center" style="width: 24rem; height: 60vh">
                    <img class="card-img-top" src="{{ asset('img/churrasqueira.jpg') }}" alt="churrasqueira">
                    <div class="card-body">
                        <h2 class="card-title h5 italic font-weight-bold">Reabertura das áreas gourmet</h5>
                        <p class="card-text">A partir de 01 de novembro de 2020 as áreas gourmet (salão e churrasqueira gourmet).</p>
                        <p class="card-text">As normas de segurança contra o COVID-19 continuam vigentes.</p>
                        <p class="card-text">Todas as reservas podem ser realizadas através dos contatos abaixo:</p>
                        <ul>
                            <li>Telefone: <span class="italic font-weight-bold">(11)2233-4455</span></li>
                            <li>Email: <span class="italic font-weight-bold">condominio_adm@condominio.com.br</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="footer">
        <div class="row justify-center">
            <h4 class="h6">TSI - 4º Periodo, Trabalho DCS: Login Laravel Socialite com Multiplos Providers &copy;</h4>
        </div>
    </x-slot>
</x-app-layout>
