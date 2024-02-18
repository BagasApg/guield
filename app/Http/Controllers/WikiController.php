<?php

namespace App\Http\Controllers;

use App\Models\Wiki;
use App\Models\Community;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class WikiController extends Controller
{

    public function index(string $community_slug, string $wiki_slug){
        $title = ucfirst($wiki_slug);

        $community = Community::where('slug', $community_slug)->first();
        // dd($community);
        if($community == null){
            return view('wiki.notCommunity', compact('community', 'wiki_slug', 'title'));
        }

        $wiki = Wiki::where('community_id', $community->id)->where(DB::raw('BINARY `slug`'), $wiki_slug)->first();
        
        if($wiki == null) {
            return view('wiki.notFound', compact('wiki', 'title'));
        }

        // dd($wiki);
        
        return view('wiki.index', compact('wiki'));
    }

   
}
