<?php

namespace App\Livewire;

use App\Events\NewEmoji;
use Livewire\Attributes\On;
use Livewire\Component;

class Emojies extends Component
{
    public function send($emoji)
    {
        event(new NewEmoji($emoji));
    }

    public function render()
    {
        return view('livewire.emojies');
    }

    #[On('echo:emojies,NewEmoji')]
    public function newEmoji($event)
    {
        $this->dispatch('newEmoji', ['emoji' => $event['emoji']]);
    }
}
