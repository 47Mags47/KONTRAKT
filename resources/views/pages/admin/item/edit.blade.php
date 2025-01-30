@extends('layouts.default')
@section('page-name', 'Отчеты')

@push('styles')
    @vite('resources/sass/pages/admin-item-show.sass')
@endpush

@section('content')
    <div class="item-box">
        <x-nav-list.box>
            <x-nav-list.item text="Информация" ico="fa-solid fa-user" link="#item-info-box" active />
        </x-nav-list.box>
        <div class="page">
            <div class="item-info-box">
                <div class="logo-box">
                    <x-input.change-image
                        class="item-logo"
                        name="logo"
                        :preview="asset('storage/' . $item->logo)"
                        value=""
                        form="item-info-form" />
                </div>
                <div class="info-box">
                    <x-form.default
                        method="PUT"
                        class="profile-info-box"
                        sbm="Сохранить"
                        header="Карточка товара"
                        action="{{ route('item.update', compact('maker', 'item')) }}"
                        id="item-info-form"
                        error-show
                        file
                    >
                        {{-- HACK Добавить лист тегов --}}
                        <x-input.text-show  label="Поставщик"       :value="$maker->name"                               />
                        <x-input.text-show  label="Тип"             :value="$item->type->name"                          />
                        <x-input.text       label="Наименование"    :value="$item->name"        name="name" req         />
                        <x-input.textarea   label="Описание"        :value="$item->description" name="description" req  />
                    </x-form.default>
                </div>
            </div>
        </div>
    </div>
@endsection
