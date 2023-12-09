<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Counter extends Component
{
    public function render(Post $slug)
    {
        return view('livewire.counter',  ['post' => $slug]);
    }
    // public function getPost(Post $slug){
    //     return view('more', ['post' => $slug]);
    // }
}
