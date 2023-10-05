<?php

namespace App\Livewire\Dashboard\Home;

use App\Models\Calls\Calls;
use Carbon\Carbon;
use Livewire\Component;

class HomeView extends Component
{
    public function render()
    {
        return view('livewire.dashboard.home.home-view', [
            'calls' => [
                'count' => Calls::all()->count(),
                'countToday' => Calls::where('created_at', '>', Carbon::now())
                    ->orderByDesc('created_at')
                    ->count(),
            ],
        ]);
    }
}
