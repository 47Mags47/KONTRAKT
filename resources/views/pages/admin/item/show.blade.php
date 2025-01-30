@extends('layouts.default')
@section('page-name', 'Отчеты')

@push('styles')
    @vite('resources/sass/pages/admin-item-show.sass')
@endpush

@section('content')
    <div class="item-box">
        <x-nav-list.box>
            <x-nav-list.item text="Информация"          ico="fa-solid fa-user"                  link="#item-info-box"            active  />
            <x-nav-list.item text="Статистика"          ico="fa-solid fa-square-poll-vertical"  link="#statistic-box"               />
            <x-nav-list.item text="Администрирование"   ico="fa-solid fa-screwdriver-wrench"    link="#administration-box"          />
        </x-nav-list.box>
        <div class="page">
            <div class="item-info-box" id="item-info-box">
                <div class="logo-box">
                    <x-input.change-image-show class="item-logo" :preview="asset('storage/' . $item->logo)" button="Редактировать" link="{{ route('item.edit', compact('maker', 'item')) }}"/>
                </div>
                <div class="info-box">
                    <x-form.default-show class="profile-info-box" :header="$item->name">
                        <x-input.text-show      label="Поставщик"               :value="$item->maker->name" />
                        <x-input.text-show      label="Тип"                     :value="$item->type->name" />
                        <x-input.text-show      label="Наименование"            :value="$item->name" />
                        {{-- HACK Добавить вывод тегов продукта --}}
                        <label class="form-input-label">
                            <span class="label-text">Тэги</span>
                            <ul>
                                @foreach ($item->tags as $tag)
                                    <li>{{ $tag->name }}</li>
                                @endforeach
                            </ul>
                        </label>
                        <x-input.textarea-show  label="Описание"                :value="$item->description"/>
                    </x-form.default>
                </div>
            </div>
            {{-- HACK Добавить окно статистики продукта --}}
            <div class="statistic-box" id="statistic-box">
                <p class="box-header">Статистика</p>
            </div>
            {{-- HACK Добавить окно администрирования продукта --}}
            <div class="administration-box" id="administration-box">
                <p class="box-header">Администрирование</p>
            </div>
        </div>
    </div>
@endsection
