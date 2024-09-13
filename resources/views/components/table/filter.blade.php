{{-- REQ --}}
{{-- pole --}}
{{-- OPTIONAL --}}
{{-- title text|Заголовок ;  --}}

<li>
    <label class="preview" for="opened_{{ $filter['name'] }}">
        <span>{!! $filter['preview'] !!}</span>
        <i class="fa fa-angle-down" aria-hidden="true"></i>
        <input type="checkbox" id="opened_{{ $filter['name'] }}">
    </label>
    <div class="filter">
        <div class="filter-search">
            <input type="search" placeholder="{!! $filter['preview'] !!}">
        </div>
        <ul class="list mini-scroll">
            @foreach ($filter['list'] as $item)
                @php
                    $name = $filter['name'];
                    $value = $filter['value'];
                @endphp
                <li>
                    <x-form.input type="table-filter" :$pole name="{{ $item->$name }}" value="{{ $item->$value }}" />
                </li>
            @endforeach
        </ul>
    </div>
</li>
