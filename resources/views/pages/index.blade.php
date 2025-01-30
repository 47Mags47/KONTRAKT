@extends('layouts.default')
@section('page-name', 'Главная')

@push('styles')
    @vite('resources/sass/pages/index.sass')
@endpush

@push('scripts')
    @vite('resources/js/pages/index.js')
@endpush

@section('content')
    <x-slider.box>
        <x-slider.slide image="{{ asset('storage/media/slider/1.jpg') }}" />
        <x-slider.slide image="{{ asset('storage/media/slider/2.webp') }}" />
        <x-slider.slide image="{{ asset('storage/media/slider/3.jpg') }}" />
        <x-slider.slide image="{{ asset('storage/media/slider/4.jpg') }}" />
        <x-slider.slide image="{{ asset('storage/media/slider/5.png') }}" />
    </x-slider.box>
    <ul class="item-container">
        @foreach ($items as $item)
            <li class="item-card">
                <a href="{{ route('item.show', ['maker' => $item->maker, 'item' => $item]) }}">
                    <div class="logo-box">
                        <img src="{{ asset('storage/' . ($item->logo ?? 'media/item/default_logo.png') ) }}" alt="item-logo">
                    </div>
                    <span class="maker-name">{{ $item->maker->name }}</span>
                    <span class="item-name">{{ $item->name }}</span>
                    <button class="button blue-button">Перейти</button>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
