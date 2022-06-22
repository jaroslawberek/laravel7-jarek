$(document).ready(function () {
    
});

function onCreateLeague(href) {
    console.log("onCreateLeague");
    CrudForm("#league-form").checkAjaxFields(['league_name'], {'controller': 'country.php'});

    $(".content-page").on('autocomplete.select', '.league-autocomplete', function (evt, item) {
        $(this).parent().append(item.html_select);
        $(this).val(item.value);
        console.log("autocomplete.select=\n" + item.value);
        console.log(item.html_select);
    });

    $(".content-page").on("click",".national-filed-close",function(){
        $("#nation_id").val("");
    })
}