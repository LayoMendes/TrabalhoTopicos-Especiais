# Sistema de Gerenciamento de Produtos

Sistema web desenvolvido em Laravel para gerenciamento de produtos e categorias, desenvolvido como Trabalho Final da disciplina de Tópicos Especiais I.

## 📋 Sobre o Projeto

O sistema permite o gerenciamento completo (CRUD) de produtos e categorias, com funcionalidades de upload de imagens, autenticação de usuários e controle de preferências de visualização.

## 🚀 Funcionalidades

- **Autenticação Completa**: Login, Registro e Logout.
- **Gerenciamento de Produtos**:
  - Listagem (Grid ou Lista)
  - Cadastro com Upload de Imagem (PNG/JPG)
  - Edição e Atualização
  - Exclusão (remove imagem do servidor)
- **Gerenciamento de Categorias**:
  - CRUD completo
  - Relacionamento com Produtos
- **Preferências do Usuário**:
  - Alternância entre visualização em Grade ou Tabela (salvo em Cookie)
- **Segurança**:
  - Proteção CSRF
  - Validação de dados no Backend
  - Sessões seguras

## 🛠️ Tecnologias Utilizadas

- **Framework**: Laravel 10.x
- **Linguagem**: PHP 8.1+
- **Banco de Dados**: MySQL / PostgreSQL
- **Frontend**: Blade Templates + Bootstrap 5
- **Estilização**: CSS Personalizado + Bootstrap Icons

## ⚙️ Instalação e Configuração

1. **Clone o repositório**
   ```bash
   git clone https://github.com/SEU_USUARIO/sistema-produtos-laravel.git
   cd sistema-produtos-laravel
   ```

2. **Instale as dependências**
   ```bash
   composer install
   ```

3. **Configure o ambiente**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure o Banco de Dados**
   Edite o arquivo `.env` com suas credenciais:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=sistema_produtos
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Execute as Migrations**
   ```bash
   php artisan migrate
   ```

6. **Configure o Storage**
   ```bash
   php artisan storage:link
   ```

7. **Inicie o Servidor**
   ```bash
   php artisan serve
   ```

8. **Acesse**: `http://localhost:8000`

## 📝 Requisitos do Trabalho Atendidos

- [x] CRUD Completo
- [x] Banco de Dados Relacional
- [x] Gerenciamento de Sessão
- [x] Upload de Arquivos (PNG/JPG)
- [x] Uso de Cookies
- [x] Organização MVC e Boas Práticas

## 👤 Autor

Matheus Vieira
