<?php

namespace sesm\Http\Controllers;

use Illuminate\Http\Request;

class Information_familyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information_familys = \sesm\Information_family::all();
        return view('information_family.index', compact('information_familys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('information_family.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $information_family = new \sesm\Information_family;
        $information_family->situation_family = $request->input('information_family_situation_family');
        $information_family->situation_family_which = $request->input('information_family_situation_family_which');
        $information_family->opinion_family = $request->input('information_family_opinion_family');
        $information_family->interest_family = $request->input('information_family_interest_family');
        $information_family->motives_family = $request->input('information_family_motives_family');
        $information_family->opinion_kid = $request->input('information_family_opinion_kid');
        $information_family->interest_kid = $request->input('information_family_interest_kid');
        $information_family->motives_kid = $request->input('information_family_motives_kid');
        $information_family->restriction_contact = $request->input('information_family_restriction_contact');
        $information_family->who_impediment = $request->input('information_family_who_impediment');
        $information_family->who_hindered = $request->input('information_family_who_hindered');
        $information_family->alcohol = $request->input('information_family_alcohol');
        $information_family->alcohol_who = $request->input('information_family_alcohol_who');
        $information_family->drugs = $request->input('information_family_drugs');
        $information_family->drugs_which = $request->input('information_family_drugs_which');
        $information_family->drugs_who = $request->input('information_family_drugs_who');
        $information_family->abuse = $request->input('information_family_abuse');
        $information_family->abuse_who = $request->input('information_family_abuse_who');
        $information_family->street = $request->input('information_family_street');
        $information_family->street_who = $request->input('information_family_street_who');
        $information_family->system_prison = $request->input('information_family_system_prison');
        $information_family->system_prison_who = $request->input('information_family_system_prison_who');
        $information_family->disorder_mental = $request->input('information_family_disorder_mental');
        $information_family->disorder_mental_which = $request->input('information_family_disorder_mental_which');
        $information_family->disorder_mental_who = $request->input('information_family_disorder_mental_who');
        $information_family->disease_serious = $request->input('information_family_disease_serious');
        $information_family->disease_serious_which = $request->input('information_family_disease_serious_which');
        $information_family->disease_serious_who = $request->input('information_family_disease_serious_who');
        $information_family->rehabilitation = $request->input('information_family_rehabilitation');
        $information_family->rehabilitation_who = $request->input('information_family_rehabilitation_who');
        $information_family->threat_death = $request->input('information_family_threat_death');
        $information_family->threat_death_who = $request->input('information_family_threat_death_who');
        $information_family->none = $request->input('information_family_none');
        $information_family->kid_id = '1'; //$request->input('information_family_kid_id');
        $information_family->save();
        return redirect()->route('inicial');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $information_family = \sesm\Information_family::findOrFail($id);
        
        $information_family = \sesm\Information_family::where('kid_id', '=', $id)->first();
        return view('information_family.show', compact('information_family'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $information_family = \sesm\Information_family::findOrFail($id);
        return view('information_family.edit', compact('information_family'));
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
         $information_family = \sesm\Information_family::findOrFail($id);

        $information_family->situation_family = $request->input('information_family_situation_family');
        $information_family->situation_family_which = $request->input('information_family_situation_family_which');
        $information_family->opinion_family = $request->input('information_family_opinion_family');
        $information_family->interest_family = $request->input('information_family_interest_family');
        $information_family->motives_family = $request->input('information_family_motives_family');
        $information_family->opinion_kid = $request->input('information_family_opinion_kid');
        $information_family->interest_kid = $request->input('information_family_interest_kid');
        $information_family->motives_kid = $request->input('information_family_motives_kid');
        $information_family->restriction_contact = $request->input('information_family_restriction_contact');
        $information_family->who_impediment = $request->input('information_family_who_impediment');
        $information_family->who_hindered = $request->input('information_family_who_hindered');
        $information_family->alcohol = $request->input('information_family_alcohol');
        $information_family->alcohol_who = $request->input('information_family_alcohol_who');
        $information_family->drugs = $request->input('information_family_drugs');
        $information_family->drugs_which = $request->input('information_family_drugs_which');
        $information_family->drugs_who = $request->input('information_family_drugs_who');
        $information_family->abuse = $request->input('information_family_abuse');
        $information_family->abuse_who = $request->input('information_family_abuse_who');
        $information_family->street = $request->input('information_family_street');
        $information_family->street_who = $request->input('information_family_street_who');
        $information_family->system_prison = $request->input('information_family_system_prison');
        $information_family->system_prison_who = $request->input('information_family_system_prison_who');
        $information_family->disorder_mental = $request->input('information_family_disorder_mental');
        $information_family->disorder_mental_which = $request->input('information_family_disorder_mental_which');
        $information_family->disorder_mental_who = $request->input('information_family_disorder_mental_who');
        $information_family->disease_serious = $request->input('information_family_disease_serious');
        $information_family->disease_serious_which = $request->input('information_family_disease_serious_which');
        $information_family->disease_serious_who = $request->input('information_family_disease_serious_who');
        $information_family->rehabilitation = $request->input('information_family_rehabilitation');
        $information_family->rehabilitation_who = $request->input('information_family_rehabilitation_who');
        $information_family->threat_death = $request->input('information_family_threat_death');
        $information_family->threat_death_who = $request->input('information_family_threat_death_who');
        $information_family->none = $request->input('information_family_none');
        // $information_family->kid_id = '1'; //$request->input('information_family_kid_id');
        $information_family->save();
        // return redirect()->route('inicial');
        return redirect()->route('pia.show', $information_family->kid_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
