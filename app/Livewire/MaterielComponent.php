<?php

namespace App\Livewire;

use App\Models\Materiel;
use Livewire\Component;
use App\Models\Bp;
use App\Events\HideModalEvent;
use Livewire\WithPagination;

class MaterielComponent extends Component
{
    use WithPagination;
    public $search ='';
    public $Designation,$Num_s,$Code_b,$Marque_id,$Modele_id,$Arrivage_id,$Owner_id,$Is_Consomable,$Quantity,$edit_Materiel;


    public function updated($fields)
    {
        $this->validateonly($fields,[
        'Designation' => 'required|min:4',
        'Num_s' => 'required',
        'Code_b' => 'required|unique:bps',
        'Marque_id' => 'required',
        'Modele_id' => 'required',
        'Owner_id' => 'required',
        'Is_Consomable' => 'required',
        ]);

    }
    public function resetInput()
    {
        $this->reset(['Designation','Num_s','Code_b','Marque_id','Modele_id','Owner_id','Is_Consomable',]);

    }

    public function store_materiel()
    {
        $this->validate([
            'Designation' => 'required|min:4',
            'Num_s' => 'required',
            'Code_b' => 'required|unique:bps',
            'Marque_id' => 'required',
            'Modele_id' => 'required',
            'Owner_id' => 'required',
            'Is_Consomable' => 'required',
       ]);

        $Materiel = new Materiel();
        $Materiel->Designation = $this->Designation;
        $Materiel->Code_b = $this->Code_b;
        $Materiel->Num_s = $this->Num_s;
        $Materiel->Marque_id = $this->Marque_id;
        $Materiel->Modele_id = $this->Modele_id;
        $Materiel->Owner_id = $this->Owner_id;
        $Materiel->Is_Consomable = $this->Is_Consomable;
        $Materiel->Quantity = $this->Quantity;
     $Materiel->save();

    $this->resetInput();
     $this->dispatch('addmateriel');


    }
    public function edit_materiel_data()
    {
        $this->validate([
            'Designation' => 'required|min:4',
            'Num_s' => 'required',
            'Code_b' => 'required|unique:bps',
            'Marque_id' => 'required',
            'Modele_id' => 'required',
            'Owner_id' => 'required',
            'Is_Consomable' => 'required',
       ]);

        $Materiel = Bp::findOrFail($this->edit_Materiel);
        $Materiel->Designation = $this->Designation;
        $Materiel->Code_b = $this->Code_b;
        $Materiel->Num_s = $this->Num_s;
        $Materiel->Marque_id = $this->Marque_id;
        $Materiel->Modele_id = $this->Modele_id;
        $Materiel->Owner_id = $this->Owner_id;
        $Materiel->Is_Consomable = $this->Is_Consomable;
        $Materiel->Quantity = $this->Quantity;

        $Materiel->save();

    $this->resetInput();
     $this->dispatch('updatebp');


    }
    public function editbps($id)
    {
        $Materiel = Bp::findOrFail($id);
        $this->edit_Materiel = $Materiel->id;
        $this->Designation = $Materiel->Designation;
        $this->Code_b = $Materiel->Code_b;
        $this->Num_s = $Materiel->Num_s;
        $this->Marque_id = $Materiel->Marque_id;
        $this->Modele_id = $Materiel->Modele_id;
        $this->Owner_id = $Materiel->Owner_id;
        $this->Is_Consomable = $Materiel->Is_Consomable;

      $this->dispatch('fadeModal');
    }

    public function deletebp($id)
    {
        Bp::findOrFail($id)->delete($id);
        $this->dispatch('deletebp');

    }
    public function render()
    {
     //   $materiels = Materiel::all();
     //   return view('livewire.materiel-component',['materiels' => $materiels])->layout('livewire.layouts.base');
       return view('livewire.materiel-component',['materiels' => Materiel::paginate(20),])->layout('livewire.layouts.base');
    }
}
