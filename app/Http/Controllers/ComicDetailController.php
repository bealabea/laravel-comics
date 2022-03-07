<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicDetailController extends Controller
{
    public function read($id){
        $data = config('comics');
        $comic = $data[$id];
        return view('partials.comicDetails', compact('comic'));
    }
}
