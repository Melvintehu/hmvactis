<div class='col-lg-4 col-xs-12 xs-space-outside-down-md space-inside-right-xs'>

	<h2 class="xs-text-center">Hoofdpartner</h2>
  	<div class="space-outside-up-sm" style="min-height:50px;">
  		<p > {{ $data['hoofdpartners']->name }} </p>
  	</div>
	<a class="block space-outside-down-sm" href='http://{{ $data['hoofdpartners']->website }}'>
		<div style="height:200px;" class="image space-inside-up-md">
  		@if($data['hoofdpartners']->photos->first()['thumbnail_path'] != null)
  			<img class="height-auto" src="{{$data['hoofdpartners']->photos->first()['thumbnail_path']}}">
			@elseif($data['hoofdpartners']->photos->first()['path'] != null)
				<img src="{{$data['hoofdpartners']->photos->first()['path']}}">
  		@else
  			<img class="width-auto" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">
  		@endif
		</div>
	</a>

</div>