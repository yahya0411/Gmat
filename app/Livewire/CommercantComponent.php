<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Commercant;
use Livewire\WithPagination;

class CommercantComponent extends Component
{
    use WithPagination;
    public $Denomination, $Activite,$edit_client, $Rib,$Telephone,$Address,$Etat,$Type,$Commune;

    public function render()
    {

       // $commercants = Commercant::all();
//return view('livewire.commercants-component',['commercants' => $commercants])->layout('livewire.layouts.base');

        return view('livewire.commercants-component', [
            'commercants' => Commercant::Paginate(2),
        ])->layout('livewire.layouts.base');
    }

    public function resetInput()
    {
        $this->reset(['Denomination','Activite','Rib','Telephone','Address','Commune']);

    }

    public function storeclient()
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

    public function editclient($id)
    {
        $Commercant = Commercant::findOrFail($id);
        $this->edit_client = $Commercant->id;
        $this->Denomination = $Commercant->Denomination;
        $this->Activite = $Commercant->Activite;
        $this->Rib = $Commercant->Rib;
        $this->Telephone = $Commercant->Telephone;
        $this->Address = $Commercant->Address;
        $this->Commune = $Commercant->Commune;

        $this->dispatch('fadeModal');
    }

    public function editclientdata()
    {
        $this->validate([
            'Denomination' => 'required',
            'Activite' => 'required',
            'Rib' => 'required',
            'Telephone' => 'required',
            'Address' => 'required',
            'Commune' =>'required'
        ]);

        $Commercant = Commercant::findOrFail($this->edit_client);
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
        $this->dispatch('updatebp');


    }
    public function deleteclient($id)
    {
        Commercant::findOrFail($id)->delete($id);
        $this->dispatch('deletebp');

    }
    public function show($id)
    {
        $Commercant = Commercant::findOrFail($id);

        return redirect()->route('commercant',['commercant' => $Commercant]);
        //return view('livewire.bpd-component',['bureau' => $bp])->layout('livewire.layouts.base');

    }
}
