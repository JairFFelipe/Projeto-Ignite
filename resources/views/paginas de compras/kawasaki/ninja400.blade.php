@extends('layouts.layout')
@section('content')

<style>[x-cloak]{display:none!important}</style>

<section x-data="{ aba: 'resumo' }" class="mt-[7vh]">

    <!-- Navbar -->
    <div class="flex justify-between items-center p-6 border-b border-gray-200">
        <h1 class="text-xl font-bold text-orange-600 uppercase">Kawasaki Ninja 400</h1>
        <nav class="space-x-6 text-sm font-medium text-gray-600">
            <button @click="aba = 'resumo'" :class="aba === 'resumo' ? 'text-orange-600 font-semibold' : 'hover:text-orange-600'">Resumo</button>
            <button @click="aba = 'ficha'" :class="aba === 'ficha' ? 'text-orange-600 font-semibold' : 'hover:text-orange-600'">Ficha Técnica</button>
            <button @click="aba = 'acessorios'" :class="aba === 'acessorios' ? 'text-orange-600 font-semibold' : 'hover:text-orange-600'">Acessórios</button>
        </nav>
        <a href="/kawasaki">
            <button class="border border-gray-800 hover:bg-gray-200 text-gray-900 px-24 py-3 rounded-md font-semibold text-sm uppercase">
                <div class="flex justify-center items-center gap-2">
                    <img src="{{ asset('img/voltar.png') }}" alt="" class="h-5 w-5">Voltar à Kawasaki
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
                    <h2 class="text-5xl font-extrabold text-gray-900 mb-4">NINJA 400</h2>
                    <p class="uppercase text-sm tracking-widest text-orange-600 font-semibold mb-2">Sport / Street</p>
                    <p class="text-2xl font-bold text-gray-800 mb-6">
                        A partir de <span class="text-orange-600">R$ 38.910,00</span>
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
                        A Kawasaki Ninja 400 combina leveza, agilidade e eficiência. Seu motor bicilíndrico de 399 cc oferece
                        excelente resposta e controle, tornando-a ideal tanto para iniciantes quanto para pilotos experientes
                        que buscam desempenho equilibrado.
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
                        Ficha Técnica — Ninja 400
                    </h2>

                    <div class="grid sm:grid-cols-2 gap-6 text-sm text-gray-700">

                        <div class="p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <h3 class="text-lg font-semibold text-orange-600 mb-2">Motor e Transmissão</h3>
                            <ul class="space-y-1">
                                <li><strong>Tipo:</strong> 2 cilindros paralelos, DOHC, 8 válvulas, refrigeração líquida</li>
                                <li><strong>Cilindrada:</strong> 399 cc</li>
                                <li><strong>Potência Máxima:</strong> 48 cv @ 10.000 rpm</li>
                                <li><strong>Torque Máximo:</strong> 3,9 kgf·m @ 8.000 rpm</li>
                                <li><strong>Transmissão:</strong> 6 marchas</li>
                                <li><strong>Embreagem:</strong> Assistida e deslizante</li>
                            </ul>
                        </div>

                        <div class="p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <h3 class="text-lg font-semibold text-orange-600 mb-2">Chassi e Dimensões</h3>
                            <ul class="space-y-1">
                                <li><strong>Chassi:</strong> Treliça em aço de alta resistência</li>
                                <li><strong>Comprimento × Largura × Altura:</strong> 1.990 × 710 × 1.120 mm</li>
                                <li><strong>Altura do Assento:</strong> 785 mm</li>
                                <li><strong>Peso em Ordem de Marcha:</strong> 168 kg</li>
                                <li><strong>Tanque de Combustível:</strong> 14 litros</li>
                                <li><strong>Distância Entre Eixos:</strong> 1.370 mm</li>
                            </ul>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <h3 class="text-lg font-semibold text-orange-600 mb-2">Suspensão e Freios</h3>
                            <ul class="space-y-1">
                                <li><strong>Dianteira:</strong> Garfo telescópico de 41 mm</li>
                                <li><strong>Traseira:</strong> Monoamortecedor com ajuste de pré-carga</li>
                                <li><strong>Freios Dianteiros:</strong> Disco de 310 mm, pinça dupla</li>
                                <li><strong>Freio Traseiro:</strong> Disco de 220 mm</li>
                                <li><strong>Pneus:</strong> 110/70 R17 (D) | 150/60 R17 (T)</li>
                            </ul>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <h3 class="text-lg font-semibold text-orange-600 mb-2">Eletrônica e Equipamentos</h3>
                            <ul class="space-y-1">
                                <li><strong>ABS:</strong> Sim</li>
                                <li><strong>Iluminação:</strong> Total LED</li>
                                <li><strong>Painel:</strong> LCD multifuncional</li>
                                <li><strong>Velocidade Máxima:</strong> ~190 km/h (estimada)</li>
                            </ul>
                        </div>

                        <button class="border border-gray-800 hover:bg-gray-200 text-gray-900 px-24 py-3 rounded-md font-semibold text-sm uppercase mb-10" @click="aba = 'resumo'">
                            VOLTAR
                        </button>
                    </div>
                    <p class="text-xs text-gray-500 italic">
                        *Informações baseadas em dados oficiais Kawasaki Brasil — modelo 2025.
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
                            <div>
                                <h3 class="font-semibold text-gray-900">Capa Personalizada Ninja 400</h3>
                                <p class="text-sm text-gray-500">Proteção completa contra poeira e riscos, sob medida.</p>
                            </div>
                            <span class="text-orange-600 font-bold text-lg">R$ 950,00</span>
                        </div>

                        <div class="flex justify-between items-center w-[34vw] bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <div>
                                <h3 class="font-semibold text-gray-900">Kit de Performance Akrapovič</h3>
                                <p class="text-sm text-gray-500">Escape esportivo leve com ganho de torque e som característico.</p>
                            </div>
                            <span class="text-orange-600 font-bold text-lg">R$ 5.890,00</span>
                        </div>

                        <div class="flex justify-between items-center w-[34vw] bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <div>
                                <h3 class="font-semibold text-gray-900">Protetores Laterais de Carenagem</h3>
                                <p class="text-sm text-gray-500">Minimiza danos em quedas leves com design discreto.</p>
                            </div>
                            <span class="text-orange-600 font-bold text-lg">R$ 890,00</span>
                        </div>

                        <div class="flex justify-between items-center w-[34vw] bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <div>
                                <h3 class="font-semibold text-gray-900">Capacete Kawasaki Sport Edition</h3>
                                <p class="text-sm text-gray-500">Modelo leve com ventilação eficiente e viseira antirrisco.</p>
                            </div>
                            <span class="text-orange-600 font-bold text-lg">R$ 2.390,00</span>
                        </div>
                    </div>

                    <p class="mt-6 text-xs text-gray-500 italic">
                        *Preços sugeridos estimados. Sujeitos a alteração sem aviso prévio.
                    </p>
                    <button class="border border-gray-800 hover:bg-gray-200 text-gray-900 px-24 py-3 rounded-md font-semibold text-sm uppercase mt-6" @click="aba = 'resumo'">
                        VOLTAR
                    </button>
                </div>
            </div>
        </div>

        <!-- COLUNA IMAGEM E BOTÃO DE COMPRA -->
        <div class="flex flex-col items-center">
            <img src="{{ asset('img/kawasakininja400.jpg') }}" alt="Kawasaki Ninja 400" class="w-full max-w-lg object-contain">
            <p class="mt-2 text-xs text-gray-500">*Imagem meramente ilustrativa</p>

            <!-- MODAL DE COMPRA -->
            <div 
                x-data="{
                    aberto: false,
                    forma_pagamento: 'cartao',
                    acessorios: [
                        { nome: 'Capa Personalizada Ninja 400', preco: 950, selecionado: false },
                        { nome: 'Kit de Performance Akrapovič', preco: 5890, selecionado: false },
                        { nome: 'Protetores Laterais de Carenagem', preco: 890, selecionado: false },
                        { nome: 'Capacete Kawasaki Sport Edition', preco: 2390, selecionado: false }
                    ],
                    precoBase: 38910,
                    get total() {
                        return this.precoBase + this.acessorios.filter(a => a.selecionado).reduce((s, a) => s + a.preco, 0);
                    }
                }"
            >

                <!-- BOTÃO -->
                <button 
                    @click="aberto = true"
                    class="mt-6 bg-orange-600 hover:bg-orange-700 ease-in-out duration-300 text-white px-40 py-3 rounded-md font-semibold uppercase tracking-wide">
                    Ir para à compra
                </button>

                <!-- MODAL -->
                <div 
                    x-show="aberto"
                    x-cloak
                    class="fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center z-50"
                    x-transition
                >
                    <div 
                        class="bg-white w-[90vw] max-w-lg p-6 rounded-2xl shadow-2xl relative max-h-[80vh] overflow-y-auto"
                        @click.away="aberto = false"
                    >
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Finalizar Compra</h2>

                        <form method="POST" action="" novalidate>
                            @csrf

                            <div class="space-y-3 mb-4">
                                <input type="text" name="cpf" placeholder="CPF" required class="w-full border p-2 rounded-md" maxlength="14">
                            </div>

                            <div class="space-y-3 mb-4">
                                <h3 class="font-semibold text-gray-800 mb-2">Endereço de Entrega</h3>
                                <input type="text" name="cep" placeholder="CEP" required maxlength="9" class="w-full border p-2 rounded-md">
                                <input type="text" name="rua" placeholder="Rua" required class="w-full border p-2 rounded-md">
                                <input type="text" name="numero" placeholder="Número" required class="w-full border p-2 rounded-md">
                                <input type="text" name="bairro" placeholder="Bairro" class="w-full border p-2 rounded-md">
                                <div class="grid grid-cols-2 gap-2">
                                    <input type="text" name="cidade" placeholder="Cidade" required class="w-full border p-2 rounded-md">
                                    <input type="text" name="estado" placeholder="Estado" maxlength="2" required class="w-full border p-2 rounded-md uppercase">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="font-semibold text-gray-800 block mb-2">Forma de pagamento:</label>
                                <select name="forma_pagamento" x-model="forma_pagamento" class="w-full border p-2 rounded-md">
                                    <option value="cartao">Cartão de Crédito</option>
                                    <option value="pix">PIX</option>
                                </select>
                            </div>

                            <div x-show="forma_pagamento === 'cartao'" x-cloak class="mb-4 space-y-3">
                                <p class="text-sm text-gray-600">Informações do cartão</p>
                                <input type="text" name="card_number" placeholder="Número do cartão" maxlength="19" class="w-full border p-2 rounded-md">
                                <input type="text" name="card_expiry" placeholder="Validade (MM/AA)" maxlength="5" class="w-full border p-2 rounded-md">
                                <input type="text" name="card_cvv" placeholder="CVV" maxlength="4" class="w-full border p-2 rounded-md">
                            </div>

                            <div x-show="forma_pagamento === 'pix'" x-cloak class="mb-4 text-center">
                                <p class="text-sm text-gray-600 mb-2">O QR code será gerado após a finalização da compra</p>
                            </div>

                            <div class="mb-4">
                                <h3 class="font-semibold text-gray-800 mb-2">Selecione os acessórios:</h3>
                                <template x-for="(item, i) in acessorios" :key="i">
                                    <label class="flex justify-between items-center border-b py-2">
                                        <span x-text="item.nome"></span>
                                        <div class="flex items-center gap-3">
                                            <span class="text-orange-600 font-semibold" x-text="`R$ ${item.preco.toLocaleString()}`"></span>
                                            <input type="checkbox" x-model="item.selecionado" class="h-5 w-5 text-orange-600">
                                        </div>
                                    </label>
                                </template>
                            </div>

                            <div class="border-t pt-3 mb-4 text-right">
                                <p class="text-lg font-bold text-gray-900">
                                    Total: <span class="text-orange-600" x-text="`R$ ${total.toLocaleString()}`"></span>
                                </p>
                            </div>

                            <div class="flex justify-end gap-3">
                                <button type="button" @click="aberto = false" class="border px-4 py-2 rounded-md text-gray-700 hover:bg-gray-100">
                                    Cancelar
                                </button>
                                <button type="submit" class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-2 rounded-md font-semibold">
                                    Finalizar Compra
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</section>

@endsection