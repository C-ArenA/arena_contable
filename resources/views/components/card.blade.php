@once
    @push('styles')
        <link rel="stylesheet" href="{{asset('css/components/card.css')}}">
    @endpush
    @push('scripts')

    @endpush
@endonce

<div {{ $attributes->merge(  ['class' => 'card',
                            'id' => 'defaultCardID'.rand(1,100)]    ) }}
>
    {{ $slot }}
</div>