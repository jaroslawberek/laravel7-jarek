
<div class="container team-form-container animate__animated animate__fadeInDownBig">
    <div class="card w-80 m-auto">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <i class="fa fa-align-justify"> Nowe państwo</i>

                <a href="team-form" role="button"
                    class="btn btn-primary btn-spinner btn-sm pull-right m-b-0 menu-item-link">
                    <i class="fa fa-save"></i>
                    &nbsp; Zapisz
                </a>
            </div>
        </div>
        <div class="card-body">
            <form class="container" action="#" id="nations-form">
                <div class="row justify-content-center">
                    <div class="col-md-2 pl-0">
                        <div class="avatar" 
                            style="height:100%; width: 100%; position: relative; background-image:url('{{ asset('images/admin/countries/empty-flag.png') }}'); background-size: contain; background-position: top; background-repeat: no-repeat">
                            <img class=" img img-avatar" src="" style="width: 100%">
                            <div class="avatar-img-menu d-flex justify-content-around align-items-center"
                                style="position: absolute; top:0; background-color: black; opacity: 0%; width: 100%; height: 100%;">
                                <img class="img img-trash" src="images/avatars/trash-color.jpg" style="width: 50px">
                                <label for="team-avatar">
                                    <img class="img img-folder" src="{{ asset('images/admin/avatars/folder-color2.png') }}"
                                        style="width: 50px">
                                </label>
                                <input id="team-avatar" name="t-avatar" type="file" style="display: none">
                            </div>
                        </div>
                    </div>
                    <div class="col-10 justify-content-end align-items-center">
                        <div class="form-group row align-items-center animate__animated animate__bounceInRight"
                            style="">
                                <input type="text" id="nation_name" name="nation_name" class="form-control form-control-success"
                                    aria-required="false" aria-invalid="false">
                                <!--ajax-validing-->
                                <!---->
                                <!-- <div id="name-valid-feedback" class="valid-feedback">
                                    Looks good!
                                </div> -->
                                <div id="country-invalid-feedback" class="invalid-feedback">
                                    Nie poprawna nazwa
                                </div>
                        </div>
                        <div class="form-group row align-items-center has-success">
                                <select class="selectpicker selectpicker-confederations form-control" title="Federacja" name="federation" form="">
                                        <option value="1" data-content="<div class='d-flex align-items-center confederations-select-body '>
                                                <div class='confederations-select-icon'>
                                                    <img class='img confederations-select-img' src='{{ asset('images/admin/confederations/uefa.png') }}'>
                                                </div>
                                                <div class='confederations-select-name'>
                                                    UEFA <i class='confederations-select-name-subtext'>Federacja Europejska</i>
                                                </div>
                                            </div>"> {{-- option --}}
                                        </option>
                                        <option value="2" data-content="<div class='d-flex align-items-center confederations-select-body'>
                                                <div class='confederations-select-icon'>
                                                    <img class='img confederations-select-img' src='{{ asset('images/admin/confederations/afc.png') }}'>
                                                </div>
                                                <div class='confederations-select-name'>
                                                    AFC
                                                </div>
                                             </div>"> {{-- option --}}
                                        </option>
                                        <option value="3" data-content="<div class='d-flex align-items-center confederations-select-body'>
                                                <div class='confederations-select-icon'>
                                                    <img class='img confederations-select-img' src='{{ asset('images/admin/confederations/caf.png') }}'>
                                                </div>
                                                <div class='confederations-select-name'>
                                                    CAF
                                                </div>
                                            </div>"> {{-- option --}}
                                        </option>
                                        <option value="4" data-content="<div class='d-flex align-items-center confederations-select-body'>
                                                <div class='confederations-select-icon'>
                                                    <img class='img confederations-select-img' src='{{ asset('images/admin/confederations/conmebol.png') }}'>
                                                </div>
                                                <div class='confederations-select-name'>
                                                    CONMEBOL
                                                </div>
                                             </div>"> {{-- option --}}
                                        </option>
                                        <option value="5" data-content="<div class='d-flex align-items-center confederations-select-body'>
                                                <div class='confederations-select-icon'>
                                                    <img class='img confederations-select-img' src='{{ asset('images/admin/confederations/ofc.png') }}'>
                                                </div>
                                                <div class='confederations-select-name'>
                                                    OFC
                                                </div>
                                             </div>"> {{-- option --}}
                                        </option>
                                </select>

                                <!---->
                        </div>
                        <div class="form-group form-group-national-team   row align-items-center has-success">
                            <div class="col-md-12 col-xl-10">
                                <input class="form-check-input-sm check-input-castom" type="checkbox" name="national-team"
                                    id="national-team">
                                <label class="form-check-label check-label-custom" for="national-team">
                                    Drużyna narodowa
                                </label>
                            </div>

                        </div>

                    </div>
                </div>

            </form>
        </div>
    </div>
   <div class="form-group row align-items-center">
    <div class="col-form-label col-md-2 text-md-right">
        <label for="companies">Firmy

        </label>

    </div>
    <div class="col-md-10 col-xl-8">

        <input id="companies" class="form-control autocomplete companies-autocomplete" type="text" name="companies" data-url="file.json?j=444"
            autocomplete="off">
    </div>
</div>
</div>
</div>
