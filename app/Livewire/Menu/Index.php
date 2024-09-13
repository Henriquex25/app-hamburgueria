<?php

namespace App\Livewire\Menu;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Index extends Component
{
    public function render(): View
    {
        return view('livewire.menu.index')
            ->layoutData(['title' => 'Menu']);
    }
}
