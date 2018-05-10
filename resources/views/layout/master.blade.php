<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title') Station Library</title>
    <link rel="icon" href="http://www.smdiconsultants.com/main/wp-content/uploads/2015/06/SMDI-icon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> --}}

    {{-- <link rel="stylesheet" href="http://www.atlasestateagents.co.uk/css/tether.min.css"> --}}
    <style>
        #btnActiveRec:hover{
          background-color: green;
          border-radius: 4px;
          box-shadow: 2px 1px 1px black;
        }
        #txtActive:hover{
          text-shadow: 1px 1px 1px black;
        }
        #btnDownload:hover{
          border-radius: 4px;
          box-shadow: 2px 1px 1px black;
        }
        #txtDownload:hover{
          text-shadow: 1px 1px 1px gray;
        }
        .carousel-inner > .item{

          -webkit-transition: 0.6s ease-in-out left;
          -moz-transition:0.6s ease-in-out left;
          -o-transition:0.6s ease-in-out left;
        }
        #btnShow:hover{
          border-radius: 4px;
          box-shadow: 2px 1px 1px black;
        }
        #noActive:hover{
          color: green;
          text-shadow: 1px 1px 3px white;
        }
        #noInactive:hover{
          color: red;
          text-shadow: 1px 1px 3px white;
        }
        #txtShow:hover{
          text-shadow: 1px 0px 2px white;
        }
        #createNewFile{
          width:55%;
          background-color: white;
          padding: 1%;
          border-radius: 4px;
          box-shadow: 5px 2px 7px black;
          margin:auto;
        }
        ::placeholder{
          color:black;
          font-family: Arial;
          font-size: 90%;
          opacity: .6;
          font-weight: normal;

        }
        .foo{
          width: 100px;
        }
        input:focus {
            padding:10px;
        }
        input[type=text] {
            padding: 10px;
            margin: 1px 0;
            box-sizing: border-box;
            font-weight: normal;
        }
    </style>

</head>
<body style="background-image: url(http://www.smdiconsultants.com/main/wp-content/uploads/2015/06/city-bg.jpg);background-repeat: no-repeat;background-position: center;background-size: cover;">
  <nav class="navbar navbar" style="background: rgba(255, 255, 255, .75); padding:10px; border-radius:0px;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="/" style="color: lightblue;">SMDI consultants inc.</a> -->
                <a class="navbar-brand" href="/" ><img style= "width:140px; height:65px;margin-top:-21px; "class="default" src="http://www.smdiconsultants.com/main/wp-content/uploads/2016/01/logo-smdi.png" alt="SMDI Consultants, Inc." / height="90px" width="150px"></a>
            </div>
            <div>
              <ul class="nav navbar-nav">
                  <li style="margin-top:15px;margin-left:60px;">
                    <p style="color:black;">Legend: </p>
                  </li>
             </ul>
                <ul class="nav navbar-nav" style="margin-left:20px; margin-top:5px;" >
                  <li>
                    <a style="color:black;background-color:rgba(51,122, 183, .5);border-radius:3px; padding:10px" >
                        <i class="glyphicon glyphicon-edit"> </i><span style="color:black;font-size:12px;"> Edit Record</span>
                    </a>
                  </li>
                </ul>
                <ul class="nav navbar-nav" style="margin-top:5px;">
                  <li>
                    <a style="color:black;background-color:rgba(91,192, 222, .5);border-radius:3px; padding:10px"><i class="glyphicon glyphicon-eye-open">
                    </i><span style="color:black;font-size:12px;"> Show Record</span></a>
                  </li>
                </ul>
                <ul class="nav navbar-nav" style="margin-top:5px;">
                  <li>
                    <a style="color:black;background-color:rgba(217, 83, 79, .5);border-radius:3px; padding:10px"><i class="glyphicon glyphicon-trash">
                    </i><span style="color:black;font-size:12px;"> Deactivate Record</span></a>
                  </li>
                </ul>
                <ul class="nav navbar-nav" style="margin-top:5px;">
                  <li class="nav navbar-nav">
                    <a style="color:black;background-color:rgba(240, 173, 78, .5);border-radius:3px; padding:10px"><i class="glyphicon glyphicon-refresh">
                    </i><span style="color:black;font-size:12px;"> Reactivate Record</span></a>
                  </li>
                </ul>

                <ul class="nav navbar-nav navbar-right" >
                  <li id="btnDownload" class="nav navbar-nav navbar-right" >
                      <a  onmouseover="" href="{{ url('export') }}" class="btn btn-default" style="color:gold;text-shadow: 1px 1px 2px black; background:rgba(0, 0, 0, 0.8);"><span id="txtDownload">Save All Records
                        <i class="glyphicon glyphicon-circle-arrow-down"></i><span>
                    </a>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right" style="margin-right:10px;">
                     <li id="btnActiveRec">
                       <a class="btn btn-default" href="/filetable" style="color:white;background-color: rgba(0, 150, 0, 0.8);text-shadow: 0px 1px 2px gray; "><span id="txtActive"> Active Records <i style="color: white;" class="glyphicon glyphicon-ok-sign"> </i></span></a>
                     </li>
               </ul>
            </div>
        </div>
    </nav>

  <div class="container">
        <header class="main-header">
          <div class="container">
            <div class="row align-items-center">
              <!-- <a class="navbar-brand" href="/filetable" ><img class="default" src="http://www.smdiconsultants.com/main/wp-content/uploads/2016/01/logo-smdi.png" alt="SMDI Consultants, Inc." / height="90px" width="150px"></a> -->
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
