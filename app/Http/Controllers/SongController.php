<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index(): View
    {
        $songs = Song::all();

        return view('home', ['songs' => $songs]);
    }

    public function addSong(Request $request)
    {

    }

    public function saveSongChanges(Request $request)
    {

    }

    public function editSong(Request $request)
    {

    }

    public function removeSong(Request $request)
    {

    }
}
