@extends('layouts.admin')
@section('page-name', 'Панель администрирования')

@section('nav')
    <x-nav-list.box>
        <x-nav-list.item text="Мониторинг"          ico="fa-solid fa-chart-line"            link="#monitoring"/>
        <x-nav-list.item text="Сервер"              ico="fa-solid fa-server"                link="#server"/>
        <x-nav-list.item text="Поставщики"          ico="fa-solid fa-users"                 link="#suppliers" />
        <x-nav-list.item text="Товары и услуги"     ico="fa-solid fa-box"                   link="#items" />
        <x-nav-list.item text="Профиль"             ico="fa-solid fa-user"                  link="#profile" active />
        <x-nav-list.item text="Настройки"           ico="fa-solid fa-gear"                  link="#settings" />

    </x-nav-list.box>
@endsection

@section('content')
    <div class="monitoring" id="monitoring">Данные о посещениях, просмотрах и тд</div>
    <div class="server"     id="server">Данные сервера</div>
    <div class="suppliers"  id="suppliers">
        <x-table.default header="Поставщики" model="maker" id="suppliers" search>
            <x-slot:filters>
                <x-input.select name="filters[city_code]" label="Город">
                    @foreach ($cityes as $city)
                        <option value="{{ $city->code }}">{{ $city->name }}</option>
                    @endforeach
                </x-input.select>
            </x-slot:filters>
            <x-slot:buttons>
                <a href="{{ route('maker.create') }}" class="button blue-button">
                    <i class="fa-solid fa-plus"></i>
                </a>
            </x-slot:buttons>
            <x-slot:colgroup>
                <col>
                <col width="450px">
                <col>
                <col width="100px">
                <col width="100px">
                <col width="150px">
            </x-slot:colgroup>
            <x-slot:thead>
                <tr>
                    <th>Город</th>
                    <th>Наименование</th>
                    <th>Комментарий</th>
                    <th>ОКП</th>
                    <th>Создан</th>
                    <th>Обновлен</th>
                </tr>
            </x-slot:thead>
            <x-slot:tbody>
                {!! $makerView !!}
            </x-slot:tbody>
        </x-table.default>
    </div>
    <div class="items"   id="items">
        <x-table.default header="Товары и услуги"  model="items" search>
            <x-slot:colgroup>
                <col>
                <col>
                <col>
                <col>
                <col width="100px">
                <col width="100px">
                <col width="150px">
            </x-slot:colgroup>
            <x-slot:thead>
                <tr>
                    <th>Тип</th>
                    <th>Поставщик</th>
                    <th>Наименование</th>
                    <th>Тэги</th>
                    <th>ОКП</th>
                    <th>Создан</th>
                    <th>Обновлен</th>
                </tr>
            </x-slot:thead>
            <x-slot:tbody>
                {!! $itemView !!}
            </x-slot:tbody>
        </x-table.default>
    </div>
    <div class="profile"    id="profile">Данные Администратора</div>
    <div class="settings"   id="settings">Настройки профиля администратора</div>

@endsection
