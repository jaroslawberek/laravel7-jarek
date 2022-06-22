<x-crud.table_frame title="{{ $title }}" :routeCreate="$routeCreate" :onCreate="$onCreate">
    <x-crud.table.table :headers="[
        ['name' => 'Panstwo', 'sort' => 'name'],
        ['name' => 'Aktywne', 'sort' => 'active'],
        ['name' => 'Panstwo', 'sort' => 'name'],
    ]" :searchs="[
        ['name' => 'name',          'type' => 'text'],
        ['name' => 'active',        'type' => 'boolean'],
        ['name' => 'last-modify',   'type' => 'text'] ,
    ]">
        <tbody>
            @for ($i = 0; $i < 10; $i++)
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
            @endfor
            
        </tbody>
    </x-crud.table.table>
    </x-crud.table>
