@extends('layout.master')

@section('content')
  <center><h1><b>Create New File!</b></h1></center>
<strong><strong>
{!! Form::open(['action'=> 'PostsController@store', 'method' => 'POST']) !!}
  <div class="well">
    <div class="form-group">
      {{Form::label('sCode', 'Station Code:')}}
      {{Form::text('sCode', '', ['class=' => 'form-control-sm-12', 'placeholder' => 'VCN00'])}}
    </div>
  </div>
  <div class="well">
    <div class="form-group">
      {{Form::label('sName', 'Station Name: ')}}
      {{Form::text('sName', '', ['class=' => 'form-control', 'placeholder' => 'Station Name!'])}}
    </div>
  </div>
<div class="well">
  <div class="form-group">
    {{Form::label('loc', 'Location: ')}}
    {{Form::text('loc', '', ['class=' => 'form-control', 'placeholder' => 'Location!'])}}
  </div>
</div>
<div class="well">
  <div class="form-group">
    {{Form::label('year', 'Year: ')}}
    {{Form::text('year', '', ['class=' => 'form-control', 'placeholder' => 'Year!'])}}
    {{Form::label('month', 'Month: ')}}
    {{Form::text('month', '', ['class=' => 'form-control', 'placeholder' => 'Month!'])}}
    {{Form::label('day', 'Day: ')}}
    {{Form::text('day', '', ['class=' => 'form-control', 'placeholder' => 'Day!'])}}
  </div>
</div>
<div class="well">
  <div class="form-group">
    {{Form::label('weather', 'Weather: ')}}
    {{Form::text('weather', '', ['class=' => 'form-control', 'placeholder' => 'Weather!'])}}
  </div>
</div>
<div class="well">
  <div class="form-group">
    {{Form::label('pc', 'PC: ')}}
    {{Form::text('pc', '', ['class=' => 'form-control', 'placeholder' => 'c:\desktop\SMDI'])}}
  </div>
</div>
<div class="well">
  <div class="form-group">
    {{Form::label('client', 'Client: ')}}
    {{Form::text('client', '', ['class=' => 'form-control', 'placeholder' => 'Client!'])}}
  </div>
</div>
<div class="well">
  <div class="form-group">
    {{Form::label('type', 'Type: ')}}
     <input type="radio" name="othersText" id="MB" onclick="myFunction()" checked="checked" value="MB">MB
     <input type="radio" name="othersText" id="IC" onclick="myFunction()" value="IC">IC
     <input type="radio" name="othersText" id="others" onclick="myFunction()">OTHERS</br>
    <input type="text" class="hidden" name="othersText" id="txtOther">
  </div>
</div>
</div>
<div class="well">
  <div class="form-group">
    {{Form::label('longhi', 'Longitude: ')}}
    {{Form::text('longhi', '', ['class=' => 'form-control', 'placeholder' => 'Longitude!'])}}
  </div>
  <div class="form-group">
    {{Form::label('lati', 'Latitude: ')}}
    {{Form::text('lati', '', ['class=' => 'form-control', 'placeholder' => 'Latitude!'])}}
  </div>
</div>
<div class="well">
  {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {{Form::reset('Clear', ['class' => 'btn btn-success'])}}
  <a href="{{ URL('/filetable') }}" class="btn btn-info">Go Back</a>
</div>
{!! Form::close() !!}

 </strong></strong>


@endsection
<script>
function myFunction() {
    var oth = document.getElementById("others");
    var mb = document.getElementById("MB");
    var ic = document.getElementById("IC");


    var txtOt = document.getElementById("txtOther");

    if(oth.checked)
    {
      oth.checked = false;
      txtOt.classList.remove("hidden");
      // txtOthers.value=txtOt;
    }
    if (ic.checked)
    {
      txtOt.classList.add("hidden");
      txtOthers.value("MB");
    }
    if (mb.checked)
    {
      txtOt.classList.add("hidden");
      txtOthers.value("IC");
    }


}
</script>
