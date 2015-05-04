<?php
namespace app\controllers;
use app\models\TipoSangue;
use app\models\LocalDoacao;
use  app\models\SolicitaDoacao;
class solicitaDoacaoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tipoSangue = new TipoSangue();
		$local = new LocalDoacao();
		return \View::make('formSolicitaDoacao')
			->with([
				'title'=>'Solicitar Doação',
				'tiposSanguineos' => $tipoSangue->listaTiposdeSangue(),
				'locais' => $local->listaLocalDoacao()
			]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$dadosInsert =[
			'tipo_sangue_idtipo_sangue' => \Input::get('tipoSangue'),
			'local_doacao_idlocal_doacao' => \Input::get('local'),
			'obs' => \Input::get('descricao')
		];

		if(SolicitaDoacao::create($dadosInsert)){
			return \Redirect::to('/')->with('mensagem','<p class="bg-success">A solicitação de doação foi cadastrada com sucesso!!</p>');
		}else{
			return \Redirect::to('/')->with('mensagem','<p class="bg-danger">Erro ao cadastrar solicitação de doação!!</p>');
		}
	}



}
