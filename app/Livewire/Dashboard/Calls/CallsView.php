<?php

namespace App\Livewire\Dashboard\Calls;

use App\Livewire\Main\Home\HomeView;
use App\Models\Calls\Calls;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class CallsView extends Component
{
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';
    public string $patientNameSearch = '';

    public function updatingPatientNameSearch(): void
    {
        $this->resetPage();
    }

    public function updateCall(int $id){
        $this->dispatch('call')->to(HomeView::class);
        $call = Calls::find($id);
        $call->update([
           'calling' => true,
            'bip' => true
        ]);
        $call->increment('call_attempts');
        flash()->addSuccess('Chamado encaminhado com sucesso');
        redirect()->route('dashboard');
    }

    public function updateCallFinish(int $id){
        $call = Calls::find($id);
        $call->update([
            'call_closed' => true
        ]);
        flash()->addSuccess('Chamado encerrado com sucesso');
        redirect()->route('dashboard');
    }

    public function render(): View
    {
        return view('livewire.dashboard.calls.calls-view', [
            'calls' => Calls::where('patients_name', 'like', '%' . $this->patientNameSearch . '%')->orderByDesc('id')->paginate(12)
        ]);
    }
}
