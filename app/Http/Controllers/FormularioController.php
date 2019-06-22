<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulario;
use Illuminate\Support\Facades\Input;

class FormularioController extends Controller
{	
	public function cadastros(){
		$formularios = Formulario::all();

		return view('formulario.cadastros')->with('formularios', $formularios);
	}


    public function pesquisar(){
    	// Pegando o nome a ser pesquisado
    	$nome = Input::get('nome');

    	// Atribuindo a &formularios todos os cadastros que contenham o mesmo nome
    	$formularios = Formulario::where('nome', 'like', '%'.$nome.'%')->get();
        
        return view('formulario.pesquisar')->with('formularios', $formularios);
    }

    public function mostrar_inserir(){

		return view('formulario.inserir');
	}

	public function inserir(){
        // Criando um novo objeto do tipo Formulario
        $formulario = new Formulario();

        // Colocando os valores recebidos do formulário nos atributos do objeto $formulario
        $formulario->nome = Input::get('nome');
        $formulario->email = Input::get('email');
        $formulario->descricao = Input::get('descricao');
        $formulario->upload = Input::get('upload');
   
        // Salvando no banco de dados
        $formulario->save();

        // Criado uma mensagem para o usuário
        $mensagem = "Cadastro realizado com sucesso";

        // Chamando a view formulario.inserir e enviando a mensagem criada
        return view('formulario.inserir')->with('mensagem', $mensagem);
    }

    public function mostrar_alterar($id){

    	// Busca no banco o registro com o id recebido
        $formulario = Formulario::find($id);
        
        // Envia os dados deste registro a view formulario.alterar
        return view('formulario.alterar')->with('formulario', $formulario);
    }

    public function alterar(Request $request, $id){
        //$id = Input::get('id');
        
        $formulario = Formulario::find($id);
        
        $formulario->nome = $request->nome;
        $formulario->email = $request->email;
        $formulario->descricao = $request->descricao;
        $formulario->upload = $request->upload;

        $formulario->save();

        $mensagem = "Cadastro alterado com sucesso!";
        $formularios = Formulario::all();
        return view('formulario.pesquisar')->with('mensagem', $mensagem)->with('formularios', $formularios);
    }

    public function excluir($id)
    {
        // Criando um objeto com o id recebido pela rota
        $formulario = Formulario::find($id);

        // Excluindo este objeto
        $formulario->delete();

        // Criando uma mensagem para ser enviada a view formulario.pesquisar
        $mensagem = "Cadastro excluído com sucesso!";

        // Capturando objetos para enviar a view formulario.pesquisar
        $formularios = Formulario::all();

        // Retornando a view formulario.pesquisar
        return view('formulario.pesquisar')->with('mensagem', $mensagem)->with('formularios', $formularios);
    }
}
