<?php 
	namespace app\models;
	class Pessoa extends \Eloquent{

		protected $table = 'pessoa';

		public $timestamps = false;

		protected $guarded = [];


		public function listaPessoa(){
			return Pessoa::all();
		}

		public function verificaCpf($cpf){
			if(Pessoa::where('cpf',$cpf)->select('cpf')->exists()){
			 	return true;
			}else{
			 	return false;
			} 
		}

		public function dadosAviso(){
			return \DB::table('pessoa AS p')
				->join('tipo_sangue AS tp','p.tipo_sangue_idtipo_sangue','=','tp.idtipo_sangue')
				->join('cidade AS c','p.cidade_id','=','c.id')
				->select('p.nome AS nomePessoa','tp.tipo','c.nome AS nomeCidade','p.email','p.tipo_sangue_idtipo_sangue','p.cidade_id')
				->get();
		}

		public function dataTableHome(){
			return \DB::table('pessoa AS p')
				->join('tipo_sangue AS tp','p.tipo_sangue_idtipo_sangue','=','tp.idtipo_sangue')
				->join('cidade AS c','p.cidade_id','=','c.id')
				->select('p.idpessoa','p.nome AS nomePessoa','tp.tipo','c.nome AS nomeCidade')
				->get();
		}

		public function contaTipoSangue(){
			return \DB::table('pessoa AS p')
				->join('tipo_sangue AS t','p.tipo_sangue_idtipo_sangue','=','t.idtipo_sangue')
				->groupBy('p.tipo_sangue_idtipo_sangue')
				->select('t.tipo',\DB::raw('count(*) AS qtd'),'p.tipo_sangue_idtipo_sangue')
				->get();
		}


	}