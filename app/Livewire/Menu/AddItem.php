<?php

namespace App\Livewire\Menu;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class AddItem extends Component
{
    public function render(): View
    {
        return view('livewire.menu.add-item');
    }
}
