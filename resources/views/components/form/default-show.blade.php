<div @class([
    'form',
    'default-form',
    'default-form-show',
    'has-shadow' => isset($shadow),
    $attributes['class'],
])>

    @isset($header)
        <p class="box-header form-header">{!! $header !!}</p>
    @endisset

    {{ $slot }}

</div>
