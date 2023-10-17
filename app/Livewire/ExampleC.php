<?php

namespace App\Livewire;

use Livewire\Component;

class ExampleC extends Component {
    public function render() { return <<<HTML
                <div>
                    Isolated:
                    <livewire:wire-init isolate />
                    <br />
                    Not Isolated:
                    <livewire:wire-init />
                </div>
            HTML; }
}
