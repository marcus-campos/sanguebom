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
	}