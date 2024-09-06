@if (session('message'))
    <ul class="message">
        <li>{{ session('message') }}</li>
    </ul>
@endif

