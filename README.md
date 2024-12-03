# Loja de Hardware - Projeto Integrador

## Descrição  
Este projeto consiste no desenvolvimento de uma loja de hardware como parte do **Projeto Integrador** do curso de Sistemas para Internet. A aplicação foi construída utilizando o framework **Laravel 11** e oferece funcionalidades essenciais para a gestão de produtos, vendas e integração com front-end moderno.  

O sistema foi projetado para fornecer uma experiência amigável ao usuário, com um painel administrativo para gerenciar o catálogo de produtos e acompanhar pedidos, e um front-end responsivo para clientes realizarem compras.

---

## Funcionalidades  
- Cadastro e gerenciamento de produtos (incluindo descrição, preço e estoque).  
- Sistema de autenticação para usuários e administradores.  
- Carrinho de compras e finalização de pedidos.  
- Relatórios básicos de vendas.  
- Design responsivo utilizando **Bootstrap**.  

---

## Requisitos do Sistema  
- **PHP**: Versão 8.2 ou superior.  
- **Laravel**: Versão 11.  
- **Banco de Dados**: MySQL.  
- **Node.js e NPM**: Para gerenciamento de dependências front-end.  
- **Composer**: Para gerenciamento de dependências back-end.  

---

## Instalação  
1. **Clone o repositório**:  
   ```bash
   git clone https://github.com/SeuRepositorio/Loja-Hardware.git
   cd Loja-Hardware
   ```
2. **Instale as dependências do Laravel**:  
   ```bash
   composer install
   ```

3. **Instale as dependências do front-end**:  
   ```bash
   npm install
   ```

4. **Configuração do Banco de Dados**:  
   Renomeie o arquivo `.env.example` para `.env` e configure os dados do banco:  
   ```env
   DB_CONNECTION=mysql
   DB_HOST=localhost
   DB_PORT=3306
   DB_DATABASE=nome_do_banco
   DB_USERNAME=usuario_do_banco
   DB_PASSWORD=senha_do_banco
   ```

5. **Configuração Inicial**:  
   - Gere a chave da aplicação:  
     ```bash
     php artisan key:generate
     ```
   - Realize as migrações e os seeders para popular as tabelas:  
     ```bash
     php artisan migrate --seed
     ```

6. **Executando a Aplicação**:  
   Inicie o servidor local com:  
   ```bash
   php artisan serve
   ```
   Acesse a aplicação em [http://localhost:8000](http://localhost:8000).

---

## Configuração do Front-End  
- Para iniciar o ambiente de desenvolvimento do front-end, use:  
  ```bash
  npm run dev
  ```
- Para criar um build de produção, utilize:  
  ```bash
  npm run build
  ```

---

## Estrutura do Projeto  
### Diretórios Principais:  
- `app/Models`: Contém os modelos utilizados pela aplicação.  
- `database/migrations`: Contém as migrações para criar as tabelas no banco de dados.  
- `resources/views`: Contém as views utilizadas no front-end.  
- `routes/web.php`: Define as rotas principais da aplicação.

### Principais Dependências:  
- **Laravel UI**: Para autenticação e geração de scaffolding.  
- **Bootstrap**: Para design responsivo.  
- **Intervention Image**: Para manipulação de imagens no back-end.  
- **Shopping Cart**: Biblioteca para gerenciar o carrinho de compras.  

---

## Sobre os Colaboradores  
Este projeto foi desenvolvido em colaboração por:  
- **Lusxka**  
- **Barreto0620**  

---

## Observações  
- O sistema foi configurado para ser executado em um ambiente local. Para produção, recomenda-se configurar servidores adequados e habilitar HTTPS.  
- Certifique-se de que as dependências e versões requeridas estejam corretamente instaladas para evitar erros de execução.  
