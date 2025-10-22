@extends('layouts.layout')
@section('content')

<!-- Estilo global para esconder antes do Alpine iniciar -->
<style>[x-cloak]{display:none!important}</style>

<section x-data="{ aba: 'resumo' }" class="mt-[7vh]">

    <!-- Navbar -->
    <div class="flex justify-between items-center p-6 border-b border-gray-200">
        <h1 class="text-xl font-bold text-orange-600 uppercase">Kawasaki Ninja H2R</h1>
        <nav class="space-x-6 text-sm font-medium text-gray-600">
            <button @click="aba = 'resumo'" :class="aba === 'resumo' ? 'text-orange-600 font-semibold' : 'hover:text-orange-600'">Resumo</button>
            <button @click="aba = 'ficha'" :class="aba === 'ficha' ? 'text-orange-600 font-semibold' : 'hover:text-orange-600'">Ficha Técnica</button>
            <button @click="aba = 'acessorios'" :class="aba === 'acessorios' ? 'text-orange-600 font-semibold' : 'hover:text-orange-600'">Acessórios</button>
        </nav>
        <a href="/kawasaki"><button class="border border-gray-800 hover:bg-gray-200 text-gray-900 px-24 py-3 rounded-md font-semibold text-sm uppercase">
            <div class="flex justify-center items-center align-middle gap-2"><img src="{{ asset('img/voltar.png') }}" alt="" class="h-5 w-5">Voltar à Kawasaki</div>
        </button></a>
    </div>

    <!-- Conteúdo -->
    <main class="max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-12 items-center">

        <!-- COLUNA DE TEXTO -->
        <div class="relative min-h-[500px] mb-[10vh]">
            <div class="overflow-auto h-full">

                <!-- RESUMO -->
                <div
                    x-cloak
                    x-show="aba === 'resumo'"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 -translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-400"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-10"
                    class="absolute inset-0"
                >
                    <h2 class="text-5xl font-extrabold text-gray-900 mb-4">NINJA H2R</h2>
                    <p class="uppercase text-sm tracking-widest text-orange-600 font-semibold mb-2">Carbon Edition</p>
                    <p class="text-2xl font-bold text-gray-800 mb-6">
                        A partir de <span class="text-orange-600">R$ 357.000,00</span>
                    </p>
                    <div class="flex flex-col gap-4 mb-6">
                        <div class="flex flex-row space-x-5">
                            <button class="border border-gray-800 hover:bg-gray-200 text-gray-900 px-24 py-3 rounded-md font-semibold text-sm uppercase" @click="aba = 'acessorios'">
                                ACESSÓRIOS
                            </button>
                            <button class="border border-gray-800 hover:bg-gray-200 text-gray-900 px-24 py-3 rounded-md font-semibold text-sm uppercase" @click="aba = 'ficha'">
                                ESPECIFICAÇÕES
                            </button>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        A Kawasaki Ninja H2R é a hipermoto definitiva, equipada com motor supercharger de 998 cc e mais de 300 cv de potência.
                        Construída para desempenho extremo em pista fechada, representa o auge da engenharia e do design Kawasaki.
                    </p>
                </div>

                <!-- FICHA -->
                <div
                    x-cloak
                    x-show="aba === 'ficha'"
                    x-transition:enter="transition ease-out duration-500 delay-100"
                    x-transition:enter-start="opacity-0 -translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-400"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-10"
                    class="absolute inset-0"
                >
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-6 border-b-2 border-orange-500 inline-block pb-1">
                        Ficha Técnica — Ninja H2R
                    </h2>

                    <div class="grid sm:grid-cols-2 gap-6 text-sm text-gray-700">

                        <!-- MOTOR E TRANSMISSÃO -->
                        <div class=" p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <h3 class="text-lg font-semibold text-orange-600 mb-2">Motor e Transmissão</h3>
                            <ul class="space-y-1">
                                <li><strong>Tipo:</strong> 4 cilindros em linha, DOHC, 16 válvulas, supercharger</li>
                                <li><strong>Cilindrada:</strong> 998 cc</li>
                                <li><strong>Potência Máxima:</strong> 310 cv (326 cv com RAM Air)</li>
                                <li><strong>Torque Máximo:</strong> 16,8 kgf·m @ 12.500 rpm</li>
                                <li><strong>Transmissão:</strong> 6 marchas, quickshifter bidirecional</li>
                                <li><strong>Embreagem:</strong> Deslizante assistida</li>
                            </ul>
                        </div>

                        <!-- CHASSI E DIMENSÕES -->
                        <div class="p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <h3 class="text-lg font-semibold text-orange-600 mb-2">Chassi e Dimensões</h3>
                            <ul class="space-y-1">
                                <li><strong>Chassi:</strong> Treliça em aço de alta resistência</li>
                                <li><strong>Comprimento x Largura x Altura:</strong> 2.070 × 770 × 1.160 mm</li>
                                <li><strong>Altura do Assento:</strong> 830 mm</li>
                                <li><strong>Peso Seco:</strong> 216 kg</li>
                                <li><strong>Tanque de Combustível:</strong> 17 litros</li>
                                <li><strong>Distância Entre Eixos:</strong> 1.450 mm</li>
                            </ul>
                        </div>

                        <!-- SUSPENSÃO E FREIOS -->
                        <div class="bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <h3 class="text-lg font-semibold text-orange-600 mb-2">Suspensão e Freios</h3>
                            <ul class="space-y-1">
                                <li><strong>Dianteira:</strong> Garfo invertido Öhlins, totalmente ajustável</li>
                                <li><strong>Traseira:</strong> Amortecedor Uni-Trak, ajustável</li>
                                <li><strong>Freios Dianteiros:</strong> Duplo disco Brembo 330 mm com pinças radiais</li>
                                <li><strong>Freio Traseiro:</strong> Disco simples de 250 mm</li>
                                <li><strong>Pneus:</strong> 120/600 R17 (D) | 190/650 R17 (T)</li>
                            </ul>
                        </div>

                        <!-- ELETRÔNICA E DESEMPENHO -->
                        <div class="bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <h3 class="text-lg font-semibold text-orange-600 mb-2">Eletrônica e Desempenho</h3>
                            <ul class="space-y-1">
                                <li><strong>Controle de Tração (KTRC):</strong> 9 modos</li>
                                <li><strong>ABS de Curva (KIBS):</strong> Sim</li>
                                <li><strong>Controle de Largada (KLCM):</strong> Sim</li>
                                <li><strong>Modo de Potência:</strong> 3 níveis selecionáveis</li>
                                <li><strong>Painel:</strong> TFT colorido com conectividade Bluetooth</li>
                                <li><strong>Velocidade Máxima:</strong> 400 km/h (estimada)</li>
                            </ul>
                        </div>
                        <button class="border border-gray-800 hover:bg-gray-200 text-gray-900 px-24 py-3 rounded-md font-semibold text-sm uppercase mb-10" @click="aba = 'resumo'">
                                VOLTAR
                        </button>
                    </div>

                    <p class="mt-6 text-xs text-gray-500 italic">
                        *Informações baseadas em dados oficiais Kawasaki. Modelo exclusivo para uso em pista fechada.
                    </p>
                </div>

                <!-- ACESSÓRIOS -->
                <div
                    x-cloak
                    x-show="aba === 'acessorios'"
                    x-transition:enter="transition ease-out duration-500 delay-100"
                    x-transition:enter-start="opacity-0 -translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-400"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-10"
                    class="absolute inset-0"
                >
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-6 border-b-2 border-orange-500 inline-block pb-1">
                        Acessórios Disponíveis
                    </h2>

                    <div class="space-y-4 text-gray-700">

                        <!-- Acessório 1 -->
                        <div class="flex justify-between items-center w-[34vw] bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <div>
                                <h3 class="font-semibold text-gray-900">Capa Personalizada H2R</h3>
                                <p class="text-sm text-gray-500">Protege sua moto contra poeira e arranhões com ajuste sob medida.</p>
                            </div>
                            <span class="text-orange-600 font-bold text-lg">R$ 1.290,00</span>
                        </div>

                        <!-- Acessório 2 -->
                        <div class="flex justify-between items-center w-[34vw] bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <div>
                                <h3 class="font-semibold text-gray-900">Kit de Performance Akrapovič</h3>
                                <p class="text-sm text-gray-500">Sistema de escapamento em titânio com ganho de potência e som esportivo.</p>
                            </div>
                            <span class="text-orange-600 font-bold text-lg">R$ 9.850,00</span>
                        </div>

                        <!-- Acessório 3 -->
                        <div class="flex justify-between items-center w-[34vw] bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <div>
                                <h3 class="font-semibold text-gray-900">Protetores Laterais de Carenagem</h3>
                                <p class="text-sm text-gray-500">Minimiza danos em eventuais quedas, com design integrado à carenagem.</p>
                            </div>
                            <span class="text-orange-600 font-bold text-lg">R$ 1.790,00</span>
                        </div>

                        <!-- Acessório 4 -->
                        <div class="flex justify-between items-center w-[34vw] bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <div>
                                <h3 class="font-semibold text-gray-900">Capacete Kawasaki Carbon Edition</h3>
                                <p class="text-sm text-gray-500">Modelo premium em fibra de carbono, leve e aerodinâmico.</p>
                            </div>
                            <span class="text-orange-600 font-bold text-lg">R$ 4.590,00</span>
                        </div>

                    </div>

                    <p class="mt-6 text-xs text-gray-500 italic">
                        *Preços sugeridos pela Kawasaki Brasil. Sujeitos a alteração sem aviso prévio.
                    </p>
                    <button class="border border-gray-800 hover:bg-gray-200 text-gray-900 px-24 py-3 rounded-md font-semibold text-sm uppercase mt-6" @click="aba = 'resumo'">
                        VOLTAR
                    </button>
                </div>
            </div>
        </div>

        <!-- COLUNA DA IMAGEM -->
        <div class="flex flex-col items-center">
            <img src="{{ asset('img/kawasakininjah2r.png') }}" alt="Kawasaki Ninja H2R" class="w-full max-w-lg object-contain">
            <p class="mt-2 text-xs text-gray-500">*Imagem meramente ilustrativa</p>

            <!-- Modal de Compra -->
            <div 
                x-data="{
                    aberto: false,
                    nome: '',
                    email: '',
                    telefone: '',
                    cpf: '',
                    forma_pagamento: 'cartao',
                    acessorios: [
                        { nome: 'Capa Personalizada H2R', preco: 1290, selecionado: false },
                        { nome: 'Kit de Performance Akrapovič', preco: 9850, selecionado: false },
                        { nome: 'Protetores Laterais de Carenagem', preco: 1790, selecionado: false },
                        { nome: 'Capacete Kawasaki Carbon Edition', preco: 4590, selecionado: false }
                    ],
                    precoBase: 357000,
                    get total() {
                        return this.precoBase + this.acessorios.filter(a => a.selecionado).reduce((s, a) => s + a.preco, 0);
                    }
                }"
            >
                <!-- Botão que abre o popup -->
                <button 
                    @click="aberto = true"
                    class="mt-6 bg-orange-600 hover:bg-orange-700 ease-in-out duration-300 text-white px-40 py-3 rounded-md font-semibold uppercase tracking-wide">
                    Ir para à compra
                </button>

                <!-- Fundo escurecido -->
                <div 
                    x-show="aberto"
                    x-cloak
                    class="fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center z-50"
                    x-transition
                >
                    <!-- Modal -->
                    <div 
                        class="bg-white w-[90vw] max-w-lg p-6 rounded-2xl shadow-2xl relative 
                            max-h-[80vh] overflow-y-auto"
                        @click.away="aberto = false"
                    >
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Finalizar Compra</h2>

                        <form method="POST" action="" novalidate>
                        @csrf

                        <!-- Dados do comprador -->
                        <div class="space-y-3 mb-4">
                            <input type="text" name="cpf" x-model="cpf" placeholder="CPF" required class="w-full border p-2 rounded-md" maxlength="14">
                        </div>

                        <!-- Endereço -->
                        <div class="space-y-3 mb-4">
                            <h3 class="font-semibold text-gray-800 mb-2">Endereço de Entrega</h3>

                            <input type="text" name="cep" placeholder="CEP" required maxlength="9"
                                x-model="cep" class="w-full border p-2 rounded-md" inputmode="numeric">

                            <input type="text" name="rua" placeholder="Rua" required
                                x-model="rua" class="w-full border p-2 rounded-md">

                            <input type="text" name="numero" placeholder="Número" required
                                x-model="numero" class="w-full border p-2 rounded-md">

                            <input type="text" name="bairro" placeholder="Bairro"
                                x-model="bairro" class="w-full border p-2 rounded-md">

                            <div class="grid grid-cols-2 gap-2">
                                <input type="text" name="cidade" placeholder="Cidade" required
                                    x-model="cidade" class="w-full border p-2 rounded-md">
                                <input type="text" name="estado" placeholder="Estado" maxlength="2" required
                                    x-model="estado" class="w-full border p-2 rounded-md uppercase">
                            </div>
                        </div>

                        <!-- Forma de pagamento -->
                        <div class="mb-4">
                            <label class="font-semibold text-gray-800 block mb-2">Forma de pagamento:</label>
                            <select name="forma_pagamento" x-model="forma_pagamento" class="w-full border p-2 rounded-md">
                                <option value="cartao">Cartão de Crédito</option>
                                <option value="pix">PIX</option>
                            </select>
                        </div>

                        <!-- Campos de cartão (exibidos apenas se forma_pagamento == 'cartao') -->
                        <div x-show="forma_pagamento === 'cartao'" x-cloak class="mb-4 space-y-3">
                            <p class="text-sm text-gray-600">Informações do cartão </p>

                            <div class="grid grid-cols-1 gap-2">
                                <!-- Número do cartão -->
                                <input
                                    type="text"
                                    name="card_number"
                                    placeholder="Número do cartão (ex: 4111 1111 1111 1111)"
                                    inputmode="numeric"
                                    maxlength="19"
                                    x-model="card_number"
                                    class="w-full border p-2 rounded-md"
                                    pattern="[\d\s]{13,19}"
                                    autocomplete="cc-number"
                                    required
                                >

                                <!-- Validade MM/AA -->
                                <input
                                    type="text"
                                    name="card_expiry"
                                    placeholder="Validade (MM/AA)"
                                    maxlength="5"
                                    x-model="card_expiry"
                                    class="w-full border p-2 rounded-md"
                                    pattern="(0[1-9]|1[0-2])\/?([0-9]{2})"
                                    autocomplete="cc-exp"
                                    required
                                >

                                <!-- CVV -->
                                <input
                                    type="text"
                                    name="card_cvv"
                                    placeholder="CVV (3 ou 4 dígitos)"
                                    inputmode="numeric"
                                    maxlength="4"
                                    x-model="card_cvv"
                                    class="w-full border p-2 rounded-md"
                                    pattern="\d{3,4}"
                                    autocomplete="cc-csc"
                                    required
                                >
                            </div>
                        </div>
                        <!-- QR Code Pix -->
                        <div x-show="forma_pagamento === 'pix'" x-cloak class="mb-4 text-center">
                            <p class="text-sm text-gray-600 mb-2">O QR code será gerado após a finalização da compra</p>
                        </div>

                        <!-- Acessórios -->
                        <div class="mb-4">
                            <h3 class="font-semibold text-gray-800 mb-2">Selecione os acessórios:</h3>
                            <template x-for="(item, index) in acessorios" :key="index">
                                <label class="flex justify-between items-center border-b py-2">
                                    <span x-text="item.nome"></span>
                                    <div class="flex items-center gap-3">
                                        <span class="text-orange-600 font-semibold" x-text="`R$ ${item.preco.toLocaleString()}`"></span>
                                        <input type="checkbox" :name="`acessorios[]`" :value="item.nome" x-model="item.selecionado" class="h-5 w-5 text-orange-600">
                                    </div>
                                </label>
                            </template>
                        </div>

                        <!-- Total -->
                        <div class="border-t pt-3 mb-4 text-right">
                            <p class="text-lg font-bold text-gray-900">
                                Total: <span class="text-orange-600" x-text="`R$ ${total.toLocaleString()}`"></span>
                            </p>
                        </div>

                        <!-- Campo oculto com o valor total -->
                        <input type="hidden" name="total" :value="total">

                        <!-- (Opcional) campo para payment token (se usar gateway -> frontend cria token aqui) -->
                        <input type="hidden" name="payment_token" x-model="payment_token">

                        <!-- Botões -->
                        <div class="flex justify-end gap-3">
                            <button type="button" @click="aberto = false" class="border border-gray-400 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-100">Cancelar</button>
                            <button
                                type="submit"
                                class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-2 rounded-md font-semibold"
                                @click.prevent="handleSubmit($event)"
                            >
                                Confirmar Compra
                            </button>
                        </div>
                    </form>

                        <!-- Fechar -->
                        <button @click="aberto = false" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">✕</button>
                    </div>
                </div>
            </div>


    </main>
</section>
<br>
@endsection
