<?php

namespace App\Livewire\Dashboard\Calls\Components;

use App\Models\Calls\Calls;
use App\Models\Departaments\Departaments;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CallCreateComponent extends Component
{
    #[Rule('required|min:5', message: 'O nome é obrigatório.')]
    public string $patientName;
    #[Rule('required', message: 'O departamento é obrigatório.')]
    public ?int $departamentId = null;

    public function saveCall(): void
    {
        $this->validate();
        $a = Calls::create([
            'patients_name' => $this->patientName,
            'departaments_id' => $this->departamentId
        ]);
        $this->patientName = '';
        $this->departamentId = null;

        flash()->addSuccess('Chamado cadastrado com sucesso');
        redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.dashboard.calls.components.call-create-component', [
            'departaments' => Departaments::all()
        ]);
    }
}
