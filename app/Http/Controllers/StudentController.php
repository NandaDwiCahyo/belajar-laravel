<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $updateMode = false;
        $students = Student::orderBy('nama', 'asc')->get();
        return view('data.data', ['students' => $students, 'updateMode' => $updateMode]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studentValidate = $request->validate([
            'nama' => 'required|max:255',
            'telepon' => 'required|max:255',
            'alamat' => 'required|max:255',
        ]);

        Student::create([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
        ])->save();

        return redirect()->back()->with('alert', 'Data ' . $request->nama . ' berhasil ditambahkan!');
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
        $updateMode = true;
        $students = Student::orderBy('nama', 'asc')->get();
        $data = Student::where('id', $id)->get();
        return view('data.data', compact('students', 'data', 'updateMode'));
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
        $students = Student::orderBy('nama', 'asc')->get();

        $studentValidate = $request->validate([
            'nama' => 'required|max:255',
            'telepon' => 'required|max:255',
            'alamat' => 'required|max:255',
        ]);

        $test = Student::where('id', $id)->update([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
        ]);

        return redirect()->back()->with('alert', 'Data ' . $request->nama . ' berhasil diubah!');
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
