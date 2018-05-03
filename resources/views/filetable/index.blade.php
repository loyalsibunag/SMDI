@extends('layout.master')
{{-- @section('style')

@stop --}}

@section('content')

    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"></h3>
                <form class="" action="" method="get">
                  <div class="row justify-content-end">
                    <center>
                    <div class="form-inline box-tools">
                      <input style="width:400px;" class="form-control col-9" type="text" placeholder="Search" aria-label="Search" name="s" id="search">
                          <button class="btn btn-info" type="submit">Search
                            <i class="glyphicon glyphicon-search"></i>
                          </button>
                          <label class="checkbox-inline pull-left" style="margin-left: -20px; background-color: rgba(255, 0, 0, 0.3);color:black;padding:5px;padding-left:25px; border-radius:3px"><input type="checkbox" id="showDeactivated" name="showDeactivated"> Show<strong> DEACTIVATED </strong>records</label>
                          <a style="margin-right: -25px;" href="/filetable/create" class="btn btn-success pull-right" title="New Record"data-toggle="tooltip" data-placement="top">
                            New Record <i class="glyphicon glyphicon-plus-sign"></i>
                          </a>
                    </div>

                  </center>
                  </div>
                </form>
            </div>
          </br>
            <div class="box-body dataTable_wrapper">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="activeTable">
                        <table id="table" class="table table-bordered table-striped table-responsive" style="width:1220px;border-color: rgba(255,0,0,.3); margin-left: -35px;">
                          <thead>
                                <tr style="color: black;background-color:rgba(255, 0, 0, 0.4);">
                                    <th style="border-color: rgba(255,0,0,.3);" scope="row">Station Code</th>
                                    <th style="border-color: rgba(255,0,0,.3);">Station Name</th>
                                    <th style="border-color: rgba(255,0,0,.3);">Location</th>
                                    <th style="border-color: rgba(255,0,0,.3);">Month</th>
                                    <th style="border-color: rgba(255,0,0,.3);">Day</th>
                                    <th style="border-color: rgba(255,0,0,.3);">Year</th>
                                    {{-- <th >Weather</th>
                                    <th>PC</th>
                                    <th>Client</th>
                                    <th>Type</th>
                                    <th>Longitude</th>
                                    <th>Latitude</th> --}}
                                    <th style="border-color: rgba(255,0,0,.3);" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($filetable as $value)
                                    <tr style="color:black;background:rgba(255,255,255,.9);border-color: black;">
                                        <td style="border-color: rgba(255,0,0,.3);">{{$value->Station_Code}}</td>
                                        <td style="border-color: rgba(255,0,0,.3);">{{$value->Station_Name}}</td>
                                        <td style="border-color: rgba(255,0,0,.3);">{{$value->Location}}</td>
                                        <td style="border-color: rgba(255,0,0,.3);">{{$value->Month}}</td>
                                        <td style="border-color: rgba(255,0,0,.3);">{{$value->Day}}</td>
                                        <td style="border-color: rgba(255,0,0,.3);">{{$value->Year}}</td>
                                        {{-- <td>{{$value->Weather}}</td>
                                        <td>{{$value->PC}}</td>
                                        <td>{{$value->Client}}</td>
                                        <td>{{$value->Type}}</td>
                                        <td>{{$value->Longitude}}</td>
                                        <td>{{$value->Latitude}}</td> --}}
                                        <td style="border-color: rgba(255,0,0,.3);"class="form-inline">
                                            {{-- EDIT --}}

                                            <a "href="{{'/filetable/'.$value->id.'/edit'}}" type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Update record" height="300px" width="300px">
                                                <i class="glyphicon glyphicon-edit"></i>
                                            </a>
                                            {{-- SHOW --}}
                                            <button data-id = "{{ $value->id }}"
                                              data-title= "{{ $value->Station_Code }}"
                                              data-titlename= "{{ $value->Station_Name }}"
                                              data-location="{{ $value->Location }}"
                                              data-month="{{ $value->Month }}"
                                              data-day="{{ $value->Day }}"
                                              data-year="{{ $value->Year }}"
                                              data-weather="{{ $value->Weather }}"
                                              data-pisi="{{ $value->PC }}"
                                              data-client="{{ $value->Client }}"
                                              data-type="{{ $value->Type }}"
                                              data-longitude="{{ $value->Longitude }}"
                                              data-latitude="{{ $value->Latitude }}"
                                              type="button"
                                              class="show-modal btn btn-info btn-sm"
                                              data-toggle="tooltip"
                                              data-placement="top"
                                              title="Show record">
                                                <i class="glyphicon glyphicon-eye-open"></i>
                                            </button>
                                            {{-- {!! Form::open(['method'=>'post','action' => ['PostsController@show',$value->id],'id'=>'show'.$value->id]) !!}
                                            {!! Form::close() !!} --}}
                                            {{-- DELETE --}}
                                            <button onclick="deactivateShow({{$value->id}})" data-ID="{{$value->id}}" type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Deactivate record">
                                                <i class="glyphicon glyphicon-trash"></i>
                                            </button>
                                            {!! Form::open(['method'=>'post','action' => ['PostsController@destroy',$value->id],'id'=>'del'.$value->id]) !!}
                                            {!! method_field('put') !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div >
                          <span>{{ $filetable->appends($_GET)->links() }}</span>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="inactiveTable">
                        <table id="dlist" class="table table-striped table-bordered responsive" style="width:1220px; margin-left: -35px;border-color: rgba(255,0,0,.3);">
                            <thead>
                                <tr style="color: black;background-color:rgba(255, 0, 0, 0.4);">
                                  <th style="border-color: rgba(255,0,0,.3);"scope="row">Station Code</th>
                                  <th style="border-color: rgba(255,0,0,.3);">Station Name</th>
                                  <th style="border-color: rgba(255,0,0,.3);">Location</th>
                                  <th style="border-color: rgba(255,0,0,.3);">Month</th>
                                  <th style="border-color: rgba(255,0,0,.3);">Day</th>
                                  <th style="border-color: rgba(255,0,0,.3);">Year</th>
                                  <th style="border-color: rgba(255,0,0,.3);">Weather</th>
                                  <th style="border-color: rgba(255,0,0,.3);">PC</th>
                                  <th style="border-color: rgba(255,0,0,.3);">Client</th>
                                  <th style="border-color: rgba(255,0,0,.3);">Type</th>
                                  <th style="border-color: rgba(255,0,0,.3);">Longitude</th>
                                  <th style="border-color: rgba(255,0,0,.3);">Latitude</th>
                                  <th style="border-color: rgba(255,0,0,.3);" class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($deactivate as $value)
                                    <tr style="color:black;background:rgba(253,194,181,.9);border-color: black;">
                                      <td style="border-color: rgba(255,0,0,.3);">{{$value->Station_Code}}</td>
                                      <td style="border-color: rgba(255,0,0,.3);">{{$value->Station_Name}}</td>
                                      <td style="border-color: rgba(255,0,0,.3);">{{$value->Location}}</td>
                                      <td style="border-color: rgba(255,0,0,.3);">{{$value->Month}}</td>
                                      <td style="border-color: rgba(255,0,0,.3);">{{$value->Day}}</td>
                                      <td style="border-color: rgba(255,0,0,.3);">{{$value->Year}}</td>
                                      <td style="border-color: rgba(255,0,0,.3);">{{$value->Weather}}</td>
                                      <td style="border-color: rgba(255,0,0,.3);">{{$value->PC}}</td>
                                      <td style="border-color: rgba(255,0,0,.3);">{{$value->Client}}</td>
                                      <td style="border-color: rgba(255,0,0,.3);">{{$value->Type}}</td>
                                      <td style="border-color: rgba(255,0,0,.3);">{{$value->Longitude}}</td>
                                      <td style="border-color: rgba(255,0,0,.3);">{{$value->Latitude}}</td>
                                      <td style="border-color: rgba(255,0,0,.3);" class="text-right">
                                          <button onclick="reactivateShow({{$value->id}})"type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Reactivate record">
                                              <i class="glyphicon glyphicon-refresh"></i>
                                          </button>
                                          {!! Form::open(['method'=>'post','action' => ['PostsController@reactivate',$value->id],'id'=>'reactivate'.$value->id]) !!}
                                          {!! method_field('put') !!}
                                          {!! Form::close() !!}
                                      </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="">
                          {{ $deactivate->appends($_GET)->links() }}
                        </div>


                    </div>

                @include('layout.reactivateModal')
                @include('layout.deactivateModal')
                @include('layout.showModal')

            </div>
        </div>
    </div>

@stop
@section('script')
      <script src="{{ URL::asset('js/record.js') }}"></script>
@stop
