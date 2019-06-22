<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

		<link href="../../css/app.css" rel="stylesheet">

	</head>
	
	<div class="container">
		    
		<h1 class="mt-2">Pesquisa por cadastros</h1>
        @if(!empty($mensagem))
            <div class="alert alert-success mt-2">{{ $mensagem }}</div>
        @endif
        <form action="/cadastro/pesquisar" method="post" class="form-inline mt-2">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="nome" class="form-control ml-2">
            </div>
            <input type="submit" class="btn btn-primary ml-2" value="Pesquisar">
        </form>

		<h1 class="mt-2">Resultado de pesquisa por cadastros</h1>
        @if(count($formularios) == 0)
           	<div class="alert alert-danger mt-2">Nenhum cadastro encontrado com essa descrição!</div>
        @else
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
                    <td><a href="/cadastro/excluir/{{ $f->id }}"><button class="btn btn-danger">Excluir</button></a></td>
                    <td><a href="/cadastro/alterar/{{ $f->id }}"><button class="btn btn-warning">Alterar</button></a></td>
                </tr>
            @endforeach
            </table>
            <td><a href="/cadastro"><button class="btn btn-primary mt-2">Retornar</button></a></td>
        @endif
    </div>

</html>