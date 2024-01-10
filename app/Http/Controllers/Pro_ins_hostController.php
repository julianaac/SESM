<?php

namespace sesm\Http\Controllers;

use Illuminate\Http\Request;

class Pro_ins_hostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro_ins_hosts = \sesm\Pro_ins_host::all();
        return view('pro_ins_host.index', compact('pro_ins_hosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pro_ins_host.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pro_ins_host = new \sesm\Pro_ins_host;

        $pro_ins_host->service_psychological = $request->input('pro_ins_host_service_psychological');
        $pro_ins_host->justification = $request->input('pro_ins_host_justification');
        $pro_ins_host->service_external = $request->input('pro_ins_host_service_external');
        $pro_ins_host->kid_id = '1'; //$request->input('pro_ins_host_kid_id');
        $pro_ins_host->save();
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
        // $pro_ins_host = \sesm\Pro_ins_host::findOrFail($id);
        
        $pro_ins_host = \sesm\Pro_ins_host::where('kid_id', '=', $id)->first();
        return view('pro_ins_host.show', compact('pro_ins_host'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro_ins_host = \sesm\Pro_ins_host::findOrFail($id);
        return view('pro_ins_host.edit', compact('pro_ins_host'));
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
        $pro_ins_host = \sesm\Pro_ins_host::findOrFail($id);

        $pro_ins_host->service_psychological = $request->input('pro_ins_host_service_psychological');
        $pro_ins_host->justification = $request->input('pro_ins_host_justification');
        $pro_ins_host->service_external = $request->input('pro_ins_host_service_external');
        $pro_ins_host->save();
        // return redirect()->route('inicial');
        return redirect()->route('pia.show', $pro_ins_host->kid_id);
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
