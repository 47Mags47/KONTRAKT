{{--                      Текстовый ввод

    |‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|
    |     Аттрибуты      | По умолчанию |            Комментарий            |
    |____________________|______________|___________________________________|
    |‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|
    | label              | Нет          | Тествое наименование поля         |
    | name               | Нет          | Наименования поля                 |
    | ph                 | Нет          | Подсказка                         |
    | req                | False        | Обязательное ли поле              |
    | disable            | Galse        | Отключено ли поле                 |
    | form               | Нет          | Закрепляет ввод к форме           |
    | info               | Нет          | Комментарий                       |
    |____________________|______________|___________________________________|

--}}

@isset($label)
    <label @class([
            'form-input-label',
            'req' => isset($req),
        ])
        for="{{ $name }}"
    >
        <span class="label-text">{{ $label }}</span>
    @endisset

    <span class="info">{{ $info ?? '' }}</span>

    <input
        type        ="{{ isset($type) ? $type : 'text' }}"
        name        ="{{ $name }}"
        id          ="{{ $name }}"
        value       ="{{ old($name) ?? (isset($value) ? $value : '') }}"

        @isset($form)   form="{{ $form }}"      @endisset
        @isset($ph)     placeholder="{{ $ph }}" @endisset

        @required(isset($req))
        @disabled(isset($disable))
    >

    @isset($label)
    </label>
@endisset
