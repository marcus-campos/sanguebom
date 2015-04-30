@extends('blank')

@section('content')
	@if(Session::has('mensagem'))
  		{{Session::get('mensagem')}}
  	@endif
	{{Form::open(['method'=>'POST','action'=>'app\controllers\PessoaController@store'])}}
		<div class="form-group">
	   		<label >Nome completo</label>
	    	<input type="text" class="form-control" name="nome"  placeholder="Digite seu nome" />
	 	</div>
	  	<div class="form-group">
	    	<label>Data de Nascimento</label>
	    	<input type="text" class="form-control" name="dataNascimento" id="dataNascimento" placeholder="xx/xx/xxxx" />
	  	</div>
	  	<div class="form-group">
	    	<label>CPF:</label>
	    	<input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" />
	  	</div>
	  	<div class="form-group">
	    	<label>Email:</label>
	    	<input type="email" class="form-control" name="email" id="email" placeholder="seu@email.com.br" />
	  	</div>
	  	<div class="form-group">
	    	<label>Telefone:</label>
	    	<input type="numbers" class="form-control" name="telefone" id="telefone" placeholder="(xx)xxxx-xxxx" />
	  	</div>
	  	<div class="form-group">
	    	<label>Tipo Sanguineo:</label>
	    	<select class="form-control" name="tipoSangue">
	    		@foreach($tiposSanguineos as $tipoSanquineo)
	    			<option value="{{$tipoSanquineo->idtipo_sangue}}">{{$tipoSanquineo->tipo}}</option>
	    		@endforeach
	    	</select>
	  	</div>

	  	<div class="form-group">
	    	<label>Cidade do Posto de Coleta:</label>
	    	<select class="form-control" name="cidade">
	    		@foreach($cidades as $cidade)
	    			<option value="{{$cidade->id}}">{{$cidade->nome}}</option>
	    		@endforeach
	    	</select>
	  	</div>


  		<button type="submit" class="btn btn-primary">Cadastrar</button>
  	{{Form::close()}}
@stop