@extends('layouts.default')
@section('page-name', 'Отчеты')

@push('styles')
    @vite('resources/sass/pages/admin-maker-show.sass')
@endpush

@section('content')
    <div class="profile-box">
        <x-nav-list.box>
            <x-nav-list.item text="Профиль"             ico="fa-solid fa-user"                  link="#info-box" active/>
        </x-nav-list.box>

        <div class="sectional-list">
            <div class="info-box" id="info-box">
                <x-input.change-image
                    class="profile-logo"
                    name="logo"
                    {{-- :preview="asset('storage/media/maker/default_logo.png')" --}}
                    value=""
                    form="profile-info-form"
                />
                <x-form.default
                    class="profile-info-box"
                    sbm="Сохранить"
                    header="Профиль поставщика"
                    :action="route('admin.maker.store')"
                    id="profile-info-form"
                    error-show
                    file
                >
                    <x-input.select         name="city_code"    label="Город">
                        @foreach ($cityes as $city)
                            <option value="{{ $city->code }}"
                                @if (old('city_code') == $city->code) selected @endif>
                                {{ $city->name }}
                            </option>
                        @endforeach
                    </x-input.select>
                    <x-input.text           name="name"         label="Наименование"        req />
                    <x-input.text           name="address"      label="Адрес"               req />
                    <x-input.textarea       name="description"  label="Описание"            req />
                    <x-input.adder          name="links"        label="Ссылки на соц. сети"     />
                    <x-input.textarea       name="comment"      label="Комментарий"
                        ph="Комментарий для администраторов (пользователи его не увидят)"/>
                </x-form.default>
            </div>
        </div>
    </div>
@endsection
