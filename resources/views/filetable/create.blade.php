@extends('layout.master')

@section('content')
<div id="createNewFile">
<center>
<i style="font-size:380%; color:rgba(0, 0, 0, 0.2)" class="glyphicon glyphicon-file"></i>
<h4><b>Create New File</b></h4></center>
<hr></hr>
<strong><strong>
{!! Form::open(['action'=> 'PostsController@store', 'method' => 'POST']) !!}
  <center>
  <div  style="background:white; ">
    <div class="form-group{{$errors->sCode}}" style="margin-bottom:15px;" >
      <!-- {{Form::label('sCode', 'Station Code:', ['style' => 'c'])}} -->
      <!-- {{Form::text('sCode', '', ['class=' => 'form-control', 'placeholder' => 'Station Code', 'cols' => 20, 'rows' => 10,'style' => 'border-radius:0px;'])}} -->
      <input name="sCode" type="text" placeholder="Station Code" style="width:60%;height:40px;" autofocus></input>
      <br>
      <small class="text-danger">{{ $errors->first('sCode') }}</small>
    </div>

    <div class="form-group{{$errors->sName}}" style="margin-bottom:15px;" >
      <!-- {{Form::label('sName', 'Station Name: ')}} -->
      <!-- {{Form::text('sName', '', ['class=' => 'form-control', 'placeholder' => 'Station Name!'])}} -->
      <input name="sName" type="text" placeholder="Station Name" style="width:60%;height:40px;"></input>
      <br>
      <small class="text-danger">{{ $errors->first('sName') }}</small>
    </div>


  <div class="form-group{{$errors->loc}}" style="margin-bottom:15px;">
    <!-- {{Form::label('loc', 'Location: ')}} -->
    <!-- {{Form::text('loc', '', ['class=' => 'form-control', 'placeholder' => 'Location!'])}} -->
    <input name="loc" type="text" placeholder="Location" style="width:60%;height:40px;"></input>
    <br>
    <small class="text-danger">{{ $errors->first('loc') }}</small>
  </div>

  <div class="form-group{{$errors}}" style="margin-bottom:15px;">
    <!-- {{Form::label('year', 'Year: ')}} -->
    <!-- {{Form::text('year', '', ['class=' => 'form-control', 'placeholder' => 'Year!'])}} -->
    <!-- {{Form::label('month', 'Month: ')}} -->
    <!-- {{Form::text('month', '', ['class=' => 'form-control', 'placeholder' => 'Month!'])}} -->
    <!-- {{Form::label('day', 'Day: ')}} -->
    <!-- {{Form::text('day', '', ['class=' => 'form-control', 'placeholder' => 'Day!'])}} -->
    <input name="month" type="text" placeholder="Month" style="width:30%;height:40px;"></input>
    <input name="day" type="text" placeholder="Day" style="width:10%;height:40px;"></input>
    <input name="year" type="text" placeholder="Year" style="width:19%;height:40px;"></input>
    <br>
    <small class="text-danger">{{ $errors->first('year','Date field is required') }}</small>

  </div>

  <div class="form-group" >
    <!-- {{Form::label('weather', 'Weather: ')}} -->
    <!-- {{Form::text('weather', '', ['class=' => 'form-control', 'placeholder' => 'Weather!'])}} -->
    <input name="weather" type="text" placeholder="Weather" style="width:60%;height:40px;"></input>
  </div>

  <div class="form-group{{$errors->pc}}" style="margin-bottom:15px;">
    <!-- {{Form::label('pc', 'PC: ')}} -->
    <!-- {{Form::text('pc', '', ['class=' => 'form-control', 'placeholder' => 'c:\desktop\SMDI'])}} -->
    <input name="pc" type="text" placeholder="PC (c:\desktop\SMDI)" style="width:60%;height:40px;"></input>
    <br>
    <small class="text-danger">{{ $errors->first('pc') }}</small>
  </div>


  <div class="form-group{{$errors->client}}" style="margin-bottom:15px;">
    <!-- {{Form::label('client', 'Client: ')}} -->
    <!-- {{Form::text('client', '', ['class=' => 'form-control', 'placeholder' => 'Client!'])}} -->
    <input name="client" type="text" placeholder="Client" style="width:60%;height:40px;"></input>
    <br>
    <small class="text-danger">{{ $errors->first('client') }}</small>
  </div>


  <div class="form-group{{$errors->type}}" style="margin-bottom:15px;">
    <!-- {{Form::label('type', 'Type: ')}} -->
    <!-- {{Form::text('type', '', ['class=' => 'form-control', 'placeholder' => 'Type!'])}} -->
    <input name="type" type="text" placeholder="Type" style="width:60%;height:40px;"></input>
    <br>
    <small class="text-danger">{{ $errors->first('type') }}</small>
  </div>


  <div class="form-group{{$errors->longhi}}" style="margin-bottom:15px;">
    <!-- {{Form::label('longhi', 'Longitude: ')}} -->
    <!-- {{Form::text('longhi', '', ['class=' => 'form-control', 'placeholder' => 'Longitude!'])}} -->
    <input name="longhi" type="text" placeholder="Longitude" style="width:60%;height:40px;"></input>
    <br>
    <small class="text-danger">{{ $errors->first('longhi') }}</small>
  </div>
  <div class="form-group{{$errors->lati}}" style="margin-bottom:15px;">
    <!-- {{Form::label('lati', 'Latitude: ')}} -->
    <!-- {{Form::text('lati', '', ['class=' => 'form-control', 'placeholder' => 'Latitude!'])}} -->
    <input name="lati" type="text" placeholder="Latitude" style="width:60%;height:40px;"></input>
    <br>
    <small class="text-danger">{{ $errors->first('lati') }}</small>
  </div>
</div>
<div style="margin-bottom:5%;">

  <!-- {{Form::submit('Submit', ['class' => 'btn btn-primary'])}} -->
  <!-- {{Form::reset('Clear', ['class' => 'btn btn-success'])}} -->

  <!-- <input type="submit"></input> -->
  <input type="submit" value="Submit" class="btn btn-primary" style="background-color: black; border-radius: 0px;width:20%;height:40px;"></input>
  <input name="Clear" type="reset" value="Clear" class="btn btn-primary" style="background-color: black; border-radius: 0px;width:20%;height:40px;"></input>
  <a href="{{ URL('/filetable') }}" class="btn btn-primary" style="background-color: black; border-radius: 0px;width:20%;height:40px;">Go Back</a>
</div>
</center>
{!! Form::close() !!}

 </strong></strong>

</div>
@endsection
{{-- <script>
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
      txtOt.value.add("MB");
    }
    if (mb.checked)
    {
      txtOt.classList.add("hidden");
      txtOt.value.add("IC");
    }
}
</script> --}}
