<?php



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// cms routes

Route::group(['prefix' => 'cms'], function () {

    
    Route::get('/', function(){
        return view('cms.cms');
    });


    Route::resource('sponsorDiscounts', 'SponsorDiscountsController');
    Route::resource('boards', 'BoardsController');
    Route::resource('boardMembers', 'BoardMembersController');
    Route::resource('information', 'InformationController');
    Route::resource('pages', 'PagesController');
    Route::resource('pageSections', 'PageSectionsController');
    Route::resource('news', 'NewsController');
    Route::resource('events', 'EventsController');
    Route::resource('sponsors', 'SponsorsController');
    Route::resource('committees', 'CommitteesController');
    Route::resource('committeeMembers', 'CommitteeMembersController');
    Route::resource('vacancies', 'VacanciesController');
    Route::resource('profile', 'ProfilesController');
    Route::resource('user', 'UserController');

    // photo upload routes
    Route::post('/news/{id}/photos', 'NewsController@addPhoto');
    Route::post('/event/{id}/photos', 'EventsController@addPhoto');
    Route::post('/committeeMember/{id}/photos', 'CommitteeMembersController@addPhoto');
    Route::post('/sponsor/{id}/photos', 'SponsorsController@addPhoto');
    Route::post('/sponsorDiscount/{id}/photos', 'SponsorDiscountsController@addPhoto');
    Route::post('/pageSection/{id}/photos', 'PageSectionsController@addPhoto');
    Route::post('/boardMember/{id}/photos', 'BoardMembersController@addPhoto');
    Route::post('/vacancie/{id}/photos', 'VacanciesController@addPhoto');

    // get routes
    Route::post('/profiel/{id}', 'EventsController@uitschrijven');


});




    Route::auth();

    Route::group(['middleware' => ['auth']], function(){

       

        // user omgeving routes, ook tijdelij
        Route::get('/lid-worden', function(){
            return view('pages.lid-worden');
        });

        Route::get('/logout', function()
        {
            Auth::logout();
            return redirect('/');
        });

        Route::post('/inschrijven/{id}', 'EventsController@signUpUser');

        Route::get('/profiel', 'PagesController@profiel');
  

    });



   // pagina routes
    Route::get('/', 'PagesController@homepage');
    Route::get('/commissies', 'CommitteesController@overzicht');
    Route::get('/commissies/{id}', 'PagesController@showCommissie');
    Route::get('/activiteiten', 'EventsController@overzicht');
    Route::get('/kortingen', 'SponsorDiscountsController@overzicht');
    Route::get('/kortingen/{id}', 'PagesController@showKorting');
    Route::get('/lustrum', 'EventsController@lustrumOverzicht');
    Route::get('/over-ons', 'PagesController@overOns');
    Route::get('/partners', 'SponsorsController@overzicht');
    Route::get('/partners/{id}', 'PagesController@showSponsor');
    Route::get('/vacatures', 'VacanciesController@overzicht');
    Route::get('/vacatures/{id}', 'PagesController@showVacature');
    Route::get('/nieuws', 'NewsController@overzicht');
    Route::get('/nieuws/{id}', 'PagesController@showNieuws'); 
    Route::get('/contact', 'PagesController@contact');
    Route::get('/activiteit/{id}', 'PagesController@showActiviteit'); 

    // tijdelijke routes
    Route::get('/commissie_voorbeeld', function () {
        return view('pages.commissie_voorbeeld');
    });

    Route::get('/activiteit_voorbeeld', function () {
        return view('pages.activiteit_voorbeeld');
    });

    Route::get('/nieuws_voorbeeld', function () {
        return view('pages.nieuws_voorbeeld');
    });




    Route::get('/home', 'HomeController@index');


 






