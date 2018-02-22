@if(count($errors) > 0)
  @foreach($errors->all() as $error)
    {{-- @if (Session::has('flash_message')) --}}
    <div class="alert alert-danger {{ Session::has('flash_message_important') ? 'alert-important' : ''}}">
      {{-- @if(Session::has('flash_message_important')) --}}
        <button type="button" class= "close" data-dismiss="alert" area-hidden="true">&times;</button>
      {{-- @endif --}}
      {{$error}}
    </div>
    {{-- @endif --}}
  @endforeach
@endif

@if(session('success'))
  <div class = "alert alert-success">
    <button type="button" class= "close" data-dismiss="alert" area-hidden="true">&times;</button>
    {{session('success')}}
  </div>
@endif

@if(session('error'))
  <div class = "alert alert-danger">
    <button type="button" class= "close" data-dismiss="alert" area-hidden="true">&times;</button>
    {{session('error')}}

  </div>
@endif

<script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/3.2.0/js/bootstrap.min.js"></script>

<script>
  $('div.alert').not('alert.important').delay(3000).slideUp(300);
</script>
