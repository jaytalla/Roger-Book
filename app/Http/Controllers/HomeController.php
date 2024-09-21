<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $posts = Post::with('user')->latest()->get();
        $meowPost = $posts->map(function ($post) {
            $decrypt = Crypt::decryptString($post->post_desc);
            $post->post_desc = $this->censorWords($decrypt);
            return $post;
        });

        // dd($meowPost);

        return view('user.home', [
            'user' => $user,
            'posts' => $meowPost
        ]);
    }

    public function censorWords($text)
    {
        $words = explode(' ', $text);
        $censoredWords = array_map(function ($word) {
            $length = strlen($word);
            if ($length > 2) {
                return 'm' . str_repeat('e', $length - 2) . 'o' . 'w';
            } else {
                return 'Mow'; // Default for short words
            }
        }, $words);

        return implode(' ', $censoredWords);
    }
}
