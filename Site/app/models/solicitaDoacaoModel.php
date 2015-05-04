<?php
	namespace app\models;

	class SolicitaDoacao extends \Eloquent{
		protected $table = 'solicita_doacao';
		public $timestamps = false;
		protected $fillable = ['tipo_sangue_idtipo_sangue','local_doacao_idlocal_doacao','obs'];
	}