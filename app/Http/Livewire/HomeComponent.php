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
        $imoveis_count = Imoveis::count();
        return view('livewire.home-component',['imoveis'=>$imoveis,
                                               'imoveis_count'=>$imoveis_count])->layout('layouts.base');
    }
}
