@extends('layouts.default')
@section('page-name', 'Отчеты')

@push('styles')
    @vite('resources/sass/pages/admin-item-show.sass')
@endpush

@section('content')
    <x-button.back-button :link="route('admin.maker.show', compact('maker'))" text="Поставщик"/>

    <div class="item-box">
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
                action="{{ route('admin.product.store', compact('maker')) }}"
                id="item-info-form"
                error-show
                file
            >
                <x-input.text-show      label="Поставщик"               :value="$maker->name" />
                <x-input.select name="category_code" label="Категория" req>
                    @foreach ($product_categories as $category)
                        <option value="{{ $category->code }}">{{ $category->name }}</option>
                    @endforeach
                </x-input.select>
                <x-input.text name="name" label="Наименование" req/>
                <x-input.textarea name="description" label="Описание" req/>
            </x-form.default>
        </div>
    </div>
@endsection
