<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>[x-cloak] { display: none !important; }</style>
</head>
<body>

<!--Header inicio-->
    <header x-data="{ activeMenu: null }" @keydown.escape.window="activeMenu = null" class="bg-black text-white fixed top-0 left-0 w-full z-50">
        <div class="max-w-full flex justify-between items-center px-10 py-4">
            <!-- Logo -->
            <a href="/"><img src="{{ asset('img/ignitelogobrancolimpo.png') }}" alt="Logo" class="h-8"></a>

            <!-- Menu principal -->
            <nav class="flex space-x-6 text-sm font-semibold">
            <!-- note o @click.stop em cada botão -->
            <button
                @click.stop="activeMenu = activeMenu === 'motocicletas' ? null : 'motocicletas'"
                :aria-expanded="activeMenu === 'motocicletas'"
                class="hover:text-orange-600"
            >MOTOCICLETAS</button>

            <button
                @click.stop="activeMenu = activeMenu === 'acessorios' ? null : 'acessorios'"
                :aria-expanded="activeMenu === 'acessorios'"
                class="hover:text-orange-600"
            >ACESSÓRIOS</button>

            <button
                @click.stop="activeMenu = activeMenu === 'roupas' ? null : 'roupas'"
                :aria-expanded="activeMenu === 'roupas'"
                class="hover:text-orange-600"
            >ROUPAS</button>

            <button
                @click.stop="activeMenu = activeMenu === 'saiba' ? null : 'saiba'"
                :aria-expanded="activeMenu === 'saiba'"
                class="hover:text-orange-600"
            >SAIBA MAIS</button>
            </nav>

            <!-- Links extras -->
            <div class="flex text-slate-400 space-x-6 text-xs items-center" x-data="{ showProfile: false }" @click.away="showProfile = false">
                <a href="#">Contato</a>
                <a href="#">Sobre</a>

                <!-- Botão do perfil -->
                <button 
                    @click="showProfile = !showProfile"
                    class="flex items-center gap-1 hover:text-orange-600 transition relative"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5.121 17.804A13.937 13.937 0 0112 15c2.21 0 4.305.497 6.121 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z" />
                    </svg>
                    <span>Perfil</span>
                </button>

                <!-- Dropdown -->
                <div 
                    x-show="showProfile"
                    x-transition
                    class="absolute right-10 top-full mt-3 w-40 bg-white text-black rounded-lg shadow-lg border border-gray-100 py-2 text-xs font-medium"
                >
                    <a href="/perfil" class="block px-4 py-2 hover:bg-gray-100">Ver Perfil</a>
                    <a href="/logout" class="block px-4 py-2 text-red-500 hover:bg-red-50">Sair</a>
                </div>
            </div>
        </div>

        <div x-show="activeMenu === 'acessorios'" x-transition @click.away="activeMenu = null" class="absolute left-0 top-full w-full bg-white text-black shadow-lg">
            <div class="max-w-7xl mx-auto p-6">Acessórios content...</div>
            </div>

            <div x-show="activeMenu === 'roupas'" x-transition @click.away="activeMenu = null" class="absolute left-0 top-full w-full bg-white text-black shadow-lg">
            <div class="max-w-7xl mx-auto p-6">Roupas content...</div>
            </div>
            
            <div x-show="activeMenu === 'saiba'" x-transition @click.away="activeMenu = null" class="absolute left-0 top-full w-full bg-white text-black shadow-lg">
            <div class="max-w-7xl mx-auto p-6">saiba mais content...</div>
        </div>
        <!-- Container motocicletas -->
        <div 
            x-show="activeMenu === 'motocicletas'"
            x-transition:enter.duration.150ms
            x-transition:leave.duration.150ms
            x-data="{
                brand: 'kawasaki', // valor padrão inicial
                motos: {
                    kawasaki: {
                        nome: 'Ninja H2R',
                        preco: 'R$ 357.000',
                        imgMini: '{{ asset('img/kawasakininjah2r.png') }}',
                        imgBanner: '{{ asset('img/kawasaki-banner.jpg') }}'
                    },
                    harley: {
                        nome: 'Iron 883',
                        preco: '__________',
                        imgMini: '{{ asset('img/harley-mini.jpg') }}',
                        imgBanner: '{{ asset('img/harley-banner.jpg') }}'
                    },
                    royal: {
                        nome: 'Interceptor 650',
                        preco: '__________',
                        imgMini: '{{ asset('img/royal-mini.png') }}',
                        imgBanner: '{{ asset('img/royal-banner.jpg') }}'
                    }
                }
            }"
            x-init="brand = 'kawasaki'"
            class="absolute left-0 top-full h-[15vh] w-full bg-white text-black shadow-lg content-center"
        >
            <div class="max-w-7xl mx-auto grid grid-cols-[150px_1fr_200px] gap-4 p-6">
            <!-- links de marcas -->
            <div class="space-y-2 text-sm font-bold w-32">
                <a href="#" 
                    @click.prevent="brand = 'kawasaki'" 
                    :class="brand === 'kawasaki' ? 'text-red-600 font-bold' : 'text-black hover:text-red-600'" 
                    class="block"
                >Kawasaki</a>

                <a href="#" 
                    @click.prevent="brand = 'harley'" 
                    :class="brand === 'harley' ? 'text-red-600 font-bold' : 'text-black hover:text-red-600'" 
                    class="block"
                >Harley-Davidson</a>

                <a href="#" 
                    @click.prevent="brand = 'royal'" 
                    :class="brand === 'royal' ? 'text-red-600 font-bold' : 'text-black hover:text-red-600'" 
                    class="block"
                >Royal Enfield</a>
            </div>

            <!-- bloco da miniatura -->
            <div class="relative w-full h-16">
                <!-- Kawasaki -->
                <a href="ninjah2r">
                    <div x-show="brand === 'kawasaki'" :key="'kawasaki-mini'"
                        x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                        class="absolute inset-0 flex items-center space-x-4 flex-col justify-around">
                        <div class="flex">
                            <img :src="motos.kawasaki.imgMini" class="h-16">
                            <div>
                                <p class="font-semibold" x-text="motos.kawasaki.nome"></p>
                                <p class="text-sm text-gray-600" x-text="motos.kawasaki.preco"></p>
                            </div>
                        </div>
                        <div class="w-[25%] h-full bg-orange-600 hover:bg-orange-700 ease-in-out duration-300  font-semibold text-black rounded-md text-center"><a href="/kawasaki"><p>Mais motocicletas +</p></a></div>
                    </div>
                </a>
                <!-- Harley -->
                <a href="#1">
                    <div x-show="brand === 'harley'" :key="'harley-mini'"
                        x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                        class="absolute inset-0 flex items-center space-x-4 flex-col">
                        <div class="flex">
                            <img :src="motos.harley.imgMini" class="h-16">
                            <div>
                                <p class="font-semibold" x-text="motos.harley.nome"></p>
                                <p class="text-sm text-gray-600" x-text="motos.harley.preco"></p>
                            </div>
                        </div>
                        <div class="w-[25%] h-full bg-orange-600 font-semibold text-black rounded-md text-center"><a href="/harleydavidson"><p>Mais motocicletas +</p></a></div>
                    </div>
                </a>
                <!-- Royal -->
                <a href="#2">
                    <div x-show="brand === 'royal'" :key="'royal-mini'"
                        x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                        class="absolute inset-0 flex items-center space-x-4 flex-col">
                        <div class="flex">
                            <img :src="motos.royal.imgMini" class="h-16">
                            <div>
                                <p class="font-semibold" x-text="motos.royal.nome"></p>
                                <p class="text-sm text-gray-600" x-text="motos.royal.preco"></p>
                            </div>
                        </div>
                        <div class="w-[25%] h-full bg-orange-600 font-semibold text-black rounded-md text-center"><a href="/royalenfield"><p>Mais motocicletas +</p></a></div>
                    </div>
                </a>
            </div>

            <!-- banner -->
            <div class="relative w-[10vh] h-[10vh]">
                <!-- Kawasaki -->
                <div x-show="brand === 'kawasaki'" :key="'kawasaki-banner'"
                    x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                    class="absolute inset-0 flex flex-col">
                    <img :src="motos.kawasaki.imgBanner" class="w-full h-full object-cover rounded">
                </div>

                <!-- Harley -->
                <div x-show="brand === 'harley'" :key="'harley-banner'"
                    x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                    class="absolute inset-0">
                    <img :src="motos.harley.imgBanner" class="w-full h-full object-cover rounded">
                </div>

                <!-- Royal -->
                <div x-show="brand === 'royal'" :key="'royal-banner'"
                    x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                    class="absolute inset-0">
                    <img :src="motos.royal.imgBanner" class="w-full h-full object-cover rounded">
                </div>
            </div>
            </div>
        </div>
    </div>
    </header>



    <body>
        <!-- Codigo do blade que diz onde o conteúdo vai ser colocado -->
        @yield('content')
    </body>
    


    <footer class="bg-white border-t mt-48">
        <div class="max-w-7xl mx-auto px-6 py-8 text-sm text-gray-600">
            
            <!-- Seção de informações básicas -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
            <div>
                <h4 class="font-bold text-black mb-2">Ignite Motorcycles</h4>
                <p class="text-xs text-gray-500 max-w-sm">
                Projeto desenvolvido para fins acadêmicos
                </p>
            </div>

            <!-- Redes sociais -->
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="#"><img src="{{ asset('img/facebook.png') }}" alt="Facebook" class="h-5 w-fit"></a>
                <a href="#"><img src="{{ asset('img/twitter.svg') }}" alt="Twitter" class="h-5 w-fit"></a>
                <a href="#"><img src="{{ asset('img/youtube.png') }}" alt="YouTube" class="h-5 w-fit"></a>
            </div>
            </div>

            <!-- Linha divisória -->
            <hr class="my-4 border-gray-300">

            <!-- Rodapé final -->
            <div class="flex flex-col md:flex-row justify-between text-xs text-gray-500">
            <div class="flex space-x-4 mb-2 md:mb-0">
                <a href="#">Contato</a>
                <a href="#">Sobre</a>
                <a href="#">Política de Privacidade</a>
            </div>
            <p>© 2025 Ignite — Projeto Acadêmico</p>
            </div>
        </div>
    </footer>

</html>