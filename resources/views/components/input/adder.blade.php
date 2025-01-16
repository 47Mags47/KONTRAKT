{{--                      Список с возможностью добавить элементы

    |‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|
    |     Аттрибуты      | По умолчанию |            Комментарий            |
    |____________________|______________|___________________________________|
    |‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|
    | label              | Нет          | Тествое наименование поля         |
    | form               | Нет          | Закрепляет ввод к форме           |
    |____________________|______________|___________________________________|

--}}

<div class="list-adder-box">
    <span>{{ $label }}</span>
    <div class="add-box">
        <input type="text">
        <button type="button" class="button blue-button">Добавить</button>
    </div>
    <ul class="item-list">
        <li class="example-item">
            <span></span>
            <input
                type="text"
                value=""
                name="{{ $name }}"
                disabled
                @isset($form)   form="{{ $form }}"      @endisset>
            <i class="fa-solid fa-xmark"></i>
        </li>
    </ul>
</div>
