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
                    <a href="#" data-toggle="modal" data-target="#addarrivage" class="float-left"
                        style="color: #f4cc3a; font-weight:bold"> Nouveau arrivage</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form wire:submit.prevent="storearrivage">
                                <div class="modal-body">

                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
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
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="btn" style="visibility: hidden">btn</label><br/>
                                                                <button type="submit" class="btn btn-outline-success btn-block">
                                                                    <div wire:loading>
                                                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                                    </div>
                                                                    Enregistrer</button>
                                                            </div>
                                                        </div>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="card">
                <div class="card-header card-poste">
                    <a href="#" data-toggle="modal" data-target="#addarrivage" class="float-right"
                       style="color: #f4cc3a; font-weight:bold"><i class="fas fa-plus-circle"></i> Ajouter Materiel</a>
                </div>
                <div class="card-body">
                    <table id="bps" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Designation</th>
                            <th>Marque</th>
                            <th>Modele</th>
                            <th>N° Serie</th>
                            <th>Code Bien</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($materiels as $m )
                            <tr>
                                <td></td>
                                <td>{{ $m->Designation }}</td>
                                <td>{{ $m->Num_s }}</td>
                                <td>{{ $m->Marque_id }}</td>
                                <td>{{ $m->Modele_id }}</td>
                                <td>{{ $m->Code_b }}</td>
                                <td>{{ $m->Quantity }}</td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>

                </div>
        </div>

        <div wire:ignore.self class="modal fade" id="addarrivage">
            <div class="modal-dialog modal-xl">+
                <div class="modal-content">
                    <div class="modal-header card-poste">
                        <h4 class="modal-title">Ajouter Materiel</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form wire:submit.prevent="storeMaterielArrivage">
                        <div class="modal-body">

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="denomination">Consommable :</label>
                                                    <input type="checkbox" id="consommable" name="my-checkbox" data-bootstrap-switch>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="denomination">Designation</label>
                                                    <input type="text" class="form-control" id="Designation"
                                                           placeholder="Enter le Designation" wire:model="Designation">
                                                    @error('Designation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="Code_postale">Marque</label>
                                                    <input type="text" class="form-control" id="Marque"
                                                           placeholder="Enter la Marque" wire:model="Marque_id">
                                                    @error('Marque_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="Code_postale">Modele</label>
                                                    <input type="text" class="form-control" id="Modele"
                                                           placeholder="Enter le Modele" wire:model="Modele">
                                                    @error('Modele')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="Num_s">N° Serie</label>
                                                    <input type="text" class="form-control" id="Num_s"
                                                           wire:model="Num_s" placeholder="Enter le N° Serie">
                                                    @error('Num_s')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="Num_s">Code Bien</label>
                                                    <input type="text" class="form-control" id="Code_b"
                                                           wire:model="Code_b" placeholder="Enter le code bien">
                                                    @error('Code_b')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ccp_bureau">Quantite</label>
                                                    <input type="number" value="1" class="form-control" id="Quantity"
                                                           wire:model="Quantity" placeholder="Enter Quantite">
                                                    @error('Quantity')
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
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">
                                <div wire:loading >
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                </div>
                                Enregistrer</button>
                            <button type="submit" class="btn btn-outline-success">
                                <div wire:loading>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                </div>
                                Enregistrer et Quitter</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Quitter</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
<!-- end table bp -->


<!-- start editing modal bp -->

</div>
@script
<script>
    $(function() {
        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })

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

