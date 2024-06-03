<div class="content">
    @push('styles')
        <style>
            input,td {

                text-transform: uppercase
            }

            input::placeholder {

                text-transform: none
            }
            .small .text-muted {
                visibility: hidden;
            }
        </style>
    @endpush

    <!-- table bp -->
    <div wire:ignore.self class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-poste">
                    <a href="#" data-toggle="modal" data-target="#addarrivage" class="float-right"
                        style="color: #f4cc3a; font-weight:bold"><i class="fas fa-plus-circle"></i> Ajouter un arrivage</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-2 offset-md-7">
                            <form action="simple-results.html">
                                <div class="input-group">
                                    <input type="search" wire:model.live="search" class="form-control form-control-md" placeholder="Rechercher ...">
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
                                <th>Expediteur</th>
                                <th>Date</th>
                                <th>Observation</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($arrivages->count() > 0)

                            @foreach ($arrivages as $arrivage)
                                <tr>
                                    <td>{{ $arrivage->id }} / {{substr(date("Y"),-2)}}</td>
                                    <td>{{ $arrivage->Expediteur }}</td>
                                    <td>{{ $arrivage->Date }}</td>
                                    <td>{{ $arrivage->Obs }}</td>


                                    <td style="text-align:center">
                                        <a class="btn btn-sm btn-info" wire:click.prevent="show({{$arrivage->id}})"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-sm btn-success" wire:click.prevent="editclient({{$arrivage->id}})"><i class="fa fa-pen"></i></a>
                                        <a class="btn btn-sm btn-danger" aria-disabled="true"  wire:confirm="Are you sure you want to delete this client?"
                                           wire:click.prevent="deletearrivage({{$arrivage->id}})"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            <div>


                            </div>

                            @else
                                <tr>
                                    <td class="text-center" colspan="9">Aucun Arrivage </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            {{ $arrivages->links() }}

                        </div>

                    </div>

                </div>

                <!-- /.card-body -->
            </div>
        </div>
    </div>
<!-- end table bp -->
<!-- start adding modal bp -->
    <div wire:ignore.self class="modal fade" id="addarrivage">
        <div class="modal-dialog modal-xl">+
            <div class="modal-content">
                <div class="modal-header card-poste">
                    <h4 class="modal-title">Ajouter un Arrivage</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent="storearrivage">
                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Expediteur">Expediteur </label>
                                                <select class="form-control" id="Expediteur" wire:model="Expediteur">
                                                <option value="" selected>Enter Expediteur</option>
                                                <option value="DIRECTION GENERALE">DIRECTION GENERALE</option>
                                                <option value="MAGAZIN CENTRAL">MAGAZIN CENTRAL</option>
                                                <option value="AUTRE">AUTRE</option>
                                                </select>
                                                @error('Expediteur')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Date">Date</label>
                                                <input type="date" class="form-control" id="Date"
                                                    placeholder="Enter le Rib" wire:model="Date">
                                                @error('Date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="Obs">Observation</label>
                                                <textarea id="Obs" wire:model="Obs" class="form-control" rows="3" placeholder="Enter Observation"></textarea>
                                                @error('Obs')
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
                        <button type="submit" class="btn btn-success">
                            <div wire:loading>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            </div>
                            Enregistrer</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- ending adding modal bp -->

<!-- start editing modal bp -->
<div wire:ignore.self class="modal fade" id="editclient">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header card-poste">
                <h4 class="modal-title">Modifier client</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="editclientdata">
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
                                            <label for="Activite">Activite </label>
                                            <select class="form-control" id="Activite" wire:model="Activite">
                                                <option value="" selected>Enter la Activite</option>
                                                <option value="PHARMACIE">PHARMACIE</option>
                                                <option value="COMMERCANT">COMMERCANT</option>
                                                <option value="PAPETERIE">PAPETERIE</option>
                                                <option value="ASSURANCE">ASSURANCE</option>
                                                <option value="CLINIQUE">CLINIQUE</option>
                                                <option value="HOTELERIE">HOTELERIE</option>
                                            </select>
                                            @error('Activite')
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
                    <button type="submit" class="btn btn-success">
                        <div wire:loading>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        </div>
                        Enregistrer</button>
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
        $('.select2').select2()
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
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
                        $('#editclient').modal('show');
                       // alerting();
                    });

                    Livewire.on('updatebp', () => {
                        alerting();
                        toastr.info('le client ete Modifier');
                        $('#editclient').modal('hide');


                    });
                    Livewire.on('deletebp', () => {
                        alerting();
                        toastr.error('le client a éte supprimer');

                    });

        Livewire.on('addarrivage', () => {
                        $('#addarrivage').modal('hide');
                        alerting();
                        toastr.success('Nouveau client a ete Ajouter');

                    });
    });
</script>
@endscript

