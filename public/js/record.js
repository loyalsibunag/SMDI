var deactivate = null;
var reactivate = null;
var show = null;
var sCode = null;
var update = null;
var updateLink = null;

var Station_Code = null;
var Station_Name = null;
var loc = null;
var weather = null;
var pc = null;
var client = null;
var type = null;
var longitude = null;
var latitude = null;
var month= null;
var day = null;
var year = null;

function deactivateShow(ID){
    deactivate = ID;
    $('#deactivateModal').modal('show');
}
$('#deactivate').on('click', function (){
    $('#del'+deactivate).submit();
});


function reactivateShow(ID){
    reactivate = ID;
    $('#reactivateModal').modal('show');
}
$('#reactivate').on('click', function (){
    $('#reactivate'+reactivate).submit();
});


// function showShow(ID, STATION_CODE){
//     show = ID;
//     $('#id_show').val($(this).data('id'));
//     $('#Station_Name_show').val($(this).data('Station_Name'));
//     $('#showModal').modal('show');
// }
// $('#btnShow').on('click', function (ID, STATION_CODE){
//       alert(show);
// });
var csv = 'CSV';
$(document).on('click', '.show-modal', function() {
  $('#id_show').val($(this).data('id'));
  $('#title_show').val($(this).data('title'));
  $('#titlename_show').val($(this).data('titlename'));
  $('#location_show').val($(this).data('location'));
  month = ($(this).data('month'));
  day =($(this).data('day'));
  year =($(this).data('year'));
  complete = month+ ' ' +day + ', ' +year
  $('#complete_show').val(complete);
  $('#weather_show').val($(this).data('weather'));
  $('#pisi_show').val($(this).data('pisi'));
  $('#client_show').val($(this).data('client'));
  $('#type_show').val($(this).data('type'));
  $('#longitude_show').val($(this).data('longitude'));
  $('#latitude_show').val($(this).data('latitude'));
  $('#showModal').modal('show');
  Station_Code = ($(this).data('title'));
  Station_Name = ($(this).data('titlename'));
  loc  = ($(this).data('location'));
  weather = ($(this).data('weather'));
  pc = ($(this).data('pisi'));
  client = ($(this).data('client'));
  type = ($(this).data('type'));
  longitude = ($(this).data('longitude'));
  latitude = ($(this).data('latitude'));
});

$('#btnShow').on('click', function (){

  var total = [Station_Code, Station_Name]
      alert(total);
});

$(document).on('change','#showDeactivated',function(){
    if($(this).prop('checked')){
        $('#inactiveTable').addClass('active');
        $('#activeTable').removeClass('active');
    }else{
        $('#inactiveTable').removeClass('active');
        $('#activeTable').addClass('active');
    }
});
function convertArrayOfObjectsToCSV(args) {
        var result, ctr, keys, columnDelimiter, lineDelimiter, data;

        data = args.data || null;
        if (data == null || !data.length) {
            return ' ';
        }

        columnDelimiter = args.columnDelimiter || '';
        lineDelimiter = args.lineDelimiter || '\n';

        keys = Object.keys(data[0]);

        result = '';
        result += keys.join(lineDelimiter);
        result += lineDelimiter;

        data.forEach(function(item) {
            ctr = 0;
            keys.forEach(function(key) {
                if (ctr > 0) result += columnDelimiter;

                result += item[key];
                ctr++;
            });
            result += lineDelimiter;
        });

        return result;
    }
function kahitAno(args)
{
    var total = [Station_Code, Station_Name, loc, month, day, year, weather, pc, client, type, longitude, latitude];

    var data, filename, link;

        var csv = convertArrayOfObjectsToCSV({
            data: total
        });
        if (csv == null) return;

        filename = args.filename || 'export.csv';

        if (!csv.match(/^data:text\/csv/i)) {
            csv = 'data:text/csv;charset=utf-8,' + csv;
        }
        data = encodeURI(csv);

        link = document.createElement('a');
        link.setAttribute('href', data);
        link.setAttribute('download', filename);
        link.click();
      alert(total);
}
