<div class="container animate__animated animate__fadeInDownBig">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <i class="fa fa-align-justify"> {{$title}}</i>

                <a href="{{route($routeCreate)}}" class="btn btn-primary btn-spinner btn-sm pull-right crud-form-create-click" onCreate="{{$onCreate}}" >
                    <i class="fa fa-plus"></i>
                    &nbsp; Dodaj
                </a>
            </div>
        </div>
            {{$slot}}
    </div>
</div>