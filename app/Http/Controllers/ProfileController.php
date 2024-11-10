<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 追記
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $posts = Profile::all()->sortBy('updated_at');

        // profile/index.blade.php ファイルを渡している
        // また View テンプレートに posts、という変数を渡している
        return view('profile.index', ['posts' => $posts]);
    }
}