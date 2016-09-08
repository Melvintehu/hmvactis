<?php 

namespace App\Http\Controllers;

use Auth;
use App\Profile;
          
    $profiel = Profile::where('user_id', '=', Auth::id())->get();
?>


<!DOCTYPE html>
<html>
    <head>
              <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width">
        <title>@yield('title') || HMV Actis</title>

        <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../css/app.css">
        <link rel="stylesheet" type="text/css" href="../css/jquery.bxslider.css">
        <link rel="stylesheet" type="text/css" href="../css/animate.css">

    </head>
    <body>

            @include('partials.header')
            @include('partials.navigation')
            @yield('banner')
            @yield('content')
            @include('partials.footer')
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src='../../js/jquery.countdown.min.js'> </script>   
        <script type="text/javascript" src="../js/jquery.bxslider.js"></script>
            
        <script type="text/javascript">
         $('#clock').countdown('2016/05/30', function(event) {
           var $this = $(this).html(event.strftime(''
             + '<span class="days">%D dagen </span>  '
             + '<span class="hours">%H uur </span>  '
             + '<span class="minutes">%M min </span>  '
             + '<span class="seconds">%S sec</span> '));
         });
         </script>
        <script type="text/javascript">
          $('.slider1').bxSlider({
            slideWidth: 275,
            minSlides: 2,
            maxSlides: 3,
            slideMargin: 10
          });

          $('.slider2').bxSlider({
            slideWidth: 275,
            minSlides: 2,
            maxSlides: 3,
            slideMargin: 10,
            pager: false
          });

     </script>

        <script src="/js/imgcentering.js"></script>
         <script type="text/javascript">
        $(document).ready( function() {

            $(".imageCentered img").imgCentering();
        }); 
        </script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="../js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>
