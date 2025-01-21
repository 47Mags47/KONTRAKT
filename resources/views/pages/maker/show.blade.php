@extends('layouts.default')
@section('page-name', 'Отчеты')

@push('styles')
    @vite('resources/sass/pages/admin-maker-show.sass')
@endpush

@section('content')
    <div class="profile-box">
        <x-nav-list.box>
            <x-nav-list.item text="Профиль"             ico="fa-solid fa-user"                  link="#info-box"            active  />
            <x-nav-list.item text="Товары"              ico="fa-solid fa-box"                   link="#product-box"                 />
            <x-nav-list.item text="Услуги"              ico="fa-solid fa-bell-concierge"        link="#service-box"                 />
            <x-nav-list.item text="Статистика"          ico="fa-solid fa-square-poll-vertical"  link="#statistic-box"               />
            <x-nav-list.item text="Администрирование"   ico="fa-solid fa-screwdriver-wrench"    link="#administration-box"          />
        </x-nav-list.box>

        <div class="sectional-list">
            <div class="info-box" id="info-box">
                <x-input.change-image-show class="profile-logo" :preview="asset('/storage/' . $maker->logo)" button="Редактировать" :link="route('admin.maker.edit', compact('maker'))" />
                <x-form.default-show class="profile-info-box" header="Профиль поставщика">
                    <x-input.text-show      label="Город"               :value="$maker->city->name" />
                    <x-input.text-show      label="Наименование"        :value="$maker->name" />
                    <x-input.text-show      label="Адрес"               :value="$maker->adres" />
                    <x-input.textarea-show  label="Описание"            :value="$maker->description" />
                    <x-input.adder-show     label="Ссылки на соц. сети" :items="$maker->links" link/>
                    <x-input.textarea-show  label="Комментарий"         :value="$maker->comment" />
                </x-form.default-show>
            </div>

            <div class="product-box" id="product-box">
                <p class="box-header">Товары</p>
                <ul class="sectional-list">
                    <li class="add-item-box">
                        <a href="{{ route('admin.product.create', compact('maker')) }}">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </li>
                    @foreach ($maker->products as $product)
                        <li>
                            <div class="image-box">
                                <img src="{{ asset('storage/' . $product->logo) }}" alt="">
                            </div>
                            <a href="{{ route('admin.product.show', compact('product')) }}" class="button blue-button">Перейти</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="service-box" id="service-box">
                <p class="box-header">Услуги</p>
                <ul class="sectional-list">
                    <li class="add-item-box">
                        <a href="">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </li>
                </ul>
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
