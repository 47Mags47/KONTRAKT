@extends('layouts.page')
@section('page-name', 'Поставщик')

@section('body')
    <x-table.table
        create-link="{{ route('maker.create') }}"
        :options="['add', 'filter']"
        :$filters
        add-link="{{ route('maker.create') }}"
    >
        <x-slot:colgroup>
            <col width="200px"> <!-- Город -->
            <col> <!-- Наименование -->
            <col> <!-- Адрес -->
            <col> <!-- Описание -->
            <col width="150px"> <!-- Ссылка -->
            <col width="100px"> <!-- Логотип -->
            <col width="50px"> <!-- Перейти -->
            <col width="50px"> <!-- Редактировать -->
            <col width="50px"> <!-- Удалить -->
        </x-slot:colgroup>
        <x-slot:thead>
            <tr>
                <th>Город</th>
                <th>Наименование</th>
                <th>Адрес</th>
                <th>Описание</th>
                <th>Ссылка</th>
                <th>Логотип</th>
                <th colspan="3"></th>
            </tr>
        </x-slot:thead>
        <x-slot:tbody>
            @foreach ($makers as $maker)
                <tr>
                    <td>
                        <div class="table-text-box">
                            {!! $maker->city->name !!}
                        </div>
                    </td>
                    <td>
                        <div class="table-text-box">
                            {!! $maker->name !!}
                    </td>
                    </div>
                    <td>
                        <div class="table-text-box">
                            {!! $maker->adres !!}
                    </td>
                    </div>
                    <td>
                        <div class="table-text-box">
                            {!! $maker->short_description !!}
                    </td>
                    </div>
                    <td>
                        <div class="table-text-box">
                            {!! $maker->link !!}
                    </td>
                    </div>
                    <td>
                        <div class="table-image-box">
                            <img src="{{ asset($maker->logo) }}" alt="">
                        </div>
                    </td>
                    <td>
                        <div class="table-button-box">
                            <x-link.blue-button href="{{ route('maker.show', ['maker'=>$maker->id]) }}" title="Перейти" />
                        </div>
                    </td>
                    <td>
                        <div class="table-button-box">
                            <x-link.blue-button href="" title="Радактировать" />
                        </div>
                    </td>
                    <td>
                        <div class="table-button-box">
                            <x-link.red-button href="{{ route('maker.delete', ['maker'=>$maker->id]) }}" title="Удалить" />
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-slot:tbody>
    </x-table.table>
@endsection
