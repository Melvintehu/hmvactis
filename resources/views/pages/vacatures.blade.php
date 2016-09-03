@extends('master')

@section('title')
	
	Vacatures

@stop



@section('content')


	<div class="container ">
		
		<div class="row">
			
			<h1 class="space-outside-lg xs-text-center"> VACATURES </h1>

			@include('partials.page-introduction', $data['pageSection']) 

		</div>
			

		<div class="row row-centered text-white">
			@foreach($data['vacancies'] as $vacancie )
			<a href="vacatures/{{ $vacancie->id }}">
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div class="card type-1 background-primary">
					<div class="top background-accent"> 
					
					</div>
					<div class="image">
						<img class="img-responsive" src="../images/imagetest2.png">
					</div>

					<div class="information">
						<h4> {{ $vacancie->title }} </h4>
						<p> 
							{{ str_limit($vacancie->description, 135) }}
						</p>
					</div>
				</div>
			</div>
			</a>
			@endforeach		
		</div>
	</div>		

@stop