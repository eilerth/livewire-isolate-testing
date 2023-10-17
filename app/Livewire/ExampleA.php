<?php

namespace App\Livewire;

use Livewire\Component;

class ExampleA extends Component {
    public function render() { return <<<HTML
                <div>
                    <livewire:slow lazy />
                    <livewire:fast />
                </div>
            HTML; }
}
