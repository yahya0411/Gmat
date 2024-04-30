<div class="content">
    @push('styles')
        <style>
            input,td {

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
                    <a href="#" data-toggle="modal" data-target="#addclient" class="float-right"
                        style="color: #f4cc3a; font-weight:bold"><i class="fas fa-plus-circle"></i> Ajouter un client</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2 offset-md-10">
                            <form action="simple-results.html">
                                <div class="input-group">
                                    <input type="search" class="form-control form-control-md" placeholder="Rechercher ...">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-md btn-default">
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
                                <th>#</th>
                                <th>NOM</th>
                                <th>Activite</th>
                                <th>RIB</th>
                                <th>Tlephone</th>
                                <th>Address</th>
                                <th>Commune</th>
                                <th>Etat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($commercants->count() > 0)

                            @foreach ($commercants as $commercant)
                                <tr>
                                    <td>{{ $commercant->id }} / {{substr(date("Y"),-2)}}</td>
                                    <td>{{ $commercant->Denomination }}</td>
                                    <td>{{ $commercant->Activite }}</td>
                                    <td>{{ $commercant->Rib }}</td>
                                    <td>{{ $commercant->Telephone }}</td>
                                    <td>{{ $commercant->Address }}</td>
                                    <td>{{ $commercant->Commune }}</td>

                                    <td> @if ($commercant->Etat == 0) <span class="badge badge-primary">Insecrit</span> @else

                                    @endif <td>


                                </td>
                                    <td style="text-align:center">
                                        <a class="btn btn-sm btn-info" wire:click.prevent="show({{$commercant->id}})"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-sm btn-success" wire:click.prevent="editbps({{$commercant->id}})"><i class="fa fa-pen"></i></a>
                                        <a class="btn btn-sm btn-danger" wire:click.prevent="deletebps({{$commercant->id}})"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                                @else
                                <tr>
                                    <td class="text-center" colspan="9">Aucun Commercant </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
<!-- end table bp -->
<!-- start adding modal bp -->
    <div wire:ignore.self class="modal fade" id="addclient">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header card-poste">
                    <h4 class="modal-title">Ajouter un client</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent="storecommercant">
                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="denomination">Denomination</label>
                                                <input type="text" class="form-control" id="denomination"
                                                    placeholder="Enter nom de client" wire:model="Denomination">
                                                @error('Denomination')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="classe">Activite </label>
                                                <select class="form-control" id="Classe" wire:model="Activite">
                                                    <option value="" selected>Enter la Activite</option>
                                                    <option value="PHARMACIE">PHARMACIE</option>
                                                    <option value="COMMERCANT">COMMERCANT</option>
                                                    <option value="ALIMENTATION GENERALE">ALIMENTATION GENERALE</option>
                                                    <option value="PAPETERIE">PAPETERIE</option>
                                                </select>
                                                @error('Classe')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Code_postale">Rib</label>
                                                <input type="text" class="form-control" id="Rib"
                                                    placeholder="Enter le Rib" wire:model="Rib">
                                                @error('Rib')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="id_m">Telephone</label>
                                                <input type="text" class="form-control" id="Telephone"
                                                    wire:model="Telephone" placeholder="Enter Telephone">
                                                @error('Telephone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="ccp_bureau">Address</label>
                                                <input type="text" class="form-control" id="Address"
                                                    wire:model="Address" placeholder="Enter l'address">
                                                @error('Address')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="id_t">Commune</label>
                                                <input type="text" class="form-control" id="Commune"
                                                    wire:model="Commune" placeholder="Enter Commune">
                                                @error('Commune')
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
            <form wire:submit.prevent="editbpdata">
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
                                            <select class="form-control" id="classe" wire:model="Classe">
                                                <option value="" selected>Enter la classe</option>
                                                <option value="PHARMACIE">PHARMACIE</option>
                                                <option value="COMMERCANT">COMMERCANT</option>
                                                <option value="ALIMENTATION GENERALE">ALIMENTATION GENERALE</option>
                                                <option value="PAPETERIE">PAPETERIE</option>
                                                <option value="R3">R3</option>
                                                <option value="R4">R4</option>
                                                <option value="RD">RD</option>
                                            </select>
                                            @error('Classe')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="code_postale">Code Postale</label>
                                            <input type="text" class="form-control" id="Code_Postale"
                                                placeholder="Enter code postale" wire:model="Code_Postale">
                                            @error('Code_Postale')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="code_comptable">Telephone</label>
                                            <input type="text" class="form-control" id="Code_Comptable"
                                                wire:model="Code_Comptable" placeholder="Entrer code comptable">
                                            @error('Code_Comptable')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="ccp_bureau">CCP</label>
                                            <input type="text" class="form-control" id="Ccp"
                                                wire:model="Ccp" placeholder="Enter ccp de bureau">
                                            @error('Ccp')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="id_m">ID Marchant</label>
                                            <input type="text" class="form-control" id="Id_Marchant"
                                                wire:model="Id_Marchant" placeholder="Enter ID Marchant">
                                            @error('Id_Marchant')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="id_t">ID Terminal</label>
                                            <input type="text" class="form-control" id="Id_Terminal"
                                                wire:model="Id_Terminal" placeholder="Enter ID Terminal">
                                            @error('Id_Terminal')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="ad_ip">Adresse IP</label>
                                            <input type="IP" class="form-control" id="Address_IP"
                                                wire:model="Address_IP" placeholder="Enter Adresse IP">
                                            @error('Address_IP')
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
                                "timeOut": "3500",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            };
                        }


        Livewire.on('fadeModal', () => {
                        $('#editbp').modal('show');
                       // alerting();
                    });

                    Livewire.on('updatebp', () => {
                        alerting();
                        toastr.info('le bureau ete Modifier');
                        $('#editbp').modal('hide');


                    });
                    Livewire.on('deletebp', () => {
                        alerting();
                        toastr.error('le bureau a éte supprimer');

                    });

        Livewire.on('addclient', () => {
                        $('#addclient').modal('hide');
                        alerting();
                        toastr.success('Nouveau client a ete Ajouter');

                    });
    });
</script>
@endscript

