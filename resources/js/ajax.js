

function SetLoading(target, typeloading = "circle", position = "absolute", width = null, height = null,
    loadingtext = "") {
    var loading = "";
    //$("<div>").load("loading-" + typeloading, function (res) {
    if (typeloading == "circle")
        loading = $.parseHTML(loading_circle);
    else if (typeloading == "ellipsis")
        loading = $.parseHTML(loading_ellipsis);
        //console.log(res);
        $(target).append(loading);
    $(loading).css("position", position);
    if (width == null)
        $(loading).width($(target).outerWidth());
    else
        $(loading).width(width);
    if (height == null)
        $(loading).height($(target).outerHeight());
    else
        $(loading).height(height);

    $(loading).offset({
        top: $(target).offset().top,
        left: $(target).offset().left
    });
    $(".loading-" + typeloading + " .loading-" + typeloading + "-text").text(loadingtext);
    //});
}
function ajaxRoute(href, target = ".content-page", type = "fixed", callBackSucces) {
    // console.log(href);
    $.ajax({
        type: "GET",
        url: href,
        data: "",
        dataType: "",
        beforeSend: function () {
            if (type === "fixed")
                SetLoading($(target), 'ellipsis', type, null, '100vh', "");
        },
        success: function (response) {
            $(target).html(response);
            callBackSucces();
        },
        complete: function () {
        }
    })
}

function locationRoute(href) {
    SetLoading($(".content-page"), 'circle', 'fixed', null, '100vh', "kutas...");
    setTimeout(function () {
        window.location = href;
    }, AjaxVar.timeOutRoute);
}