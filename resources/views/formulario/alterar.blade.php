<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <link href="../../css/app.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            
            <h1 class="mt-2">Alterar Cadastro</h1>
            <form action="/cadastro/alterar" method="post" class="mt-2">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                <div class="form-group">
                    <label for="nome">Nome: <span class="text-danger">*</span></label>
                    <input type="text" id="nome" name="nome" class="form-control" value="{{ $formulario->nome }}" required >
                </div>
                <div class="form-group">
                    <label for="email">Email: <span class="text-danger">*</span></label>
                    <input type="text" id="email" name="email" class="form-control" value="{{ $formulario->email }}" required >
                </div>
                <div class="form-group">
                    <label for="descricao">Descricao: <span class="text-danger">*</span></label>
                    <input type="text" id="descricao" name="descricao" class="form-control" value="{{ $formulario->descricao }}" required>
                </div>
                <div class="wrap-input100 validate-input m-b-16">
                    <label for="imagem">Imagem: <span class="text-danger">*</span></label>
                    <input type="file" id="imagem" name="imagem" class="wrap-input100 validate-input m-b-16" accept=".gif,.jpg,.png" value="{{ $formulario->upload }}" required>
                </div>
                <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
                <input type="submit" class="btn btn-success mt-2" value="Alterar">
                <td><a href="/cadastro/pesquisar"><button class="btn mt-2">Cancelar</button></a></td>
            </form>
        </div>
    </body>
</html>
