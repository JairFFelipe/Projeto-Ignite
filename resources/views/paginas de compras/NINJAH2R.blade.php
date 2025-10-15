@extends('layouts.layout')
@section('content')
    <section x-data="{ aba: 'resumo' }" class="mt-[7vh]">

    <!-- Navbar secundária -->
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

    <!-- CONTEÚDO DAS ABAS -->
    <main class="max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-12 items-center">

        <!-- RESUMO -->
        <template x-if="aba === 'resumo'">
            <div
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-4"
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
        </template>

        <!-- MODELOS -->
        <template x-if="aba === 'modelos'">
            <div
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-4"
            >

                <h2 class="text-3xl font-bold mb-4">Outros modelos da linha H2</h2>
                <ul class="list-disc ml-6 text-gray-700 space-y-2">
                    <li>Ninja H2 Carbon</li>
                    <li>Ninja H2 SX SE</li>
                    <li>Ninja H2 SX SE+</li>
                </ul>
                <p class="mt-4 text-sm text-gray-600">Cada modelo oferece variações de conforto, aerodinâmica e potência, mantendo a essência da série H2.</p>

            </div>
        </template>

        <!-- FICHA -->
        <template x-if="aba === 'ficha'">
            <div
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-4"
            >

                <h2 class="text-3xl font-bold mb-4">Ficha Técnica</h2>
                <ul class="text-sm text-gray-700 space-y-2">
                    <li><strong>Motor:</strong> 998 cc, 4 cilindros, supercharger</li>
                    <li><strong>Potência:</strong> +300 cv</li>
                    <li><strong>Transmissão:</strong> 6 marchas, quickshifter</li>
                    <li><strong>Peso:</strong> 216 kg</li>
                    <li><strong>Chassi:</strong> Treliça em aço de alta resistência</li>
                </ul>

            </div>
        </template>

        <!-- ACESSÓRIOS -->
        <template x-if="aba === 'acessorios'">
            <div
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-4"
            >

                <div x-show="aba === 'acessorios'" x-transition>
                <h2 class="text-3xl font-bold mb-4">Acessórios Disponíveis</h2>
                <ul class="text-sm text-gray-700 space-y-2">
                    <li>Capa personalizada H2R</li>
                    <li>Kit de performance com escapamento Akrapovič</li>
                    <li>Protetores laterais de carenagem</li>
                    <li>Capacete Kawasaki Carbon Edition</li>
                </ul>

            </div>
        </template>

        <!-- IMAGEM -->
        <div class="flex flex-col items-center">
        <img src="{{ asset('img/kawasakininjah2r.png') }}" alt="Kawasaki Ninja H2R" class="w-full max-w-lg object-contain">
        <p class="mt-2 text-xs text-gray-500">*Imagem meramente ilustrativa</p>
        <div class="flex space-x-4 mt-4">
            <div class="w-6 h-6 rounded-full bg-gray-900 border-2 border-gray-400"></div>
        </div>
        </div>

    </main>
    </section>
@endsection