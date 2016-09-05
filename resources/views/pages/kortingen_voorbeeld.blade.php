@extends('master')

@section('title')
	{{ $data['korting']->title }}
@stop



@section('content')
	
	<div class="section background-primary text-white">
		<div class="container">
			<div class="page">
					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h1 class="page-title"> {{ $data['korting']->sponsor->name }} </h1>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="text-color-light">
								{{ $data['korting']->title }}
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-inside-down-lg">
						<div class="image"> 
							@if($data['korting']->photos->first()['path'] != null)	
										<img class="" src="../{{$data['korting']->photos->first()['path']}}">
									@else
										<img class="" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">
									@endif
						</div>
					</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="page">
			<div class="text">
				<p>
					{!! nl2br($data['korting']->description) !!}

				</p>
			</div>

			<div class="verdeler"></div>

			<a href='/kortingen' class="link"> Ga terug <span class="background-secondary round"> > </span> </a>
		</div>
	</div>





@stop
