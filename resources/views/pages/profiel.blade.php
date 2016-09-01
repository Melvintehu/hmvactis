@extends('master')

@section('title')
	
	Profieloverzicht

@stop



@section('content')

	<section class="container">

		<div class="row">
			
			<div class="col-lg-12 space-outside-lg">
				
				<h1 class="xs-text-center sm-text-center"> Welkom  {{ $data['profile']->name }} </h1>

			</div>

			<div class="col-lg-12 bg-secondary padding-md">

			<h2 class="space-outside-down-sm text-color-light xs-text-center sm-text-center">Persoonsgegevens </h2>

				<table class="table">

					<tr>

						<th class="text-color-light">Naam:</th><td  class="text-color-light">{{ $data['profile']->name }}</td>

					</tr>

					<tr>

						<th  class="text-color-light">Adres:</th><td  class="text-color-light">{{ $data['profile']->street }} {{ $data['profile']->house_number }}</td>

					</tr>

					<tr>

						<th  class="text-color-light">Telefoonnummer:</th><td  class="text-color-light">{{ $data['profile']->phone_number }}</td>

					</tr>

					<tr>
						
						<th  class="text-color-light">Emailadres:</th><td  class="text-color-light">{{ $data['profile']->email_address }}</td>


					</tr>

					<tr>

						<th  class="text-color-light">Geboortedatum:</th><td  class="text-color-light">{{ $data['profile']->birthdate }}</td>

					</tr>

					<tr>

						<th  class="text-color-light">Studie:</th><td  class="text-color-light">{{ $data['profile']->current_study }}</td>

					</tr>

					<tr>

						<th  class="text-color-light">Studiejaar:</th><td  class="text-color-light">{{ $data['profile']->study_year }}</td>

					</tr>

					<tr>

						<th  class="text-color-light">IBAN:</th><td  class="text-color-light">{{ $data['profile']->iban }}</td>

					</tr>

				</table>

				<div class="col-lg-12 text-center space-outside-up-md space-outside-down-md">
						
					<a class="btn-standard  bg-main text-color-light" href="#gegevens-aanpassen">Gegevens aanpassen</a>

				</div>

			</div>


			<div class="col-lg-12">
				
				<div class="divider bg-accent space-outside-down-lg"></div>

			</div>

			<div class="col-lg-12 bg-accent border  border-accent space-inside-up-md space-outside-down-sm text-center">
				
				<p class="text-color-dark block space-outside-down-sm  font-md"> Zou je een functie binnen HMV Actis willen bekleden? Meld je dan nu aan! </p>

				<a class="btn-standard bg-main text-color-light space-outside-down-lg space-outside-up-sm" href="#">Aanmelden</a>

			</div>


			<div class="col-lg-12">

				<h2 class="space-outside-down-sm space-outside-up-md xs-text-center sm-text-center">Geplande activiteiten</h2>

				<table class="table ">

					@foreach($data['events'] as $event)

						<tr>

							<td >{{ $event->title }}</td>

							<td> {{ $event->date }} </td>

							<td> {{ $event->time }}  {{ $event->location }}</td>

							<td>

								{!! Form::open() !!}
									
									<a class="btn-standard hover-secondary bg-main text-color-light " href="">Uitschrijven</a>

								{!! Form::open() !!}

							</td>

						</tr>

					@endforeach	

				</table>

			</div>

			<div class="col-lg-12 space-outside-up-md space-outside-down-lg">
				
				<h2 class="space-outside-down-sm xs-text-center sm-text-center">Afgelopen activiteiten</h2>

				<table class="table ">

						<tr>

							<td>Pokemon Go repease asdfasd fasdf</td>

							<td>1 juli 2016</td>

							<td>15:30 in de gehele wereld</td>

						</tr>

				</table>

			</div>

		</div>



	</section>
		
	
@stop