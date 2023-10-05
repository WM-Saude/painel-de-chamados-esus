<?php

namespace App\Livewire\Main\Home;

use App\Models\Calls\Calls;
use Livewire\Component;

class HomeView extends Component
{
    public mixed $calling = [];
    public mixed $callingBip = [];
    public mixed $calls = [];

    public function refreshCalling()
    {
        $this->calling = Calls::where([
            'call_closed' => false,
            'calling' => true
        ])->orderByDesc('updated_at')->first();


        if ($this->calling && $this->calling->bip) {
            $this->dispatch('teste')->self();
            $this->calling->update([
                'bip' => false,
            ]);
        }

    }

    public function refreshCalls()
    {
        $this->calls = Calls::where([
            'call_closed' => false,
            'calling' => true
        ])->orderByDesc('updated_at')->limit(3)->get();
    }

    public function mount()
    {
        $this->dispatch('teste');
    }

    public function render()
    {
        return view('livewire.main.home.home-view')->layout('components.layouts.main');
    }
}
