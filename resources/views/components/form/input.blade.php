@php
    $type = isset($type) ? $type : 'default';
@endphp
@switch($type)
    @case('table-search')
        <label class="search-box">
            <input type="search" name="table[search]" placeholder="Найти...">
            <x-form.input type="submit" content="X" title="Поиск"/>
        </label>
    @break
    @case('submit')
        <input type="submit" class="button blue-button" value="{{ $title }}">
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
    @case('select')
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
            <select
                id="{{ isset($name) ? $name : '' }}"
                name="{{ isset($name) ? $name : '' }}"
            >
                {{ $slot }}
            </select>
        </label>
    @break
    @case('area')
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
            <textarea
                name=""
                id=""
                cols="30"
                rows="10"
            ></textarea>
        </label>
    @break
@endswitch
