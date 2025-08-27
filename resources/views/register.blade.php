<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
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
        <div class="flex items-center gap-3">
          <img src="{{ asset('img/gatoburro.png') }}" alt="🔥" class="w-9 h-9"><h1 class="text-5xl font-bold text-white">IGNITE</h1>
        </div>
        <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12 text-white">Crie sua conta</h1>
  
        <form class="mt-6" action="/startform" method="POST">
            @csrf
          <div class="flex w-full justify-between">
            <div>
              <label class="block text-gray-200">Nome</label>
              <input type="text" name="name" id="" placeholder="Nathan" class="w-full px-4 py-3 rounded-lg bg-zinc-200 mt-2 border focus:border-orange-500 focus:bg-orange-100 focus:outline-none text-black ease-in-out duration-300 focus:ring-orange-500" autocomplete required>
            </div>

            <!-- <div class="">
              <label class="block text-gray-200">Sobrenome</label>
              <input type="email" name="" id="" placeholder="de Souza Filho" class="w-full px-4 py-3 rounded-lg bg-zinc-200 mt-2 border focus:border-orange-500 focus:bg-orange-100 focus:outline-none text-black ease-in-out duration-300 focus:ring-orange-500" autocomplete required>
            </div> -->

          </div>

          <!-- <div class="mt-4">
            <label class="block text-gray-200">Número de telefone</label>
            <input type="email" name="" id="" placeholder="(XX) XXXXX-XXXX" class="w-full px-4 py-3 rounded-lg bg-zinc-200 mt-2 border focus:border-orange-500 focus:bg-orange-100 focus:outline-none text-black  focus:px-5 focus:py-4 ease-in-out duration-300 focus:ring-orange-500" autocomplete required>
          </div> -->

          <div class="mt-4">
            <label class="block text-gray-200">Endereço de Email</label>
            <input type="email" name="email" id="" placeholder="email@xyz.com" class="w-full px-4 py-3 rounded-lg bg-zinc-200 mt-2 border focus:border-orange-500 focus:bg-orange-100 focus:outline-none text-black  focus:px-5 focus:py-4 ease-in-out duration-300 focus:ring-orange-500" autocomplete required>
          </div>
  
          <div class="mt-4">
            <label class="block text-gray-200">Senha</label>
            <input type="password" name="password" id="" placeholder="Senha123" minlength="6" class="w-full px-4 py-3 rounded-lg bg-zinc-200 mt-2 border focus:border-orange-500
                  focus:bg-orange-100 focus:outline-none text-black focus:px-5 focus:py-4 ease-in-out duration-300 focus:ring-orange-500" required>
          </div>
          
          <!-- <div class="mt-4">
            <label class="block text-gray-200">Repita sua senha</label>
            <input type="password" name="" id="" placeholder="Senha123" minlength="6" class="w-full px-4 py-3 rounded-lg bg-zinc-200 mt-2 focus:border-orange-500 
                  focus:bg-orange-100 focus:outline-none text-black focus:px-5 focus:py-4 ease-in-out duration-300 focus:ring-orange-500" required>
          </div> -->

          <button type="submit" class="w-full block bg-black border-[1px] border-orange-500 hover:bg-orange-500 focus:bg-orange-400 text-white font-semibold rounded-lg
                px-4 py-3 mt-12 ease-in-out duration-200">Entrar</button>
        </form>
  
        <hr class="mt-6 border-gray-700 w-full">
        <div class="flex h-fit w-full justify-center">
          <p class="mt-8 ">
            <a href="/login" class="text-orange-500 hover:text-orange-700 font-semibold">
              Entre na sua conta!
            </a>
          </p>  
        </div>
  
      </div>

    </div>
  
  </section>
  

</body>
</html>

  

</body>
</html>