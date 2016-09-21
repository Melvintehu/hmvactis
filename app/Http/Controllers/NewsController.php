<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Photo;
use Carbon\carbon;
use App\Http\Requests;

class NewsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $data = [
            'news' => News::all(),
            ];

        return view('cms.pages.news.overzicht', compact('data'));
    }

    public function overzicht(){
          $data = [
            'nieuws' => News::orderBy('publish_date', 'desc')->get(),
            ];

        return view('pages.nieuws', compact('data'));
       
    }

    public function addPhoto($id, Request $request)
    {   

        // check of er een foto bestaat voor dit nieuws id
        $news = News::findOrFail($id);

        // indien er al een foto is, verwijder deze.
        $photos = $news->photos;

            // dd($photos);
        if(!$photos->isEmpty()){
            $photos->first()->delete();
        }

        // create a new photo    
        $photo = $this->makePhoto($request->file('file'));


        $news->addPhoto($photo);
        
        return 'done';
    }


    public function choosePhotoArea(request $request, $id)
    {   


        // check of er een foto bestaat voor dit nieuws id
        $news = News::findOrFail($id);

        // indien er al een foto is, verwijder deze.
        $photo = $news->photos->first();
         
        $photo = $photo->setThumbnailDimensions(250,150);

        $photo->overrideThumbnail($photo, $request->input('rightTrim'), $request->input('leftTrim'));

        return redirect()->back();

    }

    public function makePhoto($file)
    {
        
        return Photo::named($file->getClientOriginalName(), 'nieuws')
            ->setThumbnailDimensions(250,150)
            ->move($file);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cms.pages.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         News::create($request->all());
         return redirect('cms/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $news = News::find($id);
        return view('cms.pages.news.update', compact('news'));
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
        $news = News::findOrFail($id);
        $news->update($request->all());

        return redirect('cms/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect('cms/news');
    }
}
