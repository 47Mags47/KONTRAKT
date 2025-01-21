<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Соц. контракт - preview</title>
</head>

<style>
    a{
        color: blue
    }
    a:hover{
        color: rgb(119, 0, 255)
    }

    li{
        padding: 2px 0;
    }
</style>

<body>
    <h1>Добро пожаловть на портал соц. контракт 42</h1>
    <h2>В настоящее время портал находиться в разработке</h2>

    <div>
        <h4>Информация о проекте</h4>
        <p>
            Данная площадка разрабатывается одним единственным разработчиком и имеет открытый код (возможно будет изменено в будующем) <br><br>

            Для помощи и предложений: <br>
            Страница на GitHub: <a href="https://github.com/47Mags47/kontrakt">https://github.com/47Mags47/kontrakt</a> <br>
            Почта разработчика <a href="mailto:gordienko@dsznko.ru" type="email">gordienko@dsznko.ru</a>
        </p>
    </div>

    <div>
        <h4>Обозначения:</h4>
        <ul style="list-style: none">
            <li>❌ Планируется</li>
            <li>🔁 Этап (страница) в разработке</li>
            <li>✅ Этап (страница) завершен</li>
        </ul>

        <h4>Этапы разработки</h4>
        <ul style="list-style: none">
            <li>✅ Базовая настройка</li>
            <li>❌ Панель поставщика</li>
            <li>❌ Панель товара/услуги</li>
            <li>🔁 Панель администратора</li>
            <li>❌ Панель регионального управления</li>
            <li>❌ Главная страница</li>
            <li>❌ Аунтификация</li>
            <li>❌ Документация</li>
        </ul>
    </div>

    <div>
        <h4>Ссылки на страницы:</h4>

        <ul style="list-style: none">
            <li>❌ <a href="">Главная страница</a></li>
            <li>🔁 <a href="{{ route('maker.index') }}">Главная страница - Поставщики</a></li>
        </ul>

        <ul style="list-style: none">
            <li>❌ <a href="">maker - index</a></li>
            <li>❌ <a href="">maker - index - admin</a></li>
            <li>❌ <a href="">maker - index - reg-admin</a></li>
            <li>❌ <a href="">maker - show</a></li>
            <li>🔁 <a href="{{ route('admin.maker.show', ['maker' => 1]) }}">maker - show - admin</a></li>
            <li>🔁 <a href="{{ route('admin.maker.show', ['maker' => 1]) }}">maker - show - reg-admin</a></li>
            <br>
            <li>✅ <a href="{{ route('admin.maker.create') }}">maker - create - admin</a></li>
            <li>✅ <a href="">maker - store- admin</a></li>
            <li>✅ <a href="">maker - edit- admin</a></li>
            <li>✅ <a href="">maker - update- admin</a></li>
            <li>❌ <a href="">maker - destroy- admin</a></li>
        </ul>

        <ul style="list-style: none">
            <li>❌ <a href="">product - index</a></li>
            <li>❌ <a href="">product - index - admin</a></li>
            <li>❌ <a href="">product - index - reg-admin</a></li>
            <li>❌ <a href="">product - show</a></li>
            <li>🔁 <a href="{{ route('admin.product.show', ['product' => 1]) }}">product - show - admin</a></li>
            <li>🔁 <a href="{{ route('admin.product.show', ['product' => 1]) }}">product - show - reg-admin</a></li>
            <br>
            <li>✅ <a href="{{ route('admin.product.create', ['maker' => 1]) }}">product - create - admin</a></li>
            <li>✅ <a href="">product - store- admin</a></li>
            <li>❌ <a href="">product - edit- admin</a></li>
            <li>❌ <a href="">product - update- admin</a></li>
            <li>❌ <a href="">product - destroy- admin</a></li>
        </ul>

        <h4>Ссылки на ресурсы:</h4>
        <ul style="list-style: none">
            <li><a href="/components">Компоненты</a></li>
            <li><a href="/palette">Палитра цветов</a></li>
        </ul>
    </div>

    <div>
        <h4>Данные разработчика:</h4>
        <span>Гордиенко Кирилл Александрович</span><br>
        <span><a href="mailto:gordienko@dsznko.ru" type="email">gordienko@dsznko.ru</a></span>
    </div>
</body>

</html>
