$('document').ready(function(){


	$('#step-1').show();
	$('#circle-1').addClass('bg-main');
		
	$('.to-step-2').on('click', function(){

		$('#circle-1').removeClass('bg-main');
		$('#circle-2').addClass('bg-main');
		$('#circle-3').removeClass('bg-main');

		$('#step-1').hide();
		$('#step-3').hide();
		$('#step-2').show();

	});


	$('.to-step-1').on('click', function(){

		$('#circle-1').addClass('bg-main');
		$('#circle-2').removeClass('bg-main');
		$('#circle-3').removeClass('bg-main');


		$('#step-1').show();
		$('#step-2').hide();
		$('#step-3').hide();

	});


	$('.to-step-3').on('click', function(){

		$('#circle-1').removeClass('bg-main');
		$('#circle-2').removeClass('bg-main');
		$('#circle-3').addClass('bg-main');

		$('#step-1').hide();
		$('#step-3').show();
		$('#step-2').hide();

	});






});