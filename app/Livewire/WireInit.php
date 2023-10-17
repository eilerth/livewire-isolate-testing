<?php

namespace App\Livewire;

use Livewire\Component;

class WireInit extends Component {
    public $showChecked = false;

    public function wireInit()
    {
        $this->showChecked = true;
    }

    public function render() {
        return <<<'HTML'
                    <div wire:init="wireInit">
                        Show Checked?
                        <input type="checkbox" wire:model.live="showChecked" dusk="showChecked">
                        @if($showChecked)
                            Checked
                        @endif
                    </div>
                HTML;
    }
}
