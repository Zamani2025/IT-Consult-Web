<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InstructorComponent extends Component
{
    public function render()
    {
        return view('livewire.instructor-component')->layout("layouts.base");
    }
}
