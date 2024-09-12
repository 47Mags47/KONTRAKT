<div
    @class([
        'form-box',
        'mini-scroll'=> isset($scroll) ,
        'center' => isset($center),
        $attributes['class']
    ])
>
    @php
        $form_method = isset($method) ? 'POST' : 'GET'
    @endphp
    <form
        action="{{ isset($action) ? $action : '' }}"
        method="{{ $form_method }}"
        id="{{ isset($id) ? $id : '' }}"
        enctype="{{ isset($files) ? 'multipart/form-data' : 'application/x-www-form-urlencoded' }}"
        style="{{isset($w) ? 'width:' . $w . 'px' : ''}}"
    >
        @csrf
        @isset($method)
            @method($method)
        @endisset
        @isset($header)
            <p class="form-header">{{ $header }}</p>
        @endisset
        {{ $slot }}
        @isset($other)
            <div class="other-box">
                {{ $other }}
            </div>
        @endisset

        @if (!isset($noSbm))
            <x-form.input type="submit" title="{{ isset($submit) ? $submit : 'Отправить' }}" />
        @endif

    </form>
</div>
