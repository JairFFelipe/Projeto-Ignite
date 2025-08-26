<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<!--Header inicio-->
    <header class="flex w-fit">
        <div class="flex text-white bg-black w-screen h-[7vh] items-center px-10 justify-between ">
            <div class="flex w-fit h-[7vh] items-center space-x-10 font-semibold">    
                <div class="flex">
                    <img src="{{ asset('img/gatoburro.png') }}" alt="Logo" class="h-10 w-40">
                </div>

                <div class="flex">
                    <ul class="flex space-x-5">
                        <li>MOTOCICLETAS</li>
                        <li>ACESSÓRIOS</li>
                        <li>ROUPAS</li>
                        <li>SAIBA MAIS</li>
                    </ul>
                </div>
            </div>

            <div class="flex space-x-10 items-center">
                <div>
                    <ul class="flex space-x-5 font-thin">
                        <li>Concessionárias</li>
                        <li>Monte sua moto</li>
                        <li>Ofertas</li>
                        <li>Agende um test ride</li>
                    </ul>
                </div>
                <div>
                    <img src="{{ asset('img/perfilburro.jpg') }}" alt="" class="h-10 w-40">
                </div>
            </div>
        </div>
    </header>

</body>
</html>