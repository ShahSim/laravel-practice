import * as shf from "../inc/someHandyFunctions.js";
import * as asnc from "../inc/assync.js";

$(document).ready(function () {
    $('title').html('Add Employee');
    $('#employeesLink').addClass('active');

    $('#add_employee_form').on('submit', function (e) {
        e.preventDefault();
        asnc.assyncSubmit('add_employee_form');
    });
    function response(data) {
        console.log(data);
    }
});
