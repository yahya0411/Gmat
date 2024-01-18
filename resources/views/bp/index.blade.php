@extends('app.master')
@section('content')
@section('nom_page','Bureaux de poste')
@section('custum_style')
<link rel="stylesheet" href="{{asset("/MyStyle/style.css")}}">
<style>
    input {

        text-transform: uppercase
    }
    input::placeholder {

text-transform: none
}
    </style>
@endsection

    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header card-poste">
                    <h4 class="modal-title">Ajouter bureau de poste</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-12">
                                <form>
                                  <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Denomination</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter nom de bureau">
                                              </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Classe </label>
                                                <select class="form-control">
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
                                                <input type="text" class="form-control" id="code_postale" placeholder="Enter code postale">
                                              </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="code_comptable">Code Comptable</label>
                                                <input type="text" class="form-control" id="code_comptable" placeholder="Entrer code comptable">
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="ccp_bureau">CCP</label>
                                                <input type="text" class="form-control" id="ccp_bureau" placeholder="Enter ccp de bureau">
                                              </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="id_m">ID Marchant</label>
                                                <input type="text" class="form-control" id="id_m" placeholder="Enter ID Marchant">
                                              </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="id_t">ID Terminal</label>
                                                <input type="text" class="form-control" id="id_t" placeholder="Enter ID Terminal">
                                              </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="ad_ip">Adresse IP</label>
                                                <input type="IP" class="form-control" id="ad_ip" placeholder="Enter Adresse IP">
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                    </div>
                                  <!-- /.card-body -->


                                </form>
                            </div>
                     </div>
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
    </div>
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-poste">
              <a href="#"  data-toggle="modal" data-target="#modal-xl" class="float-right" style="color: #f4cc3a; font-weight:bold"><i class="fas fa-plus-circle"></i> Ajouter un bureau</a>
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
@section('script')
<script>

$(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    });
  });
</script>

@endsection
@endsection
