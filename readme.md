## CRUD em Laravel 5.4+ com MySQL

Desenvolvimento de um CRUD referente a um formulário de cadastro para envio de curriculos em uma plataforma online. Ações possiveis na aplicação:

- Visualização da lista de todos cadastros recebidos.
- Pesquisa no banco de dados por um cadastro específico.
- Alteração em cadastros ja presentes no banco de dados.
- Exclusão de cadastros.
- Criação de um novo cadastro.

Para que o processo seja executado é necessário seguir os seguintes passos:

## 1. Clone o repositório:

git clone "Endereço_do_repositório"

## 2. Acesse o repositório

cd app_estoque_laravel

## 3. Rode o composer para instalar as depências:

composer install

## 4. Crie o banco de dados:

mysql -u root -p
create database db_formulario_cadastro
quit

## 5. Configure o arquivo .env:

DB_DATABASE=db_formulario_cadastro
DB_USERNAME=root
DB_PASSWORD="Sua_Senha"

## 6. Rode o migrations para criar a estrutura no banco de dados:

php artisan migrate

## 7. Rodar o seeder para popular as tabelas com dados de exemplo:

php artisan db:seed

## 8. Subir o servidor:

php artisan serve

## 9. Acessar o link:

http://127.0.0.1:8000/cadastro

Para efetuar as ações basta preencher os campos utilizar os botões disponíveis.