<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

		<link href="../../css/app.css" rel="stylesheet">

	</head>
	
	<div class="container">
		    
		<h1 class="mt-2">Cadastros</h1>
        <table class="table mt-2 text-center">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th class="text-left">Descrição</th>
            </tr>
            @foreach ($formularios as $f)
                <tr>
                    <td>{{$f->id}}</td>
                    <td>{{$f->nome}}</td>
                    <td>{{$f->email}}</td>
                    <td class="text-left"> {{$f->descricao}}</td>
                </tr>
            @endforeach
        </table>
        <td><a href="/cadastro/pesquisar"><button class="btn btn-primary mt-2">Pesquisar</button></a></td>
        <td><a href="/cadastro/inserir"><button class="btn btn-primary mt-2">Inserir</button></a></td>
    </div>

</html>