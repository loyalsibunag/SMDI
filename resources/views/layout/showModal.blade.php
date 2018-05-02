<div id="showModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">
                      Show Record
                    </h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Station Code:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title_show" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="titlename">Station Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="titlename_show" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="location">Location:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="location_show" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="complete">Date:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="complete_show" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="weather">Weather:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="weather_show" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pisi">PC:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pisi_show" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="client">Client:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="client_show" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="type">Type:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="type_show" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="longitude">Longitude:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="longitude_show" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="latitude">Latitude:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="latitude_show" readonly>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick='kahitAno({ filename: "stock-data.csv" });'>
                        <i class="glyphicon glyphicon-save"></i> Save Record
                      </button>
                      {{-- <a href="{{ URL::to( 'exportSolo/' . $value->id ) }}">
                        <button class="btn btn-default" style="color:yellow; background:gray;">Download Excel
                          <i class="glyphicon glyphicon-circle-arrow-down"></i>
                        </button>
                      </a> --}}
                      {{-- <a href='#'  onclick='downloadCSV({ filename: "stock-data.csv" });'>Download CSV</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
