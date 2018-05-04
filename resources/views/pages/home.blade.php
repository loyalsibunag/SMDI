@extends('layout.master')

@section('content')
<div class="page-header" style="background-color:rgba(255, 255, 255, 0.75); width:115.35%; margin-top:-3.4%; margin-left:-7.7%;">
<div class="container">
    <center><h1 style="font-size: 40px;font-family: Arial; color:rgb(200, 0, 0); "><b>SMDI </b>
    <strong style="font-family: Arial; color:rgba(0, 0, 0, .6); background-color: rgba(255, 255, 255, 0.1); border-radius: 30px; box-shadow: 1px 0px 3px black;padding:5px; " >Station Library</strong></h1></center>
  </div>
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="height: 2in; width: 2in; margin:auto;">

    <div class="item active">
      <img src="http://www.smdiconsultants.com/main/wp-content/uploads/2015/06/jun-1x1.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="http://www.smdiconsultants.com/main/wp-content/uploads/2015/07/sab-1x1.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="http://www.smdiconsultants.com/main/wp-content/uploads/2016/06/2-1.png" alt="New York">
    </div>

    <div class="item">
      <img src="http://www.smdiconsultants.com/main/wp-content/uploads/2016/08/1-4.png" alt=" York">
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container fluid" style="margin-top:10%; margin-left:auto;">
  <div class="well col-sm-4" style="left:13%; height: 20%;background: rgba(0, 125, 0, .3); border-color:green;">
    <div class="text-center">
        <span style="font-size:40px;color:white;">ACTIVE <i class="glyphicon glyphicon-ok-sign"> </i></span><br/>

        <span  style="font-size:90px;color:white; text-shadow: 1px 1px 2px black; "><strong><b><strong id="noActive">{{ $active}}</strong></b></strong></span>
    </div>
  </div>

  <div class="well col-sm-4" style="left:23%; height:20%;background: rgba(255, 0, 0, .25);border-color:red;">
    <div class="text-center">
        <span style="font-size:40px;color:white;">INACTIVE <i class="glyphicon glyphicon-remove-sign"> </i></span><br/>
        <span style="font-size:90px;color:white; text-shadow: 1px 1px 2px black; "><strong id="noInactive">{{ $inActive}}</strong></span>
    </div>
  </div>

  <div class="col-sm-12">
    <div class="text-center">
      <a id="btnShow" href="/filetable" class="btn btn-default" style="margin-top:5%; margin-left: auto;height:20%;width:20%;background: rgba(0, 0, 0, 10); text-shadow: 1px 2px 1px black">
        <span id="txtShow" style="color:gold;font-size:140%;">
          <span class="glyphicon glyphicon-hand-right"></span>Show All Records
      </span>
      </a>
    </div>
  </div>
</div>


@endsection
