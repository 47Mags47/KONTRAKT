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
                :preview="asset('storage/' . $maker->logo)"
                value=""
                form="profile-info-form"
            />
            <x-form.default
                class="profile-info-box"
                sbm="Сохранить"
                header="Профиль поставщика"
                :action="route('admin.maker.update', compact('maker'))"
                method="put"
                id="profile-info-form"
                error-show
                file
            >
                <x-input.text-show                          label="Город"                   :value="$maker->city->name" />
                <x-input.text           name="name"         label="Наименование"        req :value="$maker->name"/>
                <x-input.text           name="address"      label="Адрес"               req :value="$maker->address"/>
                <x-input.textarea       name="description"  label="Описание"            req :value="$maker->description"/>
                <x-input.adder          name="links"        label="Ссылки на соц. сети"     :list="$maker->links" />
                <x-input.textarea       name="comment"      label="Комментарий"             :value="$maker->comment"
                    ph="Комментарий для администраторов (пользователи его не увидят)"/>
            </x-form.default>
        </div>
    </div>
</div>
@endsection
