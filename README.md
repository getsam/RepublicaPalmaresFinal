# Republica Palmares Painel Control

## Sobre
Projeto desenvolvido para cadastro e consulta de colaboradores, alunos e doadores da Republica de Palmares


## Executando

Para rodar este projeto e testar na sua maquina é necessario ter o php https://php.net/

tambem é necessario ter o composer instalado https://getcomposer.org/

atribua os dois as variaveis de ambiente de seu sistema 
 
Use os comandos abaixo

    php artisan serve (ou php -S localhost:8000 -t public)

Accesse `http://localhost:8000/home`

para acessar o login use 

    user: admin@republica.com
    pass: 12345678

## Banco 

Para usar as funcionalidades do banco voce precisa de um servidor mysql local rodando na porta 3306

crie um database chamado republicapalmares
    
use os comandos 

    php artisan migrate 
