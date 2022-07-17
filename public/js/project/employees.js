import * as shf from "../inc/someHandyFunctions.js";
import * as asnc from "../inc/assync.js";

$(document).ready(function () {
    // $('title').html('Employees Page');
    $('#employeesLink').addClass('active');

    asnc.assyncGet(getEmployees,gotEmployee)
    function gotEmployee(data) {
        var dataPhones = [];

        $.each(data, function (key, value) {
            dataPhones.push(value.phones);
        });

        $.each(dataPhones, function (key, value) {
            let phoneNumber = [];
            $.each(value, function (key, value) {
                 phoneNumber.push(value.number);
            });
            data[key].phones = phoneNumber.join(', ');
        });

        var order = [0,1,2,3,5,4,6];
        shf.appendToTableBody(data, 'employeesTableBody',order);
    }
});
