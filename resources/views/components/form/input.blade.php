@php
    $type = isset($type) ? $type : 'default';
    if(isset($name)){
        $value = old($name, isset($value) ? $value : '');
    }
@endphp
@switch($type)
    @case('table-search')
        <label class="search-box">
            <input type="search" name="table[search]" placeholder="Найти...">
            <x-form.input type="submit" content="X" title="Поиск"/>
        </label>
    @break
    @case('submit')
        <input type="submit" class="button blue-button" value="{{ isset($title) ? $title : 'Отправить' }}">
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
                value="{{ $value }}"
                @disabled(isset($disabled))
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
                @disabled(isset($disabled))
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
                'textarea-label'
            ])
            for="{{ isset($name) ? $name : '' }}"
        >
        @isset($label)
            <span>{!! $label !!}</span>
        @endisset
            <textarea
                name="{{ isset($name) ? $name : '' }}"
                id="{{ isset($name) ? $name : '' }}"
                @disabled(isset($disabled))
            >{{ isset($value) ? $value : '' }}</textarea>
        </label>
    @break
    @case('file')
        <label for="">
            <input
                type="file"
                name="{{ isset($name) ? $name : '' }}"
                id="{{ isset($name) ? $name : '' }}"
                @class(['no-display' => isset($hidden)])
                value="{{ $value }}"
            >
        </label>
    @break
    @case('logo-circle')
        <label for="{{ isset($name) ? $name : '' }}" class="logo-circle">
            <input
                type="file"
                name="{{ isset($name) ? $name : '' }}"
                id="{{ isset($name) ? $name : '' }}"
                class="no-display"
                value="{{ $value }}"
                accept="image/*"
            >
            <div class="hovered">
                <div class="preview">
                    <img src="{{ isset($scr) ? asset($src) : asset('storage/maker-logos/default_logo.png') }}" alt="">
                </div>
                <div class="clicked-box">
                    <i class="fa fa-camera fa-4x" aria-hidden="true"></i>
                </div>
            </div>
        </label>
    @break
@endswitch
