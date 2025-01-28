@for ($i = 0; $i < 50; $i++)
    @if ($i < $services->count())
        <tr>
            <td><a href=""">{{ $services[$i]->maker->name }}</a>
            </td>
            <td>{{ $services[$i]->category->name }}</td>
            <td>{{ $services[$i]->name }}</td>
            <td></td>
            <td>{{ $services[$i]->created_at->format('d.m.Y') }}</td>
            <td>{{ $services[$i]->updated_at->format('d.m.Y H:i') }}</td>
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
