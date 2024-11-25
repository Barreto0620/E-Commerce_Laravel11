@extends('layouts.app') <!-- Usando o layout principal -->

@section('title', 'Sobre Nós') <!-- Título da página -->

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4" style="font-size: 40px;">Sobre Nós</h1>



    <p class="lead text-justify">
        Fundada com o objetivo de revolucionar o mercado gamer, nossa loja tem como missão oferecer a melhor experiência para os apaixonados por tecnologia e games. 
        Mais do que um simples e-commerce, somos uma comunidade dedicada a conectar jogadores com produtos de qualidade excepcional.
    </p>

    <h2 class="mt-4" >Nossa Missão</h2>
    <p class="lead text-justify" style="font-size: 18px;">
        Acreditamos que o universo gamer vai além de produtos; é sobre experiências e conexões. Por isso, nossa missão é disponibilizar equipamentos e acessórios que transformem 
        cada momento de jogo em algo memorável, atendendo às necessidades tanto de amadores quanto de profissionais.
    </p>

    <h2 class="mt-4">Nossa Visão</h2>
    <p class="lead text-justify" style="font-size: 18px;">
        Queremos ser reconhecidos como a principal referência em produtos gamers no Brasil, destacando-nos pela qualidade, confiabilidade e atendimento ao cliente. 
        Buscamos sempre inovar, acompanhando as tendências tecnológicas e trazendo o que há de mais moderno para o mercado.
    </p>

    <h2 class="mt-4">Nossos Valores</h2>
    <ul>
        <li><strong>Excelência:</strong> Compromisso com a qualidade em todos os produtos e serviços oferecidos.</li>
        <li><strong>Inovação:</strong> Estar à frente das tendências e levar o que há de mais moderno ao consumidor.</li>
        <li><strong>Respeito:</strong> Valorizamos nossos clientes, parceiros e colaboradores.</li>
        <li><strong>Paixão:</strong> Tudo o que fazemos é movido pela paixão por tecnologia e games.</li>
    </ul>

    <h2 class="mt-4">Nossa História</h2>
    <p class="lead text-justify" style="font-size: 18px;">
        Nossa jornada começou em 2023, com um pequeno time de visionários apaixonados por games e tecnologia. 
        Inicialmente, atendíamos apenas uma pequena comunidade local, mas com o passar do tempo e o sucesso crescente, expandimos nossos horizontes para todo o Brasil.
        Hoje, temos orgulho de ser uma referência para gamers de todos os níveis, oferecendo produtos das melhores marcas e um atendimento que coloca o cliente em primeiro lugar.
    </p>

    <h2 class="mt-4">Entre em Contato</h2>
    <p class="lead text-justify" style="font-size: 18px;">
        Temos uma equipe dedicada a responder suas dúvidas, ouvir sugestões e solucionar problemas. 
        Entre em contato conosco pelo e-mail <a href="alpha@gmail.com">alpha@gmail.com</a> ou pelas nossas redes sociais.
    </p>

    <p class="text-center mt-5">
        <strong>Junte-se a nós e faça parte dessa comunidade que cresce a cada dia!</strong>
    </p>
</div>
@endsection
