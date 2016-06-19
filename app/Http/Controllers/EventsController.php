<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use Carbon\carbon;
use App\PageSection;
use App\Http\Requests;

class EventsController extends Controller
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
            'events' => Event::all(),
            ];

        return view('cms.pages.events.overzicht', compact('data'));
    }


    public function overzicht(){
        $data = [  
            'pageSection'  => PageSection::where('id', 10)->first(),
            'currentMonthsEvents' => Event::
                where('lustrum_event', 'nee')
              ->where('date', '>', new Carbon('last day of previous month'))
              ->where('date', '<', new Carbon('first day of next month'))
              ->get(),

            'nextMonthsEvents' => Event::
                where('lustrum_event', 'nee')
              ->where('date', '>=', new Carbon('first day of next month'))
              ->where('date', '<=', new Carbon('last day of next month'))
              ->get(),

        ];

        return view('pages.activiteiten', compact('data'));
    }

    public function lustrumOverzicht(){
        $data = [  
            'pageSection'  => PageSection::where('id', 11)->first(),
            'events' => Event::where('lustrum_event', 'ja')->get(),
        ];

        return view('pages.lustrum', compact('data'));        
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cms.pages.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Event::create($request->all());
         return redirect('cms/events');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $event = Event::find($id);
        return view('cms.pages.events.update', compact('event'));
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

        $event = Event::findOrFail($id);
        $event->update($request->all());

        return redirect('cms/events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('cms/events');
    }
}
