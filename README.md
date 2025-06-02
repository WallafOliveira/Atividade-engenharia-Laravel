# Atividade de Engenharia de Software com Laravel

Este projeto foi desenvolvido como parte das atividades da disciplina de Engenharia de Software, utilizando o framework Laravel para construção de uma aplicação web seguindo o padrão MVC (Model-View-Controller).

## 📋 Sumário

- [Sobre o Projeto](#sobre-o-projeto)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Pré-requisitos](#pré-requisitos)
- [Instalação](#instalação)
- [Configuração](#configuração)
- [Execução](#execução)
- [Testes](#testes)
- [Coleção Postman](#coleção-postman)
- [Contribuição](#contribuição)
- [Licença](#licença)

## 📝 Sobre o Projeto

A aplicação tem como objetivo aplicar os conceitos aprendidos na disciplina de Engenharia de Software, proporcionando uma experiência prática no desenvolvimento de sistemas web utilizando o Laravel.

## 🛠️ Tecnologias Utilizadas

- [Laravel](https://laravel.com/) - Framework PHP para aplicações web
- PHP - Linguagem de programação
- Composer - Gerenciador de dependências PHP
- MySQL - Sistema de gerenciamento de banco de dados
- Postman - Ferramenta para testes de API

## ⚙️ Pré-requisitos

Antes de iniciar, certifique-se de ter instalado:

- PHP (versão 8.0 ou superior)
- Composer
- MySQL
- Node.js e NPM (para gerenciamento de dependências front-end, se aplicável)

## 🚀 Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/WallafOliveira/Atividade-engenharia-Laravel.git
   cd Atividade-engenharia-Laravel
   ```

2. Instale as dependências PHP via Composer:
   ```bash
   composer install
   ```

3. Instale as dependências front-end (se aplicável):
   ```bash
   npm install
   ```

## 🛠️ Configuração

1. Copie o arquivo de exemplo `.env.example` para `.env`:
   ```bash
   cp .env.example .env
   ```

2. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```

3. Configure as informações de conexão com o banco de dados no arquivo `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nome_do_banco
   DB_USERNAME=usuario
   DB_PASSWORD=senha
   ```

4. Execute as migrações para criar as tabelas no banco de dados:
   ```bash
   php artisan migrate
   ```

## ▶️ Execução

Inicie o servidor de desenvolvimento:

```bash
php artisan serve
```

A aplicação estará disponível em `http://localhost:8000`.

## ✅ Testes

Para executar os testes automatizados (se disponíveis):

```bash
php artisan test
```

## 📮 Coleção Postman

Uma coleção do Postman chamada `Atividade Engenharia.postman_collection.json` está incluída no repositório para facilitar o teste das rotas da API.

