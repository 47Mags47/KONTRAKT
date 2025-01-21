{{--                      Стандартная форма

    |‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|
    |     Аттрибуты      | По умолчанию |            Комментарий            |
    |____________________|______________|___________________________________|
    |‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾|‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾|
    | action             | Эта страница | Ссылка на обработчик              |
    | method             | POST         | Метод отправки                    |
    | file               | Нет          | Будут ли отправляться файлы       |
    | shadow             | Нет          | Будет ли у формы тень             |
    | header             | Нет          | Заголовок формы                   |
    | sbm                | Нет          | Текст кнопки отправки             |
    |____________________|______________|___________________________________|

--}}

<form
    action      =   "{{ $action ?? '' }}"
    method      =   "{{ isset($method) ? (strtoupper($method) === 'GET' ? 'GET' : 'POST') : 'POST' }}"
    enctype     =   "{{ isset($file) ? 'multipart/form-data' : 'application/x-www-form-urlencoded' }}"
    id          =   "{{ isset($id) ? $id : '' }}"

    @class([
        'form',
        'default-form',
        'has-shadow' => isset($shadow),
        $attributes['class']
    ])
>

@if ((isset($method) and strtoupper($method) !== 'GET') or !isset($method))
    @csrf
@endif

@if (isset($method) and strtoupper($method) !== 'GET')
    @method(strtoupper($method))
@endif

@if (isset($errorShow) and $errors->any())
    <ul>
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif

@isset($header)
    <p class="box-header form-header">{!! $header !!}</p>
@endisset

    {{ $slot }}


<div class="buttons">
    @isset($sbm)
        <input type="submit" value="{{ $sbm ?? 'Отправить' }}" class="button blue-button">
    @endisset
    @isset($buttons)
        {{ $buttons }}
    @endisset
</div>


</form>

