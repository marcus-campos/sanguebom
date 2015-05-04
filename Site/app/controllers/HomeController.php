<?php
namespace app\controllers;
use app\models\Pessoa;
use app\models\TipoSangue;
class HomeController extends \BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$pessoa = new Pessoa();
		$tipoSangue = new TipoSangue();

		//return $pessoa->contaTipoSangue();
		//return $pessoa->dataTableHome();
		return \View::make('home')->with([
			'title'=>'Home',
			'pessoas' =>  $pessoa->contaTipoSangue()
		]);
	}

}
