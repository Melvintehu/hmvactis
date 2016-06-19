<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sponsor;
use App\PageSection;
use App\SponsorDiscount;
use App\Http\Requests;

class SponsorDiscountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $data = [
            'sponsors' => Sponsor::all(),
            'sponsorDiscounts' => SponsorDiscount::all(),
            ];

        return view('cms.pages.sponsorDiscounts.overzicht', compact('data'));
    }

    public function overzicht(){
         $data = [
            'pageSection' => PageSection::where('id', '14')->first(),
            'kortingen' => SponsorDiscount::all(),
            ];

        return view('pages.kortingen', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $sponsors = Sponsor::lists('name', 'id');

        return view('cms.pages.sponsorDiscounts.create', compact('sponsors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
         SponsorDiscount::create($request->all());
         return redirect('cms/sponsorDiscounts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $sponsors = Sponsor::lists('name', 'id');
        $sponsorDiscount = SponsorDiscount::find($id);
        return view('cms.pages.sponsorDiscounts.update', compact('sponsors', 'sponsorDiscount'));
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
        $sponsorDiscount = SponsorDiscount::findOrFail($id);
        $sponsorDiscount->update($request->all());

        return redirect('cms/sponsorDiscounts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sponsorDiscount = SponsorDiscount::find($id);
        $sponsorDiscount->delete();
        return redirect('cms/sponsorDiscounts');
    }
}
