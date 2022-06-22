$(document).ready(function () {
    $('.selectpicker-confederations').selectpicker();
    
});

function onCreateCountry(href) {
    //console.log("oncreate");
    CrudForm("#nations-form").checkAjaxFields(['nation_name', 'password'], {'controller': 'country.php'});
    $('.selectpicker-confederations').selectpicker();
    // $(".content-page").on('autocomplete.select', '.companies-autocomplete', function (evt, item) {
    //     // $(this).val(item.text);
    //     $(this).parent().append(item.html_select);
    //     console.log( $(this));
    //     //console.log("autocomplete.select=\n" + item.value);
    //    // console.log(item);
    // });
}

function onStore(href){

}

function onDeleteCountry(href){
    console.log("onDeleteCountry");
}

function onUpdateCountry(href){
    console.log("onUpdateCountry");

}