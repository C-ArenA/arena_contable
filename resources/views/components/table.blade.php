<div class="x-table__container">
    @once
    @push('styles')
        <link rel="stylesheet" href="{{asset('css/components/table.css')}}">
    @endpush
    @push('scripts')

    @endpush
    @endonce
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->

    <table class="x-table">
        <thead>
            <tr class="x-table__header">
                @foreach ($headerArray as $hcol)
                <th class="x-table__htext">{{$hcol}}</th>
                @endforeach
            </tr>
        </thead>

        <tbody >

            @foreach ($contentDBArray as $row)
            @if ($where())
            <tr class="x-table__item">
                @foreach ($row as $col)
                <td class="x-table__content">{{$col}}</td>
                @endforeach
            </tr>
            @endif
            @endforeach

        </tbody>

    </table>
</div>
