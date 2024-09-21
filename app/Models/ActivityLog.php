<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use phpDocumentor\Reflection\Types\Nullable;

class ActivityLog extends Model
{
    use HasFactory;


    /**
     * Summary of storeLog
     * @param string $type
     * @param mixed $desc
     * @param string $userID
     * @param string $postID
     * @return void
     */
    public function storeLog(string $type, ?string $desc, int $userID, int $postID)
    {
        $this->create([
            'type' => $type,
            'user_id' => $userID,
            'post_id' => $postID,
            'desc' => Crypt::encrypt($desc),
        ]);
    }

    public function likePost(int $userID, int $postID)
    {
        $post = Post::find($postID);
        // Post::update($post)->increment()
        if ($post) {
            $post->increment('likes');
            $this->storeLog('like', 'You liked this post - for future dev', $userID, $postID);
        }
    }
    public function unlikePost(int $userID, int $postID)
    {
        $post = Post::find($postID);
        // Post::update($post)->increment()
        if ($post) {
            $post->decrement('likes');
            $this->storeLog('like', 'You liked this post - for future dev', $userID, $postID);
        }
    }
}
