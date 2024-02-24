<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Bp;
use App\Events\HideModalEvent;

class BpComponent extends Component
{

    public $Denomination, $code_postale,$edit_bp, $CodeC,$classe,$ccp_bureau,$id_m,$id_t,$ad_ip;


    public function updated($fields)
    {
        $this->validateonly($fields,[
        'Denomination' => 'required|min:4',
        'code_postale' => 'required',
        'CodeC' => 'required|unique:bps',
        'classe' => 'required',
        'ccp_bureau' => 'required',
        'id_m' => 'required',
        'id_t' => 'required',
        'ad_ip'=> 'required'
        ]);

    }
    public function resetInput()
    {
        $this->reset(['Denomination','code_postale','CodeC','classe','ccp_bureau','id_m','id_t','ad_ip']);

    }

    public function storebp()
    {
        $this->validate([
            'Denomination' => 'required:bps',
            'code_postale' => 'required',
            'CodeC' => 'required',
            'classe' => 'required',
            'ccp_bureau' => 'required',
            'id_m' => 'required',
            "id_t" => 'required',
            'ad_ip' => 'required'
       ]);

     $bp = new Bp();
     $bp->Denomination = $this->Denomination;
     $bp->CodeP = $this->code_postale;
     $bp->CodeC = $this->CodeC;
     $bp->Ccp = $this->ccp_bureau;
     $bp->Classe = $this->classe;
     $bp->IdM = $this->id_m;
     $bp->IdT = $this->id_t;
     $bp->IpA = $this->ad_ip;

     $bp->save();

    $this->reset(['Denomination','code_postale','CodeC','classe','ccp_bureau','id_m','id_t','ad_ip']);
     $this->dispatch('hideModal');


    }
    public function editbpdata()
    {
        $this->validate([
            'Denomination' => 'required:bps',
            'code_postale' => 'required',
            'CodeC' => 'required',
            'classe' => 'required',
            'ccp_bureau' => 'required',
            'id_m' => 'required',
            "id_t" => 'required',
            'ad_ip' => 'required'
       ]);

       $bp = Bp::findOrFail($this->edit_bp);
       $bp->Denomination = $this->Denomination;
     $bp->CodeP = $this->code_postale;
     $bp->CodeC = $this->CodeC;
     $bp->Ccp = $this->ccp_bureau;
     $bp->Classe = $this->classe;
     $bp->IdM = $this->id_m;
     $bp->IdT = $this->id_t;
     $bp->IpA = $this->ad_ip;

     $bp->save();

    $this->reset(['Denomination','code_postale','CodeC','classe','ccp_bureau','id_m','id_t','ad_ip']);
     $this->dispatch('hideModal');


    }
    public function editbps($id)
    {
        $bp = Bp::findOrFail($id);
        $this->edit_bp = $bp->id;
        $this->Denomination = $bp->Denomination;
        $this->code_postale = $bp->CodeP;
        $this->CodeC = $bp->CodeC;
        $this->ccp_bureau = $bp->Ccp;
        $this->classe = $bp->Classe;
        $this->id_m = $bp->IdM;
        $this->id_t = $bp->IdT;
        $this->ad_ip = $bp->IpA;

      $this->dispatch('fadeModal');
    }
    public function render()
    {
        $bureau = Bp::all();
        return view('livewire.bp-component',['bureaux' => $bureau])->layout('livewire.layouts.base');
    }
}
