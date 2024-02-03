<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Bp;

class BpComponent extends Component
{

    public $Denomination;


    public function updated($fileds)
    {
        $this->validateonly($fileds,[
'Denomination' => 'required:bps'
        ]);
    }
    public function storebp()
    {
        $this->validate([
            'Denomination' => 'required'
                    ]);

     $bp = new Bp();
     $bp->Denomination = $this->Denomination;
     $bp->save();
    }
    public function render()
    {
        return view('livewire.bp-component')->layout('livewire.layouts.base');
    }
}
