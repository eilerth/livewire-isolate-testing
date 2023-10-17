<?php

namespace App\Livewire;

use Livewire\Component;

class WireClick extends Component {
    public $message = 'click something...';

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function render() {
        return <<<'HTML'
                    <div>
                        <div wire:click="setMessage('clicked A!')">A!</div>
                        <div wire:click="setMessage('clicked B!')">B!</div>
                        <div wire:click="setMessage('clicked C!')">C!</div>
                        <div>{{ $message }}</div>
                    </div>
                HTML;
    }
}
