@extends('master')

@section('title')
	
	Partner kortingen

@stop



@section('content')

	<div class="container">
		<div class="page">
			<h1 class="page-title"> KORTINGEN </h1>
			@include('partials.page-introduction', $data['pageSection'])
			<div class="row row-centered text-white">
				@foreach($data['kortingen'] as $korting)
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<a href='/kortingen/{{ $korting->id }}'>
						<div class="card type-1 background-primary">
							<div class="top background-accent"> 
							
							</div>
							<div class="image">
								<img class="img-responsive" src="{{$korting->photos->first()['path']}}">
							</div>

							<div class="information">
								<h4> {{ $korting->sponsor->name }}</h4>
								<p> {{ $korting->description }} </p>
								

							</div>
						</div>
					</a>
				</div>		
				@endforeach
			</div>				
		</div>
		
	</div>

@stop