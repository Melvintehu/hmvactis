@extends('master')

@section('title')
	
	Homepage

@stop



@section('content')

	<div class="container">

		<div class="row">
			
			<h1 class="space-outside-lg xs-text-center"> PARTNERS </h1>
		
			@include('partials.page-introduction', $data['pageSection']) 

			<div class="verdeler"> </div>

			<h1 class="space-outside-lg"> HOOFDPARTNER </h1>

				@foreach($data['hoofdpartners'] as $hoofdpartner)

				<div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 ">

					<a href="partners/{{ $hoofdpartner->id }}" >

						

							<div class="col-lg-4 reset-padding">
								
								<div class="image">

									<img class="img-responsive" src="{{$hoofdpartner->photos->first()['path']}}">

								</div>
								
							</div>

							<div class="col-lg-8"> 

								<h2> {{ $hoofdpartner->name }} </h2>

								<p > 

								{{ $hoofdpartner->description }}

								</p>
								<div class="verdeler"> </div>

							</div>
							

								


							

							<div style="clear:both;"></div>

						</div>

					</a>

				</div>

				@endforeach

				<div style="clear: both; "></div>

				<h1> OVERIGE PARTNERS </h1>

				<div class="row row-centered text-white">

				@foreach($data['partners'] as $partner)

					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"> 

						<a href="partners/{{ $partner->id }}" >	

							<div class="card type-3 text-white">

								<div class="top background-primary"></div>

								<div class="image">
									@if($partner->photos->first()['path'] != null)
							  			<img class="" src="{{$partner->photos->first()['path']}}">
							  		@else
							  			<img class="" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">
							  		@endif
									

								</div>

								<div class="information background-primary">

									<h4> {{ $partner->name }} </h4>

									<p> 
										{{ str_limit($partner->description, 200) }}

									</p>

								</div>

								<div class="bottom background-secondary">

									<a target='_blank' href="http://{{ $partner->website }}"> website </a>

								</div>

							</div>

					</div>	

				@endforeach

				</div>

			</div>

		</div>

		</div>

	</div>
	

@stop