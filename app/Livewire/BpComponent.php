<?php

namespace App\Livewire;

use Livewire\Component;

class BpComponent extends Component
{
    public function render()
    {
        return view('livewire.bp-component')->layout('livewire.layouts.base');
    }
}
