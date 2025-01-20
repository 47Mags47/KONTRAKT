@extends('layouts.default')
@section('page-name', 'Отчеты')

@push('styles')
    @vite('resources/sass/pages/admin-product-show.sass')
@endpush

@section('content')
    <div class="product-box">
        <x-nav-list.box>
            <x-nav-list.item text="Информация"          ico="fa-solid fa-user"                  link="#product-ifno-box"            active  />
        </x-nav-list.box>
        <div class="page">
            <div class="product-ifno-box">
                <div class="logo-box">
                    <x-input.change-image
                        class="product-logo"
                        name="logo"
                        :preview="asset('storage/media/product/default_logo.png')"
                        value=""
                        form="product-info-form" />
                </div>
                <div class="info-box">
                    <x-form.default
                        class="profile-info-box"
                        sbm="Сохранить"
                        header="Карточка товара"
                        action="{{ route('admin.product.store', compact('maker')) }}"
                        id="product-info-form"
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
        </div>
    </div>
@endsection
