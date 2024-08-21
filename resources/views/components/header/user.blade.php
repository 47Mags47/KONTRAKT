@if (auth()->check())
    <div class="user">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset( auth()->user()->logo ? auth()->user()->logo : 'media/default_logo.png' ) }}" alt="">
            <span>{{ auth()->user()->nickname }}</span>
        </a>
    </div>
@else
    <div class="sign">
        <a href="{{ route('login') }}">Вход</a>
        <a href="">Регистрация</a>
    </div>
@endif
