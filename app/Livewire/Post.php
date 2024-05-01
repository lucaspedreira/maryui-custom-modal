<?php

namespace App\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $myModal3 = false;

    public $title = '';

    public function render()
    {
        return view('livewire.post');
    }

    public function close()
    {
        $this->reset('title');
        $this->myModal3 = false;
    }

    public function save()
    {
        dd($this->title);
    }
}
