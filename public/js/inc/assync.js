//Get table data
export function assyncGet(URL, callback = null) {

    $.ajax({
        type: "GET",
        url: URL,
        dataType: "json",
        success: (data)=>{
            callback ? callback(data) : null;
        },

        error: (jqXHR, exception)=>{
            alert('Error encounterd while getting data');
        }
    });
}
////////////////

//Default submit error
function dafaultSubmitError(data) {
    data.responseJSON ? alert(data.responseJSON.message) : alert('Assync submit error');
    // $.each(data, function (key, val) {
    //     if (val!='') {
    //         $(key).html(val);
    //     } else {
    //         $(key).html('');
    //     }
    // });
 }
///////////
//Default submit success
function dafaultSubmitSuccess(data) {
    data.message ? alert(data.message) : alert("Success");
    data.redirect ? location.href=data.redirect : location.reload();
}
///////////

//Submitting to table with AJAX
export function assyncSubmit(targetId,  callBackSuccess = null, callBackError = null) {

    $.ajax({
        type: $('#'+targetId).attr('method'),
        url: $('#'+targetId).attr('action'),
        data:  new FormData(document.getElementById(targetId)),
        processData: false,
        contentType: false,
        dataType: "JSON",
        beforeSend: ()=>{
            $('#'+targetId+' button[type="submit"]').attr('disabled', true);
        },

        success: (data)=>{
            callBackSuccess ? callBackSuccess(data) : dafaultSubmitSuccess(data);
            $('#'+targetId+' button[type="submit"]').attr('disabled', false);
        },

        error: (jqXHR, exception)=>{
            callBackError ? callBackError(jqXHR) : dafaultSubmitError(jqXHR);
            $('#'+targetId+' button[type="submit"]').attr('disabled', false);
        }

    });
    //////////////////

}
