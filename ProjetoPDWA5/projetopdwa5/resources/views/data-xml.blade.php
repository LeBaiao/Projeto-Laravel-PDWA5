{!! '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' !!}
<data>
@foreach($registro as $item)
    <item>
        <tipo>{{ $item->tipo }}</tipo>
        <material>{{ $item->material }}</material>
        <data_fabricacao>{{ $item->data_fabricacao }}</data_fabricacao>
        <peso>{{ $item->peso }}</peso>
        <novo>{{ $item->novo == 0 ? "false" : "true" }}</novo>
        <cor>{{ $item->cor }}</cor>
    </item>
@endforeach
</data>
