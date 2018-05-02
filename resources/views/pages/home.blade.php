@extends('layout.master')

@section('content')
  <br/>
  <br/>
<div class="container">
  <div class="jumbotron">
    <center><h1><b>{{$title}}</b></h1></center>
  </div>
</div>

<div class="container fluid">
  <div class="well col-sm-4" style="left:150px; height:225px;background: rgba(0, 0, 255, .25);">
    <div class="text-center">
        <span style="font-size:40px;color:darkblue;">ACTIVE</span><br/>
        <span style="font-size:90px;color:blue;"><strong><b><strong>{{ $active}}</strong></b></strong></span>
    </div>
  </div>

  <div class="well col-sm-4" style="left:275px; height:225px;background: rgba(255, 0, 0, .25);">
    <div class="text-center">
        <span style="font-size:40px;color:maroon;">INACTIVE</span><br/>
        <span style="font-size:90px;color:red;"><strong>{{ $inActive}}</strong></span>
    </div>
  </div>

  <div class="col-sm-12">
    <div class="text-center">
      <a href="/filetable" class="btn btn-default" style="height:90px;width:360px;background: rgba(0, 255, 0, .25);">
        <span style="color:green;font-size:42px;">
          <span class="glyphicon glyphicon-hand-right"></span> GO TO TABLE
      </span>
      </a>
    </div>
  </div>
</div>


@endsection
