<?php

namespace App\Http\Livewire;

use App\Models\Imoveis;
use App\Models\Tipo;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class DetailsComponent extends Component
{
    public $id_imovel;
    public function mount($id_imovel){
        $this->id = $id_imovel;
    }
    public function render()
    {        
        $imovel = Imoveis::where('id',$this->id)->first();
        $user = User::find($imovel->USER_ID);

        $tipo = Tipo::find($imovel->tipo_id);
        return view('livewire.details-component',['imoveis'=>$imovel,
                                                   'user'=>$user,
                                                   'tipo'=>$tipo])->layout('layouts.base');
    }
}
