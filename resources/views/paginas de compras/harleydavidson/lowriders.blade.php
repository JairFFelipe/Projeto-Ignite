@extends('layouts.layout')
@section('content')

<style>[x-cloak]{display:none!important}</style>

<section x-data="{ aba: 'resumo' }" class="mt-[7vh]">

    <!-- Navbar -->
    <div class="flex justify-between items-center p-6 border-b border-gray-200">
        <h1 class="text-xl font-bold text-orange-600 uppercase">Harley-Davidson Low Rider S</h1>
        <nav class="space-x-6 text-sm font-medium text-gray-600">
            <button @click="aba = 'resumo'" :class="aba === 'resumo' ? 'text-orange-600 font-semibold' : 'hover:text-orange-600'">Resumo</button>
            <button @click="aba = 'ficha'" :class="aba === 'ficha' ? 'text-orange-600 font-semibold' : 'hover:text-orange-600'">Ficha Técnica</button>
            <button @click="aba = 'acessorios'" :class="aba === 'acessorios' ? 'text-orange-600 font-semibold' : 'hover:text-orange-600'">Acessórios</button>
        </nav>
        <a href="/harleydavidson">
            <button class="border border-gray-800 hover:bg-gray-200 text-gray-900 px-24 py-3 rounded-md font-semibold text-sm uppercase">
                <div class="flex justify-center items-center gap-2">
                    <img src="{{ asset('img/voltar.png') }}" alt="" class="h-5 w-5">Voltar à Harley-Davidson
                </div>
            </button>
        </a>
    </div>

    <!-- Conteúdo -->
    <main class="max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-12 items-center">

        <!-- COLUNA DE TEXTO -->
        <div class="relative min-h-[500px] mb-[20vh]">
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
                    <h2 class="text-5xl font-extrabold text-gray-900 mb-4">Low Rider S</h2>
                    <p class="uppercase text-sm tracking-widest text-orange-600 font-semibold mb-2">Cruiser / Performance</p>
                    <p class="text-2xl font-bold text-gray-800 mb-6">
                        A partir de <span class="text-orange-600">R$ 125.900,00</span>
                    </p>

                    <div class="flex flex-col gap-4 mb-6">
                        <div class="flex flex-row space-x-5">
                            <button class="border border-gray-800 hover:bg-gray-200 text-gray-900 px-24 py-3 rounded-md font-semibold text-sm uppercase" @click="aba = 'acessorios'">
                                ACESSÓRIOS
                            </button>
                            <button class="border border-gray-800 hover:bg-gray-200 text-gray-900 px-24 py-3 rounded-md font-semibold text-sm uppercase" @click="aba = 'ficha'">
                                FICHA TÉCNICA
                            </button>
                        </div>
                    </div>

                    <p class="text-sm text-gray-600 leading-relaxed">
                        A Harley-Davidson Low Rider S é uma cruiser de alto desempenho, inspirada no estilo club californiano. Equipada com o potente motor Milwaukee-Eight 117, oferece resposta imediata e condução agressiva, equilibrando conforto e performance com visual escurecido e postura imponente.
                    </p>
                </div>

                <!-- FICHA TÉCNICA -->
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
                        Ficha Técnica — Low Rider S
                    </h2>

                    <div class="grid sm:grid-cols-2 gap-6 text-sm text-gray-700">

                        <div class="p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <h3 class="text-lg font-semibold text-orange-600 mb-2">Motor e Transmissão</h3>
                            <ul class="space-y-1">
                                <li><strong>Tipo:</strong> Milwaukee-Eight 117 V-Twin, refrigeração a ar/óleo</li>
                                <li><strong>Cilindrada:</strong> 1.923 cc</li>
                                <li><strong>Potência Máxima:</strong> ~105 cv @ 5.020 rpm</li>
                                <li><strong>Torque Máximo:</strong> ~168 Nm @ 3.500 rpm</li>
                                <li><strong>Transmissão:</strong> 6 marchas</li>
                                <li><strong>Embreagem:</strong> Assistida e deslizante</li>
                            </ul>
                        </div>

                        <div class="p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <h3 class="text-lg font-semibold text-orange-600 mb-2">Chassi e Dimensões</h3>
                            <ul class="space-y-1">
                                <li><strong>Chassi:</strong> Estrutura Softail em aço</li>
                                <li><strong>Comprimento:</strong> 2.355 mm</li>
                                <li><strong>Altura do Assento:</strong> 710 mm</li>
                                <li><strong>Peso em Ordem de Marcha:</strong> 308 kg</li>
                                <li><strong>Tanque de Combustível:</strong> 18,9 litros</li>
                                <li><strong>Distância Entre Eixos:</strong> 1.615 mm</li>
                            </ul>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <h3 class="text-lg font-semibold text-orange-600 mb-2">Suspensão e Freios</h3>
                            <ul class="space-y-1">
                                <li><strong>Dianteira:</strong> Garfo invertido de Ø 43 mm</li>
                                <li><strong>Traseira:</strong> Monoamortecedor ajustável</li>
                                <li><strong>Freio Dianteiro:</strong> Duplo disco de 300 mm com ABS</li>
                                <li><strong>Freio Traseiro:</strong> Disco simples de 292 mm com ABS</li>
                                <li><strong>Pneus:</strong> 110/90-19 (D) | 180/70-16 (T)</li>
                            </ul>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <h3 class="text-lg font-semibold text-orange-600 mb-2">Eletrônica e Equipamentos</h3>
                            <ul class="space-y-1">
                                <li><strong>ABS:</strong> Sim, de canal duplo</li>
                                <li><strong>Controle de Tração:</strong> Sim</li>
                                <li><strong>Iluminação:</strong> Full LED</li>
                                <li><strong>Painel:</strong> Digital LCD integrado</li>
                                <li><strong>Velocidade Máxima:</strong> ~200 km/h (estimada)</li>
                            </ul>
                        </div>

                        <button class="border border-gray-800 hover:bg-gray-200 text-gray-900 px-24 py-3 rounded-md font-semibold text-sm uppercase mb-10" @click="aba = 'resumo'">
                            VOLTAR
                        </button>
                    </div>

                    <p class="text-xs text-gray-500 italic">
                        *Dados técnicos aproximados, baseados em especificações oficiais da Harley-Davidson.
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
                        <div class="flex justify-between items-center w-[34vw] bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <div><h3 class="font-semibold text-gray-900">Escapamento Screamin’ Eagle Performance</h3><p class="text-sm text-gray-500">Mais torque e som agressivo.</p></div>
                            <span class="text-orange-600 font-bold text-lg">R$ 9.900,00</span>
                        </div>

                        <div class="flex justify-between items-center w-[34vw] bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <div><h3 class="font-semibold text-gray-900">Banco Solo Custom</h3><p class="text-sm text-gray-500">Design esportivo com melhor ergonomia.</p></div>
                            <span class="text-orange-600 font-bold text-lg">R$ 3.200,00</span>
                        </div>

                        <div class="flex justify-between items-center w-[34vw] bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <div><h3 class="font-semibold text-gray-900">Filtro de Ar Heavy Breather</h3><p class="text-sm text-gray-500">Performance e visual agressivo.</p></div>
                            <span class="text-orange-600 font-bold text-lg">R$ 2.800,00</span>
                        </div>

                        <div class="flex justify-between items-center w-[34vw] bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <div><h3 class="font-semibold text-gray-900">Manoplas Premium Black</h3><p class="text-sm text-gray-500">Conforto e estilo em acabamento escurecido.</p></div>
                            <span class="text-orange-600 font-bold text-lg">R$ 1.400,00</span>
                        </div>
                    </div>

                    <p class="mt-6 text-xs text-gray-500 italic">
                        *Preços estimados. Sujeitos a alteração sem aviso prévio.
                    </p>
                    <button class="border border-gray-800 hover:bg-gray-200 text-gray-900 px-24 py-3 rounded-md font-semibold text-sm uppercase mt-6" @click="aba = 'resumo'">
                        VOLTAR
                    </button>
                </div>
            </div>
        </div>

        <!-- COLUNA DA IMAGEM E MODAL DE COMPRA -->
        <div class="flex flex-col items-center ml-20">
            <img src="{{ asset('img/harleylowriders.jpg') }}" alt="Harley-Davidson Low Rider S" class="w-full max-w-lg object-contain">
            <p class="mt-2 text-xs text-gray-500">*Imagem meramente ilustrativa</p>

           <div 
                x-data="{
                    aberto: false,
                    cpf: '',
                    cep: '',
                    rua: '',
                    numero: '',
                    bairro: '',
                    cidade: '',
                    estado: '',
                    forma_pagamento: 'cartao',
                    tipo_entrega: 'entrega',
                    acessorios: [
                        { nome: 'Escapamento Screamin’ Eagle Performance', preco: 9900, selecionado: false },
                        { nome: 'Banco Solo Custom', preco: 3200, selecionado: false },
                        { nome: 'Filtro de Ar Heavy Breather', preco: 2800, selecionado: false },
                        { nome: 'Manoplas Premium Black', preco: 1400, selecionado: false }
                    ],
                    precoBase: 125900,
                    get total() {
                        return this.precoBase + this.acessorios.filter(a => a.selecionado).reduce((s, a) => s + a.preco, 0);
                    },
                    handleSubmit(event) {
                        event.preventDefault();
                        const pedido = {
                            moto: 'lowriders',
                            cpf: this.cpf,
                            tipo_entrega: this.tipo_entrega,
                            endereco: this.tipo_entrega === 'entrega' ? {
                                cep: this.cep,
                                rua: this.rua,
                                numero: this.numero,
                                bairro: this.bairro,
                                cidade: this.cidade,
                                estado: this.estado
                            } : null,
                            forma_pagamento: this.forma_pagamento,
                            total: this.total,
                            acessorios: this.acessorios.filter(a => a.selecionado),
                        };
                        localStorage.setItem('pedido', JSON.stringify(pedido));
                        this.aberto = false;
                        window.location.href = '/pedido';
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

                    <form action="" method="post">
                        @csrf

                        <!-- Dados do comprador -->
                        <div class="space-y-3 mb-4">
                            <input type="text" name="cpf" x-model="cpf" placeholder="CPF" required class="w-full border p-2 rounded-md" maxlength="14">
                        </div>

                        <!-- Tipo de entrega -->
                        <div class="mb-4">
                            <label class="font-semibold text-gray-800 block mb-2">Forma de recebimento:</label>
                            <div class="flex gap-6">
                                <label class="flex items-center gap-2">
                                    <input type="radio" value="retirada" x-model="tipo_entrega">
                                    Retirada na loja
                                </label>
                                <label class="flex items-center gap-2">
                                    <input type="radio" value="entrega" x-model="tipo_entrega" checked>
                                    Entrega à domicílio
                                </label>
                            </div>
                        </div>

                        <!-- Endereço -->
                        <div class="space-y-3 mb-4">
                            <h3 class="font-semibold text-gray-800 mb-2">Endereço de Entrega</h3>

                            <input type="text" id="cep" name="cep" placeholder="CEP" maxlength="9"
                                x-model="cep"
                                :disabled="tipo_entrega === 'retirada'"
                                :required="tipo_entrega === 'entrega'"
                                :class="tipo_entrega === 'retirada'
                                    ? 'bg-gray-100 text-gray-400 cursor-not-allowed border-gray-300'
                                    : 'bg-white text-gray-900'"
                                class="w-full border p-2 rounded-md transition">

                            <input type="text" id="rua" name="rua" placeholder="Rua"
                                x-model="rua"
                                :disabled="tipo_entrega === 'retirada'"
                                :required="tipo_entrega === 'entrega'"
                                :class="tipo_entrega === 'retirada'
                                    ? 'bg-gray-100 text-gray-400 cursor-not-allowed border-gray-300'
                                    : 'bg-white text-gray-900'"
                                class="w-full border p-2 rounded-md transition">

                            <input type="text" name="numero" placeholder="Número"
                                x-model="numero"
                                :disabled="tipo_entrega === 'retirada'"
                                :required="tipo_entrega === 'entrega'"
                                :class="tipo_entrega === 'retirada'
                                    ? 'bg-gray-100 text-gray-400 cursor-not-allowed border-gray-300'
                                    : 'bg-white text-gray-900'"
                                class="w-full border p-2 rounded-md transition">

                            <input type="text" id="bairro" name="bairro" placeholder="Bairro"
                                x-model="bairro"
                                :disabled="tipo_entrega === 'retirada'"
                                :class="tipo_entrega === 'retirada'
                                    ? 'bg-gray-100 text-gray-400 cursor-not-allowed border-gray-300'
                                    : 'bg-white text-gray-900'"
                                class="w-full border p-2 rounded-md transition">

                            <div class="grid grid-cols-2 gap-2">
                                <input type="text" id="cidade" name="cidade" placeholder="Cidade"
                                    x-model="cidade"
                                    :disabled="tipo_entrega === 'retirada'"
                                    :required="tipo_entrega === 'entrega'"
                                    :class="tipo_entrega === 'retirada'
                                        ? 'bg-gray-100 text-gray-400 cursor-not-allowed border-gray-300'
                                        : 'bg-white text-gray-900'"
                                    class="w-full border p-2 rounded-md transition">

                                <input type="text" id="estado" name="estado" placeholder="Estado" maxlength="2"
                                    x-model="estado"
                                    :disabled="tipo_entrega === 'retirada'"
                                    :required="tipo_entrega === 'entrega'"
                                    :class="tipo_entrega === 'retirada'
                                        ? 'bg-gray-100 text-gray-400 cursor-not-allowed border-gray-300'
                                        : 'bg-white text-gray-900'"
                                    class="w-full border p-2 rounded-md uppercase transition">
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
        </div>
    </main>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {

    const cepInput = document.getElementById('cep');

    function atualizarInput(id, valor) {
        const el = document.getElementById(id);
        el.value = valor;
        el.dispatchEvent(new Event('input')); // <-- Atualiza x-model corretamente
    }

    cepInput.addEventListener('blur', async () => {
        let cep = cepInput.value.replace(/\D/g, "");

        if (cep.length !== 8) return;

        try {
            const resposta = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
            const dados = await resposta.json();

            if (dados.erro) return;

            atualizarInput('rua', dados.logradouro);
            atualizarInput('bairro', dados.bairro);
            atualizarInput('cidade', dados.localidade);
            atualizarInput('estado', dados.uf);

        } catch (e) {
            console.error("Erro ao consultar CEP:", e);
        }
    });
});
</script>

@endsection