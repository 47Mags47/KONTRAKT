{{--                      Ввод изображения с предпросмотром

    |‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|
    |     Аттрибуты      | По умолчанию |            Комментарий            |
    |____________________|______________|___________________________________|
    |‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|
    | preview            | Нет          | Изображение по умолчанию          |
    | name               | Нет          | Наименования поля                 |
    | form               | Нет          | Закрепляет ввод к форме           |
    |____________________|______________|___________________________________|

--}}

<x-form.default class="{{ 'change-image-box ' . $attributes['class'] }}">
    <div class="preview">
        @if (session($name) === null and isset($preview) === false)
            <img src="" alt="">
            <div class="placeholder-box">
                Выберите изображение
            </div>
        @else
            <img src="{{ session($name) !== null ? asset('storage/' . session()->pull($name)) : $preview }}" alt="">
        @endif
    </div>
    <label for="{{ $name }}" class="change-image-label">
        <span class="button blue-button">Изменить фото</span>
        <input
            type="file"
            name="{{ $name }}"
            id="{{ $name }}"
            @isset($form)
                form="{{ $form }}"
            @endisset
        >
    </label>
</x-form.default>
