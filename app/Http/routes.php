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


    // photo upload routes
    Route::post('/news/{id}/photos', 'NewsController@addPhoto');


});



Route::group([], function () {

    Route::get('nieuws', 'NewsController@overzicht');
    Route::get('/', 'PagesController@homepage');

    Route::get('/commissie_voorbeeld', function () {
        return view('pages.commissie_voorbeeld');
    });

    Route::get('/activiteit_voorbeeld', function () {
        return view('pages.activiteit_voorbeeld');
    });

    Route::get('/nieuws_voorbeeld', function () {
        return view('pages.nieuws_voorbeeld');
    });


    Route::get('commissies', 'CommitteesController@overzicht');



    Route::get('/activiteiten', 'EventsController@overzicht');
    Route::get('kortingen', 'SponsorDiscountsController@overzicht');
    Route::get('lustrum', 'EventsController@lustrumOverzicht');
    Route::get('over-ons', 'PagesController@overOns');
    Route::get('partners', 'SponsorsController@overzicht');
    Route::get('vacatures', 'VacanciesController@overzicht');

    Route::get('contact', 'PagesController@contact');

    Route::get('lid-worden', function(){
    	return view('pages.lid-worden');
    });


    Route::get('login', function(){
    	return view('pages.login');
    });
});


