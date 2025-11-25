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
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-600">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-semibold mb-2">E-mail</label>
                        <input type="email" id="email" name="email" required
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-600">
                    </div>

                    <div>
                        <label for="telefone" class="block text-sm font-semibold mb-2">Telefone</label>
                        <input type="text" id="telefone" name="telefone"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-600">
                    </div>

                    <div>
                        <label for="mensagem" class="block text-sm font-semibold mb-2">Mensagem</label>
                        <textarea id="mensagem" name="mensagem" rows="5" required
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-600"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit"
                            class="bg-orange-600 hover:bg-orange-700 text-white font-semibold py-3 px-6 rounded-full transition transform hover:scale-105 shadow-lg">
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 2a10 10 0 100 20 10 10 0 000-20z" />
                        </svg>
                        <p>Rua Rui Barbosa, 800 - Centro, Taquaritinga - SP</p>
                    </div>

                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <p>Ignite.webmotors@gmail.com</p>
                    </div>

                    <div class="flex items-center gap-3">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.05 6C15.0268 6.19057 15.9244 6.66826 16.6281 7.37194C17.3318 8.07561 17.8095 8.97326 18 9.95M14.05 2C16.0793 2.22544 17.9716 3.13417 19.4163 4.57701C20.8609 6.01984 21.7721 7.91101 22 9.94M18.5 21C9.93959 21 3 14.0604 3 5.5C3 5.11378 3.01413 4.73086 3.04189 4.35173C3.07375 3.91662 3.08968 3.69907 3.2037 3.50103C3.29814 3.33701 3.4655 3.18146 3.63598 3.09925C3.84181 3 4.08188 3 4.56201 3H7.37932C7.78308 3 7.98496 3 8.15802 3.06645C8.31089 3.12515 8.44701 3.22049 8.55442 3.3441C8.67601 3.48403 8.745 3.67376 8.88299 4.05321L10.0491 7.26005C10.2096 7.70153 10.2899 7.92227 10.2763 8.1317C10.2643 8.31637 10.2012 8.49408 10.0942 8.64506C9.97286 8.81628 9.77145 8.93713 9.36863 9.17882L8 10C9.2019 12.6489 11.3501 14.7999 14 16L14.8212 14.6314C15.0629 14.2285 15.1837 14.0271 15.3549 13.9058C15.5059 13.7988 15.6836 13.7357 15.8683 13.7237C16.0777 13.7101 16.2985 13.7904 16.74 13.9509L19.9468 15.117C20.3262 15.255 20.516 15.324 20.6559 15.4456C20.7795 15.553 20.8749 15.6891 20.9335 15.842C21 16.015 21 16.2169 21 16.6207V19.438C21 19.9181 21 20.1582 20.9007 20.364C20.8185 20.5345 20.663 20.7019 20.499 20.7963C20.3009 20.9103 20.0834 20.9262 19.6483 20.9581C19.2691 20.9859 18.8862 21 18.5 21Z" stroke="#eb580c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
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