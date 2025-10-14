@extends('layouts.layout')
@section('content')
    <section class="flex justify-between items-center p-6 border-b border-gray-200 mt-[7vh]">
        <h1 class="text-xl font-bold text-orange-600 uppercase">Kawasaki Ninja H2R</h1>
        <nav class="space-x-6 text-sm font-medium text-gray-600">
        <a href="#" class="hover:text-orange-600">Resumo</a>
        <a href="#" class="hover:text-orange-600">Modelos</a>
        <a href="#" class="hover:text-orange-600">Ficha Técnica</a>
        <a href="#" class="hover:text-orange-600">Acessórios</a>
        </nav>
        <button class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-md font-semibold">
        Ir para à compra
        </button>
    </section>

  <!-- Main -->
    <main class="max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-12 items-center">
    
        <!-- Texto -->
        <div>
        <h2 class="text-5xl font-extrabold text-gray-900 mb-4">NINJA H2R</h2>
        <p class="uppercase text-sm tracking-widest text-orange-600 font-semibold mb-2">Carbon Edition</p>
        <p class="text-2xl font-bold text-gray-800 mb-6">A partir de <span class="text-orange-600">R$ 570.000,00</span></p>
        
        <div class="flex flex-col sm:flex-row gap-4 mb-6">
            <button class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-md font-semibold text-sm uppercase">
            IR PARA À COMPRA
            </button>
            <button class="border border-gray-800 hover:bg-gray-100 text-gray-900 px-6 py-3 rounded-md font-semibold text-sm uppercase">
            ESPECIFICAÇÕES
            </button>
        </div>
        
        <p class="text-sm text-gray-600 leading-relaxed">
            A Kawasaki Ninja H2R é a hipermoto definitiva, equipada com motor supercharger de 998 cc e mais de 300 cv de potência.
            Construída para desempenho extremo em pista fechada, representa o auge da engenharia e do design Kawasaki.
        </p>
        </div>

        <!-- Imagem -->
        <div class="flex flex-col items-center">
        <img src="{{ asset('img/kawasakisell.jpg') }}" alt="Kawasaki Ninja H2R" class="w-full max-w-lg object-contain">
        <p class="mt-2 text-xs text-gray-500">*Imagem meramente ilustrativa</p>

        <!-- Seletor de cor -->
        <div class="flex space-x-4 mt-4">
            <div class="w-6 h-6 rounded-full bg-gray-900 border-2 border-gray-400"></div>
        </div>
        </div>

    </main>

@endsection