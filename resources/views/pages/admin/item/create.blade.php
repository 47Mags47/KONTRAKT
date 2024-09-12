@extends('layouts.page')
@section('page-name', 'Item')

@section('body')
    <x-form.box action="{{ route('item.store', ['maker' => $maker]) }}" method="POST" header="Добавление" center>
        <x-form.input name="type_id" type="select" label="Тип">
            @foreach ($types as $type)
                <option value="{{ $type->id }}" @selected(old('type_id') == $type->id)>{!! $type->name !!}</option>
            @endforeach
        </x-form.input>
        <x-form.input name="category_id" type="select" label="Категория">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{!! $category->name !!}</option>
            @endforeach
        </x-form.input>
        <x-form.input name="name" label="Наименование" />
        <x-form.input name="link" label="Ссылка" />
        <x-form.input name="short_description" type="area" label="Краткое описание" />
        <x-form.input name="long_description" type="area" label="Полное описание" rows="10" />
    </x-form.box>
@endsection
