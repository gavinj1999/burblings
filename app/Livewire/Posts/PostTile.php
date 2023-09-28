<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class PostTile extends Component
{
    public $post;
    public function render()
    {
        return view('livewire.posts.post-tile');
    }
}
