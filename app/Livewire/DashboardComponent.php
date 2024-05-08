<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Bp;
use App\Events\HideModalEvent;
class DashboardComponent extends Component
{
    public function render()
    {
        $bureau = Bp::all();
        return view('livewire.dashboard-component', ['bureaux' => $bureau])->layout('livewire.layouts.base');
    }
}
