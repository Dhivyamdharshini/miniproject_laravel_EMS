<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    
    public function registrationPage()
{
    $events = \App\Models\Event::all();
    return view('student.register', compact('events'));
}


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'register_number' => 'required|string|unique:students,register_number',
            'class' => 'required|string',
            'event_id' => 'required|exists:events,id',
        ]);

        Student::create([
            'name' => $request->name,
            'register_number' => $request->register_number,
            'class' => $request->class,
            'event_id' => $request->event_id,
        ]);

        return redirect()->route('student.register')->with('success', 'Student registered successfully!');
    }
}
