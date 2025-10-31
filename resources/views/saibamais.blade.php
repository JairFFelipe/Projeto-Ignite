@extends('layouts.layout')
@section('content')

<section class="mt-16 bg-gray-950 text-white py-20">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6">Saiba Mais</h1>
        <p class="text-lg md:text-xl text-gray-300 leading-relaxed">
            Conheça mais sobre a nossa concessionária e o compromisso que temos em oferecer as melhores motocicletas do mercado.  
            Cada detalhe foi pensado para que sua experiência sobre duas rodas seja completa da escolha do modelo até o pós-venda.
        </p>
    </div>
</section>

<section class="py-16 bg-white text-gray-900">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <img src="{{ asset('img/ignitelogopreto.jpg') }}" alt="Showroom da concessionária" class="">
        </div>
        <div>
            <h2 class="text-3xl font-bold mb-4">Nossa História e Propósito</h2>
            <p class="text-gray-700 leading-relaxed">
                Nascemos com a missão de conectar pessoas à verdadeira essência do motociclismo.  
                Somos mais do que uma concessionária — somos apaixonados por desempenho, design e liberdade.  
                Trabalhamos com marcas lendárias como <strong>Kawasaki</strong>, <strong>Harley-Davidson</strong> e <strong>Royal Enfield</strong>, oferecendo modelos que unem tecnologia, tradição e emoção em cada aceleração.
            </p>
        </div>
    </div>
</section>

<section class="bg-gray-950 text-white py-20">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-8">As Marcas Que Representamos</h2>
        <p class="text-gray-300 mb-10 max-w-3xl mx-auto">
            Trabalhamos apenas com marcas reconhecidas mundialmente pela excelência e autenticidade.  
            Cada uma delas traduz uma filosofia própria, capaz de atender desde o motociclista urbano até o viajante de longas distâncias.
        </p>

        <div class="grid md:grid-cols-3 gap-8">
            <a href="/kawasaki" class="bg-yellow-600 hover:bg-yellow-700 p-6 rounded-2xl shadow-lg transition transform hover:scale-105">
                <h3 class="text-xl font-semibold mb-3">Kawasaki</h3>
                <p class="text-gray-100 text-sm">
                    Potência, precisão e inovação. A escolha ideal para quem busca desempenho e emoção.
                </p>
            </a>

            <a href="/harleydavidson" class="bg-orange-600 hover:bg-orange-700 p-6 rounded-2xl shadow-lg transition transform hover:scale-105">
                <h3 class="text-xl font-semibold mb-3">Harley-Davidson</h3>
                <p class="text-gray-100 text-sm">
                    O verdadeiro ícone americano. Estilo inconfundível, conforto e tradição sobre duas rodas.
                </p>
            </a>

            <a href="/royalenfield" class="bg-red-600 hover:bg-red-700 p-6 rounded-2xl shadow-lg transition transform hover:scale-105">
                <h3 class="text-xl font-semibold mb-3">Royal Enfield</h3>
                <p class="text-gray-100 text-sm">
                    Clássica e atemporal, combina design retrô com confiabilidade moderna.
                </p>
            </a>
        </div>
    </div>
</section>

<section class="py-16 bg-white text-gray-900">
    <div class="max-w-5xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Nosso Compromisso com Você</h2>
        <p class="text-gray-700 text-lg leading-relaxed mb-8">
            Nossa prioridade é oferecer uma experiência completa: desde o primeiro contato até o momento em que você acelera sua nova moto pela primeira vez.  
            Oferecemos atendimento personalizado, equipe especializada e um pós-venda de confiança — porque acreditamos que cada cliente merece mais do que uma moto: merece uma parceira de estrada.
        </p>
        <a href="/contato" class="inline-block bg-orange-600 hover:bg-orange-700 text-white font-semibold py-3 px-6 rounded-full transition transform hover:scale-105 shadow-lg">
            Fale Conosco
        </a>
    </div>
</section>

@endsection
