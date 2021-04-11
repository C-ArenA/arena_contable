@props(['status'=>true])
@if ($status)
<div style="width:51px; height:31px; background-color:var(--col-arena-high); border-radius:25px; padding:2.5px; text-align:right;" class="x-table__content-toggle">
    <div style="width:26px; height:26px; background-color:var(--col-arena-cards); border-radius:50%; display:inline-block;">
    </div>
</div>
@else
<div style="width:51px; height:31px; background-color:#c2c2c2; border-radius:25px; padding:2.5px; text-align:left;" class="x-table__content-toggle">
    <div style="width:26px; height:26px; background-color:var(--col-arena-cards); border-radius:50%; display:inline-block;">
    </div>
</div>
@endif
