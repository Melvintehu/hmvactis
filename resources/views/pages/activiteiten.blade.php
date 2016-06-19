@extends('master')

@section('title')
	
	Activiteiten

@stop



@section('content')

	<div class="container ">
		<div class="page">
			<h1 class="page-title"> ACTIVITEITEN </h1>

			@include('partials.page-introduction', $data['pageSection']) 

			<div class="verdeler"></div>

			
			<h1> {{ strtoupper(Carbon::now()->formatLocalized('%B %Y')) }} </h1>

			<div class="verdeler "> </div>

			<div class="row row-centered text-white">
			@foreach($data['currentMonthsEvents'] as $event)
			
				<div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 ">
				<a href="#{{ $event->id }}">
					<div class="card type-1 background-secondary">
						<div class="top background-primary">
							<span > {{ $event->date }} </span>
						</div>
						<div class="image">
							<img class="img-responsive" src="../images/imagetest2.png">
						</div>
						<div class="information background-primary">
							<h3>{{ $event->title }}</h3>
							<div class="details">
								<p class="detail"> {{ $event->location }} </p>
								<p class="detail"> {{ $event->date->formatLocalized(' %d %B %Y') }} </p>
							</div>
							<p>{{ str_limit($event->description, 480 ) }}</p>
						</div>
						<div style="clear:both;"></div>
					</div>
					</a>
				</div>
			
			@endForeach

			</div>

			<?php 
				$date = new Carbon('next month');
			?>

			<h1> {{ strtoupper($date->formatLocalized(' %B %Y') )}} </h1>

			<div class="verdeler "> </div>

			<div class="row row-centered text-white">
			@foreach($data['nextMonthsEvents'] as $event)
			
				<div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 ">
				<a href="#{{ $event->id }}">
					<div class="card type-1 background-secondary">
						<div class="top background-primary">
							<span > {{ $event->date }} </span>
						</div>
						<div class="image">
							<img class="img-responsive" src="../images/imagetest2.png">
						</div>
						<div class="information background-primary">
							<h3>{{ $event->title }}</h3>
							<div class="details">
								<p class="detail"> {{ $event->location }} </p>
								<p class="detail"> {{ $event->date->formatLocalized(' %d %B %Y') }} </p>
							</div>
							<p>{{ str_limit($event->description, 200 ) }}</p>
						</div>
						<div style="clear:both;"></div>
					</div>
					</a>
				</div>
			
			@endForeach

			</div>


		</div>
		


	
	</div>

@stop