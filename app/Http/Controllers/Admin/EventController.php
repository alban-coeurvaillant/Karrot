<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('event');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $events = Event::orderByDesc('date')->orderByDesc('time')->withCount('reservations')->withSum('reservations', 'nb_seats')->get();
        return view('admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return $this->edit(new Event(), ['method' => 'post', 'action' =>route('admin.event.store')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        return $this->update($request, new Event());
    }


    public function show(Event $event)
    {
        $event->load('reservations');
        return view('admin.event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Event $event
     */
    public function edit(Event $event, $params = [])
    {
        if ($event->exists)
            $params = ['method' => 'put', 'action' => route('admin.event.update', $event)];
        $params['event'] = $event;
        return view('admin.event.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Event $event
     */
    public function update(Request $request, Event $event)
    {
        $this->validate($request, [
            'date' => 'required|date',
            'place' => 'required|string',
            'time' => 'required|date_format:H:i',
        ]);

        $event->fill($request->all());
        $event->save();

        return redirect()->route('admin.event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Event $event
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.event.index');
    }
}
