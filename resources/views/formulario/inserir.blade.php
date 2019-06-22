<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <link href="../../css/app.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <h1 class="mt-2">Inserir novo cadastro</h1>
            @if(!empty($mensagem))
                <div class="alert alert-success">Cadastro realizado com sucesso!</div>
            @endif
            <form action="/cadastro/inserir" method="post" class="mt-2">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                <div class="form-group">
                    <label for="nome">Nome: <span class="text-danger">*</span></label>
                    <input type="text" id="nome" name="nome" class="form-control" autofocus required>
                </div>
                <div class="form-group">
                    <label for="email">Email: <span class="text-danger">*</span></label>
                    <input type="text" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="descricao">Descricao: <span class="text-danger">*</span></label>
                    <input type="text" id="descricao" name="descricao" class="form-control" required>
                </div>
                <div class="wrap-input100 validate-input m-b-16">
                    <label for="curriculo">Selecionar imagem para o curriculo: <span class="text-danger">*</span></label>
                    <input type="file" id="curriculo" name="curriculo" accept="image/*" required>
                </div>
                <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
                <input type="submit" class="btn btn-success mt-2" value="Inserir">
                <button type="button" onclick="history.go(-1);" class="btn mt-2">Cancelar </button>
            </form>            
        </div>
    </body>
</html>
