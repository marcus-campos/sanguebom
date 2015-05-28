<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use app\controllers\PessoaController;

class SendNewletterCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'aviso:send';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$pessoas = new Pessoa();

		foreach ($pessoas->dadosAviso() as $p) {


			$qtdDoacoes = \DB::table('solicita_doacao')
			->where('tipo_sangue_idtipo_sangue','=',$p->tipo_sangue_idtipo_sangue)
			->where('local_doacao_idlocal_doacao','=',$p->cidade_id)
			->count();

			if($qtdDoacoes > 0){
				$data = ['pessoa' => $p , 'qtd' => $qtdDoacoes]
				\Mail::send('emails.aviso', $data, function($mail)
		        {
		            $mail->to($p->email, $p->nomePessoa)->subject('Aviso Sangue Bom!');
		        });
			}
		}
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('example', InputArgument::REQUIRED, 'An example argument.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

}
