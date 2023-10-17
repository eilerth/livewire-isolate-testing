<?php

namespace App\Livewire;

use Livewire\Component;

class Fast extends Component {
    public $fastToggle = false;
    public function render() {
        return <<<'HTML'
                    <div id="fast">
                        Fast Toggle?
                        <input type="checkbox" wire:model.live="fastToggle" dusk="fastToggle">
                        {{ $fastToggle ? 'Fast Checked' : 'Fast Not Checked' }}
                    </div>
                HTML;
    }
}
