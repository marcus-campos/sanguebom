<?php
namespace app\controllers;
//use Carbon\Carbon;
use app\models\TipoSangue;
use app\models\Pessoa;
use app\models\Cidade;
class PessoaController extends \BaseController {


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tipoSangue = new TipoSangue();
		$cidade = new Cidade();
		return \View::make('formCadastraEvento')->with([
			'title'=>'Cadastra Doador',
			'tiposSanguineos' => $tipoSangue->listaTiposdeSangue(),
			'cidades' => $cidade->listaCidades()
		]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$pessoa = new Pessoa();
		$dadosInsert = [
			'nome' => \Input::get('nome'),
			//'data_nasc' => date("Y/m/d", strtotime(\Input::get('dataNascimento'))),
			'cpf' => \Input::get('cpf'),
			'email' => \Input::get('email'),
			//'telefone' => \Input::get('telefone'),
			//'data_cadastro' => Carbon::now(),
			'tipo_sangue_idtipo_sangue' => \Input::get('tipoSangue'),
			'cidade_id' => \Input::get('cidade')
		];
		if($pessoa->verificaCpf(\Input::get('cpf'))){
			return \Redirect::back()->with('mensagem','<p class="bg-danger">Esse CPF ja está cadastrado em nosso sistema!!</p>');
		}else{
			Pessoa::create($dadosInsert);
			return \Redirect::to('/')->with('mensagem','<p class="bg-success">Doador cadastrado com sucesso!</p>');
		}
		
	}

	public function quemDoa(){
		return \View::make('quemDoa')->with(['title' => 'Quem Pode Doar ?']);
	}

	public function doadores(){
		$pessoa = new Pessoa();
		$tipoSangue = new TipoSangue();
		return \View::make('doadores')->with([
			'title' => 'Doadores',
			'pessoas' =>  $pessoa->contaTipoSangue()
		]);
	}




}