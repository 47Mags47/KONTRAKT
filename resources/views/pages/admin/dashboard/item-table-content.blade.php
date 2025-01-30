@for ($i = 0; $i < 50; $i++)
    @if ($i < $items->count())
        <tr>

            @switch($items[$i]->type->name)
                @case('Товар')
                    <td class="ico">
                        <i class="fa-solid fa-box"></i>
                    </td>
                @break

                @case('Услуга')
                    <td class="ico">
                        <i class="fa-solid fa-bell-concierge"></i>
                    </td>
                @break

                @default
                    <td>Н/А</td>
            @endswitch

            <td>
                <a href="{{ route('maker.show', ['maker' => $items[$i]->maker]) }}">
                    {{ $items[$i]->maker->name }}
                </a>
            </td>
            <td>
                <a href="{{ route('item.show', ['maker' => $items[$i]->maker, 'item' => $items[$i]]) }}">
                    {{ $items[$i]->name }}
                </a>
            </td>
            <td>
                @foreach ($items[$i]->tags as $tag)
                    {{ $tag->name }}<br>
                @endforeach
            </td>
            <td></td>
            <td>{{ $items[$i]->created_at->format('d.m.Y') }}</td>
            <td>{{ $items[$i]->updated_at->format('d.m.Y H:i') }}</td>
        </tr>
    @else
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    @endif
@endfor
