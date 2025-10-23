@extends('layouts.layout')
@section('content')

<section class="mt-[7vw] flex gap-6 justify-center flex-wrap">
    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-full">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img class="w-full h-56 object-cover" src="{{ asset('img/kawasakininjah2r.png') }}" alt="Moto à venda">
            
            <div class="p-5">
                <h2 class="text-xl font-bold text-gray-800">Kawasaki Ninja H2R</h2>
                <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                A Kawasaki Ninja H2R é a hipermoto definitiva, equipada com motor supercharger de 998 cc e mais de 300 cv de potência. Construída para desempenho extremo em pista fechada, representa o auge da engenharia e do design Kawasaki.
                </p>

                <div class="flex items-center justify-between mt-4">
                <span class="text-lg font-semibold text-green-600">R$ 357.000</span>
                <a href="/ninjah2r">
                    <button  class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                        Ver detalhes
                    </button>
                </a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-full">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img class="w-full h-56 object-cover" src="{{ asset('img/kawasakininja1000sx.jpg') }}" alt="Moto à venda">
            
            <div class="p-5">
                <h2 class="text-xl font-bold text-gray-800">Kawasaki Ninja 1000SX</h2>
                <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                A Kawasaki Ninja 1000SX combina a performance esportiva de uma superbike com o conforto de uma tourer. Equipada com motor de 1.043 cc, controle eletrônico avançado e ergonomia otimizada para longas distâncias, é uma sport touring equilibrada e precisa, projetada para desempenho em estrada e conforto em viagens prolongadas.
                </p>

                <div class="flex items-center justify-between mt-4">
                <span class="text-lg font-semibold text-green-600">R$ 73.975</span>
                <a href="/ninja1000sx">
                    <button  class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                        Ver detalhes
                    </button>
                </a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-full">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img class="w-full h-56 object-cover" src="{{ asset('img/kawasakininjazx10r.jpg') }}" alt="Moto à venda">
            
            <div class="p-5">
                <h2 class="text-xl font-bold text-gray-800">Kawasaki Ninja ZX10R</h2>
                <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                A Kawasaki Ninja ZX-10R é uma superbike de alta performance com enfoque em pista. 
                Equipada com motor 998 cc, eletrônica de última geração e estrutura derivada do WorldSBK, 
                entrega resposta rápida, estabilidade em curvas e dinâmica agressiva para pilotagem esportiva.
                </p>

                <div class="flex items-center justify-between mt-4">
                <span class="text-lg font-semibold text-green-600">R$ 115.000</span>
                <a href="ninjazx10r">
                    <button class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                        Ver detalhes
                    </button>
                </a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-full">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img class="w-full h-56 object-cover" src="{{ asset('img/kawasakininja650.jpg') }}" alt="Moto à venda">
            
            <div class="p-5">
                <h2 class="text-xl font-bold text-gray-800">Kawasaki Ninja 650</h2>
                <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                A Kawasaki Ninja 650 combina desempenho esportivo com ergonomia confortável. Equipada com motor bicilíndrico de 649 cc e eletrônica moderna, oferece pilotagem precisa e eficiente tanto em uso urbano quanto rodoviário.
                <div class="flex items-center justify-between mt-4">
                <span class="text-lg font-semibold text-green-600">R$ 49.990</span>
                <a href="ninja650">
                    <button class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                        Ver detalhes
                    </button>
                </a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-full">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img class="w-full h-56 object-cover" src="{{ asset('img/kawasakininja400.jpg') }}" alt="Moto à venda">
            
            <div class="p-5">
                <h2 class="text-xl font-bold text-gray-800">Kawasaki Ninja 400</h2>
                <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                A Kawasaki Ninja 400 combina leveza, agilidade e eficiência. Seu motor bicilíndrico de 399 cc oferece excelente resposta e controle, tornando-a ideal tanto para iniciantes quanto para pilotos experientes que buscam desempenho equilibrado.
                </p>

                <div class="flex items-center justify-between mt-4">
                <span class="text-lg font-semibold text-green-600">R$ 38.910</span>
                <a href="/ninja400">
                    <button class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                        Ver detalhes
                    </button>
                </a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-full">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img class="w-full h-56 object-cover" src="{{ asset('img/kawasakininjazx4rr.png') }}" alt="Moto à venda">
            
            <div class="p-5">
                <h2 class="text-xl font-bold text-gray-800">Kawasaki Ninja ZX-4RR</h2>
                <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                A Ninja ZX-4RR é uma supersport de alta rotação com motor inline-4 de 399 cc projetada para máximo prazer de pilotagem. Alta potência específica, resposta imediata do acelerador e chassis inspirado em competição proporcionam desempenho para rodovia e pista.
                </p>

                <div class="flex items-center justify-between mt-4">
                <span class="text-lg font-semibold text-green-600">R$ 56.990</span>
                <a href="/zx4rr">
                    <button class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                        Ver detalhes
                    </button>
                </a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-full">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img class="w-full h-56 object-cover" src="{{ asset('img/kawasakizh2.png') }}" alt="Moto à venda">
            
            <div class="p-5">
                <h2 class="text-xl font-bold text-gray-800">Kawasaki ZH2</h2>
                <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                A Kawasaki Z H2 é a versão naked do H2, com motor supercharger de 998 cc e foco em torque e resposta imediata. Projetada para uso rodoviário e track days, combina potência elevada com ergonomia mais ereta típica da linha Z.
                </p>

                <div class="flex items-center justify-between mt-4">
                <span class="text-lg font-semibold text-green-600">R$ 129.990</span>
                <a href="/zh2">
                    <button class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                        Ver detalhes
                    </button>
                </a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-full">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img class="w-full h-56 object-cover" src="{{ asset('img/kawasakiz1000.png') }}" alt="Moto à venda">
            
            <div class="p-5">
                <h2 class="text-xl font-bold text-gray-800">Kawasaki Z1000</h2>
                <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                A Kawasaki Z1000 é a naked esportiva de referência, com motor de 1043 cc e foco em torque e desempenho em estrada. Combina design agressivo, ergonomia ergonômica e tecnologia de ponta para pilotagem segura e emocionante.
                </p>

                <div class="flex items-center justify-between mt-4">
                <span class="text-lg font-semibold text-green-600">R$ 76.990</span>
                <a href="/z1000">
                    <button class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                        Ver detalhes
                    </button>
                </a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-full">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img class="w-full h-56 object-cover" src="{{ asset('img/kawasakiz900.avif') }}" alt="Moto à venda">
            
            <div class="p-5">
                <h2 class="text-xl font-bold text-gray-800">Kawasaki Z900</h2>
                <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                A Kawasaki Z650 combina agilidade urbana e desempenho sólido com motor bicilíndrico de 649 cc. Ideal para quem quer pilotagem divertida e conforto no dia a dia.

                <div class="flex items-center justify-between mt-4">
                <span class="text-lg font-semibold text-green-600">R$ 38.990</span>
                <a href="/z900">
                    <button class="bg-orange-600 text-white px-4 py-2 rounded-xl hover:bg-orange-700 transition-colors duration-300">
                        Ver detalhes
                    </button>
                </a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center py-10 bg-white">
        <div class="max-w-sm w-full">
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img class="w-full h-56 object-cover" src="{{ asset('img/kawasakiz650.jpg') }}" alt="Moto à venda">
            
            <div class="p-5">
                <h2 class="text-xl font-bold text-gray-800">Kawasaki Z650</h2>
                <p class="text-gray-600 mt-2 text-sm overflow-auto max-h-16">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ipsam corporis alias temporibus, odio qui non, aut excepturi mollitia repellendus quidem pariatur expedita libero asperiores adipisci reiciendis aliquid unde quisquam?
                </p>

                <div class="flex items-center justify-between mt-4">
                <span class="text-lg font-semibold text-green-600">R$ 34.900</span>
                <a href="/z650">
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