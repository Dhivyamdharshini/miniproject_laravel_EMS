<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    // Show all events
    public function index()
    {
        $events = Event::all();
        return view('admin.event_list', compact('events'));
    }

    // Show the event creation form
    public function create()
    {
        return view('admin.event_scheduling');
    }

    // Store a new event
    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required|string',
            'venue' => 'required|string',
            'time' => 'required|date',
            'mentor' => 'required|string',
        ]);

        Event::create($request->all());

        return redirect()->route('event.list')->with('success', 'Event created successfully!');
    }

    // Show the edit form
   
    public function edit($id)
    {
        $event = Event::find($id);
    
        if (!$event) {
            return redirect()->route('event.list')->with('error', 'Event not found.');
        }
    
        return view('admin.edit_event', compact('event'));
    }
    
    // Update an event
    public function update(Request $request, $id)
{
    $request->validate([
        'event_name' => 'required|string',
        'venue' => 'required|string',
        'time' => 'required|date',
        'mentor' => 'required|string',
    ]);

    $event = Event::find($id);

    if (!$event) {
        return redirect()->route('event.list')->with('error', 'Event not found.');
    }

    $event->update($request->all());

    return redirect()->route('event.list')->with('success', 'Event updated successfully!');
}


    // Delete an event
    public function destroy($id)
{
    $event = Event::find($id);

    if (!$event) {
        return redirect()->route('event.list')->with('error', 'Event not found.');
    }

    $event->delete();

    return redirect()->route('event.list')->with('success', 'Event deleted successfully!');
}


    // Show the event details page
    public function viewEvents()
    {
        $events = Event::all();
        return view('events.view', compact('events'));
    }
}
