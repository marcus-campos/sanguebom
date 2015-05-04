<?php 
	namespace app\models;

	class LocalDoacao extends \Eloquent{
		protected $table = 'local_doacao';
		public $timestamps = false;
		protected $fillable = [];


		public function listaLocalDoacao(){
			return LocalDoacao::all();
		}
	}