@extends('layouts.default')
@section('page-name', '')

@push('styles')
    @vite('resources/sass/pages/maker-index.sass')
@endpush

@section('content')
    <div class="slider">
        <img src="{{ asset('storage/media/slider/slide_1.png') }}" alt="">
    </div>
    <div class="item-list-box">
        <div class="filter-box">
            Фильтр
        </div>
        <ul class="item-list">
            @foreach ($makers as $maker)
                <li>
                    <a href="{{ route('maker.show', compact('maker')) }}">
                        <div class="preview">
                            <img src="{{ asset('storage/' . $maker->logo) }}" alt="maker logo">
                        </div>
                        <div class="description">
                            <span>{{ $maker->description }}</span>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
