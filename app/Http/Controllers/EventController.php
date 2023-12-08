<?php
namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Video;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $video = Video::first();
        return view('events.index', compact('events','video'));
    }

    public function show(Event $event)
    {
                $eventDetails = [
                    'title' => $event->title,
                    'description' => $event->description,
                    'time' => $event->time,
                    'image' => $event->image,
                   
                ];
        
                return response()->json($eventDetails);
    }
}