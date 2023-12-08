<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event; 
use App\Models\Video; 

class AdminController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $video = Video::first();
        return view('admin.home', compact('events','video'));
    }
}