@extends('master')

@section('banner')
	
	@include('partials.banner')

@stop

@section('title')
	
	Homepage

@stop


@section('content')

	<section class="container space-outside-up-lg">
		
		<div class="row">
			
			<div class="col-lg-12 xs-text-center sm-text-center">
				
				<h1 class="space-outside-down-lg"> NIEUWS </h1>

			</div>

			@foreach($data['news'] as $nieuwsmessage)

			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 no-overflow ">

				<div class="row">
					
					<a href="nieuws/{{ $nieuwsmessage->id }}" >

						<div class="card type-1 background-secondary">

							<div class="top background-primary">

								<span class="text-color-light" >{{  $nieuwsmessage->publish_date->formatLocalized(' %d %B %Y') }}  </span>

							</div>

							<div class="image">

								<img class="img-responsive" src="../images/imagetest2.png">

							</div>

							<div class="information background-primary ">

								<h4 class="text-color-light"> {{ $nieuwsmessage->title }} </h4>

								<p class="text-color-light ">{{ str_limit($nieuwsmessage->description, 150) }}</p>

							</div>

							<div style="clear:both;"></div>

						</div>

					</a>

				</div>

			</div>

			@endforeach

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				
				<a class="btn-standard bg-accent text-color-dark inline-block" href="/nieuws"> meer nieuws </a>

			</div>


		</div>

	</section>

	
	<section class=" space-outside-lg bg-secondary"> 

		<div class="container">
			
			<div class="row space-outside-lg">
				
				<div class="col-lg-5  space-outside-lg">
					
					<div class="circle circle-xl bg-main block auto">
						
						<p class="font-lg light text-color-light uppercase font-secondary"> {{ Carbon::now()->formatLocalized('%B') }}  </p>

					</div>


				</div>

				<div class="col-lg-7 md-space-inside-sides-lg lg-space-inside-sides-lg">
					
					<h1 class="uppercase text-center text-color-light space-outside-down-md "> Agenda </h1>

					<a class="btn-round block space-outside-sm" href="#" > 
							
						<span class="circle circle-sm bg-main inline-block text-color-light "> > </span> 

						<span class="text-color-light"> {{ 13 }}  </span> <p class="text-color-light">- test </p>

					</a>

					<a class="btn-round block space-outside-sm" href="#" > 
							
						<span class="circle circle-sm bg-main inline-block text-color-light "> > </span> 

						<span class="text-color-light"> {{ 13 }}  </span> <p class="text-color-light">- test </p>

					</a>

					@foreach($data['events'] as $event)

						<a class="btn-round block space-outside-sm" href="activiteit/{{ $event->id }}" > 
						
							<span class="circle circle-sm bg-main inline-block text-color-light "> > </span>  

							<span class="text-color-light"> {{ $event->date->day }}   </span> <p class="text-color-light">- - {{ $event->title }}  </p>

						</a>
							
					@endforeach
				</div>

			</div>

		</div>

	</section>




	

	<div class="container">

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

			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  ">

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

					<div style="clear:both; "></div>

				</div>

			</div>
			
			<div class="col-lg-12 space-outside-lg">
					
				<a class="btn-standard bg-accent text-color-dark uppercase space-outside-up-lg " href="/over-ons"> over ons  </a>

			</div>

			<div class="col-lg-12">
				
				<div class="divider bg-accent "></div>

			</div>

		</div>

		

	</div>
	


	<div class="container space-outside-lg">
		
		<div class="row">

			<h1 class="space-outside-down-lg"> PARTNERS </h1>
				
			<div class='col-lg-3'>
				<h2>Hoofdpartner(s)</h2>
					@foreach($data['hoofdpartners'] as $hoofdpartner)
						<p> {{ $hoofdpartner->name }} </p>
				  		<a href='http://{{ $hoofdpartner->website }}'>LINK</a>
					@endforeach
			</div>

			<div class="col-lg-9">
				<h2>Overige partners</h2>
				<div class="slider1 ">
					@foreach($data['partners'] as $partner)
				  	<div class="slide">
				  		<p> {{ $partner->name }} </p>
				  		<a href='http://{{ $partner->website }}'><img src="http://placehold.it/350x150&text=FooBar1"></a>
				  	</div>
				  	@endforeach
				</div>
			</div>

			<div class="col-lg-12 text-center">
				
				<a class="btn-standard bg-accent text-color-dark uppercase" href="/partners"> Alle Partners </a>

			</div>


		</div>
		



	</div>


@stop