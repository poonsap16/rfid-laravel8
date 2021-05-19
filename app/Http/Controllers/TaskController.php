<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['tasks'] = Task::orderBy('id','desc')->paginate(5);
        // return view('tasks.index', $data);
        $tasks = Task::all();
        return view('tasks.index', compact('tasks', $tasks));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
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
            
        $task = Task::create([
        $task->activity_id = $request->activity_id,
        $task->activity_name = $request->activity_name,
        $task->activity_acronym = $request->activity_acronym,
        $task->begin_time = $request->bigin_time,
        $task->end_time = $request->end_time,
        $task->begin_time_before = $request->bigin_time_before,
        $task->end_time_late = $request->end_time_late,
        $task->job_id = $request->job_id,
        $task->job_type = $request->job_type,
        $task->person_type = $request->person_type,
        $task->work_hour = $request->work_hour

        // $task->save();
        ]);
        return redirect('tasks.index')->with('success','Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('tasks.show',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('tasks.edit',compact('task'));
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
        $request->validate([
        'activity_id' => 'required',
        'activity_name' => 'required',
        'activity_acronym' => 'required',
        'bigin_time' => 'required',
        'end_time' => 'required',
        'bigin_time_before' => 'required',
        'end_time_late' => 'required',
        'job_id' => 'required',
        'job_type' => 'required',
        'person_type' => 'required',
        'work_hour' => 'required'
        ]);

        $task = new Task;
        $task->activity_id = $request->activity_id;
        $task->activity_name = $request->activity_name;
        $task->activity_acronym = $request->activity_acronym;
        $task->bigin_time = $request->bigin_time;
        $task->end_time = $request->end_time;
        $task->bigin_time_before = $request->bigin_time_before;
        $task->end_time_late = $request->end_time_late;
        $task->job_id = $request->job_id;
        $task->job_type = $request->job_type;
        $task->person_type = $request->person_type;
        $task->work_hour = $request->work_hour;

        $task->save();
        return redirect()->route('tasks.index')->with('success','Company has been created successfully.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success','Company has been deleted successfully');
    }
}
