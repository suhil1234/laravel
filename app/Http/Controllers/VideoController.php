<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{

    public function index()
    {
        $video = Video::first();
        return view('admin.videos.create',compact('video'));
    }
    public function create()
    {
        $video = Video::first();
        return view('admin.videos.create',compact('video'));
    }

    public function store(Request $request)
    {
        $existingVideo = Video::first();

        if ($existingVideo) {
            Storage::delete($existingVideo->video);
            $existingVideo->delete();
        }

        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'video' => 'required|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:50000',
        ]);

        $videoPath = $request->file('video')->store('public/videos');
        
        $video = new Video();
        $video->title = $validatedData['title'];
        $video->description = $validatedData['description'];
        $video->video = $videoPath;
        $video->save();

        return redirect()->route('videos.create')->with('success', 'Video added successfully.');
    }
}