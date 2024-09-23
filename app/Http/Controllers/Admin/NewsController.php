<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function add()
    {
        dd("ここが動いた");
        return view('admin.news.create');
    }
    public function test()
    {
        dd("test関数が動いた");
    }
}
