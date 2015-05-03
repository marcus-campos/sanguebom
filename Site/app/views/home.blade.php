@extends('blank')


@section('content')
<script src="assets/js/jquery-1.11.1.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" charset="utf-8" async defer>
		$(document).ready(function() {
    		$('#example').DataTable();
		});
	</script>
	<div class="panel panel-default">
                        <div class="panel-heading">
                            Doadores
                        </div>
                        <div class="panel-body">
                        	@if(Session::has('mensagem'))
  								{{Session::get('mensagem')}}
  							@endif
                            <div class="table-responsive">
                                <table class="table table-striped display table-bordered table-hover" id="example">
                                    <thead>
                                        <tr>
                                            <th>ID do Usuario</th>
                                            <th>Nome</th>
                                            <th>Tipo Sanguineo</th>
                                            <th>Cidade</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($pessoas as $pessoa)
                                        <tr>
                                            <td>{{$pessoa->idpessoa}}</td>
                                            <td>{{$pessoa->nomePessoa}}</td>
                                            <td>{{$pessoa->tipo}}</td>
                                            <td>{{$pessoa->nomeCidade}}</td>   
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@stop

	




