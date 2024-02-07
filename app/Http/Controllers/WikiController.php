<?php

namespace App\Http\Controllers;

use App\Models\Wiki;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class WikiController extends Controller
{

    public function index(string $game,string $title, string $slug){
        // Capitalize recieved slug
        $slug = ucwords($slug);

        $wiki = Wiki::where(DB::raw('BINARY `slug`'), $slug)->first();

        $title = str_replace('_', ' ', $slug);

        if($wiki == null){
            return view('wiki.notFound', compact('slug', 'title', 'game'));
        }
        return view('wiki.index', compact('wiki', 'game'));
    }

   
}
