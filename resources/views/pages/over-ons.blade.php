@extends('master')

@section('title')
	De vereniging en het bestuur
@stop



@section('content')
	<section class="bg-secondary">
		<div class="container">
			<div class="row xs-text-center fadeInDown wow">

				<div class="col-lg-12 space-outside-up-lg">
					<div class="row ">

						<div class="col-lg-7 col-xs-12 col-sm-12">
							<h1 class="text-color-light  space-outside-down-sm"> OVER ONS </h1>
							<p class="text-color-light xs-space-outside-down-md sm-space-outside-down-md space-outside-down-lg">
								{{ $data['inleidende_tekst']->description }}
							</p>
						</div>
						<div class="col-lg-5  col-xs-12 col-sm-12 md-space-outside-down-lg sm-space-outside-down-lg xs-space-outside-down-lg text-left xs-space-inside-sides-md">
							<h3 class="text-color-light space-outside-down-sm space-outside-up-sm"> Instituut voor Marketing Management</h3>
							<p class="text-color-light block"><span class="circle circle-xs bg-main inline-block space-outside-right-xs"> </span>  International Business and Languages </p>

							<p class="text-color-light block"><span class="circle circle-xs bg-main inline-block space-outside-right-xs"> </span>  Small Business and Retail Management  </p>

							<p class="text-color-light block"><span class="circle circle-xs bg-main inline-block space-outside-right-xs"> </span>  Commerciële Economie </p>

						</div>

					</div>

				</div>



				<div class="col-lg-12">

						<h2 class="text-color-light space-outside-down-sm "> De vereniging </h2>

						<p class="text-color-light">

							{{ $data['de_vereniging']->description }}

						</p>



				</div>

				<div class="col-lg-12 space-outside-up-lg space-inside-down-lg">

						<h2 class="text-color-light space-outside-down-sm "> Onze hoofdoelstelling </h2>

						<p class="text-color-light">

							{{ $data['onze_hoofddoelstelling']->description }}

						</p>



				</div>

			</div>

		</div>

	</section>


	<div class="container fadeInDown wow">
		<div class="page">
			<h1> Bestuur 2016 - 2017 </h1>

			<div class="row row-centered ">
				@foreach($data['boards']->members as $boardMember)
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-centered">
					<div class="card type-4">
						<div class="top background-primary">

						</div>
						<div class="information text-center">
							<h3> {{ $boardMember->name }} </h3>
							<h5> {{ $boardMember->role }} </h5>
							<h5> {{ $boardMember->study }} </h5>
						</div>
						<div class="image round">
							@if($boardMember->photos->first()['path'] != null)
								<img class="img-responsive" src="{{$boardMember->photos->first()['path']}}">
							@else
								<img class="width-auto" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">
							@endif
						</div>
						<div style="clear:both;"></div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="verdeler"></div>
		</div>
	</div>

	<section class="container fadeInDown wow">

		<div class="row">

			<div class="col-lg-12 xs-text-center">

				<h1 class="space-outside-lg">HET LAATSTE NIEUWS </h1>

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

								@if($nieuwsmessage->photos->first()['path'] != null)
									<img class="img-responsive" src="{{$nieuwsmessage->photos->first()['path']}}">
								@else
									<img class="width-auto" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">
								@endif

							</div>

							<div class="information background-primary">

								<h4 class="text-color-light"> {{ $nieuwsmessage->title }} </h4>

								<p class="text-color-light">{{ str_limit($nieuwsmessage->description, 150) }}</p>

							</div>

							<div style="clear:both;"></div>

						</div>

					</a>

				</div>

			</div>

			@endforeach



		</div>

	</section>



	<div class="container fadeInDown wow">

		<div class="row">

			<div class="col-lg-12 xs-text-center sm-text-center space-outside-down-lg">

				<a href="/nieuws" class="btn-standard bg-secondary text-color-light">Meer nieuws</a>

			</div>

		</div>

	</div>



@stop