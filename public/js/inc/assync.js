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
    swal('Input Error','',"error");;
    console.log(data);

    $.each(data, function (key, val) {
        if (val!='') {
            $(key).html(val);
        } else {
            $(key).html('');
        }
    });
 }
///////////
//Default submit success
function dafaultSubmitSuccess() {
    alert("Success");
    window.location.reload();
}
///////////

//Submitting to table with AJAX
export function assyncSubmit(URL, formData, btnId = null, callBackSuccess = null, callBackError = null) {
    $.ajax({
        type: "POST",
        url: URL,
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        beforeSend: ()=>{
            btnId ? $('#'+btnId).attr('disabled', 'disabled') : null;
        },

        success: (data)=>{

            if (data.error){
                callBackError ? callBackError(data) : dafaultSubmitError(data);
            }

            else if (data.success) {
                $('div.input-error').html('');
                callBackSuccess ? callBackSuccess(data) : dafaultSubmitSuccess();
            }

            btnId ?  $('#'+btnId).attr('disabled', false) : null;

        },

        error: (jqXHR, exception)=>{
            alert('Assync Submit Error');
        }

    });

}
