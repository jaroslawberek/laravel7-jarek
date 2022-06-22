<div class="card-body">
    <form id="countries-table-form" class="table-form" action="test.php" method="GET">
        <table id="countries-table" class="table table-hover table-listing">
            <thead>
                <tr>
                    <th class="w-50 text-left">
                        <a href="#" class="sort-amount" target-sort-input="sort-name"
                            form="countries-table-form">
                            <span>Państwo</span>
                            <span class="fa fa-sort-amount-asc ml-3 "></span>
                        </a>
                        <input type="hidden" name="sort-name" id="sort-name">
                    </th>
                    <th class="w-15 text-center">
                        <a href="#" class="sort-amount" target-sort-input="sort-active"
                            form="countries-table-form">
                            <span class="fa"></span> Enabled
                            <span class="fa fa-sort-amount-asc ml-3 "></span>
                        </a>
                        <input type="hidden" name="sort-active" id="sort-active">
                    </th>
                    <th class="w-25 text-right">
                        <a href="#" class="sort-amount" target-sort-input="sort-last-modify"
                            form="countries-table-form">
                            <span class="fa"></span>Aktualizowano
                            <span class="fa fa-sort-amount-asc ml-3 "></span>
                        </a>
                        <input type="hidden" name="sort-last-modify" id="sort-last-modify">
                    </th>
                    <th></th>
                </tr>
                <tr class="tr-search">
                    <th class="th-search">
                        <input class="form-control form-control-sm search-input" id="search-name"
                            form="countries-table-form" name="search-name" type="text">
                    </th>
                    <th class="th-search text-center">
                        <div class="d-flex justify-content-center">
                            <select class="form-control form-control-sm search-select" id="search-active"
                                form="countries-table-form" name="search-active" type="text">
                                <option value=""></option>
                                <option value="1">Tak</option>
                                <option value="0">Nie</option>
                            </select>
                        </div>
                    </th>
                    <th class="th-search text-center">
                        <div class="d-flex justify-content-end">
                            <input class="form-control form-control-sm text-right search-input"
                                id="search-last-modify" name="search-last-modify" type="text"
                                style="width: 75%">
                        </div>
                    </th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td class="text-nowrap d-flex align-items-center">
                        <img class="img-fluid w-5 float-left" src="{{ asset('images/admin/countries/poland.png') }}"> 
                        <span class="ml-1">Polska</span>
                    </td>
                    <td class="text-center">
                        <div>
                            <label class="switch-content">
                                <input type="checkbox" class="switch-3d-input-jarek">
                                <span class="slider-switch-3d"></span>
                            </label>
                        </div>
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
                    <td class="text-nowrap d-flex align-items-center">
                        <img class="img-fluid w-5 float-left" src="{{ asset('images/admin/countries/italy.png') }}"> 
                        <span class="ml-1">Włochy</span>
                    </td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center">
                            <input class="form-check-input check-input-castom check-input-castom-enabled"
                                type="checkbox" name="enabled" id="enabled">
                            <label class="form-check-label check-label-custom check-label-custom-enabled"
                                for="enabled"></label>
                        </div>
                    </td>
                    <td class="text-right">
                        Administrator
                    </td>
                    <td class="d-flex justify-content-end">
                        <div class="row no-gutters">
                            <div class="col-auto">
                                <a href="countries-table" title="Edit"  class="btn btn-sm btn-spinner btn-info crud-form-update-click" onUpdate="onUpdateCountry">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </div>
                            <form class="col">
                                <a href="countries-table" title="Delete" class="btn btn-sm btn-danger crud-form-delete-click" onDelete="onDeleteCountry">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </form>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-nowrapc d-flex align-items-center">
                        <img class="img-fluid w-5 float-left" src="{{ asset('images/admin/countries/deuchland.png') }}"> 
                        <span class="ml-1">Niemcy</span>
                    </td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center">
                            <input class="form-check-input check-input-castom check-input-castom-enabled"
                                type="checkbox" name="enabled" id="enabled">
                            <label class="form-check-label check-label-custom check-label-custom-enabled"
                                for="enabled"></label>
                        </div>
                    </td>
                    <td class="text-right">
                        Administrator
                    </td>
                    <td class="d-flex justify-content-end">
                        <div class="row no-gutters">
                            <div class="col-auto">
                                <a href="countries-table" title="Edit"  class="btn btn-sm btn-spinner btn-info crud-form-update-click" onUpdate="onUpdateCountry">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </div>
                            <form class="col">
                                <a href="countries-table" title="Delete" class="btn btn-sm btn-danger crud-form-delete-click" onDelete="onDeleteCountry">
                                    <i class="fa fa-trash-o"></i>
                                </a>
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