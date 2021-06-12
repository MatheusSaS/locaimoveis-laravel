<?php

namespace App\Http\Livewire;

use App\Models\Imoveis;
use Livewire\Component;
use Livewire\WithPagination;

class LocacaoComponent extends Component
{
    public $id_user;
    public function mount($id_user){
        $this->id = $id_user;
    }
    use WithPagination;
    public function render()
    {
        
        $imoveis = Imoveis::where('user_id',$this->id)->first();
        return view('livewire.locacao-component',['imoveis'=>$imoveis])->layout("layouts.base");
    }
}
