{{--                      Стандартная форма

    |‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|
    |     Аттрибуты      | По умолчанию |            Комментарий            |
    |____________________|______________|___________________________________|
    |‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|
    | id                 | Нет          | ID таблицы                        |
    | model              | Нет          | Связанная модель                  |
    | search             | Нет          | Добавлять поле мортировки         |
    | header             | Нет          | Заголовок                         |
    | filters            | Нет          | Фильтры                           |
    | colgroup           | Нет          | Группы колонок                    |
    | thead              | Нет          | Заголовки колонок                 |
    | tbody              | Нет          | Содержимое таблицы                |
    |____________________|______________|___________________________________|

--}}

<div class="table-box">
    <form
        class="options"
        @isset($id)
            id="{{ $id }}"
        @endisset
    >
        <input type="hidden" name="model" value="{{ $attributes['model'] ?? '' }}">
        <div class="search">
            @if (isset($search))
                <input type="search" name="search" placeholder="Найти...">
            @endif
        </div>
        <div class="header">
            @isset($header)
                <p class="header">{{ $header }}</p>
            @endisset
        </div>
        <div class="filters">
            @if (isset($filters))
                {{ $filters }}
                <input type="submit" class="button blue-button" value="Применить">
            @endif
        </div>
        <div class="buttons">
            @if (isset($buttons))
                {{ $buttons }}
            @endif
        </div>
    </form>

    <table class="table default-table">
        @isset($colgroup)
            <colgroup>
                {{ $colgroup }}
            </colgroup>
        @endisset

        <thead>
            {{ $thead }}
        </thead>

        <tbody>
            {{ $tbody }}
        </tbody>
    </table>

</div>
