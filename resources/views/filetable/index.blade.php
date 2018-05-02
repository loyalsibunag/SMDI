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
                    </div>
                    <br/>
                        <a href="/filetable/create" class="btn btn-success pull-right" title="New Record"data-toggle="tooltip" data-placement="top">
                          New Record <i class="glyphicon glyphicon-hand-up"></i>
                        </a>
                        <label class="checkbox-inline pull-left" style="background-color: gray;color:black;"><input type="checkbox" id="showDeactivated" name="showDeactivated"> Show<strong> DEACTIVATED </strong>records</label>

                  </center>
                  </div>
                </form>
            </div>
          </br>
            <div class="box-body dataTable_wrapper">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="activeTable">
                        <table id="table" class="table table-bordered table-striped table-responsive" style="border-color: blue;">
                          <thead class="thead-inverse">
                                <tr style="color: black;background:gray;">
                                    <th scope="row">Station Code</th>
                                    <th>Station Name</th>
                                    <th>Location</th>
                                    <th>Month</th>
                                    <th>Day</th>
                                    <th>Year</th>
                                    {{-- <th>Weather</th>
                                    <th>PC</th>
                                    <th>Client</th>
                                    <th>Type</th>
                                    <th>Longitude</th>
                                    <th>Latitude</th> --}}
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($filetable as $value)
                                    <tr class="success" style="color:black;">
                                        <td>{{$value->Station_Code}}</td>
                                        <td>{{$value->Station_Name}}</td>
                                        <td>{{$value->Location}}</td>
                                        <td>{{$value->Month}}</td>
                                        <td>{{$value->Day}}</td>
                                        <td>{{$value->Year}}</td>
                                        {{-- <td>{{$value->Weather}}</td>
                                        <td>{{$value->PC}}</td>
                                        <td>{{$value->Client}}</td>
                                        <td>{{$value->Type}}</td>
                                        <td>{{$value->Longitude}}</td>
                                        <td>{{$value->Latitude}}</td> --}}
                                        <td class="form-inline">
                                            {{-- EDIT --}}
                                            <a href="{{'/filetable/'.$value->id.'/edit'}}" type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Update record" height="300px" width="300px">
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
                        <table id="dlist" class="table table-striped table-bordered responsive">
                            <thead>
                                <tr style="color:black; background:gray;">
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
                                    <tr class="danger" style="color:black;">
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
