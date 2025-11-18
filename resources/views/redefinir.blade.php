<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    
    {{-- Estilos para o ícone (mantidos para consistência, embora não sejam usados nesta página) --}}
    <style>
        .password-toggle-icon {
            color: #6B7280; 
            width: 1.5rem; 
            height: 1.5rem; 
        }
        .password-toggle-icon:hover {
            color: #F97316; 
        }
    </style>
</head>
<body>

    <section class="flex flex-col md:flex-row min-h-screen items-center"> 

        {{-- Coluna da Imagem (Esquerda) --}}
        <div class="bg-slate-900 hidden lg:block w-full md:w-1/2 xl:w-2/3 min-h-screen"> 
            <img src="{{ asset('img/ninjazx4rbanner.jpg') }}" alt="Motos" class="w-full h-full object-cover blur-sm">
        </div>

        {{-- Coluna do Formulário (Direita) --}}
        <div class="bg-zinc-950 w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 min-h-screen px-6 lg:px-16 xl:px-12
              flex items-center justify-center">

            <div class="w-full max-w-md"> 
                <div class="flex items-center gap-3 w-full align-middle justify-center">
                    <img src="{{ asset('img/ignitelogobranco.png') }}" alt="🔥" class="w-[25vh]">
                </div>
                
                <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12 text-white">Recuperar Senha</h1>
                <p class="mt-2 text-gray-400">
                    Redefina sua senha
                </p>

                <form class="mt-6" action="" method="POST">
                    @csrf
                    
                    {{-- Campo nova senha --}}
                    <div class="flex flex-col gap-3">
                        <div class="relative"> {{-- Adicionado 'relative' para o posicionamento do botão --}}
                            <label class="block text-gray-200">Senha</label>
                            <input 
                                type="password" 
                                name="senha" 
                                id="senha"
                                value="{{ old('email') }}" 
                                placeholder="1234..." 
                                class="w-full px-4 py-3 rounded-lg bg-zinc-200 mt-2 border focus:border-orange-500 focus:bg-orange-100 focus:outline-none text-black focus:ring-orange-500 ease-in-out duration-300" 
                                required
                            >
                            {{-- Botão de Mostrar/Ocultar Senha para o campo 'senha' --}}
                            <button type="button" onclick="toggleSenha('senha', this)" aria-label="Mostrar senha" class="absolute right-3 top-[38px] transform">
                                <img src="{{ asset('img/olhofechado.svg') }}" alt="mostrar senha" class="w-[2vw] h-[2vw]">
                            </button>
                        </div>
                        
                        {{-- Campo confirmar senha --}}
                        <div class="relative"> {{-- Adicionado 'relative' para o posicionamento do botão --}}
                            <label class="block text-gray-200">Confirme sua senha</label>
                            <input 
                                type="password" 
                                name="confirmar_senha"
                                id="confirmar_senha"
                                value="{{ old('email') }}" 
                                placeholder="1234..." 
                                class="w-full px-4 py-3 rounded-lg bg-zinc-200 mt-2 border focus:border-orange-500 focus:bg-orange-100 focus:outline-none text-black focus:ring-orange-500 ease-in-out duration-300" 
                                required
                            >
                            {{-- Botão de Mostrar/Ocultar Senha para o campo 'confirmar_senha' --}}
                            <button type="button" onclick="toggleSenha('confirmar_senha', this)" aria-label="Mostrar senha" class="absolute right-3 top-[38px] transform">
                                <img src="{{ asset('img/olhofechado.svg') }}" alt="mostrar senha" class="w-[2vw] h-[2vw]">
                            </button>
                        </div>
                        
                    @error('senha')
                        <div class="text-red-600 text-sm mt-2">{{ $message }}</div>
                    @enderror
                    </div>

                    {{-- Botão de Envio --}}
                    <button 
                        type="submit" 
                        class="w-full block bg-orange-600 hover:bg-orange-400 focus:bg-orange-400 text-black font-semibold rounded-lg
                            px-4 py-3 mt-6 ease-in-out duration-200"
                    >
                        Redefinir
                    </button>
                </form>

                <hr class="mt-6 border-gray-700 w-full">
                
                {{-- Link para voltar ao Login --}}
                <div class="flex h-fit w-full justify-center">
                    <p class="mt-8">
                        <a href="/login" class="text-orange-500 hover:text-orange-700 font-semibold">
                            Voltar para o Login
                        </a>
                    </p>
                </div>

            </div>

        </div>

    </section>
    <script>
    // toggle de mostrar/ocultar senha
        function toggleSenha(id, btn) {
            const input = document.getElementById(id);
            if (!input) return;
            const showing = input.type === 'password';
            input.type = showing ? 'text' : 'password';
            btn.innerHTML = showing ? '<img src="{{ asset('img/olhoaberto.svg') }}" alt="ocultar senha" class="w-[2vw] h-[2vw]">' : '<img src="{{ asset('img/olhofechado.svg') }}" alt="mostrar senha" class="w-[2vw] h-[2vw]">';
            btn.setAttribute('aria-pressed', String(showing));
        }

        // permite uso via onclick inline
        window.toggleSenha = toggleSenha;
    </script>
</body>
</html>