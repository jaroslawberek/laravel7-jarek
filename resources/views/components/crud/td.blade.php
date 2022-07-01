
    @php
        $textAlignClass = (new App\Helpers\TextAlignment($align))->className();
    @endphp


<td class="{{$textAlignClass}}">
    {{$slot}}
</td>