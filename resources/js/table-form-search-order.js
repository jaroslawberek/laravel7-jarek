import * as route from '/js/ajax.js';
import  *as form from  '/js/form.js';

$(document).ready(function () {
    console.log("table-form-seach");
    tableFormSubmit();
    
});

export function createTableFormVarible(formObj) {
    var search = {}, sort = {};
    for (let [key, value] of new FormData(formObj)) {
        //console.log(`${key}: ${value}`);
        if ((key.indexOf("sort-") > -1) && (value != "")) {
            sort[key] = value;
        }
        else if ((key.indexOf("search-") > -1) && (value != "")) {
            search[key] = value;
        }
    }
    var tmp = [{
        sort: sort,
        search: search
    }];
    return JSON.stringify(tmp[0]);
}

export function tableFormSubmit(){
    // $(".table-form").on("submit", function (e) {
    //     e.preventDefault();
    //     let _this_form = $(this);
    //     var f = createTableFormVarible(_this_form[0]); //wydobycie elemenu o knkretmym ID
    //     $.ajax({
    //         type: _this_form.attr("method"),
    //         url:  _this_form.attr("action"),
    //         data: JSON.parse(f),
    //         dataType: "",
    //         beforeSend: function () {
    //             route.SetLoading($("tbody"), 'ellipsis', "absolute", null, null, "");
    //         },
    //         success: function (response) {
    //             console.log(_this_form.attr("action"));
    //             console.log(_this_form.attr("method"));
    //             console.log("Wynik\n" + response);  
    //             $("tbody .loading-ellipsis").remove();
    //             //$("tbody").html(response);
    //         }
    //     });               
    // });
    $(".sort-amount").on("click", function(){
        // alert("target-sort-input: " + $(this).attr("target-sort-input"));
            
            
        var input_amount_id ="#" + $(this).attr("target-sort-input");
        if($(this).find("span").last().hasClass    ("fa fa-sort-amount-asc")){
            $(this).find("span").last().removeClass("fa fa-sort-amount-asc");
            $(this).find("span").last().addClass   ("fa fa-sort-amount-desc");
            $(input_amount_id).val("desc");
        }
        else if($(this).find("span").last().hasClass("fa fa-sort-amount-desc")){
            $(this).find("span").last().removeClass ("fa fa-sort-amount-desc");
            $(input_amount_id).val("");
        }
        else{
            $(this).find("span").last().addClass    ("fa fa-sort-amount-asc");
            $(input_amount_id).val("asc");
        }
        $("#" + $(this).attr("form")).submit();
    })
    $(".form-add-click").on("click", function (e) {
        e.preventDefault();
        if (($(this).attr("href") != "#") && ($(this).attr("href") != "")) {
            route.ajaxRoute($(this).attr("href"), ".content-page", "fixed", function () {
                form.CrudForm("#country-form").checkAjaxFields(['country', 'password'], {
                    'controller': 'country.php'
                });

            });
        }
    })
}