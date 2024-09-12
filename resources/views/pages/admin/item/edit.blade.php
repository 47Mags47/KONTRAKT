@extends('layouts.page')
@section('page-name', 'Item')

@section('body')
    <x-form.box action="{{ route('item.update', compact('maker', 'item')) }}" method="PUT" header="Добавление" center submit="Сохранить">
        <x-form.input name="type_id" type="select" label="Тип">
            @foreach ($types as $type)
                <option value="{{ $type->id }}" @selected($item->category->type->id == $type->id)>{!! $type->name !!}</option>
            @endforeach
        </x-form.input>
        <x-form.input name="category_id" type="select" label="Категория">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @selected($item->category->id == $category->id)>{!! $category->name !!}</option>
            @endforeach
        </x-form.input>
        <x-form.input name="name" label="Наименование" value="{{ $item->name }}" />
        <x-form.input name="link" label="Ссылка" value="{{ $item->link }}" />
        <x-form.input name="short_description" type="area" label="Краткое описание" value="{{ $item->short_description }}" />
        <x-form.input name="long_description" type="area" label="Полное описание" rows="10" value="{{ $item->long_description }}" />
    </x-form.box>
@endsection
