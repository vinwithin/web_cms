<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class About extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $photo;
    
    
    
    public function save(){
       $rules = [
        'title' => 'required',
        'description' => 'required',
        'photo' => 'image|mimes:png,jpg,jpeg|max:1024',
        
       ];
       $validated = $this->validate($rules);
       
       $nama_file = $this->photo->getClientOriginalName();

       $this->photo->storeAs('public', $nama_file);
       Post::create([
        'title' => $this->title,
        'description' => $this->description,
        'image' => $nama_file,
       ]);
       return redirect()->to('/');

    }
    public function render()
    {
        return view('livewire.about');
    }
}
