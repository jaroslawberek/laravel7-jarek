<x-crud.table_frame title="{{ $title }}" :routeCreate="$routeCreate" :onCreate="$onCreate">
    <x-crud.table.table :headers="[
        ['name' => 'Panstwo', 'sort' => 'name'],
        ['name' => 'Aktywne', 'sort' => 'active', 'align'=>'center'],
        ['name' => 'Panstwo', 'sort' => 'name'],'dd'
    ]" :searchs="[
        ['name' => 'name', 'type' => 'text'],
        ['name' => 'active', 'type' => 'boolean'],
        ['name' => 'last-modify', 'type' => 'text'],
    ]">
        @for ($i = 0; $i < 10; $i++)
            <tr>
                <x-crud.td align="left"> tekst  </x-crud-td>
                <x-crud.td align="center"> tekst  </x-crud-td>
                <x-crud.td > tekst  </x-crud-td>
            </tr>
        @endfor

    </x-crud.table.table>
    </x-crud.table>
