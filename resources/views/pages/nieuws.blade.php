@extends('master')

@section('title')
	
	Nieuws

@stop



@section('content')

	<div class="container ">
		
		<h1 class="page-title"> NIEUWS</h1>
		<div class="page">
			<div class="row row-centered text-white">
			@foreach($data['nieuws'] as $nieuwsmessage)
				
				
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
						<a href="nieuws/{{ $nieuwsmessage->id }}" >
							<div class="card type-1 background-secondary">
								<div class="top background-primary">
									<span >{{ $nieuwsmessage->publish_date->formatLocalized(' %d %B %Y') }}  </span>
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
			<!-- @include('pages.cards.type-1')-->
		</div>

	</div>
	

@stop