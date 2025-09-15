@extends('layouts.layout')
@section('content')
    <style>[x-cloak]{display:none;}</style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <section>
        <div
            x-data='{
            slides: @json([ asset("img/perfilburro.jpg"), asset("img/motos.png"), asset("img/gatoburro.png") ]),
            active: 0
            }'
            class="relative w-full h-[93vh] overflow-hidden shadow-lg"
        >
            <!-- Slides -->
            <template x-for="(slide, index) in slides" :key="index">
            <div x-show="active === index" x-cloak class="w-full h-[100vh] bg-gray-200 flex items-center justify-center">
                <img :src="slide" class="w-full h-full object-cover" alt="" />
            </div>
            </template>

            <!-- Prev -->
            <button
            type="button"
            @click="active = (active === 0) ? slides.length - 1 : active - 1"
            class="absolute left-2 top-1/2 -translate-y-1/2 bg-black/50 text-white p-2 rounded-full"
            aria-label="Previous"
            >‹</button>

            <!-- Next -->
            <button
            type="button"
            @click="active = (active === slides.length - 1) ? 0 : active + 1"
            class="absolute right-2 top-1/2 -translate-y-1/2 bg-black/50 text-white p-2 rounded-full"
            aria-label="Next"
            >›</button>

            <!-- Indicators -->
            <div class="absolute bottom-3 w-full flex justify-center space-x-2">
            <template x-for="(slide, index) in slides" :key="index">
                <button
                type="button"
                class="w-3 h-3 rounded-full"
                :class="active === index ? 'bg-white' : 'bg-gray-400'"
                @click="active = index"
                :aria-current="active === index"
                ></button>
            </template>
            </div>
        </div>
    </section>

    <section>
        <div class="w-full bg-gray-900 text-white flex justify-center items-center divide-x divide-gray-700">
            
            <!-- Item 1 -->
            <a href="#"
                class="flex items-center justify-center flex-1 py-4 gap-2 hover:bg-gray-800 transition">
                <!-- Ícone de sliders (ajustes) -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M12 4v16m6-8H6" />
                </svg>
                <span class="text-sm font-semibold">MONTE SUA MOTO</span>
            </a>

            <!-- Item 2 -->
            <a href="#"
                class="flex items-center justify-center flex-1 py-4 gap-2 hover:bg-gray-800 transition">
                <!-- Ícone de capacete (simulação com um círculo/outline) -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4a8 8 0 100 16 8 8 0 000-16z" />
                </svg>
                <span class="text-sm font-semibold">TEST DRIVE</span>
            </a>

            <!-- Item 3 -->
            <a href="#"
                class="flex items-center justify-center flex-1 py-4 gap-2 hover:bg-gray-800 transition">
                <!-- Ícone de ferramentas -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12h.01M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <span class="text-sm font-semibold">AGENDE UM SERVIÇO</span>
            </a>
        </div>
    </section>

    <section class="py-16 px-8">
        <!-- Títulos -->
        <div class="text-center mb-12">
            <h2 class="text-2xl font-bold">BEM-VINDO AO IGNITE</h2>
            <p class="mt-4 text-lg font-semibold">ONDE VOCÊ PODE ACENDER SUA CHAMA COM UMA MOTO</p>
        </div>

        <!-- Grid de Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

            <!-- Card 1 -->
            <div>
            <img src="{{ asset('img/card1.jpg') }}" alt="img" class="w-full h-56 object-cover">
            <h3 class="mt-4 text-lg font-bold">LOREM</h3>
            <p class="mt-2 text-sm text-gray-700">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt porro architecto, aut facilis vel voluptates sapiente molestias, culpa repellat non voluptatibus facere odio, quidem tempore modi sit excepturi totam deserunt.
            </p>
            <a href="#" class="mt-3 inline-block text-xs font-bold uppercase hover:underline">DESCUBRA MAIS →</a>
            </div>

            <!-- Card 2 -->
            <div>
            <img src="{{ asset('img/card2.jpg') }}" alt="img" class="w-full h-56 object-cover">
            <h3 class="mt-4 text-lg font-bold">IPSUM</h3>
            <p class="mt-2 text-sm text-gray-700">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae assumenda eligendi, quas ipsam ab at, excepturi labore debitis quaerat ullam fugiat quisquam corporis repudiandae aliquam explicabo laboriosam alias odit doloribus!
            </p>
            <a href="#" class="mt-3 inline-block text-xs font-bold uppercase hover:underline">DESCUBRA MAIS →</a>
            </div>

            <!-- Card 3 -->
            <div>
            <img src="{{ asset('img/card3.jpg') }}" alt="img" class="w-full h-56 object-cover">
            <h3 class="mt-4 text-lg font-bold">DOLOR</h3>
            <p class="mt-2 text-sm text-gray-700">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus, voluptas, nihil delectus pariatur vero asperiores consequuntur fuga, modi omnis at facere beatae reiciendis minus impedit aliquam doloribus ab laborum ipsam!
            </p>
            <a href="#" class="mt-3 inline-block text-xs font-bold uppercase hover:underline">DESCUBRA MAIS →</a>
            </div>

        </div>
    </section>
@endsection