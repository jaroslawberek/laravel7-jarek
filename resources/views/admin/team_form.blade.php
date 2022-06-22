<div class="container team-form-container animate__animated animate__fadeInDownBig">
    <div class="card w-80 m-auto">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <i class="fa fa-align-justify"> Nowa drużuna</i>

                <button type="submit" form="team-form" role="button"
                    class="btn btn-primary btn-spinner btn-sm pull-right m-b-0 menu-item-link">
                    <i class="fa fa-save"></i>
                    &nbsp; Zapisz
                </button>
            </div>
        </div>
        <div class="card-body">
            <form class="container" action="#" id="team-form">
                <div class="row justify-content-center">
                    <div class="col-md-2 pl-0">
                        <div class="avatar"
                            style="height:100%; width: 100%; position: relative; background-image:url('images/leagues/leagues-empty.png'); background-size: contain; background-position: top; background-repeat: no-repeat">
                            <img class=" img img-avatar" src="" style="width: 100%">
                            <div class="avatar-img-menu d-flex justify-content-around align-items-center"
                                style="position: absolute; top:0; background-color: black; opacity: 0%; width: 100%; height: 100%;">
                                <img class="img img-trash" src="images/avatars/trash-color.jpg" style="width: 50px">
                                <label for="team-avatar">
                                    <img class="img img-folder" src="images/avatars/folder-color2.png"
                                        style="width: 50px">
                                </label>
                                <input id="team_avatar" name="team_avatar" type="file" style="display: none">
                            </div>
                        </div>
                    </div>
                    <div class="col-10 justify-content-end align-items-center">
                        <div class="col-10 justify-content-end align-items-center autocomplete-content">

                            <div class="form-group row align-items-center animate__animated animate__bounceInRight"
                                style="">
                                <input id="nation_id" class="form-control autocomplete nation-autocomplete"
                                    placeholder="Państwo" type="text" name="nation_id"
                                    data-url="nationals.json?j=454ee433dd544" autocomplete="off">
                            </div>

                        </div>
                        <div class="col-10 justify-content-end align-items-center " style="z-index: 10">
                            

                            <div class="form-group row align-items-center animate__animated animate__bounceInRight"
                            style="">
                            <input id="league_id" class="form-control autocomplete league-autocomplete"
                                placeholder="Liga" type="text" name="league_id"
                                data-url="leagues.json?j=454ee453dd344" autocomplete="off">
                        </div>
                        </div>
                                <div class="col-10 justify-content-end align-items-center">
                                    <div class="form-group row align-items-center animate__animated animate__bounceInRight"
                                        style="">
                                        <input type="text" id="team_name" name="team_name" class="form-control"
                                            aria-required="false" aria-invalid="false" placeholder="Nazwa drużyny">
                                        <!--ajax-validing-->
                                        <div id="team_name-invalid-feedback" class="invalid-feedback">
                                            Nie poprawna nazwa
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>

            </form>
        </div>
    </div>
</div>
