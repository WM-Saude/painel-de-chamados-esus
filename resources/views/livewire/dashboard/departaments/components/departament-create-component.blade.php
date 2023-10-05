<div class="col-3 mb-4">
    <div class="card p-3">
        <div class="card-body px-0 pt-0 pb-2">
            <form wire:submit="saveCall" wire:ignore.all>
                <div class="col-12 mb-3">
                    <label class="form-label fw-semibold">
                        Nome <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" placeholder="Escreva o nome..."
                           wire:model="name">
                    @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary my-4 mb-0">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

