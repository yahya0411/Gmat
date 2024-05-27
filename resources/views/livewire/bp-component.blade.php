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
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-2 offset-md-7">
                            <form action="simple-results.html">
                                <div class="input-group">
                                    <input type="search" class="form-control form-control-md" wire:model.live.debounce.300ms ="search" placeholder="Rechercher ...">
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
                                <th>Denomination</th>
                                <th>Classe</th>
                                <th>Code Postale</th>
                                <th>Code Comptable</th>
                                <th>CCP</th>
                                <th>ID Terminal</th>
                                <th>IP</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($bureaux->count() > 0)

                            @foreach ($bureaux as $bureau)
                                <tr>
                                    <td>{{ $bureau->Denomination }}</td>
                                    <td>{{ $bureau->Classe }}</td>
                                    <td>{{ $bureau->Code_Postale }}</td>
                                    <td>{{ $bureau->Code_Comptable }}</td>
                                    <td>{{ $bureau->Ccp }}</td>
                                    <td>{{ $bureau->Id_Terminal }}</td>
                                    <td>{{ $bureau->Address_IP }}</td>
                                    <td style="text-align:center">
                                        <a class="btn btn-sm btn-info" wire:click.prevent="show({{$bureau->id}})"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-sm btn-success" wire:click.prevent="editbps({{$bureau->id}})"><i class="fa fa-pen"></i></a>
                                        <a class="btn btn-sm btn-danger" wire:click.prevent="deletebp({{$bureau->id}})"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                                @else
                                <tr>
                                    <td class="text-center" colspan="9">Aucun bureau </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            {{ $bureaux->links() }}

                        </div>

                    </div>
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
                                                <select class="form-control" id="Classe" wire:model="Classe">
                                                    <option value="" selected>Enter la classe</option>
                                                    <option value="RP">RP</option>
                                                    <option value="HC">HC</option>
                                                    <option value="R1">R1</option>
                                                    <option value="R2">R2</option>
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
                                                <label for="Code_postale">Code Postale</label>
                                                <input type="text" class="form-control" id="Code_Postale"
                                                    placeholder="Enter code postale" wire:model="Code_Postale">
                                                @error('Code_Postale')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="code_comptable">Code Comptable</label>
                                                <input type="text" class="form-control" id="CodeC"
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
                                                <input type="text" class="form-control" id="Address_IP"
                                                    wire:model="Address_IP" placeholder="Enter Adresse IP">
                                                @error('Address_IP')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.card-body -->
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="ad_ip">LAN</label>
                                                <input type="text" class="form-control" id="Address_IP"
                                                       wire:model="Address_IP" placeholder="Enter Adresse IP LAN">
                                                @error('Address_IP')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="ad_ip">WAN</label>
                                                <input type="text" class="form-control" id="Address_IP"
                                                       wire:model="Address_IP" placeholder="Enter Adresse IP WAN">
                                                @error('Address_IP')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="ad_ip">LOOPBACK 0</label>
                                                <input type="text" class="form-control" id="Address_IP"
                                                       wire:model="Address_IP" placeholder="Enter Adresse IP LOOPBACK 0">
                                                @error('Address_IP')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="ad_ip">LOOPBACK 1</label>
                                                <input type="text" class="form-control" id="Address_IP"
                                                       wire:model="Address_IP" placeholder="Enter Adresse IP LOOPBACK 1">
                                                @error('Address_IP')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
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
                                                <option value="RP">RP</option>
                                                <option value="HC">HC</option>
                                                <option value="R1">R1</option>
                                                <option value="R2">R2</option>
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
                                            <label for="code_comptable">Code Comptable</label>
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

        <!-- start showing modal bp -->
        <div wire:ignore.self class="modal fade" id="showbp">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header card-poste">
                        <h4 class="modal-title">View bureau de poste</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-default card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Statistique</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Materiels</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Messages</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Settings</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h4>Stats1</h4>
                                                    <b>Denomination</b>: <span class="text-success">Tlemcen RP</span> <br> <b>Class :</b>  <span class="text-success">RP</span><br>
                                                    <b>Code Postal</b>: <span class="text-success">13000</span> <br> <b>Code Comptable :</b>  <span class="text-success">13100</span><br>
                                                    <b>Ccp</b>: <span class="text-success">312046</span> <br> <b>N° Telephone :</b>  <span class="text-success">0667331112</span><br>

                                                    <hr>
                                                    <h4>Reseau </h4>
                                                    <b>Lan :</b> <span class="text-primary">10.77.1.0</span> <br> <b>Wan :</b>  <span class="text-primary">10.205.1.1</span><br>
                                                    <b>Loopback 0 :</b> <span class="text-primary">10.77.1.0</span> <br> <b>Loopback 1 :</b>  <span class="text-primary">10.205.1.1</span><br>

                                                </div>
                                                <div class="col-md-8">
                                                    <h4>Stats2</h4>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="info-box">
                                                                <span class="info-box-icon"><img src="firewall.png" alt=""></span>

                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">Unite Central</span>
                                                                    <span class="info-box-number">1,410</span>
                                                                </div>
                                                                <!-- /.info-box-content -->
                                                            </div>
                                                            <!-- /.info-box -->
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="info-box">
                                                                <span class="info-box-icon"><img src="firewall.png" alt=""></span>

                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">Ecran</span>
                                                                    <span class="info-box-number">1,410</span>
                                                                </div>
                                                                <!-- /.info-box-content -->
                                                            </div>
                                                            <!-- /.info-box -->
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="info-box">
                                                                <span class="info-box-icon"><img src="firewall.png" alt=""></span>

                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">Imprimante</span>
                                                                    <span class="info-box-number">1,410</span>
                                                                </div>
                                                                <!-- /.info-box-content -->
                                                            </div>
                                                            <!-- /.info-box -->
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="info-box">
                                                                <span class="info-box-icon"><img src="firewall.png" alt=""></span>

                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">Unite Central</span>
                                                                    <span class="info-box-number">1,410</span>
                                                                </div>
                                                                <!-- /.info-box-content -->
                                                            </div>
                                                            <!-- /.info-box -->
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="info-box">
                                                                <span class="info-box-icon"><img src="firewall.png" alt=""></span>

                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">Unite Central</span>
                                                                    <span class="info-box-number">1,410</span>
                                                                </div>
                                                                <!-- /.info-box-content -->
                                                            </div>
                                                            <!-- /.info-box -->
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="info-box">
                                                                <span class="info-box-icon"><img src="firewall.png" alt=""></span>

                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">Unite Central</span>
                                                                    <span class="info-box-number">1,410</span>
                                                                </div>
                                                                <!-- /.info-box-content -->
                                                            </div>
                                                            <!-- /.info-box -->
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="info-box">
                                                                <span class="info-box-icon"><img src="firewall.png" alt=""></span>

                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">Unite Central</span>
                                                                    <span class="info-box-number">1,410</span>
                                                                </div>
                                                                <!-- /.info-box-content -->
                                                            </div>
                                                            <!-- /.info-box -->
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="info-box">
                                                                <span class="info-box-icon"><img src="firewall.png" alt=""></span>

                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">Unite Central</span>
                                                                    <span class="info-box-number">1,410</span>
                                                                </div>
                                                                <!-- /.info-box-content -->
                                                            </div>
                                                            <!-- /.info-box -->
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="info-box">
                                                                <span class="info-box-icon"><img src="firewall.png" alt=""></span>

                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">Unite Central</span>
                                                                    <span class="info-box-number">1,410</span>
                                                                </div>
                                                                <!-- /.info-box-content -->
                                                            </div>
                                                            <!-- /.info-box -->
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="info-box">
                                                                <span class="info-box-icon"><img src="firewall.png" alt=""></span>

                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">Unite Central</span>
                                                                    <span class="info-box-number">1,410</span>
                                                                </div>
                                                                <!-- /.info-box-content -->
                                                            </div>
                                                            <!-- /.info-box -->
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="info-box">
                                                                <span class="info-box-icon"><img src="firewall.png" alt=""></span>

                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">Unite Central</span>
                                                                    <span class="info-box-number">1,410</span>
                                                                </div>
                                                                <!-- /.info-box-content -->
                                                            </div>
                                                            <!-- /.info-box -->
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="info-box">
                                                                <span class="info-box-icon"><img src="firewall.png" alt=""></span>

                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">Unite Central</span>
                                                                    <span class="info-box-number">1,410</span>
                                                                </div>
                                                                <!-- /.info-box-content -->
                                                            </div>
                                                            <!-- /.info-box -->
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                            <table id="bps" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Denomination</th>
                                                    <th>Classe</th>
                                                    <th>Code Postale</th>
                                                    <th>Code Comptable</th>
                                                    <th>CCP</th>
                                                    <th>ID Terminal</th>
                                                    <th>IP</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                                            Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                                            Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                </div>
            </div>

        </div>
        <!-- ending showing modal bp -->
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
        Livewire.on('showbp', () => {
            $('#showbp').modal('show');
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

        Livewire.on('addbp', () => {
                        $('#addbp').modal('hide');
                        alerting();
                        toastr.success('le bureau a ete Ajouter');

                    });



    });
</script>
@endscript

