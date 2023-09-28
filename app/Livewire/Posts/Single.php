<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class Single extends Component
{
    public $post;
    public function render()
    {
        return view('livewire.posts.single');
    }
}
