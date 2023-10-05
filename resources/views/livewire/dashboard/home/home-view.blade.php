<div>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card bg-gradient-secondary">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-white text-uppercase text-sm mb-0 opacity-7">Total de chamados</p>
                                <h5 class="text-white font-weight-bolder mb-0">
                                    {{$calls['count']}}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card bg-gradient-secondary">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-white text-uppercase text-sm mb-0 opacity-7">Total de chamados do dia</p>
                                <h5 class="text-white font-weight-bolder mb-0">
                                    {{$calls['countToday']}}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
