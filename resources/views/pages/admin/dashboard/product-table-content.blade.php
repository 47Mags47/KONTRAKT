@for ($i = 0; $i < 50; $i++)
    @if ($i < $products->count())
        <tr>
            <td><a href="{{ route('admin.maker.show', ['maker' => $products[$i]->maker]) }}">{{ $products[$i]->maker->name }}</a>
            </td>
            <td>{{ $products[$i]->category->name }}</td>
            <td><a href="{{ route('admin.product.show', ['product' => $products[$i]]) }}">{{ $products[$i]->name }}</a></td>
            <td></td>
            <td>{{ $products[$i]->created_at->format('d.m.Y') }}</td>
            <td>{{ $products[$i]->updated_at->format('d.m.Y H:i') }}</td>
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
