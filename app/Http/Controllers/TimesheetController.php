<?php

namespace App\Http\Controllers;

use App\Models\Timesheet;
use Illuminate\Http\Request;

class TimesheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['timesheets'] = Timesheet::orderBy('id','desc')->paginate(5);
        return view('timesheets.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('timesheets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'num' => 'required',
            'card_num' => 'required',
            'sap_id' => 'required',
            'full_name' => 'required',
            'date_stamp' => 'required',
            'time_stamp' => 'required',
            'rfid_position' => 'required',
            'rfid_status' => 'required',
            'rfid_door' => 'required',
            ]);
    
            $timesheet = new Timesheet;
            $timesheet->num = $request->num;
            $timesheet->card_num = $request->card_num;
            $timesheet->sap_id = $request->sap_id;
            $timesheet->full_name = $request->full_name;
            $timesheet->date_stamp = $request->date_stamp;
            $timesheet->time_stamp = $request->time_stamp;
            $timesheet->rfid_position = $request->rfid_position;
            $timesheet->rfid_status = $request->status;
            $timesheet->rfid_door = $request->door;
            $timesheet->save();
            return redirect()->route('timesheets.index')->with('success','Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Timesheet  $timesheet
     * @return \Illuminate\Http\Response
     */
    public function show(Timesheet $timesheet)
    {
        return view('timesheets.show',compact('timesheet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Timesheet  $timesheet
     * @return \Illuminate\Http\Response
     */
    public function edit(Timesheet $timesheet)
    {
        return view('timesheets.edit',compact('timesheet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Timesheet  $timesheet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timesheet $timesheet)
    {
        $request->validate([
            'num' => 'required',
            'card_num' => 'required',
            'sap_id' => 'required',
            'full_name' => 'required',
            'date_stamp' => 'required',
            'time_stamp' => 'required',
            'rfid_position' => 'required',
            'rfid_status' => 'required',
            'rfid_door' => 'required',
            ]);
    
            $timesheet = new Timesheet;
            $timesheet->num = $request->no;
            $timesheet->card_num = $request->card_no;
            $timesheet->sap_id = $request->sap_id;
            $timesheet->full_name = $request->full_name;
            $timesheet->date_stamp = $request->date_stamp;
            $timesheet->time_stamp = $request->time_stamp;
            $timesheet->rfid_position = $request->rfid_position;
            $timesheet->rfid_status = $request->status;
            $timesheet->rfid_door = $request->door;
            $timesheet->save();
            return redirect()->route('timesheets.index')->with('success','Company has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Timesheet  $timesheet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timesheet $timesheet)
    {
        $timesheet->delete();
        return redirect()->route('timesheets.index')->with('success','Company has been deleted successfully');
    }
}
