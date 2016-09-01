@extends('master')

@section('title')
	
	Homepage

@stop



@section('content')

	<div class="container">
		<h1 class="page-title"> PARTNERS </h1>
		
		<div class="page">
		
			@include('partials.page-introduction', $data['pageSection']) 
				
			<div class="verdeler"> </div>

			<div class="row">
			
				<h1> HOOFDPARTNER </h1>
				@foreach($data['hoofdpartners'] as $hoofdpartner)
				<div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 ">
					<a href="partners/{{ $hoofdpartner->id }}" >
						<div class="card type-1 background-secondary">
							<div class="top background-primary">
								<span >   </span>
							</div>
							<div class="image">
								<img class="img-responsive" src="../images/imagetest2.png">
							</div>
							<div class="information ">
								<h2> {{ $hoofdpartner->name }} </h2>
								<p class="mediumParagraph"> 
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
									<img src="../images/nieuwstest.png">
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
	

@stop