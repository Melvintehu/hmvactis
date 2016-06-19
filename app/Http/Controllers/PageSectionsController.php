<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\PageSection;
use App\Http\Requests;

class PageSectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $data = [
            'pages' => Page::all(),
            'pageSections' => PageSection::all(),
            ];

        return view('cms.pages.pageSections.overzicht', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
        $pages = Page::lists('title', 'id');


        return view('cms.pages.pageSections.create', compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         PageSection::create($request->all());
         return redirect('cms/pageSections');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $pages = Page::lists('title', 'id');
        $pageSection = PageSection::find($id);
        return view('cms.pages.pageSections.update', compact('pages', 'pageSection'));
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
        $pageSection = PageSection::findOrFail($id);
        $pageSection->update($request->all());
        return redirect('cms/pageSections');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pageSection = PageSection::find($id);
        $pageSection->delete();
        return redirect('cms/pageSections');

    }
}
