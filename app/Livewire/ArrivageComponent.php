<?php

namespace App\Livewire;

use App\Models\Arrivage;
use App\Models\Commercant;
use App\Models\Materiel;
use Illuminate\Support\Arr;
use Livewire\Component;
use Livewire\WithPagination;

class ArrivageComponent extends Component
{
    use WithPagination;
    public $search ='';
    public $id,$Expediteur, $Date,$edit_arrivage, $Obs,$Etat;
    public $Designation,$Num_s,$Code_b,$Marque_id,$Modele_id,$Arrivage_id,$Owner_id,$Is_Consomable,$Quantity,$edit_Materiel;
    public function render()
    {

        $lastInsertedMateriel = Arrivage::latest()->first()->id;
        return view('livewire.arrivage-component', ['materiels' => Materiel::search($this->search)->where('Arrivage_id',$lastInsertedMateriel)->paginate(15),])->layout('livewire.layouts.base');

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

       ]);

     $Arrivage = new Arrivage();
     $Arrivage->Expediteur = $this->Expediteur;
   $Arrivage->Date = $this->Date;
   //  $Arrivage->Obs = $this->Obs;
     $Arrivage->Etat = 0;
     $Arrivage->save();
        $this->id = $Arrivage->id;

        $this->resetInput();
  //$this->dispatch('addarrivage');
    $this->redirectRoute('arr',['id'=>1]);

    }
 public function storeMaterielArrivage()
 {

     $Materiel = new Materiel();
     $Materiel->Arrivage_id = Arrivage::latest()->first()->id;
     $Materiel->Designation = $this->Designation;
     $Materiel->Code_b = $this->Code_b;
     $Materiel->Num_s = $this->Num_s;
     $Materiel->Marque_id = $this->Marque_id;
  //   $Materiel->Modele_id = $this->Modele_id;
  //   $Materiel->Owner_id = $this->Owner_id;
  //   $Materiel->Is_Consomable = $this->Is_Consomable;
     $Materiel->Quantity = $this->Quantity;
   // dd($Materiel);
     $Materiel->save();
     $this->reset(['Designation','Code_b','Num_s','Marque_id','Modele_id','Etat']);
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
