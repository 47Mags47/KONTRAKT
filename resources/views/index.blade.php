@extends('layouts.page')
@section('page-name', 'Список задач')

@section('body')
<x-table.table w="600">
    <x-slot:colgroup>
        <col width="150px">
        <col>
        <col width="35px">
    </x-slot:colgroup>
    <x-slot:thead>
        <tr>
            <th>Страница</th>
            <th>Задача</th>
            <th></th>
        </tr>
    </x-slot:thead>
    <x-slot:tbody>
        <tr>
            <td>Maker.create</td>
            <td>Загрузка лого</td>
            <td>Да</td>
        </tr>
        <tr>
            <td>Maker.create</td>
            <td>Предпросмотр лого</td>
            <td>Да</td>
        </tr>
        <tr>
            <td>Maker.create</td>
            <td>Вывод городов</td>
            <td>Да</td>
        </tr>
        <tr>
            <td>Maker.create</td>
            <td>Подсчет товаров|Услуг|Просмотров</td>
            <td></td>
        </tr>
        <tr>
            <td>Maker.create</td>
            <td>Сохранение</td>
            <td>Да</td>
        </tr>

        <tr>
            <td>Maker.index</td>
            <td>Кнопка Добавить</td>
            <td>Да</td>
        </tr>
        <tr>
            <td>Maker.index</td>
            <td>Кнопка перейти</td>
            <td></td>
        </tr>
        <tr>
            <td>Maker.index</td>
            <td>Кнопка редактировать</td>
            <td></td>
        </tr>
        <tr>
            <td>Maker.index</td>
            <td>Поисковик</td>
            <td></td>
        </tr>
        <tr>
            <td>Maker.index</td>
            <td>Фильтр таблицы</td>
            <td></td>
        </tr>
        <tr>
            <td>Maker.index</td>
            <td>Пагинация таблицы</td>
            <td></td>
        </tr>

        <tr>
            <td>Maker.show</td>
            <td>Вывод списка товаров и услуг</td>
            <td></td>
        </tr>
        <tr>
            <td>Maker.show</td>
            <td>Кнопка добавление товара|Услуги</td>
            <td></td>
        </tr>

        <tr>
            <td>Item.Create</td>
            <td>Сохранение</td>
            <td></td>
        </tr>

        <tr>
            <td>Index</td>
            <td>Вывод товаров и услуг</td>
            <td></td>
        </tr>
        <tr>
            <td>Index</td>
            <td>Фильтр товаров и услуг</td>
            <td></td>
        </tr>
        <tr>
            <td>Index</td>
            <td>Поиск товаров и услуг</td>
            <td></td>
        </tr>
        <tr>
            <td>Item.show</td>
            <td>Вывод информации о товаре|услуге</td>
            <td></td>
        </tr>
    </x-slot:tbody>
</x-table.table>
@endsection
