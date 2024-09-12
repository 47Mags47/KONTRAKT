<div class="table-box">
    @if (isset($options))
        <div class="table-options">
            <div class="search-box">
                @if (in_array('search', $options))
                    <x-form.box action="" method="POST" submit="Поиск">
                        <x-form.input name="search" />
                    </x-form.box>
                @endif
            </div>
            <div class="add-box">
                @if (in_array('add', $options))
                    <x-link.blue-button href="{{ $addLink }}" title="Добавить" />
                @endif
            </div>
            <ul class="filter-box">
                @isset($filters)
                    @foreach ($filters as $filter)
                        <x-table.filter title="Город" pole="city" />
                    @endforeach
                @endisset
            </ul>
        </div>
    @endif
    @php
        $w = isset($w) ? $w . 'px' : 'auto';
    @endphp
    <table @style(["width:$w"])>
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
