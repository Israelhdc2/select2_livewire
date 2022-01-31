<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Prueba extends Component
{

    public $pais, $ciudad;

    public function render()
    {
        return view('livewire.prueba');
    }
}
