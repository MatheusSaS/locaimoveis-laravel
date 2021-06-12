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
        $id_user = Auth::id();
        $user = User::find($id_user);

        $imovel = Imoveis::where('id',$this->id)->first();

        $tipo = Tipo::find($imovel->tipo_id);
        return view('livewire.details-component',['imoveis'=>$imovel,
                                                   'user'=>$user,
                                                   'tipo'=>$tipo])->layout('layouts.base');
    }
}
