<?php

namespace sesm\Http\Controllers;

use Illuminate\Http\Request;

class Ticket_hostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket_hosts = \sesm\Ticket_host::all();
        return view('ticket_host.index', compact('ticket_hosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket_host.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticket_host = new \sesm\Ticket_host;

        $ticket_host->date_input = $request->input('ticket_host_date_input');
        $ticket_host->hour_input = $request->input('ticket_host_hour_input');
        $ticket_host->organ_forwarder = $request->input('ticket_host_organ_forwarder');
        $ticket_host->professional_receptor = $request->input('ticket_host_professional_receptor');
        $ticket_host->professional_office = $request->input('ticket_host_professional_office');
        $ticket_host->professional_delivery = $request->input('ticket_host_professional_delivery');
        $ticket_host->reason_host = $request->input('ticket_host_reason_host');
        $ticket_host->referral_judicial = $request->input('ticket_host_referral_judicial');
        $ticket_host->time_after = $request->input('ticket_host_time_after');
        $ticket_host->number_guide = $request->input('ticket_host_number_guide');
        $ticket_host->number_process = $request->input('ticket_host_number_process');
        $ticket_host->observation_kid = $request->input('ticket_host_observation_kid');
        $ticket_host->observation_kid = $request->input('ticket_host_observation_kid');
        $ticket_host->kid_id = '1'; //$request->input('ticket_host_kid_id');
        $ticket_host->save();
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
        $ticket_host = \sesm\Ticket_host::where('kid_id', '=', $id)->first();
        // $ticket_host = \sesm\Ticket_host::findOrFail($id);
        return view('ticket_host.show', compact('ticket_host'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket_host = \sesm\Ticket_host::findOrFail($id);
        return view('ticket_host.edit', compact('ticket_host'));
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
        $ticket_host = \sesm\Ticket_host::findOrFail($id);

        $ticket_host->date_input = $request->input('ticket_host_date_input');
        $ticket_host->hour_input = $request->input('ticket_host_hour_input');
        $ticket_host->organ_forwarder = $request->input('ticket_host_organ_forwarder');
        $ticket_host->professional_receptor = $request->input('ticket_host_professional_receptor');
        $ticket_host->professional_office = $request->input('ticket_host_professional_office');
        $ticket_host->professional_delivery = $request->input('ticket_host_professional_delivery');
        $ticket_host->reason_host = $request->input('ticket_host_reason_host');
        $ticket_host->referral_judicial = $request->input('ticket_host_referral_judicial');
        $ticket_host->time_after = $request->input('ticket_host_time_after');
        $ticket_host->number_guide = $request->input('ticket_host_number_guide');
        $ticket_host->number_process = $request->input('ticket_host_number_process');
        $ticket_host->observation_kid = $request->input('ticket_host_observation_kid');
        // $ticket_host->kid_id = '1'; //$request->input('ticket_host_kid_id');
        $ticket_host->save();
        // return redirect()->route('inicial');
        return redirect()->route('pia.show', $ticket_host->kid_id);
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
