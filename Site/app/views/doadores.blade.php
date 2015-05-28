@extends('blank')


@section('content')
<script src="assets/js/jquery-1.11.1.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" charset="utf-8" async defer>
		$(document).ready(function() {
    		$('#example').DataTable();
		});
	</script>
	
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th><center>Tipo do Sangue</center></th>
                        <th><center>Número de doadores cadastrados</center></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pessoas as $pessoa)
                    <tr>
                        <td width="50%" align="center">
                             {{$pessoa->tipo}}
                        </td>
                        <td align="center">
                            
                            {{$pessoa->qtd}}
                        </td>
                    </tr>
                     @endforeach
                </tbody>
            </table>
        </div>

    </div>
   
@stop

	




