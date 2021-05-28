<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Job::first()->paginate(10);
        return view('jobs.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
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
            'activity_id' => 'required',
            'activity_name' => 'required',
            'activity_acronym' => 'required',
            'begin_time' => 'required',
            'end_time' => 'required',
            'begin_time_before' => 'required',
            'end_time_late' => 'required',
            'job_id' => 'required',
            'job_type' => 'required',
            'person_type' => 'required',
            'work_hour' => 'required'
            ]);

            Job::create($request->all());

            return redirect()->route('jobs.index')
                    ->with('success', 'Jobs created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'activity_id' => 'required',
            'activity_name' => 'required',
            'activity_acronym' => 'required',
            'begin_time' => 'required',
            'end_time' => 'required',
            'begin_time_before' => 'required',
            'end_time_late' => 'required',
            'job_id' => 'required',
            'job_type' => 'required',
            'person_type' => 'required',
            'work_hour' => 'required'
            ]);

        $job->update($request->all());
        
        return redirect()->route('jobs.index')
                        ->with('success', 'Jobs updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index')
                        ->with('success', 'Jobs deleted successfully.');
    }
}
