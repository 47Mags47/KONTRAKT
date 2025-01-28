@for ($i = 0; $i < 50; $i++)
    @if ($i < $makers->count())
        <tr>
            <td>{{ $makers[$i]->city->name }}</td>
            <td><a href="{{ route('admin.maker.show', ['maker' => $makers[$i]]) }}">{{ $makers[$i]->name }}</a></td>
            <td>{!! $makers[$i]->comment !!}</td>
            <td></td>
            <td>{{ $makers[$i]->created_at->format('d.m.Y') }}</td>
            <td>{{ $makers[$i]->updated_at->format('d.m.Y H:i') }}</td>
        </tr>
    @else
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    @endif
@endfor
