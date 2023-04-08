# Bem-vindo ;)
## Sobre o Projeto

Esse projeto tem como finalidade realizar alguns estudos sobre o Laravel Websocket, com o framework Vue.js e Inertia

Implementei uma aplicação de chat realtime, o mesmo consiste em listar contatos, enviar mensagens e receber mensagens em tempo real, utilizando como backend o laravel e o frontend vue.js.
<br>Segue os dados de login:


## Packages utilizados

- laravel/framework": ^10.0 para o core backend da aplicação
- laravel/jetstream: ^3.0 kit utilizado para agilizar a construção das funcionalidade de login, registro e verificação de e-mail  
- laravel/sanctum: ^3.2 para construção da autenticação da aplicação 
- laravel/sail: ^1.18 para conteiner de ambiente de desenvolvimento
- laravel/tinker: ^2.8 para execução de comandos através do terminal
- inertiajs/vue3: ^1.0.0 para criar aplicação Vue SPA usando o roteamento do lado do servidor.
- vitejs/plugin-vue: ^4.0.0 fornece suporte a componentes de arquivo único Vue 3.
- axios: ^1.1.2 cliente HTTP para consumir api
- laravel-echo: ^1.15.0 para escutar chanels privados do servidor
- tailwindcss: ^3.1.0 framwork css para estilizar a página
- vite: ^4.0.0 para processar os arquivos CSS e JavaScript
- vue: ^3.2.31 para construção do frontend da aplicação
- beyondcode/laravel-websockets": "^1.14" para construção do websoket no backend


## Ambiente utilizado para desenvolvimento

- Ubuntu:22.04
- PHP 8.2
- MySQL 8.0.32


## Testes

- Testes realizados nos navegadores Chrome versão 112.0 e no Firefox versão 111.0.1

#### Observações

Para subir o ambiente de desenvolvimento com docker, basta executar o ./vendor/bin/sail up -d
