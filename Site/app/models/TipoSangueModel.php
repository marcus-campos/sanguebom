<?php
	namespace app\models;
	class TipoSangue extends \Eloquent{
		protected $table = 'tipo_sangue';
		public $timestamps = false;
		protected $fillable = [];

		public function listaTiposdeSangue(){
			return TipoSangue::all();
		}
	}