<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\News;
use App\Event;
use App\Board;
use Carbon\Carbon;
use App\PageSection;
use App\Http\Requests;
use Auth;
use App\Profile;


class PagesController extends Controller
{   

    public function __construct(){
         setlocale(LC_TIME, 'Dutch'); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $data = [
            'pages' => page::all(),
            'profile' => Profile::where('user_id', '=', Auth::id()),

            ];

        return view('cms.pages.pages.overzicht', compact('data'));
    }

    public function overOns(){

        $data = [
            'inleidende_tekst' => PageSection::where('id', 1)->first(),
            'de_vereniging' => PageSection::where('id', 2)->first(),
            'onze_hoofddoelstelling' => PageSection::where('id', 3)->first(),
            'boards' => Board::where('id', 1)->first(),
            'news' => News::orderBy('publish_date', 'desc')->take(4)->get(),
        ];

        return view('pages.over-ons', compact('data'));
    }

    public function homepage(){
       
        $data = [
            'news' => News::orderBy('publish_date', 'desc')->take(4)->get(),
            'netwerk' => PageSection::where('id', 3)->first(),
            'zelfontplooing' => PageSection::where('id', 4)->first(),
            'cv_building' => PageSection::where('id', 5)->first(),
            'gezelligheid' => PageSection::where('id', 6)->first(),
            'events' => Event::where('date', '>', new Carbon('last day of previous month'))->where('date', '<', new Carbon('first day of next month'))->where('lustrum_event', 'nee')->take(4)->get(),
        ];


        return view('pages.homepage', compact('data'));
    }

    public function contact(){
        $data = [
            'pageSection' => PageSection::where('id', 9)->first(),
        ];

        return view('pages.contact', compact('data'));
    }

    public function profiel()
    {
             $data = [
                           
                'profile' => Profile::where('user_id', '=', Auth::id())->first(),
                'events' =>  Auth::user()->events()->get(),
            ];

        return view('pages.profiel', compact('data'));

    }

    public function showActiviteit($id)
    {

        $data = [

            'activiteit' => Event::find($id),

        ];

        return view('pages.activiteit_voorbeeld', compact('data'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cms.pages.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Page::create($request->all());
         return redirect('cms/pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Page::find($id);
        return view('cms.pages.pages.update', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->update($request->all());
        return redirect('cms/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();
        return redirect('cms/pages');
    }
}
