<ul class="account-nav">
    <li><a href="{{ route('user.index') }}" class="menu-link menu-link_us-s">Dashboard</a></li>
    <li><a href="{{ route('user.orders') }}" class="menu-link menu-link_us-s">Pedidos</a></li>
    <li><a href="{{ route('user.index') }}" class="menu-link menu-link_us-s js-loading-message">Endereços</a></li>
    <li><a href="{{ route('user.index') }}" class="menu-link menu-link_us-s js-loading-message">Detalhes da conta</a></li>
    <li><a href="{{ route('user.index') }}" class="menu-link menu-link_us-s js-loading-message">Lista de desejos</a></li>

    <li>
        <form method="POST" action="{{ route('logout') }}" id="logout-form">
            @csrf
            <a href="{{ route('logout') }}" class="menu-link menu-link_us-s" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
        </form>
    </li>
</ul>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Seleciona todos os links com a classe js-loading-message
        const links = document.querySelectorAll('.js-loading-message');

        links.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Impede o redirecionamento imediato
                const message = document.createElement('div');

                // Estiliza a mensagem dinamicamente
                message.innerText = "Página em construção...";
                message.style.position = 'fixed';
                message.style.top = '50%';
                message.style.left = '50%';
                message.style.transform = 'translate(-50%, -50%)';
                message.style.backgroundColor = '#333';
                message.style.color = '#fff';
                message.style.padding = '10px 20px';
                message.style.borderRadius = '5px';
                message.style.fontSize = '18px';
                message.style.zIndex = '9999';
                document.body.appendChild(message);

                // Aguarda alguns segundos e redireciona o usuário
                setTimeout(() => {
                    document.body.removeChild(message); // Remove a mensagem
                    window.location.href = this.href; // Redireciona para o link clicado
                }, 1500); // Tempo de exibição (2,5s)
            });
        });
    });
</script>