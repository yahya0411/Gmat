<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Bp;
use App\Events\HideModalEvent;
use Livewire\WithPagination;

class BpComponent extends Component
{
    use withPagination;

    public $Denomination, $Code_Postale,$edit_bp, $Code_Comptable,$Classe,$Ccp,$Id_Marchant,$Id_Terminal,$Address_IP,$Telephone;
   public $search = '';

    public function updated($fields)
    {
        $this->validateonly($fields,[
        'Denomination' => 'required|min:4',
        'Code_Postale' => 'required',
        'Code_Comptable' => 'required|unique:ap_etablissements',
        'Classe' => 'required',
        'Ccp' => 'required',

        'Address_IP'=> 'required'
        ]);

    }
    public function resetInput()
    {
        $this->reset(['Denomination','Code_Postale','Code_Comptable','Classe','Ccp','Id_Marchant','Id_Terminal','Address_IP',"Telephone"]);

    }

    public function storebp()
    {
        $this->validate([
            'Denomination' => 'required:ap_etablissements',
            'Code_Postale' => 'required',
            'Code_Comptable' => 'required',
            'Classe' => 'required',
            'Ccp' => 'required',
            'Address_IP' => 'required'
       ]);

     $bp = new Bp();
     $bp->Denomination = $this->Denomination;
     $bp->Code_Postale = $this->Code_Postale;
     $bp->Code_Comptable = $this->Code_Comptable;
     $bp->Ccp = $this->Ccp;
     $bp->Classe = $this->Classe;
     $bp->Id_Marchant = $this->Id_Marchant;
     $bp->Id_Terminal = $this->Id_Terminal;
     $bp->Address_IP = $this->Address_IP;
     $bp->Telephone = $this->Telephone;
     $bp->Type = 0;

     $bp->save();

    $this->resetInput();
     $this->dispatch('addbp');


    }
    public function editbpdata()
    {
        $this->validate([
            'Denomination' => 'required:ap_etablissements',
            'Code_Postale' => 'required',
            'Code_Comptable' => 'required',
            'Classe' => 'required',
            'Ccp' => 'required',
            'Address_IP' => 'required'
       ]);

    $bp = Bp::findOrFail($this->edit_bp);
    $bp->Denomination = $this->Denomination;
     $bp->Code_Postale = $this->Code_Postale;
     $bp->Code_Comptable = $this->Code_Comptable;
     $bp->Ccp = $this->Ccp;
     $bp->Classe = $this->Classe;
     $bp->Id_Marchant = $this->Id_Marchant;
     $bp->Id_Terminal = $this->Id_Terminal;
     $bp->Address_IP = $this->Address_IP;
     $bp->Telephone = $this->Telephone;
     $bp->Type = 0;

     $bp->save();

    $this->resetInput();
     $this->dispatch('updatebp');


    }
    public function editbps($id)
    {
        $bp = Bp::findOrFail($id);
        $this->edit_bp = $bp->id;
        $this->Denomination = $bp->Denomination;
        $this->Code_Postale = $bp->Code_Postale;
        $this->Code_Comptable = $bp->Code_Comptable;
        $this->Ccp = $bp->Ccp;
        $this->Classe = $bp->Classe;
        $this->Id_Marchant = $bp->Id_Marchant;
        $this->Id_Terminal = $bp->Id_Terminal;
        $this->Address_IP = $bp->Address_IP;
  $this->Telephone= $bp->Telephone;
      $this->dispatch('fadeModal');
    }

    public function deletebp($id)
    {
        Bp::findOrFail($id)->delete($id);
        $this->dispatch('deletebp');

    }
    public function show($id)
    {
        $bp = Bp::findOrFail($id);

        $this->dispatch('showbp');


    }
    public function render()
    {
//$bureau = Bp::search($this->search)->paginate(2);
        return view('livewire.bp-component',['bureaux' => Bp::search($this->search)->paginate(20),])->layout('livewire.layouts.base');
    }
}
