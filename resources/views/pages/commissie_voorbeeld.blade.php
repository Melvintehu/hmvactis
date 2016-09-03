@extends('master')

@section('title')
	Feestcommissie
@stop



@section('content')
	
	<div class="container">
		<div class="page">
			<div class="col-lg-3">	
				<div class="image round background-accent">
					<img class="img-responsive icon" src="../images/{{ $data['committee']->name }}-icon.png">
				</div>
			</div>
			<div class="col-lg-9">
				<h1 class="page-title"> {{ $data['committee']->name }} </h1>
			</div>
		</div>
	</div>

	<div class="section background-primary text-white">
		<div class="container">
			<p class="text">  
				{!! nl2br($data['committee']->description) !!}
			</p>
		</div>
	</div>

	<div class="container">
		<div class="row row-centered">
		@foreach($data['committeemembers'] as $committeemember)
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-centered">
				<div class="card type-4">
					<div class="top background-primary">
						<span >30 maart 2016  </span>
					</div>
					<div class="information ">
						<h3>{{ $committeemember->name }}</h3>
						<h5>{{ $committeemember->role }}</h5>
						<h5>{{ $committeemember->study }}</h5>
					</div>
					<div class="image round">
						<img class="img-responsive" src="../{{$committeemember->photos->first()['path']}}">
					</div>
					<div style="clear:both;"></div>
				</div>
			</div>
		@endforeach


		</div>

		<div class="verdeler"></div>

		<a href='commissies' class="link"> Ga terug <span class="background-secondary round"> > </span> </a>

	</div>



@stop
