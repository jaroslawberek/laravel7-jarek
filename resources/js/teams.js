$(document).ready(function () {
    
});

function onCreateTeam(href) {
    console.log("onCreateTeam huj");
    CrudForm("#team-form").checkAjaxFields(['team_name'], {'controller': 'country.php'});

    $(".content-page").on('autocomplete.select', '.nation-autocomplete', function (evt, item) {
        console.log("jajajajajja");
        $(this).parent().append(item.html_select);
        $(this).val(item.value);
        console.log("autocomplete.select=\n" + item.value);
        console.log(item.html_select);
    });
    $(".content-page").on('autocomplete.select', '.league-autocomplete', function (evt, item) {
        $(this).parent().append(item.html_select);
        $(this).val(item.value);
        console.log("autocomplete.select=\n" + item.value);
        console.log(item.html_select);
    });

    $(".content-page").on("click",".national-filed-close",function(){
        $("#nation_id").val("");
    })
    $(".content-page").on("click",".leangue-filed-close",function(){
        $("#leangue_id").val("");
    })
}