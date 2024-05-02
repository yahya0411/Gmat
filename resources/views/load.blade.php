<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{asset('/plugins/jquery-ui/jquery-ui.min.css')}}">
    <!-- Font Awesome -->
    <link rel="icon" type="image/png" href="{{asset('logo.png')}}" />
  <title>G-Mat</title>
    <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('/dist/css/ionicons.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
        <!-- data table -->
        <link rel="stylesheet" href="{{asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset("plugins/chart.js/Chart.css")}}">
        <link rel="stylesheet" href="{{asset("/MyStyle/style.css")}}">

        <style>
            ::selection {
  color: white;
  background: #003C71;
}
            * {
                font-family: Eurostile,Arial,sans-serif;
    font-size: 1em;
            }
            body {
                background-color: #EEE;

            }
            .cont {
                margin: auto;
                width: 50%;
                height: 200px;
                text-align: center;
                position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);

            }
            .clock {

    color: #003C71;
    font-size: 30px;
    font-family: Orbitron;
    letter-spacing: 7px;



}
        </style>
    </head>
    <body>
        <div class="cont">
            <h1 style="color: #003C71">G-Mat</h1>
          <!--  <img class="" src="{{asset('logo-round.png')}}" title="Gestion de parc Informatique" alt="Gestion de parc Informatique" height="120" width="120"><br/> -->
                        <img class="" src="{{asset('man.png')}}" title="Gestion de parc Informatique" alt="Gestion de parc Informatique">
            <h3>Gestion de parc informatique</h3>
            <h4>UPW Tlemcen</h4>
            <!--  <div id="MyClockDisplay" class="clock" onload="showTime()"></div>  -->

        </div>
<!-- ./wrapper -->
<script>
    function showTime(){
        var date = new Date();
        var h = date.getHours(); // 0 - 23
        var m = date.getMinutes(); // 0 - 59
        var s = date.getSeconds(); // 0 - 59
        var session = "AM";

        if(h == 0){
            h = 12;
        }

        if(h > 12){
            h = h - 12;
            session = "PM";
        }

        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;

        var time = h + ":" + m + ":" + s + " " + session;
        document.getElementById("MyClockDisplay").innerText = time;
        document.getElementById("MyClockDisplay").textContent = time;

        setTimeout(showTime, 1000);

    }

    showTime();


    </script>
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>

<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>

<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>

<!-- AdminLTE for demo purposes -->
{{--
<script src="{{asset('dist/js/demo.js')}}"></script>
--}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

</body>
</html>
