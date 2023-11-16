<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\support\facades\storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants= student::all();

        return view('students.index',compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => 'required',
            "address" => '',
            "image" => 'required|image|mimes:png,jpg,jpeg,gif',
            "phone" => 'required',
            "email" => 'required',
            "bio" => '',
            "status" => ''
        ]);

         $path = $request->file('image')->store('public/images');
         $validated['image'] = $path;
         Student::create($validated);

        return back()
        ->with('success', "l'etudiant enregistrer avec succes !");
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        
        $validated = $request->validate([
            "name" => 'required',
            "address" => '',
            "image" => 'mimes:png,jpg,jpeg,gif',
            "phone" => 'required',
            "email" => 'required',
            "bio" => '',
            "status" => ''
        ]);

        if($request->file('image') !=null){
            $path = $request->file('image')->store('public/images');
            $validated['image'] = $path;
        }else{
            $validated['image'] = $student->image;
        } 
        
        $student->update($validated);

        return redirect()
            ->route('students.index')
            ->with('success', 'Etudiant modifier avec succes');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        Storage::delete($student->image);
        $student->delete();
        return back()->with('success', 'Etudiant supprimer !');

    }
}
