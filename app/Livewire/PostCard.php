<?php

namespace App\Livewire;

use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PostCard extends Component
{
    public $post;
    public $isLiked = false;
    public function like()
    {
        $user = Auth::user();
        $actlog = new ActivityLog();

        if ($this->isLiked) {
            $actlog->unlikePost($user->id, $this->post->id); // Assuming you have an unlike method
            $this->isLiked = false;
        } else {
            $actlog->likePost($user->id, $this->post->id);
            $this->isLiked = true;
        }
    }

    public function mount()
    {
        $user = Auth::user();
        $likedPostIds = $user->activityLogs()->pluck('post_id')->toArray(); // Adjust to your actual column name
        $this->isLiked = in_array($this->post->id, $likedPostIds);
    }

    public function render()
    {
        return view('livewire.post-card');
    }
}
