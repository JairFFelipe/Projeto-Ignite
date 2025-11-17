@extends('layouts.layout')
@section('content')

<section class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-b from-orange-50 to-white py-20 px-6 text-center">

    <!-- Cabeçalho de Confirmação -->
    <div class="mb-8">
        <h1 class="text-4xl md:text-5xl font-extrabold text-orange-600 drop-shadow-sm">
            Pedido Confirmado!
        </h1>
        <p class="text-gray-600 mt-2 text-base md:text-lg">
            Agradecemos pela sua compra! Aqui estão os detalhes do seu pedido:
        </p>
    </div>

    <!-- Card de Resumo -->
    <div class="bg-white shadow-lg rounded-3xl p-8 md:p-10 w-full max-w-2xl text-left relative overflow-hidden">

        <!-- Imagem da Moto -->
        <div class="flex justify-center mb-6">
            <img id="moto_imagem" src="{{ asset('img/default.jpg') }}" alt="Moto selecionada"
                class="w-64 h-40 object-contain rounded-xl shadow-md border border-gray-200 bg-gray-50">
        </div>

        <h2 class="text-2xl font-bold mb-4 text-gray-900 border-b border-gray-200 pb-2">Resumo do Pedido</h2>

        <div class="space-y-3 text-gray-800 leading-relaxed">
            <p><strong>Moto:</strong> <span id="moto" class="text-gray-900 font-medium"></span></p>
            <p><strong>CPF:</strong> <span id="cpf" class="text-gray-900 font-medium"></span></p>
            <p><strong>Forma de Pagamento:</strong> <span id="forma_pagamento" class="text-gray-900 font-medium"></span></p>

            <div class="mt-5">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Endereço</h3>
                <p id="endereco" class="text-gray-700"></p>
            </div>

            <div class="mt-5">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Acessórios</h3>
                <ul id="acessorios" class="list-disc pl-6 text-gray-700"></ul>
            </div>
        </div>

        <div class="mt-6 border-t border-gray-200 pt-4 text-lg font-bold text-gray-900">
            Total: <span class="text-orange-600" id="total"></span>
        </div>
    </div>

    <!-- Link de Voltar -->
    <a href="/kawasaki" class="mt-10 text-orange-600 font-semibold hover:underline text-base">
        ← Voltar à loja
    </a>
</section>


<script>
document.addEventListener('DOMContentLoaded', () => {
    try {
        const pedido = JSON.parse(localStorage.getItem('pedido'));
        if (!pedido) {
            document.body.innerHTML = '<h2 class="text-center text-red-500 mt-10">Nenhum pedido encontrado.</h2>';
            return;
        }

        // Atualiza os campos
        document.getElementById('moto').textContent = pedido.moto;
        document.getElementById('cpf').textContent = pedido.cpf;
        document.getElementById('forma_pagamento').textContent =
            pedido.forma_pagamento === 'pix' ? 'PIX' : 'Cartão de Crédito';
        document.getElementById('endereco').textContent =
            `${pedido.endereco.rua}, ${pedido.endereco.numero} - ${pedido.endereco.bairro}, ${pedido.endereco.cidade} - ${pedido.endereco.estado}, CEP: ${pedido.endereco.cep}`;
        document.getElementById('total').textContent = `R$ ${pedido.total.toLocaleString()}`;

        // Acessórios
        const lista = document.getElementById('acessorios');
        lista.innerHTML = pedido.acessorios.length
            ? ''
            : '<li class="text-gray-500 italic">Nenhum acessório selecionado.</li>';

        pedido.acessorios.forEach(a => {
            const li = document.createElement('li');
            li.textContent = `${a.nome} — R$ ${a.preco.toLocaleString()}`;
            lista.appendChild(li);
        });

        // Mapeia nome da moto → imagem
        const imagens = {
            // Harley-Davidson
            'Harley-Davidson Sportster': '{{ asset("img/harleysportster.jpg") }}',
            'electraglide': '{{ asset("img/harleyelectraglide.png") }}',
            'fatbob': '{{ asset("img/harleyfatbob.webp") }}',
            'fatboy': '{{ asset("img/harleyfatboy.webp") }}',
            'heritageclassic': '{{ asset("img/harleyheritageclassic.jpg") }}',
            'lowriders': '{{ asset("img/harleylowriders.jpg") }}',
            'nightster': '{{ asset("img/harleynightster.jpg") }}',
            'panamerica': '{{ asset("img/harleypanamerica.jpg") }}',
            'roadking': '{{ asset("img/harleyroadking.jpg") }}',
            'streetglide': '{{ asset("img/harleystreetglide.jpg") }}',

            // Royal Enfield
            'bullet350': '{{ asset("img/royalbullet350.webp") }}',
            'classic350': '{{ asset("img/royalclassic350.webp") }}',
            'classic500': '{{ asset("img/royalclassic500.jpg") }}',
            'continentalgt650': '{{ asset("img/royalcontinentalgt650.avif") }}',
            'hunter350': '{{ asset("img/royalhunter350.avif") }}',
            'interceptor650cc': '{{ asset("img/royalinterceptor650cc.jpg") }}',
            'meteor350': '{{ asset("img/royalmeteor350.webp") }}',
            'shotgun650': '{{ asset("img/royalshotgun650.png") }}',
            'supermeteor650': '{{ asset("img/royalsupermeteor650.jpg") }}',
            'thunderbird500x': '{{ asset("img/royalthunderbird500x.jpg") }}',

            // Kawasaki
            'Kawasaki Ninja H2R': '{{ asset("img/kawasakininjah2r.png") }}',
            'Kawasaki Ninja 1000SX': '{{ asset("img/kawasakininja1000sx.jpg") }}',
            'ninja400': '{{ asset("img/kawasakininja400.jpg") }}',
            'ninja650': '{{ asset("img/kawasakininja650.jpg") }}',
            'ninjazx4r': '{{ asset("img/kawasakininjazx4r.jpg") }}',
            'ninjazx10r': '{{ asset("img/kawasakininjazx10r.jpg") }}',
            'z650': '{{ asset("img/kawasakiz650.jpg") }}',
            'z900': '{{ asset("img/kawasakiz900.avif") }}',
            'z1000': '{{ asset("img/kawasakiz1000.png") }}',
            'zh2': '{{ asset("img/kawasakizh2.png") }}'
        };

        // Define a imagem da moto
        const imgEl = document.getElementById('moto_imagem');
        imgEl.src = imagens[pedido.moto] || '{{ asset("img/default.jpg") }}';

        // Adiciona QR Code se for PIX
        if (pedido.forma_pagamento === 'pix') {
            const container = document.createElement('div');
            container.className = 'mt-8 text-center';

            const titulo = document.createElement('h3');
            titulo.className = 'text-xl font-semibold text-gray-900 mb-3';
            titulo.textContent = 'Pagamento via PIX';

            const descricao = document.createElement('p');
            descricao.className = 'text-gray-600 mb-4';
            descricao.textContent = 'Escaneie o QR Code abaixo para concluir o pagamento:';

            const qr = document.createElement('img');
            qr.src = 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=Pagamento%20Kawasaki%20H2R%20R$%20' + pedido.total;
            qr.alt = 'QR Code PIX';
            qr.className = 'mx-auto border border-gray-300 rounded-lg shadow-md';

            container.appendChild(titulo);
            container.appendChild(descricao);
            container.appendChild(qr);

            // Insere o QR code dentro do card do pedido
            document.querySelector('.bg-white.shadow-lg.rounded-3xl').appendChild(container);
        }

    } catch (err) {
        console.error('Erro ao carregar pedido:', err);
        document.body.innerHTML = '<h2 class="text-center text-red-500 mt-10">Erro ao carregar os dados do pedido.</h2>';
    }
});
</script>

@endsection
