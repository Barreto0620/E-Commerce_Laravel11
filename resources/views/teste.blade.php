<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Conexão com o Banco</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        /* Define uma altura máxima para as imagens no carrossel */
        .carousel-item img {
            max-height: 500px; /* ajuste conforme necessário */
            object-fit: contain;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Teste de Conexão com o Banco</h1>

    @if($produto)
        <p><strong>Produto:</strong> {{ $produto->PRODUTO_NOME }}</p>
        <p><strong>Preço:</strong> R$ {{ $produto->PRODUTO_PRECO }}</p>

        <h2>Imagens:</h2>
        @if($produto->imagens->isNotEmpty())
            <!-- Carrossel de Imagens -->
            <div id="produtoCarrossel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($produto->imagens as $index => $imagem)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <img src="{{ $imagem->IMAGEM_URL }}" class="d-block w-100" alt="Imagem do produto">
                        </div>
                    @endforeach
                </div>
                <!-- Controles do Carrossel -->
                <a class="carousel-control-prev" href="#produtoCarrossel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#produtoCarrossel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próxima</span>
                </a>
            </div>
        @else
            <p>Não há imagens disponíveis para este produto.</p>
        @endif
    @else
        <p>Nenhum produto encontrado.</p>
    @endif
</body>
</html>
