//Appending items to a select element. Only takes a one dimentional array and element ID as parameter
export function appendToSelect(data, elementId) {
    data.forEach( key =>{
        $('#'+elementId).append($('<option>').val(key).text(key));
    });
}

export function reAppendToSelect(data, elementId) {
    $('#'+elementId).html('<option value="" selected disabled hidden></option>');
    data.forEach( key =>{
        $('#'+elementId).append($('<option>').val(key).text(key));
    });
}
///////////

//Appending to a table body
export function appendToTableBody(data, tableBodyId, order = null) {

    var dataKeys = order ? Object.keys(data[0]) : null;

    $.each(data, function (key, val) {
        var tds = '';

        if (!order) {
            $.each(val, function (key2, val2) {
                tds += `<td>${val2}</td>`;
           });
        }
        else {
            $.each(order, function (key2, val2) {
                tds += `<td>${val[dataKeys[val2]]}</td>`;
            });
        }

        $(`#${tableBodyId}`).append(`<tr class="text-center">${tds}</tr>`);
    });
}
////////////

//Change Image preview
export function changeImgPreview(target, previewId) {
    var oFReader = new FileReader();

        oFReader.readAsDataURL(target.files[0])
        oFReader.onload = (e)=>{
            $('#'+previewId).attr('src', e.target.result);
        };
}
///////////

//Load Page
export function loadPage(url) {
    alert("Success");
    window.location.href=url;
}
/////////////////

//Close modals
export function closeModals() {
    $('.modal').modal('hide');
}
///////////////////////
