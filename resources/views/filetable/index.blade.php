@extends('layout.master')
{{-- @section('style')

@stop --}}

@section('content')
</br>
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"></h3>
                <form class="" action="" method="get">
                  <div class="row justify-content-end">
                    <center>
                    <div class="form-inline box-tools">
                      <input class="form-control col-9" type="text" placeholder="Search" aria-label="Search" name="s" id="search">
                          <button class="btn btn-info" type="submit">Search
                            <i class="glyphicon glyphicon-search"></i>
                          </button>
                      <a href="/filetable/create" class="btn btn-success pull-right" title="New Record"data-toggle="tooltip" data-placement="top">
                        <i class="glyphicon glyphicon-plus"> New Record</i>
                      </a>
                    </div>
                        <label class="checkbox-inline pull-left"><input type="checkbox" id="showDeactivated" name="showDeactivated"> Show<strong> DEACTIVATED </strong>records</label>
                  </center>
                  </div>
                </form>
            </div>
          </br>
            <div class="box-body dataTable_wrapper">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="activeTable">
                        <table id="table" class="table table-bordered table-striped table-responsive">
                          <thead class="thead-inverse">
                                <tr>
                                    <th scope="row">Station Code</th>
                                    <th>Station Name</th>
                                    <th>Location</th>
                                    <th>Month</th>
                                    <th>Day</th>
                                    <th>Year</th>
                                    <th>Weather</th>
                                    <th>PC</th>
                                    <th>Client</th>
                                    <th>Type</th>
                                    <th>Longitude</th>
                                    <th>Latitude</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($filetable as $value)
                                    <tr>
                                        <td>{{$value->Station_Code}}</td>
                                        <td>{{$value->Station_Name}}</td>
                                        <td>{{$value->Location}}</td>
                                        <td>{{$value->Month}}</td>
                                        <td>{{$value->Day}}</td>
                                        <td>{{$value->Year}}</td>
                                        <td>{{$value->Weather}}</td>
                                        <td>{{$value->PC}}</td>
                                        <td>{{$value->Client}}</td>
                                        <td>{{$value->Type}}</td>
                                        <td>{{$value->Longitude}}</td>
                                        <td>{{$value->Latitude}}</td>
                                        <td class="form-inline">
                                            <a href="{{url('/filetable/create')}}" type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Update record" height="300px" width="300px">
                                                <i class="glyphicon glyphicon-edit"></i>
                                            </a>
                                            <button onclick="deactivateShow({{$value->ID}})" data-ID="{{$value->ID}}" type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Deactivate record">
                                                <i class="glyphicon glyphicon-trash"></i>
                                            </button>

                                            {!! Form::open(['method'=>'delete','action' => ['PostsController@destroy',$value->ID],'id'=>'del'.$value->ID]) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $filetable->appends($_GET)->links() }}
                    </div>
                    <div role="tabpanel" class="tab-pane" id="inactiveTable">
                        <table id="dlist" class="table table-striped table-bordered responsive">
                            <thead>
                                <tr>
                                  <th scope="row">Station Code</th>
                                  <th>Station Name</th>
                                  <th>Location</th>
                                  <th>Month</th>
                                  <th>Day</th>
                                  <th>Year</th>
                                  <th>Weather</th>
                                  <th>PC</th>
                                  <th>Client</th>
                                  <th>Type</th>
                                  <th>Longitude</th>
                                  <th>Latitude</th>
                                  <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($deactivate as $value)
                                    <tr class="danger">
                                      <td>{{$value->Station_Code}}</td>
                                      <td>{{$value->Station_Name}}</td>
                                      <td>{{$value->Location}}</td>
                                      <td>{{$value->Month}}</td>
                                      <td>{{$value->Day}}</td>
                                      <td>{{$value->Year}}</td>
                                      <td>{{$value->Weather}}</td>
                                      <td>{{$value->PC}}</td>
                                      <td>{{$value->Client}}</td>
                                      <td>{{$value->Type}}</td>
                                      <td>{{$value->Longitude}}</td>
                                      <td>{{$value->Latitude}}</td>
                                      <td class="text-right">
                                          <button onclick="reactivateShow({{$value->ID}})"type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Reactivate record">
                                              <i class="glyphicon glyphicon-refresh"></i>
                                          </button>
                                          {!! Form::open(['method'=>'patch','action' => ['PostsController@reactivate',$value->ID],'id'=>'reactivate'.$value->ID]) !!}
                                          {!! Form::close() !!}
                                      </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $deactivate->appends($_GET)->links() }}
                    </div>

                @include('layout.reactivateModal')
                @include('layout.deactivateModal')

            </div>
        </div>
    </div>

@stop
@section('script')
      <script src="{{ URL::asset('js/record.js') }}"></script>
@stop
