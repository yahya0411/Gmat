<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Bp;
use App\Events\HideModalEvent;

class BpComponent extends Component
{

    public $Denomination, $code_postale,$edit_bp, $Code_Comptable,$Classe,$ccp_bureau,$Id_Marchant,$Id_Terminal,$Address_IP;


    public function updated($fields)
    {
        $this->validateonly($fields,[
        'Denomination' => 'required|min:4',
        'code_postale' => 'required',
        'Code_Comptable' => 'required|unique:bps',
        'Classe' => 'required',
        'Ccp' => 'required',
        'Id_Marchant' => 'required',
        'Id_Terminal' => 'required',
        'Address_IP'=> 'required'
        ]);

    }
    public function resetInput()
    {
        $this->reset(['Denomination','Code_Postale','Code_Comptable','Classe','ccp_bureau','Id_Marchant','Id_Terminal','Address_IP']);

    }

    public function storebp()
    {
        $this->validate([
            'Denomination' => 'required:bps',
            'Code_Postale' => 'required',
            'Code_Comptable' => 'required',
            'Classe' => 'required',
            'ccp_bureau' => 'required',
            'Id_Marchant' => 'required',
            "Id_Terminal" => 'required',
            'Address_IP' => 'required'
       ]);

     $bp = new Bp();
     $bp->Denomination = $this->Denomination;
     $bp->Code_Postale = $this->code_postale;
     $bp->Code_Comptable = $this->Code_Comptable;
     $bp->Ccp = $this->ccp_bureau;
     $bp->Classe = $this->Classe;
     $bp->Id_Marchantarchant = $this->Id_Marchant;
     $bp->IdT = $this->Id_Terminal;
     $bp->IpA = $this->Address_IP;

     $bp->save();

    $this->resetInput();
     $this->dispatch('addbp');


    }
    public function editbpdata()
    {
        $this->validate([
            'Denomination' => 'required:bps',
            'code_postale' => 'required',
            'Code_Comptable' => 'required',
            'Classe' => 'required',
            'ccp_bureau' => 'required',
            'Id_Marchant' => 'required',
            "Id_Terminal" => 'required',
            'Address_IP' => 'required'
       ]);

       $bp = Bp::findOrFail($this->edit_bp);
       $bp->Denomination = $this->Denomination;
     $bp->Code_Postale = $this->code_postale;
     $bp->Code_Comptable = $this->Code_Comptable;
     $bp->Ccp = $this->ccp_bureau;
     $bp->Classe = $this->Classe;
     $bp->Id_Marchantarchant = $this->Id_Marchant;
     $bp->IdT = $this->Id_Terminal;
     $bp->IpA = $this->Address_IP;

     $bp->save();

    $this->resetInput();
     $this->dispatch('updatebp');


    }
    public function editbps($id)
    {
        $bp = Bp::findOrFail($id);
        $this->edit_bp = $bp->id;
        $this->Denomination = $bp->Denomination;
        $this->code_postale = $bp->Code_Postale;
        $this->Code_Comptable = $bp->Code_Comptable;
        $this->ccp_bureau = $bp->Ccp;
        $this->Classe = $bp->Classe;
        $this->Id_Marchant = $bp->Id_Marchant;
        $this->Id_Terminal = $bp->IdT;
        $this->Address_IP = $bp->IpA;

      $this->dispatch('fadeModal');
    }

    public function deletebp($id)
    {
        Bp::findOrFail($id)->delete($id);
        $this->dispatch('deletebp');

    }
    public function render()
    {
        $bureau = Bp::all();
        return view('livewire.bp-component',['bureaux' => $bureau])->layout('livewire.layouts.base');
    }
}
