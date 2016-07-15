@extends('master')

@section('title')
	
	Contact

@stop



@section('content')

	<section class="container space-inside-up-lg space-inside-down-md">
		
		<div class="row">
			
			<div class="col-lg-12">
				
				<h1 class="space-outside-down-lg">Contact</h1>

				<p class="space-outside-down-lg">
					
					{{ $data['pageSection']->description }}

				</p>

			</div>

			

		</div>

		<div class="divider bg-accent"></div>

	</section>



	<section class="container space-inside-down-lg"> 

		<div class="row">
			
			<div class="col-lg-12">
				
				<p class="text bold">
					
					Vul het onderstaande contactformulier in.

				</p>

			</div>

			<div class="col-lg-7 space-inside-xs">
				
				<input placeholder="voornaam" class="input border border-accent bg-accent" type="text" name="voornaam">

			</div>

			<div class="col-lg-7 space-inside-xs">
				
				<input placeholder="voornaam" class="input border border-accent bg-accent" type="text" name="voornaam">

			</div>

			<div class="col-lg-7 space-inside-xs">
				
				<input placeholder="voornaam" class="input border border-accent bg-accent" type="text" name="voornaam">

			</div>

			<div class="col-lg-7 space-inside-xs">
				
				<input placeholder="voornaam" class="input border border-accent bg-accent" type="text" name="voornaam">

			</div>

			<div class="col-lg-12 space-inside-xs">
				
				<textarea class="textarea border border-accent bg-accent" placeholder="Uw bericht of opmerking"></textarea>

			</div>

			<div class="col-lg-12 space-inside-xs">
				
				<input type="submit" name="verzenden" class="btn-standard bg-secondary text-color-light font-xs " value="verzenden">

			</div>

			<div class="col-lg-12 space-inside-xs">
				
				<p> 
				 	Bedankt voor het verzenden. Wij nemen zo snel mogelijk contact opnemen. 
				</p>

			</div>

		</div>

	</section>

@stop