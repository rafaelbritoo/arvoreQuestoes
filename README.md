## Projeto processo seletivo GG educacional - API

Projeto criado utilizando o ambiente de desenvolvimento <a href="https://laradock.io" target="_blank">Laradock.</a>

Para executar o projeto é necessário subir os containers do php e do mysql do laradock (dentro da pasta 'laradock'):

```
docker-compose up -d nginx mysql
```
<strong>Ao executar o projeto pela primeira vez é necessário acessar o container para executar as migrations e as seeds.</strong>

Para rodar comandos dentro do container (como composer install, comandos do artisan, etc) utilizar o seguinte comando:

```
docker-compose exec workspace bash
```

Atualize as bibliotecas do projeto que estão no composer (dentro do container workspace:

```
composer install
