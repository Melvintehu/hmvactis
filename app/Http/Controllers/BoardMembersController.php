<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Board;
use App\BoardMember;
use App\Http\Requests;
use App\Photo;

class BoardMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $data = [
            'board' => Board::all(),
            'boardMembers' => BoardMember::all(),
            ];

        return view('cms.pages.boardMembers.overzicht', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $boards = Board::lists('name', 'id');
        return view('cms.pages.boardMembers.create', compact('boards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         BoardMember::create($request->all());
         return redirect('cms/boardMembers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   


        $boardMember = BoardMember::find($id);
        $boards = Board::lists('name', 'id');
        return view('cms.pages.boardMembers.update', compact('boardMember', 'boards' ));
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
        $boardMember = BoardMember::findOrFail($id);
        $boardMember->update($request->all());

        return redirect('cms/boardMembers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boardMember = BoardMember::find($id);
        $boardMember->delete();
        return redirect('cms/boardMembers');
    }

    public function addPhoto($id, Request $request)
    {   

        // check of er een foto bestaat voor dit nieuws id
        $boardMember = BoardMember::findOrFail($id);

        $photos  = $boardMember->photos;

        if(!$photos->isEmpty()){
            $photos->first()->delete();
        }

        $file =  $request->file('file');
        
        $name = time() . $file->getClientOriginalName();

        $file->move('application-photos/bestuurs_leden/photos', $name);
           
        // create a new photo    

        $photo = Photo::create(['path' => "application-photos/bestuurs_leden/photos/{$name}"]);
        
        $boardMember->photos()->attach($photo->id, ['type' => 'original']);
        return 'done';
    }


}
