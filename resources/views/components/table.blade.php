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
                <th class="x-table__htext">Col1</th>
                <th class="x-table__htext">Col2</th>
                <th class="x-table__htext">Col3</th>
            </tr>
        </thead>
        <tbody>
            <tr class="x-table__item">
                <td class="x-table__content">cont11</td>
                <td class="x-table__content">cont12</td>
                <td class="x-table__content">cont13</td>
            </tr>
            <tr class="x-table__item">
                <td class="x-table__content">cont11</td>
                <td class="x-table__content">cont12</td>
                <td class="x-table__content">cont13</td>
            </tr>
        </tbody>
    </table>
</div>
