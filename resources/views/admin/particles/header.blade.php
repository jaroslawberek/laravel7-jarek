<header class="header-nav d-flex justify-content-between align-items-center">

    <div class="top-search  d-flex justify-content-between align-items-center">

    </div>
    <div class="top-accont d-flex justify-content-between align-items-center">
        <div class="top-message  d-flex justify-content-between align-items-center">
            <!-- <i class="fa fa-brands fa-apple"></i> -->
            <i class="material-icons menu-item-icon expand">perm_identity</i>
        </div>
        <div class="top-alarms  d-flex justify-content-between align-items-center">
            <!-- <i class="fa fa-brands fa-apple"></i> -->
            <i class="material-icons menu-item-icon alarm">alarm</i>
        </div>
        <button class="top-profil d-flex justify-content-between align-items-center dropdown-toggle" type="button"
            data-toggle="dropdown">
            <img src="{{ asset('images/pobrane.png') }}">
            <div class="top-profil-name d-flex flex-column justify-content-center align-items-center">
                <p>Jarosław Berek</p>
                <p>Administrator</p>
            </div>
            <!-- <span class="material-icons menu-item-icon expand">expand_more</span> -->
        </button>
        <div class="dropdown-menu drop-down-profil">
            <a class="dropdown-item d-flex justify-content-left align-items-center" href="#">
                <i class="material-icons menu-item-icon alarm">alarm</i>
                Wyloguj
            </a>
            <a class="dropdown-item d-flex justify-content-left align-items-center" href="#">
                <i class="material-icons menu-item-icon alarm">alarm</i>
                Moje dane
            </a>
        </div>
    </div>


</header>