<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function all()
    {
        $result = DB::select("SELECT * FROM posts ORDER BY posted_at DESC");
        return view('layout.home', ['posts' => $result]);
    }

    public function technology()
    {
        $result = DB::select("SELECT * FROM posts WHERE category='Technology' ORDER BY posted_at DESC");
        return view('layout.home', ['posts' => $result]);
    }

    public function gaming()
    {
        $result = DB::select("SELECT * FROM posts WHERE category='Gaming' ORDER BY posted_at DESC");
        return view('layout.home', ['posts' => $result]);
    }

    public function life()
    {
        $result = DB::select("SELECT * FROM posts WHERE category='Life' ORDER BY posted_at DESC");
        return view('layout.home', ['posts' => $result]);
    }

    public function post($id = "")
    {
        $result = DB::select("SELECT * FROM posts WHERE id=$id");
        return view('post', ['posts' => $result]);
    }
}
