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
                        style="color: #f4cc3a; font-weight:bold"><i class="fas fa-plus-circle"></i> Ajouter une agence </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="mobilis.png" width="85" height="35" alt="">
                        </div>
                        <div class="col-md-2 offset-md-7">
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
                                <th>Dénomination</th>
{{--
                              <th>Activite</th>
--}}
                                <th>Telephone</th>
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
{{--
                                    <td>{{ $commercant->Activite }}</td>
--}}
                                    <td>{{ $commercant->Telephone }}</td>
                                    <td>{{ $commercant->Address }}</td>
                                    <td>{{ $commercant->Commune }}</td>

                                    <td> @if ($commercant->Etat == 0) <span class="badge badge-primary">Insecrit</span> @else

                                    @endif </td>



                                    <td style="text-align:center">
                                        <a class="btn btn-sm btn-info" wire:click.prevent="show({{$commercant->id}})"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-sm btn-success" wire:click.prevent="editclient({{$commercant->id}})"><i class="fa fa-pen"></i></a>
                                        <a class="btn btn-sm btn-danger" wire:click.prevent="deleteclient({{$commercant->id}})"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                                @else
                                <tr>
                                    <td class="text-center" colspan="9">Aucun Agence </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            {{ $commercants->links() }}

                        </div>

                    </div>
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
                <form wire:submit.prevent="storeclient">
                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="card-body">
                                    <div class="row">

                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="denomination">Denomination</label>
                                                <input type="text" class="form-control" id="denomination"
                                                       placeholder="Enter nom de client" wire:model="Denomination">
                                                @error('Denomination')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="id_m">Telephone</label>
                                                <input type="text" class="form-control" id="Telephone"
                                                    wire:model="Telephone" placeholder="Enter Telephone">
                                                @error('Telephone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="ccp_bureau">Address</label>
                                                <input type="text" class="form-control" id="Address"
                                                    wire:model="Address" placeholder="Enter l'address">
                                                @error('Address')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
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

                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="denomination">Denomination</label>
                                            <input type="text" class="form-control" id="denomination"
                                                   placeholder="Enter nom de client" wire:model="Denomination">
                                            @error('Denomination')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="id_m">Telephone</label>
                                            <input type="text" class="form-control" id="Telephone"
                                                   wire:model="Telephone" placeholder="Enter Telephone">
                                            @error('Telephone')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="ccp_bureau">Address</label>
                                            <input type="text" class="form-control" id="Address"
                                                   wire:model="Address" placeholder="Enter l'address">
                                            @error('Address')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
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
                        toastr.info('l\'agence ete Modifier');
                        $('#editclient').modal('hide');


                    });
                    Livewire.on('deletebp', () => {
                        alerting();
                        toastr.error('l\'agence a éte supprimer');

                    });

        Livewire.on('addclient', () => {
                        $('#addclient').modal('hide');
                        alerting();
                        toastr.success('Nouveau agence a ete Ajouter');

                    });
    });
</script>
@endscript

