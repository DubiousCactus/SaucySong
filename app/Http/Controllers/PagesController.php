<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	/*
	 * TO-DO: Implement:
	 * - pagination
	 * - feed prioritization
	 */
    public function index()
    {
    	return view('index')->withSongs(Song::with('user')->get());
    }
}
