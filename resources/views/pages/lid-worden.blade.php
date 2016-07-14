@extends('master')

@section('title')
	
	Lid worden

@stop



@section('content')
	<div class="container">
		<div class="page">
			{!! Form::open(['method' => 'POST', 'action' => 'ProfilesController@store' ]) !!}

			<div class="col-lg-12">
				<h1 class="page-title"> Lid worden </h1>
			</div>

			<div class="col-lg-12 text-center">
				<h1>PERSOONSGEGEVENS</h1>
			</div>

			<div class="col-lg-12">
				
				<div class="col-lg-4 bg-secondary label-lid space-outside-xs"> 
					<div class="text-color-light">
						VOLLEDIGE NAAM
					</div>
				</div>

				<div class="col-lg-8"> 
                    {!! Form::text('name', null, ['class' => 'input border 
								  border-accent
								  bg-accent 
								  space-outside-xs']); !!} 
				</div>

				<div class="col-lg-4 bg-secondary label-lid space-outside-xs"> 
					<div class="text-color-light">
						STRAATNAAM & HUISNUMMER
					</div>
				</div>

				<div class="col-lg-8"> 

					{!! Form::text('street', null, ['class' => 'input border 
								  border-accent
								  bg-accent 
								  space-outside-xs']); !!} 

				</div>

				<div class="col-lg-4 bg-secondary label-lid space-outside-xs"> 
					<div class="text-color-light">
						PLAATS
					</div>
				</div>

				<div class="col-lg-8"> 

					{!! Form::text('place', null, ['class' => 'input border 
								  border-accent
								  bg-accent 
								  space-outside-xs']); !!} 

				</div>

				<div class="col-lg-4 bg-secondary label-lid space-outside-xs"> 
					<div class="text-color-light">
						TELEFOONNUMMER
					</div>
				</div>

				<div class="col-lg-8"> 

					{!! Form::text('phone_number', null, ['class' => 'input border 
								  border-accent
								  bg-accent 
								  space-outside-xs']); !!} 

				</div>

				<div class="col-lg-4 bg-secondary label-lid space-outside-xs"> 
					<div class="text-color-light">
						PRIVE E-MAILADRES
					</div>
				</div>

				<div class="col-lg-8"> 

					{!! Form::text('email_address', null, ['class' => 'input border 
								  border-accent
								  bg-accent 
								  space-outside-xs']); !!} 

				</div>

				<div class="col-lg-4 bg-secondary label-lid space-outside-xs"> 
					<div class="text-color-light">
						GEBOORTEDATUM
					</div>
				</div>

				<div class="col-lg-8"> 

					{!! Form::date('birthdate', null, ['class' => 'input border 
								  border-accent
								  bg-accent 
								  space-outside-xs']); !!} 

				</div>

			<div class="col-lg-12 text-center">
				<h1>STUDIEGEGEVENS</h1>
			</div>

			<div class="col-lg-12">
				
				<div class="col-lg-4 bg-secondary label-lid space-outside-xs"> 
					<div class="text-color-light">
						HUIDIGE STUDIE
					</div>
				</div>

				<div class="col-lg-4"> 

					{!! Form::text('current_study', null, ['class' => 'input border 
								  border-accent
								  bg-accent 
								  space-outside-xs']); !!} 

				</div>

				<div class="col-lg-4"> 

					<input class="input border 
								  border-accent
								  bg-accent 
								  space-outside-xs" 
					type="text">

				</div>

				<div class="col-lg-4 bg-secondary label-lid space-outside-xs"> 
					<div class="text-color-light">
						STUDIEJAAR
					</div>
				</div>

				<div class="col-lg-8"> 

					{!! Form::text('study_year', null, ['class' => 'input border 
								  border-accent
								  bg-accent 
								  space-outside-xs']); !!} 

				</div>

				<div class="col-lg-4 bg-secondary label-lid space-outside-xs"> 
					<div class="text-color-light">
						STUDENTNUMMER
					</div>
				</div>

				<div class="col-lg-8"> 

					{!! Form::text('student_number', null, ['class' => 'input border 
								  border-accent
								  bg-accent 
								  space-outside-xs']); !!} 

				</div>

			</div>

			<div class="col-lg-12 text-center">
				<h1>BETALINGSGEGEVENS</h1>
			</div>

			<div class="col-lg-12">
				
				<div class="col-lg-4 bg-secondary label-lid space-outside-xs"> 
					<div class="text-color-light">
						IBAN
					</div>
				</div>

				<div class="col-lg-8"> 

					{!! Form::text('iban', null, ['class' => 'input border 
								  border-accent
								  bg-accent 
								  space-outside-xs']); !!} 
				</div>


				<div class="col-lg-4 bg-secondary label-lid space-outside-xs"> 
					<div class="text-color-light">
						T.N.V
					</div>
				</div>

				<div class="col-lg-8"> 


					{!! Form::text('tnv', null, ['class' => 'input border 
								  border-accent
								  bg-accent 
								  space-outside-xs']); !!} 

				</div>
				<h6>* Wij gaan vertrouwelijk om met je gegevens. We zullen je gegevens nooit aan derden verstrekken.</h6>

				<div class="col-lg-12 space-outside-up-md"> 
					<h3>Lijkt het je leuk om meer te doen naast je studie?</h3>
				</div>

				<div class="col-lg-12 space-outside-up-md">

					<div class="col-lg-1 space-outside-xs">

						{!! Form::checkbox('subscribed', 1, ['class' => 'input border 
								  border-accent
								  bg-accent 
								  space-outside-xs']); !!} 

					</div>

					<div class="col-lg-11 space-outside-xs">
						<p>Ja, ik heb interesse om een commissie/bestuursfunctie binnen HMV Actis te bekleden.</p>
					</div>

				</div>

			</div>

				<div class="col-lg-12 space-outside-md"> 

					<input class="btn 
									bg-secondary
								  text-color-light
								  space-outside-xs" 
					type="submit" value="Inschrijven" name="inschrijven">
					Door je in te schrijven ga je akkoord met onze <u>algemene voorwaarden.</u>

				</div>

			</div>
			{!! Form::close() !!}
		</div>
	</div>
@stop