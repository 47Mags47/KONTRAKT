<div class="table-box">
    @if (isset($options))

        <div class="table-options">
            {{ $options }}
            {{-- <x-table.filter-box :$createLink>
                <x-table.filter title="Город" pole="city" />
            </x-table.filter-box> --}}
        </div>
    @endif
    <table>
        <thead>
            {{ $thead }}
        </thead>
        <tbody>
            {{ $tbody }}
        </tbody>
    </table>
</div>
