<?php

namespace App\Livewire\Dashboard\Departaments;

use App\Models\Departaments\Departaments;
use Livewire\Component;
use Livewire\WithPagination;

class DepartamentsView extends Component
{
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';
    public string $nameSearch = '';

    public function updatingNameSearch(): void
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.dashboard.departaments.departaments-view', [
            'departaments' => Departaments::where('name', 'like', '%' . $this->nameSearch . '%')->orderByDesc('id')->paginate(12)
        ]);
    }
}
