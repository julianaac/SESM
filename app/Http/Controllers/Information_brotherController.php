<?php

namespace sesm\Http\Controllers;

use Illuminate\Http\Request;

class Information_brotherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information_brothers = \sesm\Information_brother::all();
        return view('information_brother.index', compact('information_brothers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('information_brother.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $information_brother = new \sesm\Information_brother;
        $information_brother->this_service = $request->input('information_brother_this_service');
        $information_brother->other_service = $request->input('information_brother_other_service');
        $information_brother->bond_brothers = $request->input('information_brother_bond_brothers');
        $information_brother->reason_separation = $request->input('information_brother_reason_separation');
        $information_brother->brother_adopted = $request->input('information_brother_brother_adopted');
        $information_brother->kid_id = '1'; //$request->input('information_brother_kid_id');
        $information_brother->save();
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
        // $information_brother = \sesm\Information_brother::findOrFail($id);
        
        $information_brother = \sesm\Information_brother::where('kid_id', '=', $id)->first();
        return view('information_brother.show', compact('information_brother'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $information_brother = \sesm\Information_brother::findOrFail($id);
        return view('information_brother.edit', compact('information_brother'));
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
         $information_brother = \sesm\Information_brother::findOrFail($id);

        $information_brother->this_service = $request->input('information_brother_this_service');
        $information_brother->other_service = $request->input('information_brother_other_service');
        $information_brother->bond_brothers = $request->input('information_brother_bond_brothers');
        $information_brother->reason_separation = $request->input('information_brother_reason_separation');
        $information_brother->brother_adopted = $request->input('information_brother_brother_adopted');
        // $information_brother->kid_id = '1'; //$request->input('information_brother_kid_id');
        $information_brother->save();
        // return redirect()->route('inicial');
        return redirect()->route('pia.show', $information_brother->kid_id);
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
