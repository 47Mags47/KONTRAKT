<li @class(['active' => isset($active) ? $active : false])>
    <a href="{{ $link }}">
        @isset($ico)
            <i class="{{ $ico }}"></i>
        @endisset
        <span>{{ $text }}</span>
    </a>
</li>
