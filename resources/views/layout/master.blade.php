<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> --}}

    {{-- <link rel="stylesheet" href="http://www.atlasestateagents.co.uk/css/tether.min.css"> --}}


</head>
<body style="background-image: url(http://www.smdiconsultants.com/main/wp-content/uploads/2015/06/city-bg-web41.jpg);
background-repeat: no-repeat;
background-position: center;
background-size: cover;">
  <nav class="navbar navbar" style="background: rgba(0, 0, 0, .75);">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/" style="color: lightblue;">SMDI consultants inc.</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li>
                      <a class="active" href="/filetable" style="color: blue;">Active</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                  <li>
                    <a style="color:gold;">Legend: </a>
                  </li>
                </ul>
                <ul class="nav navbar-nav">
                  <li>
                    <a style="color:black;" type="button" class="btn btn-primary btn-sm">
                        <i class="glyphicon glyphicon-edit"> </i><span style="color:black;"> Edit Record</span>
                    </a>
                  </li>
                </ul>
                <ul class="nav navbar-nav">
                  <li>
                    <a style="color:black;" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-eye-open">
                    </i><span style="color:black;"> Show Record</span></a>
                  </li>
                </ul>
                <ul class="nav navbar-nav">
                  <li>
                    <a style="color:black;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash">
                    </i><span style="color:black;"> Deactivate Record</span></a>
                  </li>
                </ul>
                <ul class="nav navbar-nav">
                  <li class="nav navbar-nav">
                    <a style="color:black;" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-refresh">
                    </i><span style="color:black;"> Reactivate Record</span></a>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="nav navbar-nav navbar-right">
                    <a href="{{ url('export') }}">
                      <button class="btn btn-default" style="color:yellow; background:gray;">Download Excel
                        <i class="glyphicon glyphicon-circle-arrow-down"></i>
                      </button>
                    </a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>

  <div class="container">
        <header class="main-header">
          <div class="container">
            <div class="row align-items-center">
              <a class="navbar-brand" href="/filetable" ><img class="default" src="http://www.smdiconsultants.com/main/wp-content/uploads/2016/01/logo-smdi.png" alt="SMDI Consultants, Inc." / height="90px" width="150px"></a>
            </div>
        </div>
        </header>
        <div class="content-wrapper" style="min-height: 941px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>@yield('title')</h1>
            </section>

            <!-- Main content -->
            <section class="content">
                @include('layout.notifications')
                <div class="row">
                    @yield('content')
                </div>
            </section>
            <!-- /.content -->
        </div>
  </div>
{{-- <script type="text/javascript">
  function init() {
  document.body.style.background = "cyan";
  }
</script> --}}
<footer class="main-footer">
    <strong>Copyright © 2018 <a href="http://smdiconsultants.com">SMDI-Consultants</a>.</strong> All rights reserved.
</footer>
<script src="http://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://cdn.grapecity.com/spreadjs/hosted/scripts/gc.spread.sheets.all.10.1.0.min.js"></script>
<script type="text/javascript" src="http://cdn.grapecity.com/spreadjs/hosted/scripts/interop/gc.spread.excelio.10.1.0.min.js"></script>

<script>
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@yield('script')
</body>
