<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginPage extends Component
{
    public function render()
    {
        return view('livewire.front.login-page')->layout('layouts.base');;
    }
}
