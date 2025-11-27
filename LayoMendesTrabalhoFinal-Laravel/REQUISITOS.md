# Checklist de Requisitos - Trabalho Final

Este documento detalha como cada requisito obrigatório do trabalho foi atendido no projeto.

## 1. CRUD Completo ✅
O sistema implementa as 4 operações básicas para **Produtos** e **Categorias**.
- **Create**: Formulários de cadastro com validação.
- **Read**: Listagens com opção de visualização em grade ou lista.
- **Update**: Edição completa de dados e imagens.
- **Delete**: Remoção de registros e arquivos associados.

**Arquivos principais:**
- `app/Http/Controllers/ProdutoController.php`
- `app/Http/Controllers/CategoriaController.php`

## 2. Banco de Dados Relacional ✅
O sistema foi configurado para utilizar bancos relacionais (MySQL/PostgreSQL) através do Eloquent ORM.
- Não utiliza SQLite.
- Possui relacionamento `One-to-Many` entre Categorias e Produtos.

**Arquivos principais:**
- `database/migrations/`
- `app/Models/Produto.php`
- `app/Models/Categoria.php`

## 3. Gerenciamento de Sessão ✅
A aplicação utiliza o sistema de sessões nativo do Laravel.
- Login e Logout funcionais.
- Rotas protegidas por middleware `auth`.
- Exibição de mensagens flash (sucesso/erro) via sessão.

**Arquivos principais:**
- `app/Http/Controllers/AuthController.php`
- `resources/views/layouts/app.blade.php`

## 4. Upload de Arquivos ✅
Funcionalidade implementada no cadastro de produtos.
- Aceita apenas formatos **PNG** e **JPG**.
- Validação de tamanho e tipo MIME.
- Armazenamento seguro em `storage/app/public`.
- Limpeza automática de imagens antigas na atualização/exclusão.

**Trecho de código (ProdutoController.php):**
```php
'imagem' => 'nullable|image|mimes:jpeg,jpg,png|max:2048'
```

## 5. Uso de Cookies ✅
Implementado cookie para salvar a preferência de visualização do usuário.
- O usuário pode alternar entre "Grade" e "Lista".
- A escolha é salva em um cookie `view_mode` por 30 dias.

**Arquivos principais:**
- `app/Http/Controllers/PreferenceController.php`

## 6. Organização e Boas Práticas ✅
- Estrutura **MVC** rigorosamente seguida.
- Uso de **Form Requests** (validação no controller).
- **Blade Templates** para reutilização de código (layouts).
- Código comentado e organizado.
