<div class="table-box">
    @if (isset($options))
        <div class="table-options">
            <div class="search-box">
                @if (in_array('search', $options))
                    <x-form.box action="{{ $searchLink }}" submit="Поиск">
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
                @if (in_array('filter', $options))
                    <x-form.box action="" submit="Применить">
                        @foreach ($filters as $pole => $filter)
                            <x-table.filter :$filter pole="{{ $pole }}" />
                        @endforeach
                    </x-form.box>
                @endif
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
