@extends('blank')

@section('content')
	

		
	@foreach($feed->get_items(0, 10) as $item)
		<div class="panel panel-default">
   			 <div class="panel-heading separator">
        		<div class="panel-title">{{$item->get_title()}}</div>
    		</div>
   		 	<div class="panel-body">
      			{{$item->get_description()}}
      			<a href="{{$item->get_link()}}" class="btn btn-info">Saiba Mais</a>
    		</div>
		</div>
	@endforeach
		
	
@stop