<div class="container animate__animated animate__fadeInDownBig">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <i class="fa fa-align-justify"> Ligi</i>

                <a href="league_form" class="btn btn-primary btn-spinner btn-sm pull-right crud-form-create-click"
                    onCreate="onCreateLeague">
                    <i class="fa fa-plus"></i>
                    &nbsp; Nowa liga
                </a>
            </div>
        </div>

        <div class="card-body">
            <form id="leagues-table-form" class="table-form" action="leagues.php" method="GET">
                <table id="countries-table" class="table table-hover table-listing">
                    <thead>
                        <tr>
                            <th class="w-25 text-left">
                                <a href="#" class="sort-amount" target-sort-input="sort-nantion_name"
                                    form="countries-table-form">
                                    <span>Państwo</span>
                                    <span class="fa fa-sort-amount-asc ml-3 "></span>
                                </a>
                                <input type="hidden" name="sort-nantion_name" id="sort-nantion_name">
                            </th>
                            <th class="w-25 text-center">
                                <a href="#" class="sort-amount" target-sort-input="sort-leauge_name"
                                    form="countries-table-form">
                                    <span class="fa"></span> Liga
                                    <span class="fa fa-sort-amount-asc ml-3 "></span>
                                </a>
                                <input type="hidden" name="sort-leauge_name" id="sort-leauge_name">
                            </th>
                            <th class="w-12 text-left">
                                <a href="#" class="sort-amount" target-sort-input="sort-level"
                                    form="countries-table-form">
                                    <span class="fa"></span> Poziom
                                    <span class="fa fa-sort-amount-asc ml-3 "></span>
                                </a>
                                <input type="hidden" name="sort-active" id="sort-active">
                            </th>
                            <th class="text-right">
                                <a href="#" class="sort-amount" target-sort-input="sort-last-modify"
                                    form="countries-table-form">
                                    <span class="fa"></span>Aktualizował
                                    <span class="fa fa-sort-amount-asc ml-3 "></span>
                                </a>
                                <input type="hidden" name="sort-last-modify" id="sort-last-modify">
                            </th>
                            <th></th>
                        </tr>
                        <tr class="tr-search">
                            <th class="th-search">
                                <input class="form-control form-control-sm search-input" id="search-nation_name"
                                    form="leagues-table-form" name="search-nation_name" type="text">
                            </th>
                            <th class="th-search">
                                <input class="form-control form-control-sm search-input" id="search-league_name"
                                    form="leagues-table-form" name="search-league_name" type="text">
                            </th>

                            <th class="th-search text-left">
                                <div class="d-flex justify-content-center">
                                    <input class="form-control form-control-sm text-right search-level"
                                        id="search-last-modify" name="search-level" type="text">

                                </div>
                            </th>
                            <th class="th-search text-right">
                                <div class="d-flex justify-content-end">
                                    <input class="form-control form-control-sm text-right search-updated_at"
                                        id="search-last-modify" name="search-updated_at" type="text" style="width: 75%">
                                </div>
                            </th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid w-10 float-left" src="images/countries/poland.png">
                                    <span class="ml-1">Polska</span>
                                </div>
                            </td>
                            <td class="text-left">
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid w-10 float-left" src="images/leagues/ekstraklasa.png">
                                    <span class="ml-1">Ekstraklasa</span>
                                </div>
                            </td>
                            <td class="text-center">
                                1
                            </td>
                            <td class="text-right">
                                Administrator
                            </td>
                            <td class="d-flex justify-content-end">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <a href="https://demo.getcraftable.com/admin/articles/1/edit" title="Edit"
                                            role="button" class="btn btn-sm btn-spinner btn-info">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </div>
                                    <form class="col">
                                        <button type="submit" title="Delete" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-nowrap  d-flex align-items-center">
                                <img class="img-fluid w-10 float-left" src="images/countries/deuchland.png">
                                <span class="ml-1">Niemcy</span>
                            </td>
                            <td class="text-left">
                                <img class="img-fluid w-10 float-left" src="images/leagues/bundezliga.png">
                                <span class="ml-1">Bundezliga</span>
                            </td>
                            <td class="text-center">
                                1
                            </td>
                            <td class="text-right">
                                Administrator
                            </td>
                            <td class="d-flex justify-content-end">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <a href="https://demo.getcraftable.com/admin/articles/1/edit" title="Edit"
                                            role="button" class="btn btn-sm btn-spinner btn-info">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </div>
                                    <form class="col">
                                        <button type="submit" title="Delete" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-nowrap  d-flex align-items-center">
                                <img class="img-fluid w-10 float-left" src="images/countries/italy.png">
                                <span class="ml-1">Hiszpania</span>
                            </td>
                            <td class="text-left">
                                <img class="img-fluid w-10 float-left" src="images/leagues/serie_a.png">
                                <span class="ml-1">Serie A</span>
                            </td>
                            <td class="text-center">
                                1
                            </td>
                            <td class="text-right">
                                Administrator
                            </td>
                            <td class="d-flex justify-content-end">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <a href="https://demo.getcraftable.com/admin/articles/1/edit" title="Edit"
                                            role="button" class="btn btn-sm btn-spinner btn-info">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </div>
                                    <form class="col">
                                        <button type="submit" title="Delete" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </form>
            <div>

                <div class="d-flex justify-content-center">
                    <nav>
                        <ul class="pagination sizeClass">
                            <li class="disabled page-item"><span class="page-link"><span
                                        aria-hidden="true">«</span></span>
                                <!---->
                            </li>
                            <li class="active page-item"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                            <li class="page-item"><a href="#" class="page-link">6</a></li>
                            <li class="page-item"><a href="#" class="page-link">7</a></li>
                            <li class="page-item">
                                <!----> <a href="#" aria-label="Next" class="page-link"><span
                                        aria-hidden="true">»</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
