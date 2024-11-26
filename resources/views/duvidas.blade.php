@extends('layouts.app') <!-- Usando o layout principal -->

@section('title', 'Dúvidas Frequentes') <!-- Título da página -->

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4" style="font-size: 40px;">Dúvidas Frequentes</h1>

    <p class="lead text-justify">
        Aqui você encontra respostas para as perguntas mais frequentes sobre nossos serviços. Se sua dúvida não for respondida, entre em contato conosco pelo e-mail 
        <a href="alpha@gmail.com">alpha@gmail.com</a>. Nossa equipe está à disposição para ajudar!
    </p>

    <h2 class="mt-4">Pagamento</h2>
    <p class="lead text-justify" style="font-size: 18px;">
        Oferecemos diversas opções de pagamento para garantir sua conveniência e segurança:
    </p>
    <ul>
        <li>
            <strong>Pagamento no Pix:</strong> Após finalizar a compra, você receberá um QR Code ou chave Pix para realizar o pagamento. A confirmação é quase instantânea, 
            garantindo agilidade na aprovação do pedido.
        </li>
        <li>
            <strong>Pagamento por Boleto:</strong> Emitimos o boleto no momento da compra. O prazo para pagamento é de até 3 dias úteis, e a aprovação pode levar até 48 horas após a compensação bancária.
        </li>
        <li>
            <strong>Pagamento na Entrega:</strong> Disponível em regiões selecionadas. Você paga no momento em que receber o produto, em dinheiro ou cartão, dependendo da opção escolhida.
        </li>
        <li>
            <strong>PayPal:</strong> Para maior comodidade e segurança, aceitamos pagamentos pelo PayPal. Basta usar sua conta para finalizar a compra rapidamente.
        </li>
    </ul>

    <h2 class="mt-4">Entrega</h2>
    <p class="lead text-justify" style="font-size: 18px;">
        Trabalhamos com um sistema logístico eficiente para garantir que sua compra chegue no menor tempo possível. Algumas informações importantes:
    </p>
    <ul>
        <li>
            <strong>Prazo de Entrega:</strong> O prazo varia conforme sua localização e o método de envio escolhido. Você pode acompanhar o status diretamente em nossa plataforma.
        </li>
        <li>
            <strong>Entrega Expressa:</strong> Disponível para algumas regiões, garantindo que seu pedido seja entregue em até 24 horas úteis.
        </li>
        <li>
            <strong>Rastreamento:</strong> Após a confirmação do envio, você receberá um código para acompanhar o progresso da entrega.
        </li>
    </ul>

    <h2 class="mt-4">Garantia</h2>
    <p class="lead text-justify" style="font-size: 18px;">
        Todos os nossos produtos contam com garantia de fábrica para sua tranquilidade. Confira os detalhes:
    </p>
    <ul>
        <li>
            <strong>Prazo de Garantia:</strong> O prazo varia de acordo com o produto, mas todos os itens contam com no mínimo 1 ano de cobertura contra defeitos de fabricação.
        </li>
        <li>
            <strong>Ativação da Garantia:</strong> Para acionar a garantia, entre em contato conosco pelo e-mail <a href="alpha@gmail.com">alpha@gmail.com</a> com o número do pedido e uma descrição detalhada do problema.
        </li>
        <li>
            <strong>O que está coberto:</strong> Defeitos de fabricação e problemas técnicos que impossibilitem o uso normal do produto.
        </li>
    </ul>

    <h2 class="mt-4">Ainda com dúvidas?</h2>
    <p class="lead text-justify" style="font-size: 18px;">
        Caso sua dúvida não esteja entre as listadas, sinta-se à vontade para entrar em contato conosco. Envie um e-mail para <a href="alpha@gmail.com">alpha@gmail.com</a>, 
        e nossa equipe responderá o mais breve possível.
    </p>

    <p class="text-center mt-5">
        <strong>Estamos aqui para ajudar e garantir sua melhor experiência conosco!</strong>
    </p>
</div>
@endsection
