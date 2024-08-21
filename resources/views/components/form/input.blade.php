@php
    $type = isset($type) ? $type : 'default';
@endphp
@switch($type)
    @case('submit')
        <input type="submit" class="button blue-button">
    @break
    @case('default')
        <label
            @class([
                'column' => isset($column),
                'rows' => !isset($column),
            ])
            for="{{ isset($name) ? $name : '' }}"
        >
            @isset($label)
                <span>{!! $label !!}</span>
            @endisset
            <input
                id="{{ isset($name) ? $name : '' }}"
                name="{{ isset($name) ? $name : '' }}"
                type="{{ isset($inpType) ? $inpType : 'text' }}"
                placeholder="{{ isset($placeholder) ? $placeholder : '' }}"
            >
        </label>
    @break
@endswitch
