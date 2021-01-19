<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'branch' => 'required|max:255',
            'prefix' => 'required|max:10',
            'thai_name' => 'required|max:100',
            'institute_resident' => 'required|max:255',
            'eng_name' => 'required|max:100',
            'sap' => 'required|max:8',
            'doctor_cert' => 'required|max:6',
            'id_cart' => 'required|max:13',
            'member' => 'required|max:255',
            'telaphone' => 'required|max:10',
            'email' => 'required|max:255',
            'year' => 'required|max:20',
            'year_study' => 'required|max:4',
            'remark' => 'required|max:255',
        ]);

        $student = Student::create($storeData);

        return redirect('/students')->with('completed', 'Student has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('edit', compact('student'));
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
        $updateData = $request->validate([
            'branch' => 'required|max:255',
            'prefix' => 'required|max:10',
            'thai_name' => 'required|max:100',
            'institute_resident' => 'required|max:255',
            'eng_name' => 'required|max:100',
            'sap' => 'required|max:8',
            'doctor_cert' => 'required|max:6',
            'id_cart' => 'required|max:13',
            'member' => 'required|max:255',
            'telaphone' => 'required|max:10',
            'email' => 'required|max:255',
            'year' => 'required|max:20',
            'year_study' => 'required|max:4',
            'remark' => 'required|max:255',
        ]);
        Student::whereId($id)->update($updateData);
        return redirect('/students')->with('completed', 'Student has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/students')->with('completed', 'Student has been deleted');
    }
}
