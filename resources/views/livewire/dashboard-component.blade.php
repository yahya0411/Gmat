<div class="content">

<div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="small-box bg-gradient-lightblue">
                <div class="inner">
                    <h4>150</h4>


                    <h5>Materiel Informatique</h5>
                </div>
                <div class="icon">
                    <i class="fas"><img src="{{ asset('icons/pc3.png') }}" alt=""></i>
                </div>
                <a href="#" data-toggle="modal" data-target="#modal-xl" class="small-box-footer">
                    Plus info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
            <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="small-box bg-gradient-olive">
                <div class="inner">
                    <h4>150</h4>


                    <h5>TPE</h5>
                </div>
                <div class="icon">
                    <i class="fas"><img src="{{ asset('icons/tpe.png') }}" alt=""></i>
                </div>
                <a href="#" class="small-box-footer">
                    Plus info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
            <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4>150</h4>


                    <h5>Consommable</h5>
                </div>
                <div class="icon">
                    <i class="fas"><img src="{{ asset('icons/consommable.png') }}" alt=""></i>
                </div>
                <a href="#" class="small-box-footer">
                    Plus info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
            <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="small-box bg-gradient-maroon">
                <div class="inner">
                    <h4>{{$bureaux->count()}}</h4>


                    <h5>Etablisement</h5>
                </div>
                <div class="icon">
                    <i class="fas"><img src="{{ asset('icons/arrivage.png') }}" alt=""></i>
                </div>
                <a href="#" class="small-box-footer">
                    Plus info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- /.col -->

        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header card-poste">

                    <h3 class="card-title"> <i class="fas fa-chart-line"></i> Statistique</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-center">
                                <strong>Sales: 1 Jan, 2024 - 30 Jul, 2024</strong>
                            </p>
                            <div class="chart">
                                <canvas id="barChart"
                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <p class="text-center">
                                <strong>Marque</strong>
                            </p>
                            <canvas id="donutChart"
                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header card-poste">
                    <h4 class="modal-title"> <i class="fas fa-laptop"></i> Equipement Informatique </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <form action="simple-results.html">
                                <div class="input-group">
                                    <input type="search" class="form-control form-control-lg" placeholder="Enter le bureau">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-lg btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                                       href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home"
                                       aria-selected="true">Statistique</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                       href="#custom-tabs-three-profile" role="tab"
                                       aria-controls="custom-tabs-three-profile" aria-selected="false">Arrivage</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill"
                                       href="#custom-tabs-three-messages" role="tab"
                                       aria-controls="custom-tabs-three-messages" aria-selected="false">Mouvement</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill"
                                       href="#custom-tabs-three-settings" role="tab"
                                       aria-controls="custom-tabs-three-settings" aria-selected="false">Reforme</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
                                     aria-labelledby="custom-tabs-three-home-tab">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box bg-navy">
                                            <span class="info-box-icon"><i class="far"><img
                                                        src="{{ asset('icons/cu.png') }}" alt=""></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Unite Central</span>
                                                    <span class="info-box-number">2000</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    700 en stock
                                                </span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box bg-navy">
                                            <span class="info-box-icon"><i class="far"><img
                                                        src="{{ asset('icons/screen.png') }}"
                                                        alt=""></i></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Ecran</span>
                                                    <span class="info-box-number">41,410</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    70% Increase in 30 Days
                                                </span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box bg-navy">
                                                <span class="info-box-icon"><i class="far"> <img src="{{asset('icons/printer.png')}}" alt=""></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Imprimante</span>
                                                    <span class="info-box-number">41,410</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    70% Increase in 30 Days
                                                </span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box bg-navy">
                                                <span class="info-box-icon"><i class="far "><img src="{{asset('icons/Reader.png')}}" alt=""></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Lecteur</span>
                                                    <span class="info-box-number">41,410</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    70% Increase in 30 Days
                                                </span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box bg-navy">
                                            <span class="info-box-icon"><i class="far"><img
                                                        src="{{ asset('icons/barecode.png') }}" alt=""></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Douchette</span>
                                                    <span class="info-box-number">2000</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    700 en stock
                                                </span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box bg-navy">
                                            <span class="info-box-icon"><i class="far"><img
                                                        src="{{ asset('icons/tpe.png') }}"
                                                        alt=""></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">TPE</span>
                                                    <span class="info-box-number">41,410</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    70% Increase in 30 Days
                                                </span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box bg-navy">
                                            <span class="info-box-icon"><i class="far"><img
                                                        src="{{ asset('icons/network.png') }}"
                                                        alt=""></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Routeur</span>
                                                    <span class="info-box-number">41,410</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    70% Increase in 30 Days
                                                </span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box bg-navy">
                                            <span class="info-box-icon"><i class="far"><img
                                                        src="{{ asset('icons/network.png') }}"
                                                        alt=""></i></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Switch</span>
                                                    <span class="info-box-number">41,410</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    70% Increase in 30 Days
                                                </span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box bg-navy">
                                            <span class="info-box-icon"><i class="far"><img
                                                        src="{{ asset('icons/firewall.png') }}" alt=""></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Pare-feu</span>
                                                    <span class="info-box-number">2000</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    700 en stock
                                                </span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box bg-navy">
                                            <span class="info-box-icon"><i class="far"><img
                                                        src="{{ asset('icons/file.png') }}"
                                                        alt=""></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Mobiconnect</span>
                                                    <span class="info-box-number">41,410</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    70% Increase in 30 Days
                                                </span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box bg-navy">
                                            <span class="info-box-icon"><i class="far">
                                                <img
                                                    src="{{ asset('icons/ups.png') }}"
                                                    alt=""></i>
                                                </i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Onduleur</span>
                                                    <span class="info-box-number">41,410</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    70% Increase in 30 Days
                                                </span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box bg-navy">
                                                <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Bookmarks</span>
                                                    <span class="info-box-number">41,410</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    70% Increase in 30 Days
                                                </span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box bg-navy">
                                            <span class="info-box-icon"><i class="far"><img
                                                        src="{{ asset('icons/barecode.png') }}" alt=""></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Douchette</span>
                                                    <span class="info-box-number">2000</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    700 en stock
                                                </span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box bg-navy">
                                            <span class="info-box-icon"><i class="far"><img
                                                        src="{{ asset('icons/tpe.png') }}"
                                                        alt=""></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">TPE</span>
                                                    <span class="info-box-number">41,410</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    70% Increase in 30 Days
                                                </span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box bg-navy">
                                            <span class="info-box-icon"><i class="far"><img
                                                        src="{{ asset('icons/network.png') }}"
                                                        alt=""></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Routeur</span>
                                                    <span class="info-box-number">41,410</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    70% Increase in 30 Days
                                                </span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="info-box bg-navy">
                                            <span class="info-box-icon"><i class="far"><img
                                                        src="{{ asset('icons/network.png') }}"
                                                        alt=""></i></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Switch</span>
                                                    <span class="info-box-number">41,410</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%"></div>
                                                    </div>
                                                    <span class="progress-description">
                                                    70% Increase in 30 Days
                                                </span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel"
                                     aria-labelledby="custom-tabs-three-profile-tab">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Fournisseur</th>
                                            <th>Date</th>
                                            <th>Observation</th>
                                            <th>Control</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Magazin Central</td>
                                            <td>09/11/2024</td>
                                            <td>Arrivage TPE</td>
                                            <td style="text-align:center">
                                                <a class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                                <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>  <tr>
                                            <td>Magazin Central</td>
                                            <td>09/11/2024</td>
                                            <td>Arrivage TPE</td>
                                            <td style="text-align:center">
                                                <a class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                                <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>  <tr>
                                            <td>Magazin Central</td>
                                            <td>09/11/2024</td>
                                            <td>Arrivage TPE</td>
                                            <td style="text-align:center">
                                                <a class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                                <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>  <tr>
                                            <td>Magazin Central</td>
                                            <td>09/11/2024</td>
                                            <td>Arrivage TPE</td>
                                            <td style="text-align:center">
                                                <a class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                                <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>  <tr>
                                            <td>Magazin Central</td>
                                            <td>09/11/2024</td>
                                            <td>Arrivage TPE</td>
                                            <td style="text-align:center">
                                                <a class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                                <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>  <tr>
                                            <td>Magazin Central</td>
                                            <td>09/11/2024</td>
                                            <td>Arrivage TPE</td>
                                            <td style="text-align:center">
                                                <a class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                                <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>  <tr>
                                            <td>Magazin Central</td>
                                            <td>09/11/2024</td>
                                            <td>Arrivage TPE</td>
                                            <td style="text-align:center">
                                                <a class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                                <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>  <tr>
                                            <td>Magazin Central</td>
                                            <td>09/11/2024</td>
                                            <td>Arrivage TPE</td>
                                            <td style="text-align:center">
                                                <a class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                                <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel"
                                     aria-labelledby="custom-tabs-three-messages-tab">
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel"
                                     aria-labelledby="custom-tabs-three-settings-tab">
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
                <div class="modal-footer justify-content-between">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </div>
            </div>
        </div>

        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->

    <!-- /.modal -->

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header border-transparent card-poste">
                    <h3 class="card-title"> <i class="far fa-file-pdf"></i> Bon de sortie</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                            <tr>
                                <th>N Bon</th>
                                <th>Destinateur</th>
                                <th>Etat</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="badge badge-info">Processing</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#00c0ef" data-height="20">
                                        21/10/2023</div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#f39c12" data-height="20">
                                        21/10/2023</div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>iPhone 6 Plus</td>
                                <td><span class="badge badge-danger">Delivered</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#f56954" data-height="20">
                                        21/10/2023</div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                <td>Call of Duty IV</td>
                                <td><span class="badge badge-success">Shipped</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#00a65a" data-height="20">
                                        21/10/2023</div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                <td>Call of Duty IV</td>
                                <td><span class="badge badge-success">Shipped</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#00a65a" data-height="20">
                                        21/10/2023</div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Nouveau bon de sortie</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Vu tout les bons</a>
                    </div>
                </div>

            </div>

        </div>
        <div class="col-md-4">
            <div class="info-box mb-3 bg-primary">
                <span class="info-box-icon"><i class="fas fa-file"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Bon de sortie</span>
                    <span class="info-box-number">5,200</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <div class="info-box mb-3 bg-gray-dark">
                <span class="info-box-icon"><i class="far fa-heart"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Decharge</span>
                    <span class="info-box-number">20</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <div class="info-box mb-3 bg-danger">
                <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">TPE reslier</span>
                    <span class="info-box-number">114,381</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <div class="info-box mb-3 bg-purple">
            <span class="info-box-icon"><i class="far"><img src="{{ asset('icons/tpe.png') }}" alt="">
                </i></span>

                <div class="info-box-content">
                    <span class="info-box-text">TPE Remplacer</span>
                    <span class="info-box-number">163,921</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>

            <script src="plugins/jquery/jquery.min.js"></script>
            <script src="plugins/chart.js/Chart.bundle.js"></script>
            <script>
                $(document).ready(function() {
                    var areaChartData = {
                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                        datasets: [{
                            label: 'Carte IBP',
                            backgroundColor: 'rgba(60,141,188,0.9)',
                            borderColor: 'rgba(60,141,188,0.8)',
                            pointRadius: false,
                            pointColor: '#3b8bba',
                            pointStrokeColor: 'rgba(60,141,188,1)',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(60,141,188,1)',
                            data: [28, 48, 40, 19, 86, 27, 90]
                        },
                            {
                                label: 'Consomation Imprimantes',
                                backgroundColor: 'rgba(210, 214, 222, 1)',
                                borderColor: 'rgba(210, 214, 222, 1)',
                                pointRadius: false,
                                pointColor: 'rgba(210, 214, 222, 1)',
                                pointStrokeColor: '#c1c7d1',
                                pointHighlightFill: '#fff',
                                pointHighlightStroke: 'rgba(220,220,220,1)',
                                data: [65, 59, 80, 81, 56, 55, 40]
                            },
                        ]
                    }
                    var barChartCanvas = $('#barChart').get(0).getContext('2d')
                    var barChartData = $.extend(true, {}, areaChartData)
                    var temp0 = areaChartData.datasets[0]
                    var temp1 = areaChartData.datasets[1]
                    barChartData.datasets[0] = temp1
                    barChartData.datasets[1] = temp0

                    var barChartOptions = {
                        responsive: true,
                        maintainAspectRatio: false,
                        datasetFill: false
                    }

                    new Chart(barChartCanvas, {
                        type: 'bar',
                        data: barChartData,
                        options: barChartOptions
                    })
                    //-------------
                    //- DONUT CHART -
                    //-------------
                    // Get context with jQuery - using jQuery's .get() method.
                    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
                    var donutData = {
                        labels: [
                            'Chrome',
                            'IE',
                            'FireFox',
                            'Safari',
                            'Opera',
                            'Navigator',
                        ],
                        datasets: [{
                            data: [700, 500, 400, 600, 300, 100],
                            backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                        }]
                    }
                    var donutOptions = {
                        maintainAspectRatio: false,
                        responsive: true,
                    }
                    //Create pie or douhnut chart
                    // You can switch between pie and douhnut using the method below.
                    new Chart(donutChartCanvas, {
                        type: 'doughnut',
                        data: donutData,
                        options: donutOptions
                    })
                });
            </script>
            <script>

                $(function () {
                    $("#example1").DataTable({
                        "responsive": true, "lengthChange": false, "autoWidth": false,
                        "buttons": ["excel", "pdf", "print", "colvis"]
                    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                });
            </script>

    </div>



</div>
