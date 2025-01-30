@extends('layouts.default')
@section('page-name', 'Отчеты')

@push('styles')
    @vite('resources/sass/pages/admin-item-show.sass')
@endpush

@section('content')
    <div class="item-box">
        <x-nav-list.box>
            <x-nav-list.item text="Информация"          ico="fa-solid fa-user"                  link="#item-info-box"            active  />
        </x-nav-list.box>
        <div class="page">
            <div class="item-info-box">
                <div class="logo-box">
                    <x-input.change-image
                        class="item-logo"
                        name="logo"
                        :preview="asset('storage/media/product/default_logo.png')"
                        value=""
                        form="item-info-form" />
                </div>
                <div class="info-box">
                    <x-form.default
                        class="profile-info-box"
                        sbm="Сохранить"
                        header="Карточка товара"
                        action="{{ route('item.store', compact('maker')) }}"
                        id="item-info-form"
                        error-show
                        file
                    >
                        {{-- HACK Добавить лист тегов --}}
                        <x-input.text-show  label="Поставщик"       :value="$maker->name" />
                        @if ($type)
                            <x-input.text label="Тип" name="type_code" value="{{ $type->name }}" disabled/>
                            <input type="hidden" name="type_code" value="{{ $type->code }}">
                        @else
                            <x-input.select label="Тип" name="type_code" req>
                                @foreach ($types as $type)
                                    <option value="{{ $type->code }}">{{ $type->name }}</option>
                                @endforeach
                            </x-input.select>
                        @endif
                        <x-input.text       label="Наименование"    name="name" req/>
                        <x-input.textarea   label="Описание"        name="description" req/>
                    </x-form.default>
                </div>
            </div>
        </div>
    </div>
@endsection
