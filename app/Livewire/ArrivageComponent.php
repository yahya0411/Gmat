<?php

namespace App\Livewire;

use App\Models\Arrivage;
use App\Models\Commercant;
use Illuminate\Support\Arr;
use Livewire\Component;
use Livewire\WithPagination;

class ArrivageComponent extends Component
{
    use WithPagination;
    public $search ='';
    public $id,$Expediteur, $Date,$edit_arrivage, $Obs,$Etat;

    public function render()
    {

        return view('livewire.arrivage-component', ['arrivages' => Arrivage::search($this->search)->where('Etat','0')->paginate(15),])->layout('livewire.layouts.base');

    }


    public function resetInput()
    {
        $this->reset(['Expediteur','Date','Obs']);

    }

    public function storearrivage()
    {
        $this->validate([
            'Expediteur' => 'required',
            'Date' => 'required',
            'Obs' => 'required',

       ]);

     $Arrivage = new Arrivage();
     $Arrivage->Expediteur = $this->Expediteur;
     $Arrivage->Date = $this->Date;
     $Arrivage->Obs = $this->Obs;
     $Arrivage->Etat = 0;
     $Arrivage->save();
    $this->resetInput();
     $this->dispatch('addarrivage');
     $this->redirectRoute('arr',['id'=>1]);

    }

    public function editarrivage($id)
    {
        $Arrivage = Arrivage::findOrFail($id);
        $this->edit_arrivage = $Arrivage->id;
        $this->Expediteur = $Arrivage->Expediteur;
        $this->Date = $Arrivage->Date;
        $this->Obs = $Arrivage->Obs;

        $this->dispatch('fadeModal');
    }

    public function editarrivagedata()
    {
        $this->validate([
            'Expediteur' => 'required',
            'Date' => 'required',
            'Obs' => 'required',
        ]);

        $Arrivage = Arrivage::findOrFail($this->edit_arrivage);
        $Arrivage->Expediteur = $this->Expediteur;
        $Arrivage->Date = $this->Date;
        $Arrivage->Obs = $this->Obs;
        $Arrivage->Etat = 0;
        $Arrivage->save();

        $this->resetInput();
        $this->dispatch('updatebp');


    }
    public function deletearrivage($id)
    {
        Arrivage::findOrFail($id)->delete($id);
        $this->dispatch('deletebp');

    }
    public function show($id)
    {
      //  $Arrivage = Arrivage::findOrFail($id);

   //     return redirect()->route('Arrivage',['Arrivage' => $Arrivage]);
        //return view('livewire.bpd-component',['bureau' => $bp])->layout('livewire.layouts.base');

    }
}
