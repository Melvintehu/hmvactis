<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vacancie;
use App\PageSection;
use App\Http\Requests;

class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $data = [
            'vacancies' => Vacancie::all(),
            ];

        return view('cms.pages.vacancies.overzicht', compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function overzicht(){
         $data = [
            'pageSection' => PageSection::where('id', 15)->first(),
            'vacancies' => Vacancie::all(),
            ];

        return view('pages.vacatures', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.vacancies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Vacancie::create($request->all());
         return redirect('cms/vacancies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $vacancie = Vacancie::findOrFail($id);
        return view('cms.pages.vacancies.update', compact('vacancie'));
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
        $vacancie = Vacancie::findOrFail($id);
        $vacancie->update($request->all());

        return redirect('cms/vacancies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacancie = Vacancie::find($id);
        $vacancie->delete();
        return redirect('cms/vacancies');
    }
}
