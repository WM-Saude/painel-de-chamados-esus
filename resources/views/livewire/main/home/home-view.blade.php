<div class="m-5">
    <div class="row">
        <div class="col-4 mb-4" wire:poll.15="refreshCalls">
            <h3>Chamados anteriores</h3>
            @if($calls)
                @foreach($calls as $call)
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <h1>{{$call->patients_name}}</h1>
                            <h4>{{$call->departament->name}}</h4>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="col-8 mb-4" wire:poll.15="refreshCalling">
            <h3>Chamando agora</h3>
            @if($calling)
                <div class="card">
                    <div class="card-body text-center">
                        <h1 class="text-danger" style="font-size: 5rem">{{$calling->patients_name}}</h1>
                        <h4 class="text-bold" style="font-size: 2.5rem">Por favor prosseguir para</h4>
                        <h4 class="text-danger text-bold" style="font-size: 5rem">{{$calling->departament->name}}</h4>
                    </div>
                </div>
            @endif

            @if(!$calling)
                <div class="card">
                    <div class="card-body text-center p-5">
                        <h1>Aguardando novo chamado</h1>
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <audio id="audio">
        <source src="{{ asset('audio/sound_calling.ogg') }}" type="audio/ogg">
        <source src="{{ asset('audio/sound_calling.mp3') }}" type="audio/mpeg">
    </audio>

    @push('js')
        <script>
            document.addEventListener('livewire:initialized', () => {
                @this.on('teste', (event) => {
                    console.log('teste')
                    var audio = document.getElementById('audio');
                    audio.play();
                })
            });
        </script>
    @endpush
</div>
