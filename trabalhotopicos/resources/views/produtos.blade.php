<h1>Produtos</h1>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<form method="POST" action="/produtos">
    @csrf
    <input type="text" name="nome" placeholder="Nome do produto">
    <button type="submit">Cadastrar</button>
</form>

<ul>
    @foreach($produtos as $produto)
        <li>{{ $produto->nome }}</li>
    @endforeach
</ul>
