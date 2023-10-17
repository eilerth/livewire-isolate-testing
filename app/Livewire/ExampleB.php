<?php

namespace App\Livewire;

use Livewire\Component;

class ExampleB extends Component {
    public function render() { return <<<HTML
                <div>
                    <livewire:slow isolate lazy />
                    <livewire:fast isolate />
                </div>
            HTML; }
}
