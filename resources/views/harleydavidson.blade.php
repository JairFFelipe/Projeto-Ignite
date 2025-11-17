@extends('layouts.layout')
@section('content')

<section class="mt-[7vw] flex gap-6 justify-center flex-wrap">

    {{-- Continental GT 650 --}}
    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-[384px]">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <img class="w-full h-56 object-cover" src="{{ asset('img/harleyelectraglide.jpg') }}" alt="Continental GT 650">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Electra Glide</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                        A Harley-Davidson Electra Glide entrega conforto máximo para longas jornadas, com motor V-Twin robusto e tecnologia de ponta. Ideal para quem busca estilo icônico, autonomia e presença nas estradas.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 129.900</span>
                        <a href="/electraglide">
                            <button class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                                Ver detalhes
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Interceptor 650 --}}
    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-[384px]">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <img class="w-full h-56 object-cover" src="{{ asset('img/harleyfatbob.jpg') }}" alt="Interceptor 650">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Fat Bob</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                        A Harley-Davidson Fat Bob entrega visual agressivo e torque abundante com motor V-Twin de alto desempenho. Uma moto robusta, com presença marcante e estilo “muscle cruiser” para quem busca potência e atitude.
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 129.900</span>
                        <a href="/fatbob">
                            <button class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                                Ver detalhes
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Shotgun 650 --}}
    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-[384px]">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <img class="w-full h-56 object-cover" src="{{ asset('img/harleyfatboy.webp') }}" alt="Shotgun 650">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Fat Boy</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                        A Harley-Davidson Fat Boy une presença robusta e desempenho refinado. O motor V-Twin entrega torque potente em qualquer regime. Ideal para quem quer uma cruiser icônica com estilo e conforto.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 124.900</span>
                        <a href="/fatboy">
                            <button class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                                Ver detalhes
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Super Meteor 650 --}}
    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-[384px]">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <img class="w-full h-56 object-cover" src="{{ asset('img/harleyheritageclassic.jpg') }}" alt="Super Meteor 650">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Heritage Classic</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                        A Harley-Davidson Heritage Classic combina o visual retrô das estradeiras dos anos 50 com tecnologia moderna. Seu motor Milwaukee-Eight 114 oferece força bruta e suavidade, enquanto o conforto e os detalhes cromados reforçam seu espírito touring clássico.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 132.900</span>
                        <a href="/heritageclassic">
                            <button class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                                Ver detalhes
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Classic 350 --}}
    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-[384px]">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <img class="w-full h-56 object-cover" src="{{ asset('img/harleylowriders.jpg') }}" alt="Classic 350">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Low Rider S</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                        A Harley-Davidson Low Rider S é uma cruiser de alto desempenho, inspirada no estilo club californiano. Equipada com o potente motor Milwaukee-Eight 117, oferece resposta imediata e condução agressiva, equilibrando conforto e performance com visual escurecido e postura imponente.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 125.900</span>
                        <a href="/lowriders">
                            <button class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                                Ver detalhes
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Hunter 350 --}}
    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-[384px]">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <img class="w-full h-56 object-cover" src="{{ asset('img/harleynightster.jpg') }}" alt="Hunter 350">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Nightster</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                    A Harley-Davidson Nightster une estilo esportivo e agilidade leve, com visual moderno e desempenho equilibrado. Ideal para quem deseja versatilidade urbana com alma cruiser.
                    </p> 
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 99.990</span>
                        <a href="/nightster">
                            <button class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                                Ver detalhes
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bullet 350 --}}
    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-[384px]">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <img class="w-full h-56 object-cover" src="{{ asset('img/harleypanamerica.jpg') }}" alt="bullet 350">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Pan America</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                            A Pan America™ 1250 Special é uma motocicleta adventure touring da Harley-Davidson, equipada com o motor Revolution™ Max 1250 de 150 cv, suspensão adaptativa, modos de pilotagem personalizáveis e design robusto, ideal para aventuras tanto no asfalto quanto fora dele.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 119.900</span>
                        <a href="/panamerica">
                            <button class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                                Ver detalhes
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- thunderbird500x --}}
    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-[384px]">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <img class="w-full h-56 object-cover" src="{{ asset('img/harleyroadking.jpg') }}" alt="Bullet 350">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Road King</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                        A Road King™ Special combina estilo custom bagger com conforto de turismo. Equipado com motor Milwaukee-Eight™ 114, suspensão traseira ajustável e design sem carenagem, é ideal para viagens longas com estilo.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 145.250</span>
                        <a href="/roadking">
                            <button class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                                Ver detalhes
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Meteor 350 --}}
    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-[384px]">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <img class="w-full h-56 object-cover" src="{{ asset('img/harleysportster.png') }}" alt="Meteor 350">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Sportster</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                        A Sportster™ S combina o motor Revolution™ Max 1250T de 121 cv com um design minimalista e moderno. Equipada com suspensão dianteira invertida, escapamento alto e tecnologia avançada, é ideal para quem busca desempenho e estilo urbano.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 125.900</span>
                        <a href="/sportster">
                            <button class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                                Ver detalhes
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Classic 500 --}}
    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-[384px]">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <img class="w-full h-56 object-cover" src="{{ asset('img/harleystreetglide.webp') }}" alt="Classic 500">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Street Glide</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                        A Street Glide™ 2024 combina o motor Milwaukee-Eight® 117 com o novo sistema de infotainment Skyline™ OS, oferecendo uma experiência de pilotagem moderna e conectada. Seu design icônico e recursos avançados a tornam ideal para viagens longas com estilo.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 145.250</span>
                        <a href="/streetglide">
                            <button class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                                Ver detalhes
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
