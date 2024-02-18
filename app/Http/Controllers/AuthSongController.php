<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthSongController extends Controller
{
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addSong(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('editSong');
    }

    public function createNewSong(Request $request): RedirectResponse
    {
        $song = new Song();
        $song->name = $request->name;
        $song->artist = $request->artist;
        $song->album = $request->album;
        $song->year = $request->year;

        $song->save();
        session()->flash('message',__('Cancion creada'));
        return redirect()->route('home');
    }

    public function editSong(Request $request): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $song = Song::find($request->route("id"));

        return view('editSong', ['song' => $song]);
    }

    public function saveSongChanges(Request $request)
    {
        $song = Song::findOrFail($request->id);
        $song->name = $request->name;
        $song->artist = $request->artist;
        $song->album = $request->album;
        $song->year = $request->year;

        $song->save();
        session()->flash('message',__('Cancion editada'));
        return redirect()->route('home');
    }

    public function removeSong(Request $request)
    {
        $song = Song::find($request->route("id"));

        $song->delete();
        session()->flash('message',__('Cancion eliminada'));
        return redirect()->route('home');
    }
}
