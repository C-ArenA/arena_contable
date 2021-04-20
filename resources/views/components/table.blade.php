<div class="x-table__container" {{$attributes}}>
    @once
    @push('styles')
        <link rel="stylesheet" href="{{asset('css/components/table.css')}}">
    @endpush
    @push('scripts')

    @endpush
    @endonce
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->

    <table class="x-table">
        <thead class="x-table__head">
            <tr class="x-table__header">
                @foreach ($headerArray as $hcol)
                <th class="x-table__htext">{{$hcol}}</th>
                @endforeach
            </tr>
        </thead>

        <tbody >

            @foreach ($contentDBArray as $row)
            @if ($where($row))
            <tr class="x-table__item" id={{$findID($row)}}>
                @foreach ($row as $colName => $col)
                @if ($isToggleColumn($colName))
                    {{-- <td class="x-table__content">{{$col? "YES":"NO"}}</td> --}}
                    <td class="x-table__content"><x-toggle :status="$col"></x-toggle></td>

                @else
                    <td class="x-table__content">{{$col}}</td>
                @endif
                @endforeach
            </tr>
            @endif
            @endforeach

        </tbody>

    </table>
</div>
