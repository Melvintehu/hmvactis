@extends('master')

@section('title')
	Sponsoren
@stop

@section('content')
	
	<div class="bg-secondary "> 

		<div class="container">
			
			<div class="row space-outside-lg">
				

				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">


					<div class="row">
						

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 xs-space-inside-left-xl">

							<h1 class="text-color-light"> {{ $data['sponsor']->name }} </h1>

						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 xs-space-inside-left-xl">

							<div class="text xs-space-outside-down-lg sm-space-outside-down-lg">

								<a href="http://{{ $data['sponsor']->website }}"><p class="text-color-light">Bezoek de website!</p></a>

							</div>

						</div>

					</div>

				</div>

				<div style="padding:0;" class="col-lg-5 col-md-4 col-sm-12 col-xs-12">

					<div class="image lg-rect-lg xs-space-inside-sides-lg"> 

						<img class="responsive-image height-autox" src="../images/nieuwstest.png">

					</div>

				</div>

			</div>



		</div>
	</div>

	<!-- Section inschrijven voor activiteit -->
	<section class="container space-outside-down-lg">
		
		<div class="row">
			
			<div class="col-lg-7 col-xs-12 space-outside-down-lg xs-text-center">
				
				<p class="space-outside-md xs-space-inside-right-md-none xs-padding-sm space-inside-right-md"> {!! nl2br($data['sponsor']->description) !!} </p>

			</div>

		</div>

	</section>

	




@stop
