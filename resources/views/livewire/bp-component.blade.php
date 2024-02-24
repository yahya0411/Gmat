<div class="content">
    @push('styles')
        <style>
            input {

                text-transform: uppercase
            }

            input::placeholder {

                text-transform: none
            }
        </style>
    @endpush

    <!-- table bp -->
    <div wire:ignore.self class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-poste">
                    <a href="#" data-toggle="modal" data-target="#addbp" class="float-right"
                        style="color: #f4cc3a; font-weight:bold"><i class="fas fa-plus-circle"></i> Ajouter un bureau</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <form action="simple-results.html">
                                <div class="input-group">
                                    <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-lg btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><br/>
                    <table id="bps" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Denomination</th>
                                <th>Classe</th>
                                <th>Code Postale</th>
                                <th>Code Comptable</th>
                                <th>CCP</th>
                                <th>ID Marchant</th>
                                <th>ID Terminal</th>
                                <th>IP</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bureaux as $bureau)
                                <tr>
                                    <td>{{ $bureau->Denomination }}</td>
                                    <td>{{ $bureau->Classe }}</td>
                                    <td>{{ $bureau->CodeP }}</td>
                                    <td>{{ $bureau->CodeC }}</td>
                                    <td>{{ $bureau->Ccp }}</td>
                                    <td>{{ $bureau->IdM }}</td>
                                    <td>{{ $bureau->IdT }}</td>
                                    <td>{{ $bureau->IpA }}</td>
                                    <td style="text-align:center">
                                        <a class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-sm btn-success" wire:click.prevent="editbps({{$bureau->id}})"><i class="fa fa-pen"></i></a>
                                        <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
<!-- end table bp -->
<!-- start adding modal bp -->
    <div wire:ignore.self class="modal fade" id="addbp">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header card-poste">
                    <h4 class="modal-title">Ajouter bureau de poste</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent="storebp">
                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="denomination">Denomination</label>
                                                <input type="text" class="form-control" id="denomination"
                                                    placeholder="Enter nom de bureau" wire:model="Denomination">
                                                @error('Denomination')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="classe">Classe </label>
                                                <select class="form-control" id="classe" wire:model="classe">
                                                    <option value="" selected>Enter la classe</option>
                                                    <option value="RP">RP</option>
                                                    <option value="HC">HC</option>
                                                    <option value="R1">R1</option>
                                                    <option value="R2">R2</option>
                                                    <option value="R3">R3</option>
                                                    <option value="R4">R4</option>
                                                    <option value="RD">RD</option>
                                                </select>
                                                @error('classe')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="code_postale">Code Postale</label>
                                                <input type="text" class="form-control" id="code_postale"
                                                    placeholder="Enter code postale" wire:model="code_postale">
                                                @error('code_postale')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="code_comptable">Code Comptable</label>
                                                <input type="text" class="form-control" id="CodeC"
                                                    wire:model="CodeC" placeholder="Entrer code comptable">
                                                @error('CodeC')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="ccp_bureau">CCP</label>
                                                <input type="text" class="form-control" id="ccp_bureau"
                                                    wire:model="ccp_bureau" placeholder="Enter ccp de bureau">
                                                @error('ccp_bureau')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="id_m">ID Marchant</label>
                                                <input type="text" class="form-control" id="id_m"
                                                    wire:model="id_m" placeholder="Enter ID Marchant">
                                                @error('id_m')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="id_t">ID Terminal</label>
                                                <input type="text" class="form-control" id="id_t"
                                                    wire:model="id_t" placeholder="Enter ID Terminal">
                                                @error('id_t')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="ad_ip">Adresse IP</label>
                                                <input type="IP" class="form-control" id="ad_ip"
                                                    wire:model="ad_ip" placeholder="Enter Adresse IP">
                                                @error('ad_ip')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.card-body -->


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">

                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- ending adding modal bp -->

<!-- start adding modal bp -->
<div wire:ignore.self class="modal fade" id="editbp">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header card-poste">
                <h4 class="modal-title">Modifier bureau de poste</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="storebp">
                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="denomination">Denomination</label>
                                            <input type="text" class="form-control" id="denomination"
                                                placeholder="Enter nom de bureau" wire:model="Denomination">
                                            @error('Denomination')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="classe">Classe </label>
                                            <select class="form-control" id="classe" wire:model="classe">
                                                <option value="" selected>Enter la classe</option>
                                                <option value="RP">RP</option>
                                                <option value="HC">HC</option>
                                                <option value="R1">R1</option>
                                                <option value="R2">R2</option>
                                                <option value="R3">R3</option>
                                                <option value="R4">R4</option>
                                                <option value="RD">RD</option>
                                            </select>
                                            @error('classe')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="code_postale">Code Postale</label>
                                            <input type="text" class="form-control" id="code_postale"
                                                placeholder="Enter code postale" wire:model="code_postale">
                                            @error('code_postale')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="code_comptable">Code Comptable</label>
                                            <input type="text" class="form-control" id="CodeC"
                                                wire:model="CodeC" placeholder="Entrer code comptable">
                                            @error('CodeC')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="ccp_bureau">CCP</label>
                                            <input type="text" class="form-control" id="ccp_bureau"
                                                wire:model="ccp_bureau" placeholder="Enter ccp de bureau">
                                            @error('ccp_bureau')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="id_m">ID Marchant</label>
                                            <input type="text" class="form-control" id="id_m"
                                                wire:model="id_m" placeholder="Enter ID Marchant">
                                            @error('id_m')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="id_t">ID Terminal</label>
                                            <input type="text" class="form-control" id="id_t"
                                                wire:model="id_t" placeholder="Enter ID Terminal">
                                            @error('id_t')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="ad_ip">Adresse IP</label>
                                            <input type="IP" class="form-control" id="ad_ip"
                                                wire:model="ad_ip" placeholder="Enter Adresse IP">
                                            @error('ad_ip')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- /.card-body -->


                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- ending adding modal bp -->
</div>
@script
<script>
    $(function() {

        function alerting() {
                            toastr.options = {
                                "closeButton": true,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-bottom-right",
                                "preventDuplicates": false,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "1500",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            };
                            toastr.info('le bureau a ete ajouter');
                        }


        Livewire.on('fadeModal', () => {
                        $('#editbp').modal('show');
                       // alerting();
                    });

        Livewire.on('hideModal', () => {
                        $('#addbp').modal('hide');
                        $('#editbp').modal('hide');
                        alerting();
                    });
    });
</script>
@endscript

