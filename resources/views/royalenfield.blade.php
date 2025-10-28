@extends('layouts.layout')
@section('content')

<section class="mt-[7vw] flex gap-6 justify-center flex-wrap">

    {{-- Continental GT 650 --}}
    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-[384px]">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <img class="w-full h-56 object-cover" src="{{ asset('img/royalgt650.avif') }}" alt="Continental GT 650">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Continental GT 650</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                        A Royal Enfield Continental GT 650 combina o visual icônico das café racers com desempenho moderno. Seu motor bicilíndrico de 648 cc oferece torque linear e pilotagem envolvente, mantendo o charme clássico com tecnologia atualizada.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 35.700</span>
                        <a href="/continentalgt650">
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
                <img class="w-full h-56 object-cover" src="{{ asset('img/royalinterceptor650cc.jpg') }}" alt="Interceptor 650">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Interceptor 650cc</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                        A Royal Enfield Interceptor 650 oferece pilotagem confortável e estilo clássico com desempenho moderno. Equipado com motor bicilíndrico de 648 cc e eletrônica básica, combina prazer de pilotagem com confiabilidade.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 34.990</span>
                        <a href="/interceptor650cc">
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
                <img class="w-full h-56 object-cover" src="{{ asset('img/royalshotgun650.png') }}" alt="Shotgun 650">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Shotgun 650</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                        A Royal Enfield Shotgun 650 une estilo clássico e performance moderna. Seu motor bicilíndrico de 648 cc garante pilotagem suave e potente. Painel analógico/digital, iluminação em LED e ABS proporcionam segurança e conectividade. Perfeita para quem busca personalidade e conforto em qualquer estrada.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 33.990</span>
                        <a href="/shotgun650">
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
                <img class="w-full h-56 object-cover" src="{{ asset('img/royalsupermeteor650.jpg') }}" alt="Super Meteor 650">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Super Meteor 650</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                        A Royal Enfield Super Meteor 650 é uma cruiser moderna com motor bicilíndrico de 648 cc, oferecendo conforto e desempenho para longas viagens. Seu design clássico é complementado por tecnologia atual, como painel digital e iluminação em LED. Disponível em três versões, atende aos diferentes gostos dos motociclistas.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 37.490</span>
                        <a href="/supermeteor650">
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
                <img class="w-full h-56 object-cover" src="{{ asset('img/royalclassic350.webp') }}" alt="Classic 350">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Classic 350</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                        A Royal Enfield Classic 350 combina estética retrô refinada com mecânica moderna: seu visual remete às lendárias britânicas dos anos 1940/50, enquanto o motor monocilíndrico de 349 cc oferece média de 30 km/l e pilotagem tranquila, ideal para quem valoriza estilo sem abrir mão da versatilidade.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 22.990</span>
                        <a href="/classic350">
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
                <img class="w-full h-56 object-cover" src="{{ asset('img/royalhunter350.jpg') }}" alt="Hunter 350">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Hunter 350</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                    A Hunter 350 combina design moderno com agilidade urbana. Equipada com motor J-series de 349 cc, oferece dirigibilidade suave, perfeita para cidade e pequenos passeios. Ideal para quem busca estilo, conforto e desempenho em uma moto compacta e versátil.
                    </p> 
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 17.990</span>
                        <a href="/hunter350">
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
                <img class="w-full h-56 object-cover" src="{{ asset('img/royalbullet350.webp') }}" alt="bullet 350">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Bullet 350</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                            A Royal Enfield Bullet 350 preserva o estilo icônico e atemporal que a tornou lendária. Equipada com o moderno motor J-series de 349 cc, oferece uma condução suave e confiável, ideal tanto para o uso urbano quanto para passeios tranquilos. Uma moto que une tradição, elegância e robustez em cada detalhe.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 22.000</span>
                        <a href="/bullet350">
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
                <img class="w-full h-56 object-cover" src="{{ asset('img/royalthunderbird500x.jpg') }}" alt="Bullet 350">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Thunderbird 500x</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                        A Thunderbird 500X é uma motocicleta cruiser urbana da Royal Enfield, lançada em 2018. Equipado com motor monocilíndrico de 499 cc, oferece 27,2 cv de potência e 41,3 Nm de torque. Seu design moderno inclui pintura vibrante, rodas aro 18"/19", guidão largo e acabamento totalmente preto. Ideal para quem busca estilo e conforto em viagens urbanas e rodoviárias.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 25.000</span>
                        <a href="/thunderbird500x">
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
                <img class="w-full h-56 object-cover" src="{{ asset('img/royalmeteor350.webp') }}" alt="Meteor 350">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Meteor 350</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                        A Meteor 350 combina estética clássica com tecnologia moderna, oferecendo uma pilotagem suave e confortável. Seu motor monocilíndrico de 349 cc proporciona desempenho equilibrado, ideal para iniciantes e motociclistas experientes. Disponível em várias versões e cores, é uma escolha popular para quem busca estilo e funcionalidade.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 24.990</span>
                        <a href="/meteor350">
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
                <img class="w-full h-56 object-cover" src="{{ asset('img/royalclassic500.jpg') }}" alt="Classic 500">
                <div class="p-5">
                    <h2 class="text-xl font-bold text-gray-800">Classic 500</h2>
                    <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                        A Royal Enfield Classic 500 traz o charme retrô com motor monocilíndrico de 499 cc, proporcionando pilotagem suave e clássica, perfeita para quem busca tradição e estilo.
                    </p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-lg font-semibold text-green-600">R$ 29.990</span>
                        <a href="/classic500">
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
