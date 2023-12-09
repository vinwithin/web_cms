<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Galeri extends Component
{
    
    public function render()
    {
        $data = Post::where('status', 'Belum Disetujui')->get();
        return view('livewire.galeri', ['data' => $data]);
    }
}
