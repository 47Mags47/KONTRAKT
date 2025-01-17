{{--                      Стандартная форма

    |‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|
    |     Аттрибуты      | По умолчанию |            Комментарий            |
    |____________________|______________|___________________________________|
    |‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|
    | action             | Эта страница | Ссылка на обработчик              |
    | method             | POST         | Метод отправки                    |
    | file               | Нет          | Будут ли отправляться файлы       |
    | header             | Нет          | Заголовок формы                   |
    |____________________|______________|___________________________________|

--}}

<form
    action      =   "{{ $action ?? '' }}"
    method      =   "{{ isset($method) ? (strtoupper($method) === 'GET' ? 'GET' : 'POST') : 'POST' }}"
    enctype     =   "{{ isset($file) ? 'multipart/form-data' : 'application/x-www-form-urlencoded' }}"
    id          =   "{{ isset($id) ? $id : '' }}"

    @class([
        'form',
        'message-form',
        $attributes['class']
    ])
>

@if ((isset($method) and strtoupper($method) !== 'GET') or !isset($method))
    @csrf
@endif

@if (isset($method) and strtoupper($method) !== 'GET')
    @method($method)
@endif

@if (isset($errorShow) and $errors->any())
    <ul>
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif

    {{ $slot }}

</form>

