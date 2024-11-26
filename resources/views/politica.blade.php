@extends('layouts.app') <!-- Usando o layout principal -->

@section('title', 'Política de Privacidade e Termos e Condições') <!-- Título da página -->

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4" style="font-size: 40px;">Política de Privacidade e Termos e Condições</h1>

    <!-- Seção de Política de Privacidade -->
    <h2 class="mt-4">Política de Privacidade</h2>
    <p class="lead text-justify" style="font-size: 18px;">
        Nossa Política de Privacidade foi criada para garantir a segurança e a transparência no uso das informações fornecidas por nossos clientes e visitantes. 
        Valorizamos sua confiança e nos comprometemos a proteger seus dados pessoais.
    </p>

    <h3 class="mt-4">Coleta de Dados</h3>
    <ul>
        <li><strong>Informações Pessoais:</strong> Coletamos dados como nome, e-mail, telefone e endereço, necessários para o processamento de compras e entregas.</li>
        <li><strong>Dados de Navegação:</strong> Utilizamos cookies para melhorar sua experiência em nosso site, personalizar conteúdos e analisar tráfego.</li>
    </ul>

    <h3 class="mt-4">Uso das Informações</h3>
    <p class="lead text-justify" style="font-size: 18px;">
        As informações coletadas são utilizadas exclusivamente para:
    </p>
    <ul>
        <li>Processar pedidos e realizar entregas.</li>
        <li>Enviar atualizações sobre status de pedidos e promoções (caso autorizado).</li>
        <li>Garantir a segurança de transações.</li>
    </ul>

    <h3 class="mt-4">Compartilhamento de Dados</h3>
    <p class="lead text-justify" style="font-size: 18px;">
        Não compartilhamos suas informações com terceiros, exceto em casos necessários para o cumprimento de obrigações legais ou prestação de serviços (ex.: transportadoras).
    </p>

    <h3 class="mt-4">Segurança</h3>
    <p class="lead text-justify" style="font-size: 18px;">
        Utilizamos tecnologias avançadas de criptografia e práticas recomendadas de segurança para proteger suas informações contra acessos não autorizados.
    </p>

    <!-- Seção de Termos e Condições -->
    <h2 class="mt-5">Termos e Condições</h2>
    <p class="lead text-justify" style="font-size: 18px;">
        Ao utilizar nossos serviços, você concorda com os termos e condições descritos abaixo. Leia atentamente as informações para garantir uma experiência segura e transparente.
    </p>

    <h3 class="mt-4">Uso do Site</h3>
    <ul>
        <li>O acesso e uso do site são restritos a maiores de 18 anos ou menores autorizados por responsáveis legais.</li>
        <li>É proibido o uso do site para fins ilegais ou que possam prejudicar terceiros.</li>
    </ul>

    <h3 class="mt-4">Pedidos e Pagamentos</h3>
    <ul>
        <li>Todos os pedidos estão sujeitos à disponibilidade de estoque.</li>
        <li>Nos reservamos o direito de cancelar pedidos em casos de erros nos preços ou informações do produto.</li>
        <li>Os pagamentos devem ser realizados utilizando os métodos disponibilizados em nosso site.</li>
    </ul>

    <h3 class="mt-4">Garantias e Devoluções</h3>
    <p class="lead text-justify" style="font-size: 18px;">
        Todos os produtos estão sujeitos à nossa política de garantia e devolução, conforme descrito em nossa seção de <a href="{{ route('duvidas') }}">Dúvidas</a>.
    </p>

    <h3 class="mt-4">Alterações</h3>
    <p class="lead text-justify" style="font-size: 18px;">
        Reservamos o direito de alterar estes termos e condições sem aviso prévio. Recomendamos revisitar esta página periodicamente.
    </p>

    <p class="text-center mt-5">
        <strong>Caso tenha dúvidas ou preocupações, entre em contato conosco pelo e-mail <a href="alpha@gmail.com">alpha@gmail.com</a>. Estamos aqui para ajudar!</strong>
    </p>
</div>
@endsection
