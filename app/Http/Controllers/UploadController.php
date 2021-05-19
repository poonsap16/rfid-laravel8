<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

use App\Models\File_upload;
use App\Models\Timesheet;
use App\Imports\TimesheetsImport;

class UploadController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('file_uploads.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function upload(Request $request){
            $request->validate([
                'file' => 'required|mimes:csv,txt,xlsx,xls,pdf|max:2048'
            ]);
            // ถ้าผ่าน validate แล้วก็ไม่ต้อง check ครับ
            // if($request->hasFile('file')) {
            // } 
            $fileModel = new File_upload;
            $path = $request->file('file')->storeAS('/public', $request->file('file')->getClientOriginalName());
            $filename = pathinfo($path);
            $fileModel->file = $filename['basename'];
            $fileModel->save(); // save() ไม่ใช่ save

            //return Excel::import(new Timesheet, request()->file('file'));

            return back()
                    ->with('success','File has been uploaded.')
                    ->with('file', $filename);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $upload = Upload::create($request->all());

        // if($request->hasFile('file')){
        //     $path = $request->file('file')->store('/public');
        //     $filename = pathinfo($path);

        //     $upload = File_upload::create($request->except('file') + ['file' => $filename['basename']]);

        //     $time_stamps = new \App\Imports\TimesheetsImport();
        //     $time_stamps->import(storage_path('app/'.$path));
           
        //     return redirect('upload-file/index');
        // }else{
        //     return 'no file';
        // }


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
        //
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
