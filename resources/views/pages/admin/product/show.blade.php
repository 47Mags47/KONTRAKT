@extends('layouts.default')
@section('page-name', 'Отчеты')

@push('styles')
    @vite('resources/sass/pages/admin-item-show.sass')
@endpush

@section('content')
    <div class="item-box">
        <div class="logo-box">
            <x-input.change-image-show class="item-logo" :preview="asset('storage/' . $product->logo)"/>
        </div>
        <div class="info-box">
            <x-form.default-show
                class="profile-info-box"
                :header="$product->name"
            >
                <x-input.text-show      label="Поставщик"               :value="$product->maker->name" />
                <x-input.text-show      label="Категория"               :value="$product->category->name" />
                <x-input.text-show      label="Наименование"            :value="$product->name" />
                <x-input.textarea-show  label="Описание"                :value="$product->description"/>
            </x-form.default>
        </div>
        {{-- <x-comment.box>
            <div class="add-comment-box">
                <x-form.message class="comment-form">
                    <x-input.text name="FIO" label="ФИО" req/>
                    <x-input.text name="phone" label="Телефон" info="Не будет виден другим пользователям" req/>
                    <x-input.textarea name="text" label="Комментарий" ph="Комментарий..." req/>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
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
                    <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam repudiandae corrupti eaque alias hic eligendi excepturi iusto officia, magni distinctio, unde quo, error dolores officiis. Blanditiis corporis magnam ut.</p>
                </li>
            </ul>
        </x-comment.box> --}}
    </div>
@endsection
