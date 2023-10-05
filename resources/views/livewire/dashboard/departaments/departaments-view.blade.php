<div>
    <h4 class="mb-4">Departamentos</h4>
    <div class="row">
        <livewire:dashboard.departaments.components.departament-create-component/>
        <div class="card col-9 mb-4">
            <div class="card-body px-0 pt-0 pb-2">
                <div class="col-3 my-3">
                    <input class="form-control" type="text" placeholder="Pesquisa por nome.."
                           wire:model.live="nameSearch">
                </div>
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($departaments as $departament)
                            <tr>
                                <td>
                                    <h6 class="mb-0 text-sm">{{$departament->name}}</h6>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{$departaments->links()}}
            </div>
        </div>
    </div>
</div>
