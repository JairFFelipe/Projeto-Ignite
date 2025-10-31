@extends('layouts.layout')
@section('content')

<section class="mt-16 bg-gray-900 text-white py-20">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6">Entre em Contato</h1>
        <p class="text-lg md:text-xl text-gray-300 leading-relaxed">
            Estamos prontos para atender você!  
            Tire suas dúvidas, solicite informações sobre modelos, agende um test ride ou fale diretamente com nossa equipe.
        </p>
    </div>
</section>

<section class="py-16 bg-gray-100 text-gray-900">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-start">

        <!-- Formulário -->
        <div class="bg-white shadow-xl rounded-2xl p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Envie sua Mensagem</h2>
            <form action="" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="nome" class="block text-sm font-semibold mb-2">Nome</label>
                    <input type="text" id="nome" name="nome" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>

                <div>
                    <label for="email" class="block text-sm font-semibold mb-2">E-mail</label>
                    <input type="email" id="email" name="email" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>

                <div>
                    <label for="telefone" class="block text-sm font-semibold mb-2">Telefone</label>
                    <input type="text" id="telefone" name="telefone"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>

                <div>
                    <label for="mensagem" class="block text-sm font-semibold mb-2">Mensagem</label>
                    <textarea id="mensagem" name="mensagem" rows="5" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-full transition transform hover:scale-105 shadow-lg">
                        Enviar Mensagem
                    </button>
                </div>
            </form>
        </div>

        <!-- Informações -->
        <div class="flex flex-col justify-center">
            <h2 class="text-3xl font-bold mb-6">Nossos Contatos</h2>
            <p class="text-gray-700 mb-4">
                Nossa equipe está à disposição para oferecer suporte, informações e o melhor atendimento.
                Venha nos visitar ou entre em contato pelos canais abaixo:
            </p>

            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 2a10 10 0 100 20 10 10 0 000-20z" />
                    </svg>
                    <p>Rua Rui Barbosa, 800 - Centro, Taquaritinga - SP</p>
                </div>

                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <p>loja-ignite-br@hotmail.com</p>
                </div>

                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a2 2 0 011.95 1.58l.72 3.09a2 2 0 01-.45 1.64l-2.12 2.12a11.05 11.05 0 005.17 5.17l2.12-2.12a2 2 0 011.64-.45l3.09.72A2 2 0 0121 18.72V22a2 2 0 01-2 2h-1C9.16 24 0 14.84 0 3V2a2 2 0 012-2h1z" />
                    </svg>
                    <p>(16) 98127-0277</p>
                </div>
            </div>

            <div class="mt-8">
                <h3 class="text-xl font-semibold mb-3">Horário de Atendimento</h3>
                <p>Segunda a Sábado: 08h às 18h</p>
                <p>Domingo: 08h às 13h</p>
            </div>
        </div>
    </div>
</section>

<!-- Mapa -->
<section class="bg-gray-900 py-10">
    <div class="max-w-6xl mx-auto px-6 text-center text-white">
        <h2 class="text-3xl font-bold mb-6">Venha nos Visitar</h2>
        <div class="overflow-hidden rounded-2xl shadow-lg">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d4638.447661667447!2d-48.49961412086483!3d-21.404565684654653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjHCsDI0JzE1LjUiUyA0OMKwMzAnMDAuMiJX!5e1!3m2!1spt-BR!2sbr!4v1761931978855!5m2!1spt-BR!2sbr" 
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>
</section>

@endsection