<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <section class="flex flex-col md:flex-row h-screen items-center">

    <div class="bg-slate-900 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
      <img src="{{ asset('img/motos.png') }}" alt="motos" class="w-full h-full object-cover">
    </div>

    <div class="bg-zinc-950 w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
          flex items-center justify-center">

      <div class="w-full h-100">
        <div class="flex items-center gap-3 w-full align-middle justify-center">
          <img src="{{ asset('img/ignitelogobranco.png') }}" alt="🔥" class="w-[25vh]">
        </div>
        <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12 text-white">Entre na sua conta</h1>

        <form class="mt-6" action="/logincheck" method="POST">
            @csrf
          <div>
            <label class="block text-gray-200">Endereço de email</label>
            <input type="email" name="email" id=""
             value="{{ old('email') }}" placeholder="email@xyz.com" class="w-full px-4 py-3 rounded-lg bg-zinc-200 mt-2 border focus:border-orange-500 focus:bg-orange-100 focus:outline-none text-black  focus:px-5 focus:py-4 ease-in-out duration-300 focus:ring-orange-500" autocomplete required>
          </div>
          @error('email')
                        <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror

          <div class="mt-4 relative">
            <label class="block text-gray-200">Senha</label>
              <div class="flex items-center">
                <input type="password" name="senha" id="senha" placeholder="Senha123" minlength="6" class="w-full px-4 py-3 rounded-lg bg-zinc-200 mt-2 border focus:border-orange-500 focus:bg-orange-100 focus:outline-none text-black ease-in-out duration-300 focus:ring-orange-500" required>
                <button type="button" onclick="toggleSenha('senha', this)" aria-label="Mostrar senha" class="absolute right-3 transform"><img src="{{ asset('img/olhoaberto.png') }}" alt="mostrar senha" class="w-[2vw] h-[2vw]"></button>
              </div>
          </div>
          @error('senha')
                        <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror

          <div class="text-right mt-2">
            <a href="#" class="text-sm font-semibold text-gray-200 hover:text-orange-700 focus:text-orange-700">Esqueceu sua senha?</a>
          </div>

          <button type="submit" class="w-full block bg-orange-600 hover:bg-orange-400 focus:bg-orange-400 text-black font-semibold rounded-lg
                px-4 py-3 mt-6 ease-in-out duration-200">Entrar</button>
        </form>

        <hr class="mt-6 border-gray-700 w-full">
        <div class="flex h-fit w-full justify-center">
          <p class="mt-8 ">
            <a href="/register" class="text-orange-500 hover:text-orange-700 font-semibold">
              Crie uma conta!
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
        btn.innerHTML = showing ? '<img src="{{ asset('img/olhofechado.png') }}" alt="ocultar senha" class="w-[2vw] h-[2vw]">' : '<img src="{{ asset('img/olhoaberto.png') }}" alt="mostrar senha" class="w-[2vw] h-[2vw]">';
        btn.setAttribute('aria-pressed', String(showing));
      }

      // permite uso via onclick inline
      window.toggleSenha = toggleSenha;
  </script>
</body>
</html>



</body>
</html>
