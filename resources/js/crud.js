$(document).ready(function () {

    $(".content-page").on("submit", ".table-form", function (e) {
        e.preventDefault();
        let _this_form = $(this);
        var f = createTableFormVarible(_this_form[0]); //wydobycie elemenu o knkretmym ID
        $.ajax({
            type: _this_form.attr("method"),
            url: _this_form.attr("action"),
            data: JSON.parse(f),
            dataType: "",
            beforeSend: function () {
                SetLoading($("tbody"), 'ellipsis', "absolute", null, null, "");
            },
            success: function (response) {
                //console.log(_this_form.attr("action"));
                //console.log(_this_form.attr("method"));
                //  console.log("Wynik\n" + response);
                $("tbody .loading-ellipsis").remove();
                //$("tbody").html(response);
            }
        });
    });

    $(".content-page").on("click", ".sort-amount", function () {
        // alert("target-sort-input: " + $(this).attr("target-sort-input"));
        var input_amount_id = "#" + $(this).attr("target-sort-input");
        if ($(this).find("span").last().hasClass("fa fa-sort-amount-asc")) {
            $(this).find("span").last().removeClass("fa fa-sort-amount-asc");
            $(this).find("span").last().addClass("fa fa-sort-amount-desc");
            $(input_amount_id).val("desc");
        } else if ($(this).find("span").last().hasClass("fa fa-sort-amount-desc")) {
            $(this).find("span").last().removeClass("fa fa-sort-amount-desc");
            $(input_amount_id).val("");
        } else {
            $(this).find("span").last().addClass("fa fa-sort-amount-asc");
            $(input_amount_id).val("asc");
        }
        $("#" + $(this).attr("form")).submit();
    });

    $(".content-page").on("click", ".crud-form-create-click", function (e) {
        e.preventDefault();
        let v = $(this).attr("onCreate");
        let href = $(this).attr("href");
        console.log("1 "+v);
        console.log(href);
        if (($(this).attr("href") != "#") && ($(this).attr("href") != "")) {
            ajaxRoute(href, ".content-page", "fixed", function () {
                console.log("2 "+v);
                //console.log(href);
                //  $('.selectpicker').selectpicker();
                $(".autocomplete").autoComplete({
                    resolverSettings: {
                        // url: 'file.json?j=9',
                        // queryKey: 'search'
                    },
                    formatResult: function (item) {
                        if ((item.html != "") || (item.html)) {
                            return {
                                value: item.value,
                                text: "",
                                html: item.html
                            };
                        } else {
                            return {
                                value: item.value,
                                text: item.text,
                            };
                        }
                    },
                });

                $(".check-input-castom").on("click", function () {

                });
                $(".avatar").hover(function () {
                    //console.log($(".avatar .img-avatar").attr("src"));
                    if ($(".avatar .img-avatar").attr("src") == "")
                        $(".img-trash").hide();
                    else
                        $(".img-trash").show();
                    $(".avatar .avatar-img-menu").css("opacity", "20%");

                }, function () {
                    // out
                    $(".avatar .avatar-img-menu").css("opacity", "0%");
                });
                if (v) {
                    window[v](href);
                }
            });



        }
    })

    $(".content-page").on("click", ".crud-form-delete-click", function (e) {
        e.preventDefault();
        let v = $(this).attr("onDelete");
        console.log("delete");
        let href = $(this).attr("href");
        if (($(this).attr("href") != "#") && ($(this).attr("href") != "")) {
            ajaxRoute(href, ".content-page", "fixed", function () {
                if (v) {
                    window[v](href);
                }
            });
        }
    });



    $(".content-page").on("click", ".crud-form-update-click", function (e) {
        e.preventDefault();
        let v = $(this).attr("onUpdate");
        let href = $(this).attr("href");
        console.log("update");
        if (($(this).attr("href") != "#") && ($(this).attr("href") != "")) {
            ajaxRoute(href, ".content-page", "fixed", function () {
                if (v) {
                    window[v](href);
                }
            });
        }
    });



});


function createTableFormVarible(formObj) {
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

// $(document).ready(function() {

// });

function CrudForm(selector) {

    //Construktors
    if (!(this instanceof CrudForm)) { // 1
        return new CrudForm(selector);
    }
    //Functions
    this.onValidFields = function (field, msg) {
        if (msg.messages != "OK") {
            $("#" + field).removeClass("ajax-validing");
            $("#" + field).addClass("is-invalid");
            $("#" + field + "-invalid-feedback").text(msg.messages);
            $("#" + field + "-invalid-feedback").addClass("animate__animated animate__bounceInDown");
        } else {
            $("#" + field).removeClass("ajax-validing");
            $("#" + field).removeClass("is-invalid");
            $("#" + field).addClass("is-valid");
            $("#" + field + "_feedback .invalid-feedback").removeClass(
                "animate__animated animate__bounceInDown");
            //                $("#" + field_id + "_error").text("")
            //                $("#" + field_id + "_error").removeClass("animated bounceInDown");
        }
        return this;
    }
    this.onStartValidFields = function (field) {
        $("#" + field).removeClass("is-invalid");
        $("#" + field).removeClass("is-valid");
        $("#" + field).addClass("ajax-validing");
    }
    //Varibles
    this.selector = selector;
    this.ajaxController = "AjaxField"
    this.ajaxFunction = "ajaxField"
}
CrudForm.prototype.checkAjaxFields = function (fields, settings = null, onValidFields = null,
    onStartValidFields = null, onStopValidFields = null) {

    //console.log(this.ajaxController);
    if ((settings) && (!(settings instanceof Object))) { // 1
        throw new TypeError("Nie poprawne parametry: settings nie jest obiektem {}");
    } else {
        this.ajaxController = settings.controller;
        this.ajaxFunction = settings.function;
    }
    if (!(fields instanceof Array)) { // 1
        throw new TypeError("Nie poprawne parametry: fields nie jest tablicą []");
    } else {
        var controller = this.ajaxController;
        var onValid = this.onValidFields;
        var onStartValid = this.onStartValidFields;
        $(this.selector).on("blur", "input, select, textarea", function (event) {
            if (fields.indexOf($(this).attr("name")) >= 0) {
                var data = {
                    'field': $(this).attr("name"),
                    'value': $(this).val()
                }
                var field = $(this).attr("name");
                $.ajax({
                    method: "GET",
                    url: "/" + controller,
                    dataType: "json",
                    data: data,
                    beforeSend: function (xhr) {
                        onStartValid(field);
                    }
                }).done(function (msg) {
                    onValid(field, msg)
                }).fail(function () {
                    //console.log("OnBlur error");
                }).always(function () {
                    //settings['onValidedEnd'](field);
                });
            } else { }
        });
        return this;
    }

}

CrudForm.prototype.jakasInna = function (jebac) {
    //console.log("kogo jebac? Jebać " + jebac);
    return this;
}