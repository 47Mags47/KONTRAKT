@extends('layouts.page')
@section('page-name', 'Поставщик')

@section('include-vite')
    @vite('resources/sass/pages/admin/maker.sass')
@endsection

@section('body')
    <div class="maker-box">
        <x-form.box class="info full" no-sbm files method="POST" action="{{ route('maker.store') }}">
            <x-split.box>
                <x-split.element w="240">
                    <x-form.input type="logo-circle" name="logo" empty hidden />
                </x-split.element>
                <x-split.element w="350">
                    <x-form.input type="select" label="Город">
                        <option value="">--- Не выбрано ---</option>
                    </x-form.input>
                    <x-form.input label="Наименование" name="name" />
                    <x-form.input label="Адрес" name="adres" />
                    <x-form.input label="Ссылка" name="link" />
                </x-split.element>
                <x-split.element w="350">
                    <x-form.input type="area" label="Краткое описание" name="short_description" />
                </x-split.element>
                <x-split.element w="500">
                    <x-form.input type="area" label="Полное описание" name="long_description" />
                </x-split.element>
                <x-split.element>
                    <x-text.box-header title="Информация" />
                    <x-text.info title="Товаров:" value="0" />
                    <x-text.info title="Услуг:" value="0" />
                    <x-text.info title="Просмотров:" value="0" />
                    <x-form.input type="submit" title="Сохранить" />
                </x-split.element>
            </x-split.box>
        </x-form.box>
        <div class="items">
            <x-table.table>
                <x-slot:options>
                    <x-table.filter-box create-link="" >
                        <x-table.filter title="Тип" pole="type_id" />
                        <x-table.filter title="Категория" pole="category_id" />
                    </x-table.filter-box>
                </x-slot:options>
                <x-slot:thead>
                    <tr>
                        <th>Тип</th>
                        <th>Категоря</th>
                        <th>Наименование</th>
                        <th>Краткое описание</th>
                        <th>Полное описание</th>
                        <th>Ссылка</th>
                    </tr>
                </x-slot:thead>
                <x-slot:tbody>

                </x-slot:tbody>
            </x-table.table>
        </div>
    </div>
@endsection
