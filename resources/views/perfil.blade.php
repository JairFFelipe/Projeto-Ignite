@extends('layouts.layout')
@section('content')

@if(session('usuario'))
    {{-- Seção de Boas-Vindas --}}
    <section class="mt-16 bg-gray-950 text-white py-20">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Seu Perfil</h1>
            <h2 class="text-2xl md:text-4xl mb-6 text-orange-600">{{ session('usuario')->nome ?? 'Usuário' }}</h2>
        </div>
    </section>

    {{-- Seção de Informações Pessoais --}}
    <section class="py-16 bg-white text-gray-900">
        <div class="max-w-xl mx-auto px-6">

            {{-- Card de Informações --}}
            <div class="bg-white shadow-2xl rounded-2xl p-8 h-full">
                <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">Minhas Informações</h2>

                <div class="space-y-6 text-left">

                    {{-- Nome Completo com Ícone de Edição --}}
                    <div class="border-b border-gray-200 pb-4 flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-600">Nome Completo</h3>
                            <p class="text-gray-900 text-lg">{{ session('usuario')->nome ?? 'Não informado' }}</p>
                        </div>
                        {{-- Ícone de Edição (Caneta) --}}
                        <button onclick="openModal('modal-nome')" class="text-orange-600 hover:text-orange-700 transition duration-150 p-2 rounded-full hover:bg-orange-50" aria-label="Alterar Nome">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                        </button>
                    </div>

                    {{-- E-mail --}}
                    <div class="border-b border-gray-200 pb-4">
                        <h3 class="text-xl font-semibold text-gray-600">E-mail</h3>
                        <p class="text-gray-900 text-lg">{{ session('usuario')->email ?? 'Não informado' }}</p>
                    </div>

                    {{-- Telefone com Ícone de Edição --}}
                    <div class="border-b border-gray-200 pb-4 flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-600">Telefone</h3>
                            <p class="text-gray-900 text-lg">{{ session('usuario')->num_formatado ?? 'Não informado' }}</p>
                        </div>
                        {{-- Ícone de Edição (Caneta) --}}
                        <button onclick="openModal('modal-telefone')" class="text-orange-600 hover:text-orange-700 transition duration-150 p-2 rounded-full hover:bg-orange-50" aria-label="Alterar Telefone">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                        </button>
                    </div>

                    {{-- CPF --}}
                    <div class="border-b border-gray-200 pb-4">
                        <h3 class="text-xl font-semibold text-gray-600">CPF</h3>
                        <p class="text-gray-900 text-lg">{{ session('usuario')->cpf ?? 'Não informado' }}</p>
                    </div>

                    {{-- Endereço/CEP com Ícone de Edição --}}
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-600">CEP</h3>
                            <p class="text-gray-900 text-lg">{{ session('usuario')->cep_formatado ?? 'Não informado' }}</p>
                        </div>
                        {{-- Ícone de Edição (Caneta) --}}
                        <button onclick="openModal('modal-cep')" class="text-orange-600 hover:text-orange-700 transition duration-150 p-2 rounded-full hover:bg-orange-50" aria-label="Alterar CEP">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                        </button>
                    </div>

                </div>

                {{-- Botão Alterar Senha --}}
                <div class="text-center mt-10">
                    <button
                        onclick="openModal('modal-senha')"
                        class="bg-orange-600 hover:bg-orange-700 text-white font-semibold py-3 px-8 rounded-full transition transform hover:scale-105 shadow-lg"
                    >
                        Alterar Senha
                    </button>
                </div>
            </div>

        </div>
    </section>

    {{-- -------------------------- MODALS -------------------------- --}}

    {{-- Modal para Alterar Nome --}}
    <div id="modal-nome" class="fixed inset-0 bg-gray-900 bg-opacity-75 hidden items-center justify-center z-50 transition-opacity duration-300">
        <div class="bg-white rounded-lg shadow-xl p-8 w-full max-w-md mx-4 transform transition-all duration-300 scale-95 opacity-0" data-modal-content>
            <h3 class="text-2xl font-bold mb-6 text-gray-800 text-center">Alterar Nome Completo</h3>
            <form action="/chnome" method="POST">
                @csrf
                <input type="hidden" name="campo" value="nome">

                <label for="nome" class="block text-sm font-medium text-gray-700 mb-2">Novo Nome</label>
                <input
                    type="text"
                    name="nome"
                    id="nome"
                    value="{{ session('usuario')->nome ?? '' }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
                    placeholder="Seu Nome Completo"
                    required
                >

                <div class="flex justify-end mt-6 space-x-3">
                    <button type="button" onclick="closeModal('modal-nome')" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300">Cancelar</button>
                    <button type="submit" class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700">Salvar</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal para Alterar Telefone --}}
    <div id="modal-telefone" class="fixed inset-0 bg-gray-900 bg-opacity-75 hidden items-center justify-center z-50 transition-opacity duration-300">
        <div class="bg-white rounded-lg shadow-xl p-8 w-full max-w-md mx-4 transform transition-all duration-300 scale-95 opacity-0" data-modal-content>
            <h3 class="text-2xl font-bold mb-6 text-gray-800 text-center">Alterar Telefone</h3>
            <form action="/chfone" method="POST">
                @csrf
                <input type="hidden" name="campo" value="num">

                <label for="num" class="block text-sm font-medium text-gray-700 mb-2">Novo Telefone</label>
                <input
                    type="text"
                    name="num"
                    id="num"
                    value="{{ session('usuario')->num ?? '' }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
                    placeholder="(99) 99999-9999"
                    required
                >

                <div class="flex justify-end mt-6 space-x-3">
                    <button type="button" onclick="closeModal('modal-telefone')" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300">Cancelar</button>
                    <button type="submit" class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700">Salvar</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal para Alterar CEP --}}
    <div id="modal-cep" class="fixed inset-0 bg-gray-900 bg-opacity-75 hidden items-center justify-center z-50 transition-opacity duration-300">
        <div class="bg-white rounded-lg shadow-xl p-8 w-full max-w-md mx-4 transform transition-all duration-300 scale-95 opacity-0" data-modal-content>
            <h3 class="text-2xl font-bold mb-6 text-gray-800 text-center">Alterar CEP</h3>
            <form action="/chcep" method="POST">
                @csrf
                <input type="hidden" name="campo" value="cep">

                <label for="cep" class="block text-sm font-medium text-gray-700 mb-2">Novo CEP</label>
                <input
                    type="text"
                    name="cep"
                    id="cep"
                    value="{{ session('usuario')->cep ?? '' }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
                    placeholder="99999-999"
                    required
                >

                <div class="flex justify-end mt-6 space-x-3">
                    <button type="button" onclick="closeModal('modal-cep')" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300">Cancelar</button>
                    <button type="submit" class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700">Salvar</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal para Alterar Senha --}}
    <div id="modal-senha" class="fixed inset-0 bg-gray-900 bg-opacity-75 hidden items-center justify-center z-50 transition-opacity duration-300">
        <div class="bg-white rounded-lg shadow-xl p-8 w-full max-w-md mx-4 transform transition-all duration-300 scale-95 opacity-0" data-modal-content>
            <h3 class="text-2xl font-bold mb-6 text-gray-800 text-center">Alterar Senha</h3>
            <form action="/chsenha" method="POST">
                @csrf
                <input type="hidden" name="campo" value="senha">

                {{-- Campo Nova Senha --}}
                <div class="mb-4">
                    <label for="senha" class="block text-sm font-medium text-gray-700 mb-2">Nova Senha</label>
                    <input
                        type="password"
                        name="senha"
                        id="senha"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
                        required
                    >
                </div>

                {{-- Campo Confirmar Senha --}}
                <div>
                    <label for="senha_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirmar Nova Senha</label>
                    <input
                        type="password"
                        name="senha_confirmation"
                        id="senha_confirmation"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
                        required
                    >
                </div>

                <div class="flex justify-end mt-6 space-x-3">
                    <button type="button" onclick="closeModal('modal-senha')" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300">Cancelar</button>
                    <button type="submit" class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700">Salvar</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Script JavaScript para Modals (Permanece o mesmo) --}}
    <script>
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            const content = modal.querySelector('[data-modal-content]');

            modal.classList.remove('hidden');
            modal.classList.add('flex');

            // Força o reflow para garantir a transição
            void modal.offsetWidth;

            modal.style.opacity = '1';
            content.style.transform = 'scale(1)';
            content.style.opacity = '1';
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            const content = modal.querySelector('[data-modal-content]');

            content.style.transform = 'scale(0.95)';
            content.style.opacity = '0';

            modal.style.opacity = '0';

            // Esconde o modal após a transição
            setTimeout(() => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            }, 300); // 300ms, o tempo da transição CSS
        }

        // Fechar ao clicar fora do modal
        document.querySelectorAll('.fixed').forEach(modal => {
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    closeModal(modal.id);
                }
            });
        });

        // Fechar com a tecla ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                document.querySelectorAll('.fixed.flex').forEach(modal => {
                    closeModal(modal.id);
                });
            }
        });
    </script>

@else
    <section class="py-20 text-center">
        <h1 class="text-3xl font-bold text-red-600">⚠️ Usuário não logado.</h1>
        <p class="text-gray-600 mt-4">Por favor, faça login para acessar esta página.</p>
    </section>
@endif

@endsection
