<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegisterPage extends Component
{
    public function render()
    {
        return view('livewire.front.register-page')->layout('layouts.base');;
    }
}
