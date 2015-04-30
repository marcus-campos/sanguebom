<?php
	namespace app\models;
	class Cidade extends \Eloquent{

		protected $table = 'cidade';
		public $timestamps = false;
		protected $fillable = [];


		public function listaCidades(){
			return Cidade::all();
		}
	}