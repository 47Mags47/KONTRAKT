{{--                      Список с возможностью добавить элементы

    |‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|
    |     Аттрибуты      | По умолчанию |            Комментарий            |
    |____________________|______________|___________________________________|
    |‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|
    | label              | Нет          | Тествое наименование поля         |
    | form               | Нет          | Закрепляет ввод к форме           |
    | info               | Нет          | Комментарий                       |
    |____________________|______________|___________________________________|

--}}

<div @class([
    'list-adder-box'
])>
    <span class="label-text">{{ $label }}</span>
    <span class="info">{{ $info ?? '' }}</span>
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
        @foreach (old($name) ?? (isset($list) ? $list : []) as $id => $item)
            <li>
                @if (isset($link))
                    <a href="{{ $item }}">{{ $item }}</a>
                @else
                    <span>{{ $item }}</span>
                @endif

                <input
                    type="text"
                    value="{{ $item }}"
                    name="{{ $name }}[{{ $id }}]"
                    @isset($form)   form="{{ $form }}"      @endisset
                >
                <i class="fa-solid fa-xmark"></i>
            </li>
        @endforeach
    </ul>
</div>
