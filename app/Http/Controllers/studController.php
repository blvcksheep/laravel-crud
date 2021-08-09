<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class studController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $students = Student::latest()->get();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', ['student' =>  $student]);
    }

    public function create()
    {
        return view('students.create');
    }

    /**   
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $data = $request->validate([
            'fName' => 'required',
            'lName' => 'required',
            'gender' => 'required',
            'bday' => 'required',
            'address' => 'required',
            'course' => 'required',
            'year' => 'required',
        ]);
        //Student::create($request->all());

        Student::create($data);

        return redirect()->route('students.index')->with('success', 'Student has been added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Student $student)
    {
        return view('students.update', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Student $student)
    {
        $request->validate([
            'fName' => 'required',
            'lName' => 'required',
            'gender' => 'required',
            'bday' => 'required',
            'address' => 'required',
            'course' => 'required',
            'year' => 'required'
        ]);
        $student->fName = $request->fName;
        $student->lName = $request->lName;
        $student->gender = $request->gender;
        $student->bday = $request->bday;
        $student->address = $request->address;
        $student->course = $request->course;
        $student->year = $request->year;
        $student->save();
        return redirect()->route('students.index')->with('success', 'Student has been updated successfully!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        $student = Student::find($id);

        return view('students.delete', compact('student'));
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student has been remove successfully!');;
    }
}
