@extends('layouts.layout')
@section('content')

@if(session('usuario'))
    <section class="mt-16 bg-gray-950 text-white py-20">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Bem Vindo</h1>
            <h2 class="text-2xl md:text-4xl mb-6 text-orange-600 text-">{{ session('usuario')->nome ?? usuário}}</h2>
        </div>
    </section>

    <section class="py-16 bg-white text-gray-900">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-stretch">

            <!-- Informações (agora no lugar do perfil) -->
            <div class="bg-white shadow-xl rounded-2xl p-8 text-center h-full">
                <h2 class="text-3xl font-bold mb-6">Informações Pessoais</h2>

                <div class="space-y-6 text-left max-w-md mx-auto">
                    <div>
                        <h3 class="text-xl font-semibold">Nome Completo</h3>
                        <p class="text-gray-700">{{ session('usuario')->nome ?? 'Não informado' }}</p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold">E-mail</h3>
                        <p class="text-gray-700">{{ session('usuario')->email ?? 'Não informado' }}</p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold">Telefone</h3>
                        <p class="text-gray-700">{{ session('usuario')->num ?? 'Não informado' }}</p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold">CPF</h3>
                        <p class="text-gray-700">{{ session('usuario')->cpf ?? 'Não informado' }}</p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold">Endereço</h3>
                        <p class="text-gray-700">{{ session('usuario')->cep ?? 'Não informado' }}</p>
                    </div>
                </div>
            </div>

            <!-- Alterar Informações -->
            <div class="bg-white shadow-xl rounded-2xl p-8 h-full mt-0">
                <div class="flex justify-center w-full">
                    <h2 class="text-3xl font-bold mb-6">Alterar Informações</h2>
                </div>

                <form action="/geni" method="POST">
                    @csrf

                    <!-- Nome -->
                    <div>
                        <label class="block text-sm font-semibold mb-2">Nome Completo</label>
                        <input 
                            type="text" 
                            name="nome" 
                            value="{{ session('usuario')->nome }}"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"
                            required
                        >
                    </div>

                    <!-- CEP -->
                    <div class="mt-6">
                        <label class="block text-sm font-semibold mb-2">CEP</label>
                        <input 
                            type="text" 
                            name="cep" 
                            value="{{ session('usuario')->cep }}" 
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"
                            required
                        >
                    </div>

                    <!-- Senha -->
                    <div class="mt-6">
                        <label class="block text-sm font-semibold mb-2">Nova Senha</label>
                        <input 
                            type="password" 
                            name="senha" 
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"
                        >
                    </div>

                    <!-- Confirmar senha -->
                    <div class="mt-6">
                        <label class="block text-sm font-semibold mb-2">Confirmar Nova Senha</label>
                        <input 
                            type="password" 
                            name="senha_confirmation" 
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"
                        >
                    </div>

                    <div class="text-center mt-6">
                        <button 
                            type="submit"
                            class="bg-orange-500 hover:bg-orange-600 text-black font-semibold py-3 px-6 rounded-full transition transform hover:scale-105 shadow-lg"
                        >
                            Salvar Alterações
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </section>
@else
    <session>
        <h1>Não logado</h1>
    </session>
@endif

@endsection
