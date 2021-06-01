<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.front.home-page')->layout('layouts.base');
    }
}
