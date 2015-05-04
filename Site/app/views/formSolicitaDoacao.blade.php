@extends('blank')
@section('content')
	{{Form::open(['method'=>'POST','action' =>'app\controllers\solicitaDoacaoController@store'])}}
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
			<label>Local de Doação</label>
			 <select class="form-control" name="local">
		    	@foreach($locais as $local)
		    		<option value="{{$local->idlocal_doacao}}">{{$local->nome}}</option>}
		    	@endforeach
		    </select>
		</div>
		<button type="submit" class="btn btn-info">Cadastrar</button>
	{{Form::close()}}
@stop
