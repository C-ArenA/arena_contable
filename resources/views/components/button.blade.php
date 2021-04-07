@once
    @push('styles')
        <link rel="stylesheet" href="{{asset('css/components/button.css')}}">
    @endpush
    @push('scripts')

    @endpush
@endonce
@props(['onclick'=>"void()", "id"=>"defaultButton"])
<button id={{$id}} class="x-button" onclick={{$onclick}} type="button">{{$slot}}</button>