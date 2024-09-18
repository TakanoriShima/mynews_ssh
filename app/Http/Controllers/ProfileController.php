<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $profile = Profile::all()->first();

        // profile/index.blade.php ファイルを渡している
        // また View テンプレートに profile、という変数を渡している
        return view('profiles.index', ['profile' => $profile]);
    }
}
