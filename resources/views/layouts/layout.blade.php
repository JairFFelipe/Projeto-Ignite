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
    <header x-data="{ activeMenu: null }" @keydown.escape.window="activeMenu = null" class="bg-black text-white fixed top-0 left-0 w-full z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
            <!-- Logo -->
            <img src="{{ asset('img/gatoburro.png') }}" alt="Logo" class="h-8">

            <!-- Menu principal -->
            <nav class="flex space-x-6 text-sm font-semibold">
            <!-- note o @click.stop em cada botão -->
            <button
                @click.stop="activeMenu = activeMenu === 'motocicletas' ? null : 'motocicletas'"
                :aria-expanded="activeMenu === 'motocicletas'"
                class="hover:text-gray-400"
            >MOTOCICLETAS</button>

            <button
                @click.stop="activeMenu = activeMenu === 'acessorios' ? null : 'acessorios'"
                :aria-expanded="activeMenu === 'acessorios'"
                class="hover:text-gray-400"
            >ACESSÓRIOS</button>

            <button
                @click.stop="activeMenu = activeMenu === 'roupas' ? null : 'roupas'"
                :aria-expanded="activeMenu === 'roupas'"
                class="hover:text-gray-400"
            >ROUPAS</button>

            <button
                @click.stop="activeMenu = activeMenu === 'saiba' ? null : 'saiba'"
                :aria-expanded="activeMenu === 'saiba'"
                class="hover:text-gray-400"
            >SAIBA MAIS</button>
            </nav>

            <!-- Links extras -->
            <div class="flex space-x-6 text-xs">
            <a href="#">Concessionárias</a>
            <a href="#">Monte sua moto</a>
            <a href="#">Ofertas</a>
            <a href="#">Agende um test ride</a>
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
                brand: null,
                motos: {
                    kawasaki: {
                        nome: 'Ninja ZX-6R',
                        preco: '__________',
                        imgMini: '{{ asset('img/kawasaki-mini.png') }}',
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
            class="absolute left-0 top-full h-[15vh] w-full bg-white text-black shadow-lg content-center"
        >
            <div class="max-w-7xl mx-auto grid grid-cols-3 gap-6 p-6">
            <!-- links de marcas -->
            <div class="space-y-2 text-sm font-bold">
                <a href="#" @click.prevent="brand = 'kawasaki'" class="block hover:text-red-600">Kawasaki</a>
                <a href="#" @click.prevent="brand = 'harley'" class="block hover:text-red-600">Harley-Davidson</a>
                <a href="#" @click.prevent="brand = 'royal'" class="block hover:text-red-600">Royal Enfield</a>
            </div>

            <!-- bloco da miniatura -->
            <div class="relative w-full h-16">
                <!-- Kawasaki -->
                <div x-show="brand === 'kawasaki'" :key="'kawasaki-mini'"
                    x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                    class="absolute inset-0 flex items-center space-x-4">
                    <img :src="motos.kawasaki.imgMini" class="h-16">
                    <div>
                        <p class="font-semibold" x-text="motos.kawasaki.nome"></p>
                        <p class="text-sm text-gray-600" x-text="motos.kawasaki.preco"></p>
                    </div>
                </div>

                <!-- Harley -->
                <div x-show="brand === 'harley'" :key="'harley-mini'"
                    x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                    class="absolute inset-0 flex items-center space-x-4">
                    <img :src="motos.harley.imgMini" class="h-16">
                    <div>
                        <p class="font-semibold" x-text="motos.harley.nome"></p>
                        <p class="text-sm text-gray-600" x-text="motos.harley.preco"></p>
                    </div>
                </div>

                <!-- Royal -->
                <div x-show="brand === 'royal'" :key="'royal-mini'"
                    x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                    class="absolute inset-0 flex items-center space-x-4">
                    <img :src="motos.royal.imgMini" class="h-16">
                    <div>
                        <p class="font-semibold" x-text="motos.royal.nome"></p>
                        <p class="text-sm text-gray-600" x-text="motos.royal.preco"></p>
                    </div>
                </div>
            </div>

            <!-- banner -->
            <div class="relative w-[10vh] h-[10vh]">
                <!-- Kawasaki -->
                <div x-show="brand === 'kawasaki'" :key="'kawasaki-banner'"
                    x-transition:enter.duration.300ms x-transition:leave.duration.300ms
                    class="absolute inset-0">
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



    <div>
        <!-- Codigo do blade que diz onde o conteúdo vai ser colocado -->
        @yield('content')
    </div>
    


    <footer class="bg-white border-t mt-16">
        <div class="max-w-7xl mx-auto px-6 py-12">
            <!-- Grid de Links -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-sm font-semibold">
            <!-- Coluna 1 -->
            <div>
                <h4 class="font-bold mb-3">MOTOCICLETAS</h4>
                <ul class="space-y-2 text-gray-600">
                <li><a href="#">Adventure</a></li>
                <li><a href="#">Classic</a></li>
                <li><a href="#">Roadsters</a></li>
                <li><a href="#">Rocket 3</a></li>
                <li><a href="#">Sport</a></li>
                <li><a href="#">Press Reviews</a></li>
                <li><a href="#">Ofertas</a></li>
                <li><a href="#">Motocicletas Seminovas</a></li>
                </ul>
            </div>

            <!-- Coluna 2 -->
            <div>
                <h4 class="font-bold mb-3">AÇÃO</h4>
                <ul class="space-y-2 text-gray-600">
                <li><a href="#">Test Ride</a></li>
                <li><a href="#">Monte sua moto</a></li>
                <li><a href="#">Encontrar concessionária</a></li>
                <li><a href="#">Mantenha-me informado</a></li>
                </ul>
            </div>

            <!-- Coluna 3 -->
            <div>
                <h4 class="font-bold mb-3">FOR THE RIDE</h4>
                <ul class="space-y-2 text-gray-600">
                <li><a href="#">Brand</a></li>
                <li><a href="#">Racing</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Factory Visitor Experience</a></li>
                <li><a href="#">Triumph Adventure Experience</a></li>
                </ul>
            </div>

            <!-- Coluna 4 -->
            <div>
                <h4 class="font-bold mb-3">PROPRIETÁRIOS</h4>
                <ul class="space-y-2 text-gray-600">
                <li><a href="#">Total Care</a></li>
                <li><a href="#">Sua Triumph</a></li>
                <li><a href="#">My Triumph App</a></li>
                <li><a href="#">What3Words</a></li>
                <li><a href="#">Agende um serviço</a></li>
                </ul>
            </div>
            </div>

            <!-- Redes sociais -->
            <div class="flex space-x-4 mt-8">
            <a href="#"><img src="{{ asset('img/facebook.png') }}" alt="Facebook" class="h-5 w-fit"></a>
            <a href="#"><img src="{{ asset('img/twitter.svg') }}" alt="Twitter" class="h-5 w-fit"></a>
            <a href="#"><img src="{{ asset('img/youtube.png') }}" alt="YouTube" class="h-5 w-fit"></a>
            </div>

            <!-- Linha divisória -->
            <hr class="my-6 border-gray-300">

            <!-- Rodapé legal -->
            <div class="flex flex-col md:flex-row justify-between text-xs text-gray-500">
            <div class="flex space-x-4 mb-2 md:mb-0">
                <a href="#">Contato</a>
                <a href="#">Legal</a>
                <a href="#">Mapa do site</a>
            </div>
            <p>© 2025 Ignite</p>
            </div>
        </div>
    </footer>
</body>
</html>