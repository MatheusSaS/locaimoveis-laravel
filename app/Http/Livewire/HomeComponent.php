<?php

namespace App\Http\Livewire;

use App\Models\Imoveis;
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $imoveis = Imoveis::paginate(12);
        return view('livewire.home-component',['imoveis'=>$imoveis])->layout('layouts.base');
    }
}
