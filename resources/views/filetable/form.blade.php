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
</div>
