<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
    {{-- Assumindo que você usa o Vite para carregar o CSS/JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
<body>

    <section class="flex flex-col md:flex-row h-screen items-center">

        {{-- Coluna da Imagem (Esquerda) --}}
        <div class="bg-slate-900 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
            {{-- Usando a mesma imagem de fundo com blur-sm, conforme seu exemplo --}}
            <img src="{{ asset('img/ninjazx4rbanner.jpg') }}" alt="Motos" class="w-full h-full object-cover blur-sm">
        </div>

        {{-- Coluna do Formulário (Direita) --}}
        <div class="bg-zinc-950 w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
              flex items-center justify-center">

            <div class="w-full h-100">
                <div class="flex items-center gap-3 w-full align-middle justify-center">
                    {{-- Logo, usando o mesmo caminho e classe de tamanho do seu exemplo --}}
                    <img src="{{ asset('img/ignitelogobranco.png') }}" alt="🔥" class="w-[25vh]">
                </div>
                
                <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12 text-white">Recuperar Senha</h1>
                <p class="mt-2 text-gray-400">
                    Informe seu e-mail para receber um link de redefinição.
                </p>

                {{-- Formulário de Recuperação de Senha (Rota padrão do Laravel) --}}
                <form class="mt-6" action="" method="POST">
                    @csrf

                    {{-- Mensagem de Status (sucesso ao enviar o link) --}}
                    @if (session('status'))
                        <div class="p-4 mb-4 text-sm text-green-300 bg-green-900 rounded-lg" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {{-- Campo E-mail --}}
                    <div>
                        <label class="block text-gray-200">Endereço de email</label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email"
                            value="{{ old('email') }}" 
                            placeholder="email@xyz.com" 
                            class="w-full px-4 py-3 rounded-lg bg-zinc-200 mt-2 border focus:border-orange-500 focus:bg-orange-100 focus:outline-none text-black focus:ring-orange-500 ease-in-out duration-300" 
                            autocomplete="email" 
                            required
                        >
                    </div>
                    @error('email')
                        <div class="text-red-600 text-sm mt-2">{{ $message }}</div>
                    @enderror

                    {{-- Botão de Envio --}}
                    <button 
                        type="submit" 
                        class="w-full block bg-orange-600 hover:bg-orange-400 focus:bg-orange-400 text-black font-semibold rounded-lg
                            px-4 py-3 mt-6 ease-in-out duration-200"
                    >
                        Enviar Link de Redefinição
                    </button>
                </form>

                <hr class="mt-6 border-gray-700 w-full">
                
                {{-- Link para voltar ao Login --}}
                <div class="flex h-fit w-full justify-center">
                    <p class="mt-8">
                        <a href="{{ url('/login') }}" class="text-orange-500 hover:text-orange-700 font-semibold">
                            Voltar para o Login
                        </a>
                    </p>
                </div>

            </div>

        </div>

    </section>
</body>
</html>