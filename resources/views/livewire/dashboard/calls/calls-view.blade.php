<div>
    <h4 class="mb-4">Chamados</h4>
    <div class="row">
        <livewire:dashboard.calls.components.call-create-component/>
        <div class="card col-9 mb-4">
            <div class="card-body px-0 pt-0 pb-2">
                <div class="col-3 my-3">
                    <input class="form-control" type="text" placeholder="Pesquisa por nome.."
                           wire:model.live="patientNameSearch">
                </div>
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Departamento
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Quantidade de vezes chamado
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Status do chamado
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Opções
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($calls as $call)
                            <tr>
                                <td>
                                    <h6 class="mb-0 text-sm">{{$call->patients_name}}</h6>
                                </td>
                                <td>
                                    <h6 class="mb-0 text-sm">{{$call->departament->name}}</h6>
                                </td>
                                <td>
                                    <span class="badge bg-primary">{{$call->call_attempts}}</span>
                                </td>
                                <td>
                                    <span
                                        class="badge bg-{{$call->call_closed ? 'success' : 'danger'}}">{{$call->call_closed ? 'Chamado encerrado' : 'Chamado em aberto'}}</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-row">
                                        <div class="col">
                                            @if(!$call->call_closed)
                                                <button class="btn btn-primary btn-sm"
                                                        wire:click="updateCall({{$call->id}})">Chamar
                                                </button>
                                                <button class="btn btn-primary btn-sm"
                                                        wire:click="updateCallFinish({{$call->id}})">Finalizar chamado
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{$calls->links()}}
            </div>
        </div>
    </div>
</div>
