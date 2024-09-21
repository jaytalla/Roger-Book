<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class PostController extends Controller
{
    // post something
    public function store()
    {
        // validate - store - redirect
        request()->validate([
            'post_desc' => ['required', 'min:4']
        ]);
        $user = Auth::user();
        $post = Post::create([
            'user_id' => $user->id,
            'post_desc' => Crypt::encrypt(request('post_desc'))
        ]);

        // Add to activity log
        // ActivityLog::storeLog('post', 'You posted a new status', $user->id, $post->id);
        $actLog = new ActivityLog();
        $actLog->storeLog('post', 'You posted a new status', $user->id, $post->id);

        // dd($user);
        return redirect('/home');
    }
}
