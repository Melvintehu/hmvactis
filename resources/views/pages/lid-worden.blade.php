@extends('master')

@section('title')
	
	Lid worden

@stop



@section('content')

	<section class="container">

		<div class="row">

			{!! Form::open(['method' => 'POST', 'action' => 'ProfilesController@store' ]) !!}

			<div class="col-lg-12 text-center space-outside-down-sm space-outside-up-lg">
				<h2>PERSOONSGEGEVENS</h2>
			</div>		

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 
						<p class="text-color-light input-label bg-secondary space-inside-left-sm">
							VOLLEDIGE NAAM
						</p>
					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 
	                    {!! Form::text('name', null, ['class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs
									  ']); !!} 
					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 
						<p class="text-color-light input-label bg-secondary space-inside-left-sm">
							STRAATNAAM & HUISNUMMER
						</p>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-8 col-xs-8"> 

						{!! Form::text('street', null, ['class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

					</div>

					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4"> 

						{!! Form::text('house_number', null, ['class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 
						<p class="text-color-light input-label bg-secondary space-inside-left-sm">
							PLAATS
						</p>
					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 

						{!! Form::text('place', null, ['class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 
						<p class="text-color-light input-label bg-secondary space-inside-left-sm">
							TELEFOONNUMMER
						</p>
					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 

						{!! Form::text('phone_number', null, ['class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 
						<p class="text-color-light input-label bg-secondary space-inside-left-sm">
							PRIVE E-MAILADRES
						</p>
					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 

						{!! Form::text('email_address', null, ['class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 
						<p class="text-color-light input-label bg-secondary space-inside-left-sm">
							GEBOORTEDATUM
						</p>
					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 

						{!! Form::date('birthdate', null, ['class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

					</div>
			</div>
		</section>
		
		<section class="container">	

			<div class="row">

					<div class="col-lg-12 text-center space-outside-down-sm space-outside-up-lg">
						<h2>STUDIEGEGEVENS</h2>
					</div>
				
				

				
					
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 
						<p class="text-color-light bg-secondary input-label space-inside-left-sm">
							HUIDIGE STUDIE
						</p>
					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 

						{!! Form::text('current_study', null, ['class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 
						<p class="text-color-light bg-secondary input-label space-inside-left-sm">
							STARTJAAR STUDIE
						</p>
					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 

						{!! Form::text('study_year', null, ['class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 
						<p class="text-color-light bg-secondary input-label space-inside-left-sm">
							STUDENTNUMMER
						</p>
					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 

						{!! Form::text('student_number', null, ['class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

					</div>

				</div>

			</section>
			
			<section class="container">	

				<div class="row">

					<div class="col-lg-12 text-center space-outside-down-sm space-outside-up-lg">
						<h2>BETALINGSGEGEVENS</h2>
					</div>

			
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 
						<p class="text-color-light bg-secondary input-label space-inside-left-sm">
							IBAN
						</p>
					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 

						{!! Form::text('iban', null, ['class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 
					</div>


					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 
						<p class="text-color-light bg-secondary input-label space-inside-left-sm">
							T.N.V
						</p>
					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 


						{!! Form::text('tnv', null, ['class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

					</div>

					<p class="space-inside-left-sm">* Wij gaan vertrouwelijk om met je gegevens. We zullen je gegevens nooit aan derden verstrekken.</p>

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

			

					<div class="col-lg-12 space-outside-md"> 

						<input class="btn 
										bg-secondary
									  text-color-light
									  space-outside-xs" 
						type="submit" value="Inschrijven" name="inschrijven">
						<p class="space-outside-left-sm">Door je in te schrijven ga je akkoord met onze <u><a href="algemenepoep">algemene voorwaarden</a></u>.</p>

					</div>

				</div>
			</section>
			{!! Form::close() !!}
		
	
@stop