<?php

namespace sesm\Http\Controllers;

use Illuminate\Http\Request;
use sesm\resources\views\kid;

class PiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kids = \sesm\Kid::all();
        return view('kid.index', compact('kids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kid.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kid = new \sesm\Kid;
        $documentation = new \sesm\Documentation;

        $kid->name = $request->input('kid_name');
        $kid->sex = $request->input('kid_sex');
        $kid->birthday = $request->input('kid_birthday');
        $kid->mother_name = $request->input('kid_mother');
        $kid->father_name = $request->input('kid_father');
        $kid->last_adress = $request->input('kid_adress');
        $kid->nacionality = $request->input('kid_nacionality');
        $kid->naturalness = $request->input('kid_naturalness');
        $kid->ethnicity = $request->input('kid_ethnicity');
        $kid->religion = $request->input('kid_religion');
        $kid->deficiency = $request->input('kid_deficiency');
        $kid->deficiency_desc = $request->input('kid_def_desc');
        $kid->special_necessity = $request->input('kid_necessity');
        $kid->save();
        $documentation->kid_id=$kid->id;
        echo $kid->id;
        $documentation->save();
        echo $kid->name;
        echo $documentation->id;

       // return redirect()->route('inicial');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kid = \sesm\Kid::findOrFail($id);
        return view('pia.show', compact('kid'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kid = \sesm\Kid::findOrFail($id);
        return view('kid.edit', compact('kid'));
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
        $kid = \sesm\Kid::findOrFail($id);

        $kid->name = $request->input('kid_name');
        $kid->sex = $request->input('kid_sex');
        $kid->birthday = $request->input('kid_birthday');
        $kid->mother_name = $request->input('kid_mother');
        $kid->father_name = $request->input('kid_father');
        $kid->last_adress = $request->input('kid_adress');
        $kid->nacionality = $request->input('kid_nacionality');
        $kid->naturalness = $request->input('kid_naturalness');
        $kid->ethnicity = $request->input('kid_ethnicity');
        $kid->religion = $request->input('kid_religion');
        $kid->deficiency = $request->input('kid_deficiency');
        $kid->deficiency_desc = $request->input('kid_def_desc');
        $kid->special_necessity = $request->input('kid_necessity');
        $kid->save();
        return redirect()->route('inicial');
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
