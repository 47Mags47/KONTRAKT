@extends('layouts.default')
@section('page-name', 'Компоненты')

@push('styles')
    @vite('resources/sass/pages/components.sass')
@endpush

@section('content')
    <style>
        .split-box section {
            padding: 25px;
            border-top: 1px dotted black;
        }

        .split-box {
            display: grid;
            grid-auto-flow: column;
            grid-template-columns: 350px auto;
            gap: 1rem
        }
    </style>

    <div class="split-box">
        {{-- NAV-LIST --}}
        <style></style>
        <x-nav-list.box>
            <p class="box-header">Навигация</p>
            <x-nav-list.item text="Коментарии" ico="fa-solid fa-message" link="#product-comment-header" active/>
            <x-nav-list.item text="Кнопки" ico="fa-solid fa-message" link="#buttons" />
            <x-nav-list.item text="Формы" ico="fa-solid fa-message" link="#form-element" />
            <x-nav-list.item text="Дополнительные компоненты форм" ico="fa-solid fa-message" link="#other-form-elements" />
        </x-nav-list.box>

        <div class="content-box">
            <p class="box-header" id="product-comment-header">Коментарии</p>
            <div class="product-comment-box">
                <x-comment.box>
                    <div class="add-comment-box">
                        <x-form.message class="comment-form">
                            <x-input.text name="FIO" label="ФИО" req />
                            <x-input.text name="phone" label="Телефон" info="Не будет виден другим пользователям" req />
                            <x-input.textarea name="text" label="Комментарий" ph="Комментарий..." req />
                            <input type="submit" value="Отправить" class="button blue-button">
                        </x-form.message>
                    </div>
                    <ul class="comment-list">
                        <li>
                            <div class="user-box">
                                <span class="FIO">Test Maker</span>
                                <div class="stars-box">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam
                                repudiandae
                                corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error
                                dolores
                                officiis. Blanditiis corporis magnam ut.</p>
                        </li>
                    </ul>
                </x-comment.box>
            </div>

            {{-- BUTTONS --}}
            <p class="box-header" id="buttons">Кнопки</p>
            <style>
                .buttons {
                    display: flex;
                    gap: 10px
                }

                .buttons button {
                    padding: 5px 10px;
                }
            </style>
            <section class="buttons">
                <div><button class="button">button</button></div>
                <div><button class="button blue-button">blue-button</button></div>
                <div><button class="button red-button">red-button</button></div>
            </section>

            {{-- FORM ELEMENT --}}
            <p class="box-header" id="form-element">Формы</p>
            <style>
                .form-element {
                    padding: 0 15px;
                    display: flex;
                    flex-direction: column;
                    align-items: flex-start;
                    justify-content: flex-start;
                    gap: 25px;
                }
            </style>
            <section class="form-element">
                <x-form.default header="Стандартная форма">
                    <ul class="form-errors-box">
                        <li>Ошибка заполнения 1</li>
                        <li>Ошибка заполнения 2</li>
                    </ul>

                    <x-input.adder label="Список элементов с возможностью добавления" name="" />
                    <x-input.adder-show label="Список элементов с возможностью добавления (представление)"
                        :items="['Запись 1', 'Запись 2']" />
                    <x-input.select label="Выбор из списка" name=""></x-input.select>
                    <x-input.text label="Тектовое поле" name="" />
                    <x-input.text-show label="Тектовое поле (представление)" value="Значение поля" />
                    <x-input.textarea label="Тектовое поле" name="" />
                    <x-input.textarea-show label="Тектовое поле (представление)" value="Значение поля" />
                </x-form.default>
            </section>

            {{-- OTHER FORM ELEMENTS --}}
            <style>
                .other-form-elements .change-image-box .preview {
                    width: 350px;
                    height: 350px;
                }
            </style>
            <p class="box-header" id="other-form-elements">Дополнительные компоненты форм</p>
            <section class="other-form-elements">
                <h3>Загрузка изображения с предпросмотром</h3>
                <br>
                <x-input.change-image name="change-image-input" />

                <h3>Загрузка изображения с предпросмотром (представление)</h3>
                <br>
                <x-input.change-image-show preview="" />
            </section>
        </div>
    </div>
@endsection
