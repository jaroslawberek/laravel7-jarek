
$(document).ready(function () { 

    $(".menu-nav").on("click",".menu-item-link", function (e) {
        e.preventDefault();
        if (($(this).attr("href") != "#") && ($(this).attr("href") != "")) {
            //  locationRoute($(this).attr("href"));
            console.log("Menu: " + $(this).attr("href"));
            ajaxRoute($(this).attr("href"), ".content-page", "fixed", function () {
                //tableFormSubmit();              
                // $(".switch-3d-input-jarek").on("click", function () {
                //     alert("check");
                // })
            });
        }
        else{
            console.log("Błędny href");
        }
    });
});


