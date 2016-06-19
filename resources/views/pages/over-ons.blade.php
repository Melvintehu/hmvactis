@extends('master')

@section('title')
	
	De vereniging en het bestuur

@stop



@section('content')

	<div class="section background-primary">
		<div class="container">
			<div class="page text-white">
				<h1 class="page-title "> OVER ONS </h1>
			
				<div class="col-lg-6">
					<div class="text ">
						<p> 
							{{ $data['inleidende_tekst']->description }}
						</p>	
					</div>
				</div>
				<div class="col-lg-5 col-lg-offset-1 "> 
					<div class="text">
						<h3> Instituut voor Marketing Management</h3>
						<p><span class="bulletpoint background-secondary round"> </span>  International Business and Languages </p> 
						<p><span class="bulletpoint background-secondary round"> </span>  Small Business and Retail Management  </p> 
						<p><span class="bulletpoint background-secondary round"> </span>  Commerciële Economie </p> 
					</div>
				</div>

				<div class="col-lg-12">
					<div class="text">
						<h3> De vereniging </h3>
						<p> 
							{{ $data['de_vereniging']->description }}
						</p>
					</div>
				</div>

				<div class="col-lg-12 ">
					<div class="text">
						<h3> Onze hoofdoelstelling </h3>
						<p>
							{{ $data['onze_hoofddoelstelling']->description }}
						</p>
					</div>
				</div>

			</div>	
		</div>	
	</div>


	<div class="container">
		<div class="page">
			<h1> Bestuur 2015 - 2016 </h1>

			<div class="row row-centered ">
				@foreach($data['boards']->members as $boardMember)
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-centered">
					<div class="card type-4">
						<div class="top background-primary">
							
						</div>
						<div class="information ">
							<h3> {{ $boardMember->name }} </h3>
							<h5> {{ $boardMember->role }} </h5>
							<h5> {{ $boardMember->study }} </h5>
						</div>
						<div class="image round">
							<img class="img-responsive" src="../images/fototest.jpg">
						</div>
						<div style="clear:both;"></div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="verdeler"></div>
		</div>
	</div>

	<div class="container">
		<div class="page">
			<h1 class="page-title"> HET LAATSTE NIEUWS </h1>
			<div class="row row-centered text-white">
			@foreach($data['news'] as $newsmessage)
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
				<a href="#{{ $newsmessage->id }}" >
					<div class="card type-1 background-secondary">
						<div class="top background-primary">
						<?php      ?> 
							<span >{{  $newsmessage->publish_date->formatLocalized(' %d %B %Y') }}  </span>
						</div>
						<div class="image">
							<img class="img-responsive" src="../images/imagetest2.png">
						</div>
						<div class="information background-primary">
							<h4> {{ $newsmessage->title }} </h4>
							<p>{{ str_limit($newsmessage->description, 150) }}</p>
						</div>
						<div style="clear:both;"></div>
					</div>
				</a>
			</div>
			@endforeach
			</div>
		</div>
	</div>

	<div class="container">
		<a href='/nieuws' class="link"> Klik hier voor meer nieuws <span class="background-primary round"> > </span> </a>
	</div>



@stop