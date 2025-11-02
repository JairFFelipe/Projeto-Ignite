<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <h1 class="text-xl md:text-2xl font-bold leading-tight text-white">Crie sua conta</h1>

        <form class="mt-2" action="/startform" method="POST">
          @csrf
          <div class="flex w-full justify-between gap-5">
            <div>
              <label class="block text-gray-200">Nome</label>
              <input type="text" name="nome" value="{{ old('nome') }}" placeholder="Nathan" class="w-full px-4 py-3 rounded-lg bg-zinc-200 mt-2 border focus:border-orange-500 focus:bg-orange-100 focus:outline-none text-black ease-in-out duration-300 focus:ring-orange-500" autocomplete required>
            </div>

            <div>
              <label class="block text-gray-200">Sobrenome</label>
              <input type="text" name="sobrenome" value="{{ old('sobrenome') }}" placeholder="de Souza Filho" class="w-full px-4 py-3 rounded-lg bg-zinc-200 mt-2 border focus:border-orange-500 focus:bg-orange-100 focus:outline-none text-black ease-in-out duration-300 focus:ring-orange-500" autocomplete required>
            </div>
          </div>

          <div class="mt-4">
            <label class="block text-gray-200">Número de telefone</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}" placeholder="(XX) XXXXX-XXXX" class="w-full px-4 py-3 rounded-lg bg-zinc-200 mt-2 border focus:border-orange-500 focus:bg-orange-100 focus:outline-none text-black focus:px-5 focus:py-4 ease-in-out duration-300 focus:ring-orange-500" autocomplete required>
          </div>
          @error('phone')
            <div class="text-red-600 text-sm">{{ $message }}</div>
          @enderror

          <div class="mt-4">
            <label class="block text-gray-200">Endereço de Email</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="email@xyz.com" class="w-full px-4 py-3 rounded-lg bg-zinc-200 mt-2 border focus:border-orange-500 focus:bg-orange-100 focus:outline-none text-black focus:px-5 focus:py-4 ease-in-out duration-300 focus:ring-orange-500" autocomplete required>
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

          <div class="mt-4 relative">
            <label class="block text-gray-200">Confirme sua senha</label>
            <div class="flex items-center justify-center ">
              <input type="password" name="senha_confirmation" id="senha_confirmation" placeholder="Senha123" minlength="6" class="w-full px-4 py-3 rounded-lg bg-zinc-200 mt-2 focus:border-orange-500 focus:bg-orange-100 focus:outline-none text-black ease-in-out duration-300 focus:ring-orange-500" required>
              <button type="button" onclick="toggleSenha('senha_confirmation', this)" aria-label="Mostrar senha" class="absolute right-3 transform"><img src="{{ asset('img/olhoaberto.png') }}" alt="mostrar senha" class="w-[2vw] h-[2vw]"></button>
            </div>
          </div>
          @error('senha')
            <div class="text-red-600 text-sm">{{ $message }}</div>
          @enderror

          <button type="submit" class="w-full block bg-black border-[1px] border-orange-500 hover:bg-orange-500 focus:bg-orange-400 text-white font-semibold rounded-lg px-4 py-3 mt-8 ease-in-out duration-200">Registrar</button>
        </form>

        <hr class="mt-6 border-gray-700 w-full">
        <div class="flex h-fit w-full justify-center">
          <p class="mt-2">
            <a href="/login" class="text-orange-500 hover:text-orange-700 font-semibold">Entre na sua conta!</a>
          </p>
        </div>

      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // máscara de exibição do telefone (apenas exibição)
      const tel = document.getElementById('phone');
      if (tel) {
        tel.addEventListener('input', function () {
          let v = this.value.replace(/\D/g, '');
          if (v.length > 11) v = v.slice(0, 11);

          if (v.length > 10) {
            // celular: (##) #####-####
            this.value = v.replace(/^(\d{2})(\d{5})(\d{0,4}).*/, '($1) $2-$3');
          } else if (v.length > 6) {
            // fixo: (##) ####-####
            this.value = v.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, '($1) $2-$3');
          } else if (v.length > 2) {
            this.value = v.replace(/^(\d{2})(\d{0,5}).*/, '($1) $2');
          } else {
            // se não houver dígito, não mostra "("
            this.value = v ? '(' + v : '';
          }
        });
      }

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
    });
  </script>

</body>
</html>
