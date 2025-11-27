#👟SISTEMA DE E-COMMERCE — LOJA DE TÊNIS

>⚠️**STATUS:**Este projeto é um protótipo funcional para fins acadêmicos/portfólio.

Este projeto consiste em uma aplicação web desenvolvida para o gerenciamento de uma loja especializada em calçados (Sneaker Shop). O sistema permite tanto a visualização do catálogo por parte dos clientes quanto a administração completa do estoque (marcas, modelos, numerações e preços) pelos gestores.

A aplicação foi construída utilizando a stack PHP, MySQL e Bootstrap, focando em performance e responsividade.

-------------------------------------------------------------

#⚙️TECNOLOGIAS E FERRAMENTAS

PHP: Linguagem de back-end para regras de negócio e controle de sessões.

MySQL: Banco de dados relacional para armazenar produtos, usuários e vendas.

HTML5 / CSS3 / JavaScript: Estrutura, estilização e interatividade do front-end.

Bootstrap: Framework para garantir um layout moderno e adaptável (Mobile-First).

XAMPP: Ambiente de desenvolvimento local.

-------------------------------------------------------------

#🚀FUNCIONALIDADES DO SISTEMA

O sistema é dividido em duas frentes: Vitrine (Pública) e Painel Administrativo.

✅ Vitrine Virtual: Exibição dinâmica de tênis com fotos, descrições e preços.

✅ Gestão de Produtos: Cadastro, edição e remoção de modelos de tênis.

✅ Controle de Estoque: Gerenciamento de marcas, categorias (Casual, Esportivo, Corrida) e tamanhos disponíveis.

✅ Upload de Imagens: Funcionalidade para adicionar fotos dos produtos.

✅ Filtros de Busca: Pesquisa por marca, modelo ou faixa de preço.

-------------------------------------------------------------

#🧠CONCEITOS TÉCNICOS APLICADOS

CRUD Completo: Manipulação total dos dados dos produtos e categorias.

Relacionamento de Tabelas: Uso de Chaves Estrangeiras (FK) no MySQL (ex: Marca -> Produto).

Upload de Arquivos: Manipulação de imagens e diretórios via PHP.

Segurança Básica: Prevenção contra SQL Injection (uso de Prepared Statements/mysqli).

Design Responsivo: Interface amigável para Desktop, Tablets e Celulares.

-------------------------------------------------------------

#💾GUIA DE INSTALAÇÃO E EXECUÇÃO

Preparação do Ambiente:
Instale o XAMPP e inicie os módulos Apache e MySQL.

Clone/Cópia do Projeto:
Coloque a pasta do projeto dentro do diretório do servidor local:

C:\xampp\htdocs\loja-tenis


Configuração do Banco de Dados:
Acesse o http://localhost/phpmyadmin ou utilize o terminal Shell e crie o banco:

CREATE DATABASE loja_tenis;
USE loja_tenis;


Importação das Tabelas:
Importe o arquivo SQL disponível na raiz do projeto para criar as tabelas e dados iniciais:

SOURCE C:/xampp/htdocs/loja-tenis/database.sql;


(Certifique-se de que o nome do arquivo .sql corresponda ao que está na pasta)

Executando a Aplicação:
Abra o navegador e acesse:

http://localhost/loja-tenis/index.php
