@extends('app.master')
@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <form action="simple-results.html">
        <div class="input-group">
        <input type="search" class="form-control form-control-lg" placeholder="Taper Bureau de poste">
        <div class="input-group-append">
        <button type="submit" class="btn btn-lg btn-default">
        <i class="fa fa-search"></i>
        </button>
        </div>
        </div>
        </form>
        </div>
</div>
<div class="row">
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box bg-gradient-Primary">
        <span class="info-box-icon"><img src="{{asset('icons/pc3.png')}}" alt=""></span>

        <div class="info-box-content">
          <span class="info-box-text">PC</span>
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
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-gradient-Secondary">
          <span class="info-box-icon"><img src="{{asset('icons/printer.png')}}" alt=""></span>

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
      <div class="info-box bg-gradient-Info">
        <span class="info-box-icon"><img src="{{asset('icons/Reader.png')}}" alt=""></span>

        <div class="info-box-content">
          <span class="info-box-text">Lecteurs</span>
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
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box bg-gradient-Success">
        <span class="info-box-icon"><img src="{{asset('icons/tpe.png')}}" alt=""></span>

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
    <!-- /.col -->

    <!-- /.col -->
  </div>
  <div class="row">

   <!-- <div class="col-md-8">

        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Mouvement Materiel</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
            </div>
            </div>
            <div class="card-body p-0" style="display: block;">
            <table class="table table-striped projects">
            <thead>
            <tr>
            <th style="width: 1%">
            #
            </th>
            <th style="width: 20%">
            Project Name
            </th>
            <th style="width: 30%">
            Team Members
            </th>
            <th>
            Project Progress
            </th>
            <th style="width: 8%" class="text-center">
            Status
            </th>
            <th style="width: 20%">
            </th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>
            #
            </td>
            <td>
            <a>
            AdminLTE v3
            </a>
            <br>
            <small>
            Created 01.01.2019
            </small>
            </td>

            <td class="project_progress">
            <div class="progress progress-sm">
            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
            </div>
            </div>
            <small>
            57% Complete
            </small>
            </td>
            <td class="project-state">
            <span class="badge badge-success">Success</span>
            </td>
            <td class="project-actions text-right">
            <a class="btn btn-primary btn-sm" href="#">
            <i class="fas fa-folder">
            </i>
            View
            </a>
            </td>
            </tr>
            <tr>
            <td>
            #
            </td>
            <td>
            <a>
            AdminLTE v3
            </a>
            <br>
            <small>
            Created 01.01.2019
            </small>
            </td>
            <td class="project_progress">
            <div class="progress progress-sm">
            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%">
            </div>
            </div>
            <small>
            47% Complete
            </small>
            </td>
            <td class="project-state">
            <span class="badge badge-success">Success</span>
            </td>
            <td class="project-actions text-right">
            <a class="btn btn-primary btn-sm" href="#">
            <i class="fas fa-folder">
            </i>
            View
            </a>
            </td>
            </tr>
            <tr>
            <td>
            #
            </td>
            <td>
            <a>
            AdminLTE v3
            </a>
            <br>
            <small>
            Created 01.01.2019
            </small>
            </td>
            <td class="project_progress">
            <div class="progress progress-sm">
            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
            </div>
            </div>
            <small>
            77% Complete
            </small>
            </td>
            <td class="project-state">
            <span class="badge badge-success">Success</span>
            </td>
            <td class="project-actions text-right">
            <a class="btn btn-primary btn-sm" href="#">
            <i class="fas fa-folder">
            </i>
            View
            </td>
            </tr>
            <tr>
            <td>
            #
            </td>
            </tr>
            </tbody>
            </table>
            </div>

            </div>
    </div>-->
  <div class="col-md-6">
    <div class="card card-default">
        <div class="card-header">
        <h3 class="card-title">Bar Chart</h3>
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
        <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <canvas id="barChart" style="min-height: 250px; height: 200px; max-height: 200px; max-width: 100%; display: block; width: 765px;" class="chartjs-render-monitor" width="765" height="200"></canvas>
        </div>
        </div>

        </div>
  </div>

  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box bg-gradient-Orange">
        <span class="info-box-icon"><img src="{{asset('icons/barecode.png')}}" alt=""></span>

        <div class="info-box-content">
          <span class="info-box-text">Douchette</span>
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
    <div class="info-box bg-gradient-Danger">
        <span class="info-box-icon"><img src="{{asset('icons/network.png')}}" alt=""></span>

        <div class="info-box-content">
          <span class="info-box-text">Réseau</span>
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
  </div>

</div>



<script src="/myjs.js"></script>
@endsection
