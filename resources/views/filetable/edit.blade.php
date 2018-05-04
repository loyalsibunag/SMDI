@extends('layout.master')

@section('content')
<div id="createNewFile">
<center>
<i style="font-size:380%; color:rgba(0, 0, 0, 0.2)" class="glyphicon glyphicon-file"></i>
<h4><b>Update a Record</b></h4></center>
<hr></hr>
    {!! Form::model($filetable , ['method' => 'Post', 'action' => ['PostsController@update',$filetable->id]]) !!}
    {!! method_field('put') !!}
    @include('filetable.form')
    {!! Form::close() !!}
@stop

@section('script')
    {{-- <script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script> --}}
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
          txtOthers.value("MB");
        }
        if (mb.checked)
        {
          txtOt.classList.add("hidden");
          txtOthers.value("IC");
        }


    }
    </script> --}}

@stop
