<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Commercant;
use Livewire\WithPagination;

class SntfComponent extends Component
{
    use WithPagination;
    public $search ='';
    public $Denomination, $Activite,$edit_client, $Rib,$Telephone,$Address,$Etat,$Type,$Commune;

    public function render()
    {

       // $commercants = Commercant::all();
//return view('livewire.commercants-component',['commercants' => $commercants])->layout('livewire.layouts.base');

        return view('livewire.sntf-component', ['commercants' => Commercant::search($this->search)->where('Type','4')->paginate(1),])->layout('livewire.layouts.base');
    }

    public function resetInput()
    {
        $this->reset(['Denomination','Activite','Rib','Telephone','Address','Commune']);

    }

    public function storeclient()
    {
        $this->validate([
            'Denomination' => 'required',
            'Telephone' => 'required',
            'Address' => 'required'
       ]);

     $Commercant = new Commercant();
     $Commercant->Denomination = $this->Denomination;
     $Commercant->Activite = "AGENCE COMMERCIELE";
     $Commercant->Telephone = $this->Telephone;
     $Commercant->Address = $this->Address;
     $Commercant->Etat = 0;
     $Commercant->Type = 4;
     $Commercant->save();

    $this->resetInput();
     $this->dispatch('addclient');


    }

    public function editclient($id)
    {
        $Commercant = Commercant::findOrFail($id);
        $this->edit_client = $Commercant->id;
        $this->Denomination = $Commercant->Denomination;
        $this->Telephone = $Commercant->Telephone;
        $this->Address = $Commercant->Address;


        $this->dispatch('fadeModal');
    }

    public function editclientdata()
    {
        $this->validate([
            'Denomination' => 'required',
            'Telephone' => 'required',
            'Address' => 'required'
        ]);

        $Commercant = Commercant::findOrFail($this->edit_client);
        $Commercant->Denomination = $this->Denomination;
        $Commercant->Telephone = $this->Telephone;
        $Commercant->Address = $this->Address;
        $Commercant->Etat = 0;
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
