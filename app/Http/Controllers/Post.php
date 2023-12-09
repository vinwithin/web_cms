<?php

namespace App\Http\Controllers;

use App\Models\Post as ModelPost;
use Illuminate\Http\Request;

class Post extends Controller
{
    public function getPost(ModelPost $post){
        return view('livewire.post', ['posts' => $post]);
    }
}
