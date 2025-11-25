@extends('layouts.layout')
@section('content')
    <style>[x-cloak]{display:none;}</style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <section>
            <div
                x-data="carousel()" 
                x-init="initCarousel()"
                @mouseover="stopInterval()"
                @mouseleave="startInterval()"
                class="relative w-full h-[93vh] overflow-hidden shadow-lg mt-16"
            >
                <script>
                    function carousel() {
                        return {
                            slides: [
                                { 
                                image: "{{ asset("img/ninjazx4rbanner.jpg") }}", 
                                title: "Kawasaki Ninja ZX-4R", 
                                text: "A fusão perfeita entre potência, precisão e design agressivo.", 
                                button: { label: "Conheça o modelo", link: "/ninjazx4r" } 
                                },
                                { 
                                image: "{{ asset("img/continentalgt650banner.png") }}", 
                                title: "Royal Enfield Continental GT 650", 
                                text: "Um clássico moderno que une elegância britânica e alma esportiva.", 
                                button: { label: "Conheça o modelo", link: "/continentalgt650" }
                                },
                                { 
                                image: "{{ asset("img/roadkingbanner.jpg") }}", 
                                title: "Harley-Davidson Road King", 
                                text: "Uma touring clássica que combina estilo retrô com conforto e desempenho para longas viagens.", 
                                button: { label: "Confira agora", link: "/roadking" } 
                                }
                            ],
                            active: 0,
                            intervalId: null,
                            
                            // 1. Função que avança para o próximo slide
                            nextSlide() {
                                this.active = (this.active === this.slides.length - 1) ? 0 : this.active + 1;
                            },

                            // 2. Função para iniciar o setInterval
                            startInterval() {
                                // Garante que não há dois intervalos rodando
                                this.stopInterval(); 
                                this.intervalId = setInterval(() => {
                                    this.nextSlide();
                                }, 3500); // 5 segundos
                            },

                            // 3. Função para parar o setInterval (usada no mouseover)
                            stopInterval() {
                                if (this.intervalId) {
                                    clearInterval(this.intervalId);
                                    this.intervalId = null;
                                }
                            },

                            // 4. Inicia o carrossel
                            initCarousel() {
                                this.startInterval();
                            }
                        }
                    }
                </script>
                
                <template x-for="(slide, index) in slides" :key="index">
                <div
                    x-show="active === index"
                    x-cloak
                    class="relative w-full h-[93vh] flex items-center justify-center text-center"
                >
                    <img 
                    :src="slide.image" 
                    class="absolute inset-0 w-full h-full object-cover blur-sm" 
                    alt=""
                    >
                    <div class="absolute inset-0 bg-black/50"></div>
                    
                    <div class="relative z-10 max-w-3xl px-6 text-white animate-fade-in">
                    <h2 class="text-4xl md:text-6xl font-bold mb-4 drop-shadow-lg" x-text="slide.title"></h2>
                    <p class="text-lg md:text-xl mb-8 opacity-90" x-text="slide.text"></p>
                    <a 
                        :href="slide.button.link" 
                        class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-full transition transform hover:scale-105 shadow-lg"
                    >
                        <span x-text="slide.button.label"></span>
                    </a>
                    </div>
                </div>
                </template>

                <button
                type="button"
                @click="active = (active === 0) ? slides.length - 1 : active - 1"
                class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/60 text-white p-3 rounded-full transition"
                aria-label="Previous"
                >‹</button>

                <button
                type="button"
                @click="nextSlide()" 
                class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/60 text-white p-3 rounded-full transition"
                aria-label="Next"
                >›</button>

                <div class="absolute bottom-6 w-full flex justify-center space-x-2">
                <template x-for="(slide, index) in slides" :key="index">
                    <button
                    type="button"
                    class="w-3 h-3 rounded-full transition"
                    :class="active === index ? 'bg-white scale-110' : 'bg-gray-400'"
                    @click="active = index"
                    ></button>
                </template>
                </div>
            </div>
            </section>
    <!-- Animação simples -->
    <style>
    [x-cloak] { display: none !important; }
    .animate-fade-in {
        animation: fadeIn 0.8s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    </style>

    <section>
        <div class="w-full bg-gray-900 text-white flex justify-center items-center divide-x divide-gray-700">
            
            <!-- Item 1 -->
            <a href="/kawasaki"
                class="flex items-center justify-center flex-1 py-4 gap-2 hover:bg-gray-800 transition">
                <!-- Ícone de sliders (ajustes) -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M12 4v16m6-8H6" />
                </svg>
                <span class="text-sm font-semibold">Kawasaki</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M12 4v16m6-8H6" />
                </svg>
            </a>

            <!-- Item 2 -->
            <a href="/harleydavidson"
                class="flex items-center justify-center flex-1 py-4 gap-2 hover:bg-gray-800 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M12 4v16m6-8H6" />
                </svg>
                <span class="text-sm font-semibold">Harley-Davidson</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M12 4v16m6-8H6" />
                </svg>
            </a>

            <!-- Item 3 -->
            <a href="/royalenfield"
                class="flex items-center justify-center flex-1 py-4 gap-2 hover:bg-gray-800 transition">
                <!-- Ícone de ferramentas -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M12 4v16m6-8H6" />
                </svg>
                <span class="text-sm font-semibold">Royal Enfield</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M12 4v16m6-8H6" />
                </svg>
            </a>
        </div>
    </section>

    <section class="py-16 px-8">
        <!-- Títulos -->
        <div class="text-center mb-12">
            <h2 class="text-2xl font-bold">VEJA MAIS RECOMENDAÇÕES</h2>
            <p class="mt-4 text-lg font-semibold">+</p>
        </div>

        <!-- Grid de Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

            <!-- Card 1 -->
            <div>
            <img src="{{ asset('img/kawasakininjah2r.png') }}" alt="img" class="w-full h-56 object-cover">
            <h3 class="mt-4 text-lg font-bold">Kawasaki Ninja H2R</h3>
            <p class="mt-2 text-sm text-gray-700">
                A Kawasaki Ninja H2R é a hipermoto definitiva, equipada com motor supercharger de 998 cc e mais de 300 cv de potência. Construída para desempenho extremo em pista fechada, representa o auge da engenharia e do design Kawasaki.
            </p>
            <a href="/ninjah2r" class="mt-3 inline-block text-xs font-bold uppercase hover:underline">VEJA MAIS →</a>
            </div>

            <!-- Card 2 -->
            <div>
            <img src="{{ asset('img/harleysportster.png') }}" alt="img" class="w-full h-56 object-cover">
            <h3 class="mt-4 text-lg font-bold">Harley-Davidson Sportster</h3>
            <p class="mt-2 text-sm text-gray-700">
                A Sportster™ S combina o motor Revolution™ Max 1250T de 121 cv com um design minimalista e moderno. Equipada com suspensão dianteira invertida, escapamento alto e tecnologia avançada, é ideal para quem busca desempenho e estilo urbano.
            </p>
            <a href="/sportster" class="mt-3 inline-block text-xs font-bold uppercase hover:underline">VEJA MAIS →</a>
            </div>

            <!-- Card 3 -->
            <div>
            <img src="{{ asset('img/royalclassic350.webp') }}" alt="img" class="w-full h-56 object-cover">
            <h3 class="mt-4 text-lg font-bold">Royal Enfield Classic 350</h3>
            <p class="mt-2 text-sm text-gray-700">
                A Royal Enfield Classic 350 combina estética retrô refinada com mecânica moderna: seu visual remete às lendárias britânicas dos anos 1940/50, enquanto o motor monocilíndrico de 349 cc oferece média de 30 km/l e pilotagem tranquila, ideal para quem valoriza estilo sem abrir mão da versatilidade.
            </p>
            <a href="/classic350" class="mt-3 inline-block text-xs font-bold uppercase hover:underline">VEJA MAIS →</a>
            </div>

        </div>
    </section>
@endsection