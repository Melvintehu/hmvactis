@extends('master')

@section('banner')
	
	@include('partials.banner')

@stop

@section('title')
	
	Homepage

@stop


@section('content')
	<div class="container">
		<h1 class="page-title "> NIEUWS</h1>
		<div class="row row-centered text-white">
			@foreach($data['news'] as $nieuwsmessage)
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
				<a href="#{{ $nieuwsmessage->id }}" >
					<div class="card type-1 background-secondary">
						<div class="top background-primary">
						<?php      ?> 
							<span >{{  $nieuwsmessage->publish_date->formatLocalized(' %d %B %Y') }}  </span>
						</div>
						<div class="image">
							<img class="img-responsive" src="../images/imagetest2.png">
						</div>
						<div class="information background-primary">
							<h4> {{ $nieuwsmessage->title }} </h4>
							<p>{{ str_limit($nieuwsmessage->description, 150) }}</p>
						</div>
						<div style="clear:both;"></div>
					</div>
				</a>
			</div>
		@endforeach
		</div>
	</div>


	<div class="container">
		<a href='/nieuws' class="link"> Klik hier voor meer nieuws <span class="background-primary round"> > </span> </a>
	</div>


	<div class="background-primary">
		<div class="container">

			<div class="agenda">
				<div class="widget-month">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">

						<a style='display:block;' href="/activiteiten" ><div class="background-secondary round month"><p> {{ Carbon::now()->formatLocalized('%B') }} </p> </div> </a>
					</div>
					<div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-offset-1 col-sm-5 col-xs-12">
						<div class="items"> 
							<h1 > AGENDA </h1>
						@foreach($data['events'] as $event)
							<a href="#{{ $event->id }}" ><p> <span> {{ $event->date->day }}  </span> - {{ $event->title }}     </p></a>
							
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div  class="page">
		<div class="row row-centered ">
				
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
				<div class="card type-5 ">
					<div class="top ">
					</div>
					<div class="image">
						<img class="img-responsive" src="../images/netwerk-hexagon.png">
					</div>
					<div class="information ">
						<h4> {{ $data['netwerk']->title }} </h4>

						<div class="verdeler"> </div>

						<p> {{ $data['netwerk']->description }}</p>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div>
				
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
				<div class="card type-5 ">
					<div class="top ">
					</div>
					<div class="image">
						<img class="img-responsive" src="../images/ontplooing-hexagon.png">
					</div>
					<div class="information ">
						<h4> {{ $data['zelfontplooing']->title }} </h4>

						<div class="verdeler"> </div>

						<p> {{ $data['zelfontplooing']->description }}</p>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
				<div class="card type-5 ">
					<div class="top ">
					</div>
					<div class="image">
						<img class="img-responsive" src="../images/cv-hexagon.png">
					</div>
					<div class="information ">
						<h4> {{ $data['cv_building']->title }} </h4>

						<div class="verdeler"> </div>

						<p> {{ $data['cv_building']->description }}</p>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
				<div class="card type-5 ">
					<div class="top ">
					</div>
					<div class="image">
						<img class="img-responsive" src="../images/gezelligheid-hexagon.png">
					</div>
					<div class="information ">
						<h4> {{ $data['gezelligheid']->title }} </h4>

						<div class="verdeler"> </div>

						<p> {{ $data['gezelligheid']->description }}</p>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div>
		


		</div>

			<div class="verdeler"></div>
		</div>
	</div>

	<div class="container">
		<div class="page">
			<h1 > PARTNERS </h1>
			<div class="row">
				
				 <div class="slider1">
				  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar1"></div>
				  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar2"></div>
				  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar3"></div>
				  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar4"></div>
				  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar5"></div>
				</div>

			</div>
		</div>
	</div>


@stop