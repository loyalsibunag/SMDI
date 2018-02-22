var deactivate = null;
var reactivate = null;
var update = null;
var updateLink = null;
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
$(document).on('change','#showDeactivated',function(){
    if($(this).prop('checked')){
        $('#inactiveTable').addClass('active');
        $('#activeTable').removeClass('active');
    }else{
        $('#inactiveTable').removeClass('active');
        $('#activeTable').addClass('active');
    }
});
