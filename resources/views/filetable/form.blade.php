
<center>
<div  style="background:white; ">
  <div class="form-group" >
    <!-- {{Form::label('sCode', 'Station Code:', ['style' => 'c'])}} -->
    <!-- {{Form::text('sCode', '', ['class=' => 'form-control', 'placeholder' => 'Station Code', 'cols' => 20, 'rows' => 10,'style' => 'border-radius:0px;'])}} -->
    <input name="sCode" type="text" placeholder="Station Code" value={{$filetable->Station_Code}} style="width:60%;height:40px;" autofocus></input>
  </div>

  <div class="form-group">
    <!-- {{Form::label('sName', 'Station Name: ')}} -->
    <!-- {{Form::text('sName', '', ['class=' => 'form-control', 'placeholder' => 'Station Name!'])}} -->
    <input name="sName" type="text" placeholder="Station Name" value={{$filetable->Station_Name}} style="width:60%;height:40px;"></input>
  </div>


<div class="form-group">
  <!-- {{Form::label('loc', 'Location: ')}} -->
  <!-- {{Form::text('loc', '', ['class=' => 'form-control', 'placeholder' => 'Location!'])}} -->
  <input name="loc" type="text" placeholder="Location" value={{$filetable->Location}} style="width:60%;height:40px;"></input>
</div>

<div class="form-group">
  <!-- {{Form::label('year', 'Year: ')}} -->
  <!-- {{Form::text('year', '', ['class=' => 'form-control', 'placeholder' => 'Year!'])}} -->
  <!-- {{Form::label('month', 'Month: ')}} -->
  <!-- {{Form::text('month', '', ['class=' => 'form-control', 'placeholder' => 'Month!'])}} -->
  <!-- {{Form::label('day', 'Day: ')}} -->
  <!-- {{Form::text('day', '', ['class=' => 'form-control', 'placeholder' => 'Day!'])}} -->
  <input name="month" type="text" placeholder="Month" value={{$filetable->Month}} style="width:30%;height:40px;"></input>
  <input name="day" type="text" placeholder="Day" value={{$filetable->Day}} style="width:10%;height:40px;"></input>
  <input name="year" type="text" placeholder="Year" value={{$filetable->Year}} style="width:19%;height:40px;"></input>
</div>

<div class="form-group">
  <!-- {{Form::label('weather', 'Weather: ')}} -->
  <!-- {{Form::text('weather', '', ['class=' => 'form-control', 'placeholder' => 'Weather!'])}} -->
  <input name="weather" type="text" placeholder="Weather" value={{$filetable->Weather}} style="width:60%;height:40px;"></input>
</div>

<div class="form-group">
  <!-- {{Form::label('pc', 'PC: ')}} -->
  <!-- {{Form::text('pc', '', ['class=' => 'form-control', 'placeholder' => 'c:\desktop\SMDI'])}} -->
  <input name="pc" type="text" placeholder="PC (c:\desktop\SMDI)" value={{$filetable->PC}} style="width:60%;height:40px;"></input>
</div>


<div class="form-group">
  <!-- {{Form::label('client', 'Client: ')}} -->
  <!-- {{Form::text('client', '', ['class=' => 'form-control', 'placeholder' => 'Client!'])}} -->
  <input name="client" type="text" placeholder="Client" value={{$filetable->Client}} style="width:60%;height:40px;"></input>
</div>


<div class="form-group">
  <!-- {{Form::label('type', 'Type: ')}} -->
  <!-- {{Form::text('type', '', ['class=' => 'form-control', 'placeholder' => 'Type!'])}} -->
  <input name="type" type="text" placeholder="Type" value={{$filetable->Type}} style="width:60%;height:40px;"></input>
</div>


<div class="form-group">
  <!-- {{Form::label('longhi', 'Longitude: ')}} -->
  <!-- {{Form::text('longhi', '', ['class=' => 'form-control', 'placeholder' => 'Longitude!'])}} -->
  <input name="longhi" type="text" placeholder="Longitude" value={{$filetable->Longitude}} style="width:60%;height:40px;"></input>
</div>
<div class="form-group">
  <!-- {{Form::label('lati', 'Latitude: ')}} -->
  <!-- {{Form::text('lati', '', ['class=' => 'form-control', 'placeholder' => 'Latitude!'])}} -->
  <input name="lati" type="text" placeholder="Latitude" value={{$filetable->Latitude}} style="width:60%;height:40px;"></input>
</div>
</div>
<div style="margin-bottom:5%;">

<!-- {{Form::submit('Submit', ['class' => 'btn btn-primary'])}} -->
<!-- {{Form::reset('Clear', ['class' => 'btn btn-success'])}} -->

<!-- <input type="submit"></input> -->
<input type="submit" value="Update" class="btn btn-primary" style="background-color: black; border-radius: 0px;width:20%;height:40px;"></input>
<input name="Reset" type="reset" value="Reset" class="btn btn-primary" style="background-color: black; border-radius: 0px;width:20%;height:40px;"></input>
<a href="{{ URL('/filetable') }}" class="btn btn-primary" style="background-color: black; border-radius: 0px;width:20%;height:40px;">Go Back</a>
</div>
</center>





<!-- TEST -->

<!--
<div class="well" style="background:gray; color:black;">
  <div class="form-group">
    {{Form::label('sCode', 'Station Code:')}}
    {{Form::text('sCode', $filetable->Station_Code, ['class=' => 'form-control-sm-12'])}}
  </div>
  <div class="well">
    <div class="form-group">
      {{Form::label('sName', 'Station Name: ')}}
      {{Form::text('sName', $filetable->Station_Name, ['class=' => 'form-control'])}}
    </div>
  </div>
<div class="well">
  <div class="form-group">
    {{Form::label('loc', 'Location: ')}}
    {{Form::text('loc', $filetable->Location, ['class=' => 'form-control', 'placeholder' => 'Location!'])}}
  </div>
</div>
<div class="well">
  <div class="form-group">
    {{Form::label('year', 'Year: ')}}
    {{Form::text('year', $filetable->Year, ['class=' => 'form-control', 'placeholder' => 'Year!'])}}
    {{Form::label('month', 'Month: ')}}
    {{Form::text('month', $filetable->Month, ['class=' => 'form-control', 'placeholder' => 'Month!'])}}
    {{Form::label('day', 'Day: ')}}
    {{Form::text('day', $filetable->Day, ['class=' => 'form-control', 'placeholder' => 'Day!'])}}
  </div>
</div>
<div class="well">
  <div class="form-group">
    {{Form::label('weather', 'Weather: ')}}
    {{Form::text('weather', $filetable->Weather, ['class=' => 'form-control', 'placeholder' => 'Weather!'])}}
  </div>
</div>
<div class="well">
  <div class="form-group">
    {{Form::label('pc', 'PC: ')}}
    {{Form::text('pc', $filetable->PC, ['class=' => 'form-control', 'placeholder' => 'c:\desktop\SMDI'])}}
  </div>
</div>
<div class="well">
  <div class="form-group">
    {{Form::label('client', 'Client: ')}}
    {{Form::text('client', $filetable->Client, ['class=' => 'form-control', 'placeholder' => 'Client!'])}}
  </div>
</div>
<div class="well">
  <div class="form-group">
    {{Form::label('type', 'Type: ')}}
    {{Form::text('type', $filetable->Type, ['class=' => 'form-control', 'placeholder' => 'Type!'])}}
  </div>
</div>

<div class="well">
  <div class="form-group">
    {{Form::label('longhi', 'Longitude: ')}}
    {{Form::text('longhi', $filetable->Longitude, ['class=' => 'form-control', 'placeholder' => 'Longitude!'])}}
  </div>
  <div class="form-group">
    {{Form::label('lati', 'Latitude: ')}}
    {{Form::text('lati', $filetable->Latitude, ['class=' => 'form-control', 'placeholder' => 'Latitude!'])}}
  </div>
</div>
<div class="well">
  {{Form::submit('Update', ['class' => 'btn btn-warning'])}}
  {{Form::reset('Reset', ['class' => 'btn btn-success'])}}
  <a href="{{ URL('/filetable') }}" class="btn btn-info">Go Back</a>
</div>
</div> -->
