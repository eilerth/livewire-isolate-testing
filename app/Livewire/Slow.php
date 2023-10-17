<?php

namespace App\Livewire;

use Livewire\Component;

class Slow extends Component {
    public $slowToggle = false;
    public function render() {
        sleep(3);
        return <<<'HTML'
                    <div id="slow">
                        Slow Toggle?
                        <input type="checkbox" wire:model.live="slowToggle" dusk="slowToggle">
                        {{ $slowToggle ? 'Slow Checked' : 'Slow Not Checked' }}
                    </div>
                HTML;
    }
}
