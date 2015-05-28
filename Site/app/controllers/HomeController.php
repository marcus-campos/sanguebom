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
		//$tipoSangue = new TipoSangue();

		$feed = new \SimplePie();

		$feed->set_feed_url('http://www.hemominas.mg.gov.br/?format=feed');

		$feed->enable_order_by_date(false);

		$feed->set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/cache');

		$feed->handle_content_type();

		$feed->init();


		return \View::make('home')->with([
			'title'=>'Home',
			'feed' => $feed
			//'pessoas' =>  $pessoa->contaTipoSangue()
		]);
	}

}
