@extends('master')

@section('title')
	
	Lid worden

@stop



@section('content')

	<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
		
		{{ csrf_field() }}

	<section class="container">
		
		<div class="row">
			
			<div class="col-lg-12 space-inside-md text-center">
				
			<a class="to-step-1" href="javascript:void(0)">

				<div id="circle-1" class="space-outside-sides-xs circle circle-md bg-accent inline-block text-color-light"> 1 </div>
				
			</a>

			<a class="to-step-2" href="javascript:void(0)">

				<div id="circle-2" class="space-outside-sides-xs circle circle-md bg-accent inline-block text-color-light"> 2 </div>

			</a>

			<a class="to-step-3" href="javascript:void(0)">

				<div id="circle-3" class="space-outside-sides-xs circle circle-md bg-accent inline-block 	text-color-light"> 3 </div>

			</a>

			</div>

		</div>

	</section>


	<!-- Stap 1 -->
	<section id="step-1"  class="container space-outside-down-lg">
		
		<div class="row">
	
			<div class="col-lg-12">
				
				<div class="row">

					<!-- titel -->

					<div class="col-lg-12 text-center space-outside-down-sm space-outside-up-lg">

						<h2>PERSOONSGEGEVENS</h2>

					</div>	

					<!-- Inputs -->


					<!-- VOLLEDIGE NAAM -->

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


					<!-- STRAATNAAM EN HUISNUMMER -->

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
									  
						@if ($errors->has('street'))

	                        <span class="help-block">

	                            <strong>{{ $errors->first('street') }}</strong>

	                        </span>

	                    @endif

					</div>

					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4"> 

						{!! Form::text('house_number', null, ['class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

					</div>

					

					<!-- PLAATS -->

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



					<!-- Telefoonnummer -->

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


					<!-- EMAILADRES -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 

						<p class="text-color-light input-label bg-secondary space-inside-left-sm">

							PRIVE E-MAILADRES

						</p>

					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 

						{!! Form::text('email', null, ['class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

						@if ($errors->has('email'))

                            <span class="help-block">

                                <strong>{{ $errors->first('email') }}</strong>

                            </span>

                        @endif

					</div>


					<!-- Geboortedatum -->

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


					<!-- Wachtwoord -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 

						<p class="text-color-light input-label bg-secondary space-inside-left-sm">

							WACHTWOORD

						</p>

					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 

						{!! Form::password('password', ['class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

					</div>


					<!-- Wachtwoord herhalen -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 

						<p class="text-color-light input-label bg-secondary space-inside-left-sm">
							
							WACHTWOORD HERHALEN

						</p>

					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 

						{!! Form::password('password_confirmation', ['class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

					</div>

				</div>

			</div>

			<div class="col-lg-12 space-outside-up-md text-center">
				
				<a  class="to-step-2 btn-standard bg-main text-color-light" href="#"> Ga naar stap 2</a>

			</div>

		</div>

	</section>




	<!-- Stap 2 -->
	<section id="step-2" class="container space-outside-down-lg">

		<div class="row">
			
			<!-- Titel -->

			<div class="col-lg-12 text-center space-outside-down-sm space-outside-up-lg">

				<h2>STUDIEGEGEVENS</h2>

			</div>
			

			<!-- HUIDIGE STUDIE -->

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


			<!-- STARTJAAR STUDIE -->

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

			<!-- STUDENTNUMMER -->

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

			<div class="col-lg-12 space-outside-up-md text-center">
				
				<a " class="to-step-1 btn-standard bg-secondary text-color-light" href="#"> Terug naar stap 1</a>

				<a  class="to-step-3 btn-standard bg-main text-color-light" href="#"> Ga naar stap 3</a>



			</div>

		</div>

	</section>
		
	
	<!-- Stap 3 -->		
	<section id="step-3" class="container">	

		<div class="row">

			<div class="col-lg-12 text-center space-outside-down-sm space-outside-up-lg">

				<!-- Titel -->

				<h2>BETALINGSGEGEVENS</h2>
				
				<!-- Voorwaarden betalingsgegevens -->

				<p class="text-left space-outside-md font-sm">
					
					Hierbij geef ik HMV Actis toestemming om contributie van mijn giro-/bankrekening af te schrijven. Dit betreft een gratis lidmaatschap voor het schooljaar 2016 – 2017 (alleen geldig bij inschrijvingen vóór 19/09/2016). Vervolgens wordt het lidmaatschap automatisch verlengd en zal er jaarlijks contributie van €12,- worden afgeschreven. Wederopzegging dient binnen twee maanden voor de start van het nieuwe collegejaar, 31 augustus 2017, ingediend te worden. 
					<br><br>
					<span class="bold">Let op: </span> je wordt niet automatisch uitgeschreven als je klaar/gestopt bent met je studie. Je dient hier zelf melding van te maken door een mail te sturen naar bestuur@hmvactis.nl.

				</p>

			</div>

			<!-- IBAN -->

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


			<!-- TEN NAME VAN -->

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


			<!--  OVERIGE INFORMATIE -->

			<p class="space-inside-left-sm">* Wij gaan vertrouwelijk om met je gegevens. We zullen je gegevens nooit aan derden verstrekken.</p>


			<!-- WERVEN -->

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
				<a  class="to-step-2 btn-standard bg-secondary text-color-light" href="#"> Terug naar stap 2</a>

				<input class="btn-standard bg-main text-color-light space-outside-xs" type="submit" value="Inschrijven" name="inschrijven">

				<p class="space-outside-left-sm">Door je in te schrijven ga je akkoord met onze <u><a href="algemene-voorwaarden">algemene voorwaarden</a></u>.</p>

			</div>




		</div>

	</section>

</form>
		
	
@stop