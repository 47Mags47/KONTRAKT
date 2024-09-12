@extends('layouts.page')
@section('page-name', 'Поставщик')

@section('include-vite')
    @vite('resources/sass/pages/admin/maker.sass')
@endsection

@section('body')
    <div class="maker-box">
        <x-form.box class="info full" no-sbm files method="POST" action="{{ route('maker.store') }}">
            <x-split.box>
                <x-split.element w="240" class="logo-box">
                    <img src="{{ asset($maker->logo) }}" alt="">
                </x-split.element>
                <x-split.element w="350">
                    <x-form.input type="select" label="Город" name="city_id" disabled>
                        <option value="{{ $maker->city->id }}">{{ $maker->city->name }}</option>
                    </x-form.input>
                    <x-form.input label="Наименование" name="name" value="{{ $maker->name }}" disabled />
                    <x-form.input label="Адрес" name="adres" value="{{ $maker->adres }}" disabled />
                    <x-form.input label="Ссылка" name="link" value="{{ $maker->link }}" disabled />
                </x-split.element>
                <x-split.element w="350">
                    <x-form.input type="area" label="Краткое описание" name="short_description"
                        value="{{ $maker->short_description }}" disabled />
                </x-split.element>
                <x-split.element w="500">
                    <x-form.input type="area" label="Полное описание" name="long_description"
                        value="{{ $maker->long_description }}" disabled />
                </x-split.element>
                <x-split.element>
                    <x-text.box-header title="Информация" />
                    <x-text.info title="Товаров:" value="0" />
                    <x-text.info title="Услуг:" value="0" />
                    <x-text.info title="Просмотров:" value="0" />
                    <x-link.blue-button href="" title="Редактировать" />
                </x-split.element>
            </x-split.box>
        </x-form.box>
        <div class="items">
            <x-table.table :options="['search', 'add']" add-link="{{ route('item.create', ['maker' => $maker->id]) }}">
                <x-slot:thead>
                    <tr>
                        <th>Тип</th>
                        <th>Категоря</th>
                        <th>Наименование</th>
                        <th>Краткое описание</th>
                        <th>Полное описание</th>
                        <th>Ссылка</th>
                        <th colspan="2"></th>
                    </tr>
                </x-slot:thead>
                <x-slot:tbody>
                    @foreach ($maker->items as $item)
                        <tr>
                            <td>
                                <div class="table-text-box">{{ $item->category->type->name }}</div>
                            </td>
                            <td>
                                <div class="table-text-box">{{ $item->category->name }}</div>
                            </td>
                            <td>
                                <div class="table-text-box">{{ $item->name }}</div>
                            </td>
                            <td>
                                <div class="table-text-box">{{ $item->short_description }}</div>
                            </td>
                            <td>
                                <div class="table-text-box">{{ $item->long_description }}</div>
                            </td>
                            <td>
                                <div class="table-button-box">
                                    @if ($item->link)
                                        <x-link.blue-button href="{{ $item->link }}" title="Перейти" />
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="table-button-box">
                                    <x-link.blue-button href="{{ route('item.edit', ['maker'=>$maker, 'item'=>$item]) }}" title="Редактировать" />
                                </div>
                            </td>
                            <td>
                                <div class="table-button-box">
                                    <x-link.red-button href="" title="Удалить" />
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </x-slot:tbody>
            </x-table.table>
        </div>
    </div>
@endsection
