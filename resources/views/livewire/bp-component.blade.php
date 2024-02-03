<div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-poste">
                    <a href="#" data-toggle="modal" data-target="#modalbp" class="float-right"
                        style="color: #f4cc3a; font-weight:bold"><i class="fas fa-plus-circle"></i> Ajouter un bureau</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Denomination</th>
                                <th>Classe</th>
                                <th>Code Postale</th>
                                <th>Code Comptable</th>
                                <th>CCP</th>
                                <th>ID Marchant</th>
                                <th>ID Terminal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tlemcen RP</td>
                                <td>RP</td>
                                <td>13000</td>
                                <td>13100</td>
                                <td>312046</td>
                                <td>13100</td>
                                <td>312046</td>
                                <td style="text-align:center">
                                    <a class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                    <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Maghnia HC</td>
                                <td>HC</td>
                                <td>13000</td>
                                <td>13300</td>
                                <td>311759</td>
                                <td>13100</td>
                                <td>312046</td>
                                <td style="text-align:center">
                                    <a class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                    <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Remchi</td>
                                <td>R1</td>
                                <td>13000</td>
                                <td>13100</td>
                                <td>313047</td>
                                <td>13100</td>
                                <td>312046</td>
                                <td style="text-align:center">
                                    <a class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                    <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="modalbp">
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
                                                    <option disabled selected>Enter la classe</option>

                                                    <option>RP</option>
                                                    <option>HC</option>
                                                    <option>R1</option>
                                                    <option>R2</option>
                                                    <option>R3</option>
                                                    <option>R4</option>
                                                    <option>RD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="code_postale">Code Postale</label>
                                                <input type="text" class="form-control" id="code_postale"
                                                    placeholder="Enter code postale" wire:model="code_postale">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="code_comptable">Code Comptable</label>
                                                <input type="text" class="form-control" id="code_comptable"
                                                    wire:model="code_comptable" placeholder="Entrer code comptable">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="ccp_bureau">CCP</label>
                                                <input type="text" class="form-control" id="ccp_bureau"
                                                    wire:model="ccp_bureau" placeholder="Enter ccp de bureau">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="id_m">ID Marchant</label>
                                                <input type="text" class="form-control" id="id_m"
                                                    wire:model="id_m" placeholder="Enter ID Marchant">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="id_t">ID Terminal</label>
                                                <input type="text" class="form-control" id="id_t"
                                                    wire:model="id_t" placeholder="Enter ID Terminal">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="ad_ip">Adresse IP</label>
                                                <input type="IP" class="form-control" id="ad_ip"
                                                    wire:model="ad_ip" placeholder="Enter Adresse IP">
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
            @push('scripts')
            <script>
                $(function() {
                    $("#example1").DataTable({
                        "responsive": true,
                        "lengthChange": false,
                        "autoWidth": false,
                        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                    });
                });

                window.addEventListener('close-modal') {
                    $('#modalbp').modal('hide');
                }
            </script>
            @endpush

        </div>
    </div>
</div>
