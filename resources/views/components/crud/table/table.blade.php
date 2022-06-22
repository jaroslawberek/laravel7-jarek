<div class="card-body">
    <form id="countries-table-form" class="table-form" action="test.php" method="GET">
        <table id="countries-table" class="table table-hover table-listing">
            <thead>
                <tr>
                    @foreach ($headers as $header)
                        <th class="w-50 text-left">
                            <a href="#" class="sort-amount" target-sort-input="sort-{{ $header['sort'] }}"
                                form="countries-table-form">
                                <span>{{ $header['name'] }}</span>
                                <span class="fa fa-sort-amount-asc ml-3 "></span>
                            </a>
                            <input type="hidden" name="sort-{{ $header['sort'] }}" id="sort-{{ $header['sort'] }}">
                        </th>
                    @endforeach


                    <th></th>
                </tr>
                <tr class="tr-search">
                    @foreach ($searchs as $search)
                        <th class="th-search">
                            @if ($search['type'] == 'boolean')
                                <div class="d-flex justify-content-center">
                                    <select class="form-control form-control-sm search-select"
                                        id="search-{{ $search['name'] }}" form="countries-table-form"
                                        name="search-{{ $search['name'] }}" type="text">
                                        <option value=""></option>
                                        <option value="1">Tak</option>
                                        <option value="0">Nie</option>
                                    </select>
                                </div>
                            @else
                                <input type="{{ $search['type'] ?? '' }}"
                                    class="form-control form-control-sm search-input"
                                    id="search-{{ $search['name'] ?? ''}}" form="countries-table-form" name="search-{{ $search['name']??''}}"
                                    type="text">
                            @endif

                        </th>
                    @endforeach


                </tr>
            </thead>
            {{$slot}}
        </table>
    </form>
    <div>

        <div class="d-flex justify-content-center">
            <nav>
                <ul class="pagination sizeClass">
                    <li class="disabled page-item"><span class="page-link"><span aria-hidden="true">«</span></span>
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
