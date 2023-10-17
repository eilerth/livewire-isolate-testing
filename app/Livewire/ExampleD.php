<?php

namespace App\Livewire;

use Livewire\Component;

class ExampleD extends Component {
    public function render() { return <<<HTML
                <div>
                    <div>Isolated:</div>
                    <livewire:wire-click isolate />
                    <div>Not Isolated:</div>
                    <livewire:wire-click />
                </div>
            HTML; }
}
