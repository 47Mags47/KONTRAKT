@extends('layouts.default')
@section('page-name', 'Компоненты')

@section('content')
    <style>
        .color-box {
            display: flex;
            height: 650px;
            margin-top: 15px;
        }

        .color-box>div {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .color-box>div>span {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .color-box>div>span.name {
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .color-box>div>span.value {
            color: black;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .color-box .blue {background: #2d73b4;}
        .color-box .dark-blue {background: #254492;}
        .color-box .orange {background: #d37a14;}
        .color-box .gray {background: #999;}
    </style>

    <div class="color-box">
        <div class="blue">
            <span class="name">Blue</span>
            <span class="value">#2d73b4</span>
        </div>
        <div class="dark-blue">
            <span class="name">Dark-blue</span>
            <span class="value">#254492</span>
        </div>
        <div class="orange">
            <span class="name">Orange</span>
            <span class="value">#d37a14</span>
        </div>
        <div class="gray">
            <span class="name">Gray</span>
            <span class="value">#999</span>
        </div>
    </div>
@endsection
