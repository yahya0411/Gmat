<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Commercant;

class CommercantComponent extends Component
{
    public $Denomination, $Activite,$edit_bp, $Rib,$Telephone,$Address,$Etat,$Type,$Commune;

    public function render()
    {

        $commercants = Commercant::all();
        return view('livewire.commercants-component',['commercants' => $commercants])->layout('livewire.layouts.base');

    }

    public function resetInput()
    {
        $this->reset(['Denomination','Activite','Rib','Telephone','Address','Commune']);

    }

    public function storecommercant()
    {
        $this->validate([
            'Denomination' => 'required',
            'Activite' => 'required',
            'Rib' => 'required',
            'Telephone' => 'required',
            'Address' => 'required',
            'Commune' =>'required'
       ]);

     $Commercant = new Commercant();
     $Commercant->Denomination = $this->Denomination;
     $Commercant->Activite = $this->Activite;
     $Commercant->Rib = $this->Rib;
     $Commercant->Telephone = $this->Telephone;
     $Commercant->Address = $this->Address;
     $Commercant->Commune = $this->Commune;

     $Commercant->Etat = 0;

     $Commercant->Type = 0;

     $Commercant->save();

    $this->resetInput();
     $this->dispatch('addclient');


    }
}
