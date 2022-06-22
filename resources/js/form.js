import * as route from '/js/ajax.js';
$(document).ready(function () {
    console.log("form");
    $(".form-add-click").on("click", function (e) {
        e.preventDefault();
        if (($(this).attr("href") != "#") && ($(this).attr("href") != "")) {
            route.ajaxRoute($(this).attr("href"), ".content-page", "fixed", function () {
                CrudForm("#country-form").checkAjaxFields(['country', 'password'], {
                    'controller': 'country.php'
                });

            });
        }
    })



});
export function dupa() {
    console.log("hujek mały");
}
export function CrudForm(selector) {

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
            $("#" + field + "_feedback .invalid-feedback").removeClass("animate__animated animate__bounceInDown");
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
                    console.log("OnBlur error");
                }).always(function () {
                    //settings['onValidedEnd'](field);
                });
            } else {
            }
        });
        return this;
    }

}

CrudForm.prototype.jakasInna = function (jebac) {
    console.log("kogo jebac? Jebać " + jebac);
    return this;
}

