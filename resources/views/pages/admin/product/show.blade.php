@extends('layouts.default')
@section('page-name', 'Отчеты')

@push('styles')
    @vite('resources/sass/pages/admin-product-show.sass')
@endpush

@section('content')
    <div class="product-box">
        <x-nav-list.box>
            <x-nav-list.item text="Информация"          ico="fa-solid fa-user"                  link="#product-ifno-box"            active  />
            <x-nav-list.item text="Статистика"          ico="fa-solid fa-square-poll-vertical"  link="#statistic-box"               />
            <x-nav-list.item text="Администрирование"   ico="fa-solid fa-screwdriver-wrench"    link="#administration-box"          />
        </x-nav-list.box>
        <div class="page">
            <div class="product-ifno-box" id="product-ifno-box">
                <div class="logo-box">
                    <x-input.change-image-show class="product-logo" :preview="asset('storage/' . $product->logo)" button="Редактировать" link=""/>
                </div>
                <div class="info-box">
                    <x-form.default-show class="profile-info-box" :header="$product->name">
                        <x-input.text-show      label="Поставщик"               :value="$product->maker->name" />
                        <x-input.text-show      label="Категория"               :value="$product->category->name" />
                        <x-input.text-show      label="Наименование"            :value="$product->name" />
                        <x-input.textarea-show  label="Описание"                :value="$product->description"/>
                    </x-form.default>
                </div>
            </div>

            <div class="statistic-box" id="statistic-box">
                <p class="box-header">Статистика</p>
            </div>
            <div class="administration-box" id="administration-box">
                <p class="box-header">Администрирование</p>
            </div>
        </div>
    </div>
@endsection
