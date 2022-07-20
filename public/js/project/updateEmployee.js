import * as shf from "../inc/someHandyFunctions.js";
import * as asnc from "../inc/assync.js";

$(document).ready(function () {
    $('#employeesLink').addClass('active');

    $('#employee_update_form').on('submit', function (e) {
        e.preventDefault();
        asnc.assyncSubmit('employee_update_form');
    });
});
