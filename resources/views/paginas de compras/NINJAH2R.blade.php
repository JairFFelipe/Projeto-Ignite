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
            <button @click="aba = 'modelos'" :class="aba === 'modelos' ? 'text-orange-600 font-semibold' : 'hover:text-orange-600'">Modelos</button>
            <button @click="aba = 'ficha'" :class="aba === 'ficha' ? 'text-orange-600 font-semibold' : 'hover:text-orange-600'">Ficha Técnica</button>
            <button @click="aba = 'acessorios'" :class="aba === 'acessorios' ? 'text-orange-600 font-semibold' : 'hover:text-orange-600'">Acessórios</button>
        </nav>
        <button class="bg-orange-600 hover:bg-orange-700 ease-in-out duration-300 text-white px-4 py-2 rounded-md font-semibold">
            Ir para à compra
        </button>
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
                    <div class="flex flex-col sm:flex-row gap-4 mb-6">
                        <button class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-md font-semibold text-sm uppercase">
                            IR PARA À COMPRA
                        </button>
                        <button class="border border-gray-800 hover:bg-gray-200 text-gray-900 px-6 py-3 rounded-md font-semibold text-sm uppercase" @click="aba = 'ficha'">
                            ESPECIFICAÇÕES
                        </button>
                    </div>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        A Kawasaki Ninja H2R é a hipermoto definitiva, equipada com motor supercharger de 998 cc e mais de 300 cv de potência.
                        Construída para desempenho extremo em pista fechada, representa o auge da engenharia e do design Kawasaki.
                    </p>
                </div>

                <!-- MODELOS -->
                <div
                    x-cloak
                    x-show="aba === 'modelos'"
                    x-transition:enter="transition ease-out duration-500 delay-100"
                    x-transition:enter-start="opacity-0 -translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-400"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-10"
                    class="absolute inset-0"
                >
                    <h2 class="text-3xl font-bold mb-4">Outros modelos da linha H2</h2>
                    <ul class="list-disc ml-6 text-gray-700 space-y-2">
                        <li>Ninja H2 Carbon</li>
                        <li>Ninja H2 SX SE</li>
                        <li>Ninja H2 SX SE+</li>
                    </ul>
                    <p class="mt-4 text-sm text-gray-600">
                        Cada modelo oferece variações de conforto, aerodinâmica e potência, mantendo a essência da série H2.
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
                    <h2 class="text-3xl font-bold mb-4">Acessórios Disponíveis</h2>
                    <ul class="text-sm text-gray-700 space-y-2">
                        <li>Capa personalizada H2R</li>
                        <li>Kit de performance com escapamento Akrapovič</li>
                        <li>Protetores laterais de carenagem</li>
                        <li>Capacete Kawasaki Carbon Edition</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- COLUNA DA IMAGEM -->
        <div class="flex flex-col items-center">
            <img src="{{ asset('img/kawasakininjah2r.png') }}" alt="Kawasaki Ninja H2R" class="w-full max-w-lg object-contain">
            <p class="mt-2 text-xs text-gray-500">*Imagem meramente ilustrativa</p>
        </div>

    </main>
</section>
@endsection
