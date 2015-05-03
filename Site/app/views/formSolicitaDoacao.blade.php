@extends('blank')
@section('content')
	<div class="form-group">
	   	<label >Nome completo</label>
	    <input type="text" class="form-control" name="nome"  placeholder="Digite seu nome" />
	</div>
	<div class="form-group">
	   	<label >Idade</label>
	    <input type="number" class="form-control" name="idade"  placeholder="Digite sua idade" />
	</div>
	<div class="form-group">
	   	<label >Tipo Sanguineo Solicitado</label>
	    <select class="form-control" name="tipoSangue">
	    	@foreach($tiposSanguineos as $tipo)
	    		<option value="{{$tipo->idtipo_sangue}}">{{$tipo->tipo}}</option>}
	    	@endforeach
	    </select>
	</div>
	<div class="form-group">
	   	<label >Descrição</label>
	    <textarea class="form-control" name="descricao">
	    </textarea>
	</div>
	<div class="form-group">
		<label>Cidade</label>
		 <select class="form-control" name="tipoSangue">
	    	@foreach($cidades as $cidade)
	    		<option value="{{$cidade->id}}">{{$cidade->nome}}</option>}
	    	@endforeach
	    </select>
	</div>
	<button type="submit" class="btn btn-info">Cadastrar</button>
@stop
