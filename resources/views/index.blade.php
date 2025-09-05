<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<!--Header inicio-->
    <header class="flex w-fit">
        <div class="flex text-white bg-black w-screen h-[7vh] items-center px-10 justify-between ">
            <div class="flex w-fit h-[7vh] items-center space-x-10 font-semibold">    
                <div class="flex">
                    <img src="{{ asset('img/gatoburro.png') }}" alt="Logo" class="h-10 w-40">
                </div>

                <div class="flex">
                    <ul class="flex space-x-5">
                        <li>MOTOCICLETAS</li>
                        <li>ACESSÓRIOS</li>
                        <li>ROUPAS</li>
                        <li>SAIBA MAIS</li>
                    </ul>
                </div>
            </div>

            <div class="flex space-x-10 items-center">
                <div>
                    <ul class="flex space-x-5 font-thin">
                        <li>Concessionárias</li>
                        <li>Monte sua moto</li>
                        <li>Ofertas</li>
                        <li>Agende um test ride</li>
                    </ul>
                </div>
                <div>
                    <img src="" alt="" class="h-10 w-40">
                </div>
            </div>
        </div>
    </header>
    <section>
        <div x-data="{ 
            slides: [
                '{{ asset('img/perfilburro.jpg') }}',
                '{{ asset('img/motos.jpg') }}',
                '{{ asset('img/gatoburro.jpg') }}'
            ]
        }" 
        class="relative w-full overflow-hidden rounded-2xl shadow-lg">
        
            <!-- Slides -->
            <template x-for="(slide, index) in slides" :key="index">
                <div 
                    x-show="active === index" 
                    class="w-full h-64 bg-gray-200 flex items-center justify-center"
                    x-transition
                >
                    <img :src="slide" class="w-full h-full object-cover" />
                </div>
            </template>

            <!-- Botão anterior -->
            <button 
                @click="active = (active === 0) ? slides.length - 1 : active - 1" 
                class="absolute left-2 top-1/2 -translate-y-1/2 bg-black/50 text-white p-2 rounded-full"
            >
                ‹
            </button>

            <!-- Botão próximo -->
            <button 
                @click="active = (active === slides.length - 1) ? 0 : active + 1" 
                class="absolute right-2 top-1/2 -translate-y-1/2 bg-black/50 text-white p-2 rounded-full"
            >
                ›
            </button>

            <!-- Indicadores -->
            <div class="absolute bottom-3 w-full flex justify-center space-x-2">
                <template x-for="(slide, index) in slides" :key="index">
                    <button 
                        class="w-3 h-3 rounded-full" 
                        :class="active === index ? 'bg-white' : 'bg-gray-400'"
                        @click="active = index"
                    ></button>
                </template>
            </div>
        </div>
    </section>
</body>
</html>