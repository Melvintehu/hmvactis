@extends('master')

@section('title')
	Feestcommissie
@stop



@section('content')
	
	<div class="section background-primary text-white">
		<div class="container">
			<div class="page">
					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h1 class="page-title"> {{ $data['nieuws']->title }} </h1>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="text">
								
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-inside-down-lg">
						<div class="image "> 
							@if($data['nieuws']->photos->first()['path'] != null)	
										<img class="" src="../{{$data['nieuws']->photos->first()['path']}}">
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
					{!! nl2br($data['nieuws']->description) !!}

				</p>
			</div>

			<div class="verdeler"></div>

			<a href='/nieuws' class="link"> Ga terug <span class="background-secondary round"> > </span> </a>
		</div>
	</div>





@stop
