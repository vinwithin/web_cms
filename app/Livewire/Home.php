<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $blog_post = [
        [
        "id" => 1,
        "title" => "buku pintar",
        "author" => "kelvin Adinata",
        "deskripsi" => "buku anak anak",
        ],
        [
        "id" => 2,
        "title" => "buku pintar",
        "author" => "kelvin Adinata",
        "deskripsi" => "buku anak anak",
        ]
    ];
    
    public function render()
    {
        return view('livewire.home');
    }
}
