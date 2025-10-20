@extends('layouts.layout')
@section('content')

<!-- Estilo global para esconder antes do Alpine iniciar -->
<style>[x-cloak]{display:none!important}</style>

<section x-data="{ aba: 'resumo' }" class="mt-[7vh]">

    <!-- Navbar -->
    <div class="flex justify-between items-center p-6 border-b border-gray-200">
        <h1 class="text-xl font-bold text-orange-600 uppercase">Kawasaki Ninja 1000SX</h1>
        <nav class="space-x-6 text-sm font-medium text-gray-600">
            <button @click="aba = 'resumo'" :class="aba === 'resumo' ? 'text-orange-600 font-semibold' : 'hover:text-orange-600'">Resumo</button>
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
                    <h2 class="text-5xl font-extrabold text-gray-900 mb-4">NINJA 1000SX</h2>
                    <p class="uppercase text-sm tracking-widest text-orange-600 font-semibold mb-2">Sport Touring Edition</p>
                    <p class="text-2xl font-bold text-gray-800 mb-6">
                        A partir de <span class="text-orange-600">R$ 73.975,00</span>
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
                        <button class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-md font-semibold text-sm uppercase">
                            IR PARA À COMPRA
                        </button>
                    </div>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        A Kawasaki Ninja 1000SX combina desempenho de quatro cilindros de 1.043 cc com refinamento touring — oferecendo potência, tecnologia e conforto para longas distâncias e pilotagem esportiva.
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
                        Ficha Técnica — Ninja 1000SX
                    </h2>

                    <div class="grid sm:grid-cols-2 gap-6 text-sm text-gray-700">

                        <!-- MOTOR E TRANSMISSÃO -->
                        <div class=" p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <h3 class="text-lg font-semibold text-orange-600 mb-2">Motor e Transmissão</h3>
                            <ul class="space-y-1">
                                <li><strong>Tipo:</strong> 4 cilindros em linha, DOHC, 16 válvulas, refrigeração líquida</li>
                                <li><strong>Cilindrada:</strong> 1.043 cc</li>
                                <li><strong>Transmissão:</strong> 6 marchas, retorno</li>
                                <li><strong>Sistema de embraiagem:</strong> Assistida / deslizante (modelo internacional) — confirmar versão Brasil</li>
                            </ul>
                        </div>

                        <!-- CHASSI E DIMENSÕES -->
                        <div class="p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <h3 class="text-lg font-semibold text-orange-600 mb-2">Chassi e Dimensões</h3>
                            <ul class="space-y-1">
                                <li><strong>Altura do Assento:</strong> ~820 mm</li>
                                <li><strong>Capacidade do Tanque:</strong> ~19 litros</li>
                                <li><strong>Tipo de quadro:</strong> Alumínio ou treliça (verificar versão Brasil)</li>
                            </ul>
                        </div>

                        <!-- SUSPENSÃO E FREIOS -->
                        <div class="bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <h3 class="text-lg font-semibold text-orange-600 mb-2">Suspensão e Freios</h3>
                            <ul class="space-y-1">
                                <li><strong>Dianteira:</strong> Garfo invertido 41 mm ajustável</li>
                                <li><strong>Traseira:</strong> Mono-choque ajustável</li>
                                <li><strong>Freios Dianteiros:</strong> Disco duplo 300 mm (aproximado) / modelo internacional</li>
                            </ul>
                        </div>

                        <!-- ELETRÔNICA E DESEMPENHO -->
                        <div class="bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition">
                            <h3 class="text-lg font-semibold text-orange-600 mb-2">Eletrônica e Desempenho</h3>
                            <ul class="space-y-1">
                                <li><strong>Modos de pilotagem:</strong> Vários (incluso controle de tração, quick-shifter) :contentReference[oaicite:1]{index=1}</li>
                                <li><strong>Preço estimado Brasil:</strong> ~R$ 73.975 para o modelo 2024. :contentReference[oaicite:2]{index=2}</li>
                            </ul>
                        </div>

                    </div>

                    <p class="mt‐6 text-xs text-gray-500 italic">
                        *Informações para referência — dê preferência aos dados da concessionária para versão brasileira.
                    </p>
                    <button class="border border-gray-800 hover:bg-gray-200 text-gray-900 px-24 py-3 rounded-md font-semibold text-sm uppercase mt-5" @click="aba = 'resumo'">
                                VOLTAR
                    </button>
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
                        <div class="flex justify-between items-center bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition w-[34vw]">
                            <div>
                                <h3 class="font-semibold text-gray-900">Capa Personalizada 1000SX</h3>
                                <p class="text-sm text-gray-500">Capa sob medida para a Ninja 1000SX — proteção e estilo.</p>
                            </div>
                            <span class="text-orange-600 font-bold text-lg">R$ 1.290,00</span>
                        </div>

                        <!-- Acessório 2 -->
                        <div class="flex justify-between items-center bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition w-[34vw]">
                            <div>
                                <h3 class="font-semibold text-gray-900">Kit de Performance 1000SX</h3>
                                <p class="text-sm text-gray-500">Escapamento esportivo e melhorias de torque para o touring esportivo.</p>
                            </div>
                            <span class="text-orange-600 font-bold text-lg">R$ 9.850,00</span>
                        </div>

                        <!-- Acessório 3 -->
                        <div class="flex justify-between items-center bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition w-[34vw]">
                            <div>
                                <h3 class="font-semibold text-gray-900">Protetores Laterais de Carenagem</h3>
                                <p class="text-sm text-gray-500">Proteção lateral discreta, ideal para touring e estrada.</p>
                            </div>
                            <span class="text-orange-600 font-bold text-lg">R$ 1.790,00</span>
                        </div>

                        <!-- Acessório 4 -->
                        <div class="flex justify-between items-center bg-gray-50 p-4 rounded-2xl shadow-sm hover:shadow-md transition w-[34vw]">
                            <div>
                                <h3 class="font-semibold text-gray-900">Capacete Kawasaki Carbon Edition</h3>
                                <p class="text-sm text-gray-500">Modelo premium em fibra de carbono — combina com a identidade 1000SX.</p>
                            </div>
                            <span class="text-orange-600 font-bold text-lg">R$ 4.590,00</span>
                        </div>

                    </div>

                    <p class="mt-6 text-xs text-gray-500 italic">
                        *Preços sugeridos pela Kawasaki Brasil. Sujeitos a alteração sem aviso prévio.
                    </p>
                    <button class="border border-gray-800 hover:bg-gray-200 text-gray-900 px-24 py-3 rounded-md font-semibold text-sm uppercase mt-5" @click="aba = 'resumo'">
                                VOLTAR
                    </button>
                </div>

            </div>
        </div>

        <!-- COLUNA DA IMAGEM -->
        <div class="flex flex-col items-center">
            <img src="{{ asset('img/kawasakininja1000sx.jpg') }}" alt="Kawasaki Ninja 1000SX" class="w-full max-w-lg object-contain">
            <p class="mt-2 text-xs text-gray-500">*Imagem meramente ilustrativa</p>
        </div>

    </main>
</section>
@endsection