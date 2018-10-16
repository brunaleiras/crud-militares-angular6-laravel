# crud-militares-angular6-laravel

Desafio usando Lavaravel 5.4, Angular 6 e Angular Material

Aplicativo com as funcionalidades CRUD implememtadas no Angular 6 com backend usando Laravel 5.4.

## Pré-requisitos

* PHP >= 7.1
* NodeJs 10.10.1 (Com NPM)
* Composer
* Angular CLI 6
* IDE


## Iniciando o projeto backend

Para criar o projeto com suporte ao Laravel 5.4 usar o seguinte comando:
```
composer create-project laravel/laravel:5.4.* crud-militares-rest-api
```

## Iniciando o projeto frontend

Para criar o projeto com suporte ao Angular 6 usar o seguinte comando:
```
ng new crud-militares
```

## Para criar o banco de dados
* Necessario banco MySql rodando em localhost com as seguintes configurações:
* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1
* DB_PORT=3306
* DB_DATABASE=db_militar
* DB_USERNAME=militar
* DB_PASSWORD=militar
* Para mudar as configurações acessar o arquiv .env no projeto backend

## Para executar o projeto backend
* Depois de configurar o banco baixar o repositorio, entrar na pasta crud-militares-rest-api.
* Executar "composer install".
* Executar "php artisan migrate" (Para criar a tabelas no MySql)
* Executar "php artisan serve".
* Tem que aparecer a mensagem do servidor rodando na porta 8000.

## Para executar o projeto frontend
* Baixar o repositorio, entrar na pasta crud-militares.
* Executar "npm install".
* Executar "ng build".
* Executar "ng serve --host 0.0.0.0 --port 2000".
* Acessar o navegador com a url: http://localhost:2000.










