<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminEventController extends Controller
{
    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'time' => 'required', 
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $event = Event::create($validatedData);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public');
            $event->image = $imagePath;
            $event->save();
        } else {
            \Log::error('Event creation failed: Image is missing');
            return redirect()->route('admin.events.create')->withErrors(['image' => 'Image is required'])->withInput();
        }
    
        return redirect()->route('admin.events.create')->with('success', 'Event added successfully.');
    }

    public function destroy(Event $event)
    {
      Storage::delete($event->image); 

      $event->delete();
  
      return redirect()->back()->with('success', 'Event deleted successfully.');
    }
}