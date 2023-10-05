<?php

namespace App\Livewire\Dashboard\Departaments\Components;

use App\Models\Departaments\Departaments;
use Livewire\Attributes\Rule;
use Livewire\Component;

class DepartamentCreateComponent extends Component
{
    #[Rule('required|min:5', message: 'O nome é obrigatório.')]
    public string $name;

    public function saveCall()
    {
        $this->validate();
        Departaments::create([
            'name' => $this->name,
        ]);

        flash()->addSuccess('Departamento cadastrado com sucesso');
        redirect()->route('dashboard.departaments.view');
    }

    public function render()
    {
        return view('livewire.dashboard.departaments.components.departament-create-component');
    }
}
