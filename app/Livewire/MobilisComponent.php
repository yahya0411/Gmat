<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Commercant;
use Livewire\WithPagination;

class MobilisComponent extends \App\Livewire\CommercantComponent {

    use WithPagination;

    public function render()
    {

        return view('livewire.mobilis-component',['commercants' => Commercant::where('Type','2')->paginate(10),])->layout('livewire.layouts.base');

    }

    public function storeclient()
    {
        $this->validate([
            'Denomination' => 'required',
            'Telephone' => 'required',
            'Address' => 'required',
            'Commune' =>'required'
        ]);

        $Commercant = new Commercant();
        $Commercant->Denomination = $this->Denomination;
        $Commercant->Activite = "Agence Commerciale";
        $Commercant->Telephone = $this->Telephone;
        $Commercant->Address = $this->Address;
        $Commercant->Commune = $this->Commune;
        $Commercant->Etat = 0;
        $Commercant->Type = 2;
        $Commercant->save();

        $this->resetInput();
        $this->dispatch('addclient');


    }
    public function editclient($id)
    {
        $Commercant = Commercant::findOrFail($id);
        $this->edit_client = $Commercant->id;
        $this->Denomination = $Commercant->Denomination;
        $this->Activite = $Commercant->Activite;
        $this->Telephone = $Commercant->Telephone;
        $this->Address = $Commercant->Address;
        $this->Commune = $Commercant->Commune;

        $this->dispatch('fadeModal');
    }
    public function editclientdata()
    {
        $this->validate([
            'Denomination' => 'required',
            'Telephone' => 'required',
            'Address' => 'required',
            'Commune' =>'required'
        ]);

        $Commercant = Commercant::findOrFail($this->edit_client);
        $Commercant->Denomination = $this->Denomination;
        $Commercant->Activite = "Agence Commerciale";
        $Commercant->Telephone = $this->Telephone;
        $Commercant->Address = $this->Address;
        $Commercant->Commune = $this->Commune;
        $Commercant->Etat = 0;
        $Commercant->Type = 1;
        $Commercant->save();

        $this->resetInput();
        $this->dispatch('updatebp');


    }

}
