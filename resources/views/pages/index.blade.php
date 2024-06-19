@php use App\Models\Font; @endphp
@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <main>
        <div class="container">
            <div class="main_items">
                <div class="big_block">
                    <p>Шрифты для всех</p>
                    <div class="bb_bottom">
                        <h1>Делаем Интернет<br><span style="color: #06D6A0">более красивым</span></h1>
                        <p class="subtitle">Fontise позволяет легко придать индивидуальность и эффективность вашим<br>веб-сайтам
                            и продуктам.
                            Наш обширный каталог шрифтов и значков с открытым исходным кодом позволяет легко
                            интегрировать
                            выразительные шрифты и значки —
                            где бы вы ни находились.</p>
                    </div>
                </div>
                <div class="right_side_main">
                    <div class="rsm_top">
                        <h2>Обширная библиотека</h2>
                        <div class="rsm_top_bottom">
                            <p class="rsm_number">1000+</p>
                            <p class="rsm_text">Шрифтов готовых к использованию, и это не конец, наша библиотека
                                пополняется
                                ежедневно.</p>
                        </div>
                    </div>
                    <a href="/catalog" class="rsm_bottom">
                        <p>Смотреть шрифты</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="147" height="147" viewBox="0 0 147 147"
                             fill="none">
                            <mask id="mask0_120_520" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                  width="147" height="147">
                                <rect width="147" height="147" transform="matrix(-1 0 0 1 147 0)" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_120_520)">
                                <path
                                        d="M85.75 134.75L147 73.4999L85.75 12.2499L74.8781 23.1218L125.256 73.4999L74.8781 123.878L85.75 134.75Z"
                                />
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <div class="popularity">
        <div class="container">
            <div class="pop_items">
                <div class="pop_title">
                    <h1>Популярные шрифты</h1>
                    <p class="subtitle">Не знаете что выбрать? Посмотрите шрифты которые сейчас в тренде и
                        <span style="color: #EF476F;">начинайте творить</span>
                    </p>
                </div>
                <div class="pop_blocks">
                    <div class="pop_b_top">
                        @foreach($fonts as $font)
                            @php /** @var Font $font */ @endphp
                            <div class="@if($font->id % 2 == 0) pop_b_t_medium @else pop_b_t_big @endif">
                                <div class="pbtb_top">
                                    <div class="tags">
                                        <div class="tag">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20"
                                                 fill="none">
                                                <path
                                                        d="M10 0C10 0 9.8682 5.62556 12.1213 7.87868C14.3744 10.1318 20 10 20 10C20 10 14.3744 9.8682 12.1213 12.1213C9.8682 14.3744 10 20 10 20C10 20 10.1318 14.3744 7.87868 12.1213C5.62556 9.8682 0 10 0 10C0 10 5.62556 10.1318 7.87868 7.87868C10.1318 5.62556 10 0 10 0Z"
                                                />
                                            </svg>
                                            <p>Шрифт дня</p>
                                        </div>
                                        <div class="tag">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20"
                                                 fill="none">
                                                <path
                                                        d="M10 0C10 0 9.8682 5.62556 12.1213 7.87868C14.3744 10.1318 20 10 20 10C20 10 14.3744 9.8682 12.1213 12.1213C9.8682 14.3744 10 20 10 20C10 20 10.1318 14.3744 7.87868 12.1213C5.62556 9.8682 0 10 0 10C0 10 5.62556 10.1318 7.87868 7.87868C10.1318 5.62556 10 0 10 0Z"
                                                />
                                            </svg>
                                            <p>{{ $font->category->name }}</p>
                                        </div>
                                    </div>
                                    <a href="{{ route('product', ['productId' => $font->id]) }}" class="btn_to">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="25" cy="25" r="25"/>
                                            <mask id="mask0_120_484" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                                  x="13"
                                                  y="13" width="24" height="24">
                                                <rect x="13" y="13" width="24" height="24" fill="#D9D9D9"/>
                                            </mask>
                                            <g mask="url(#mask0_120_484)">
                                                <path d="M19.4 31L18 29.6L27.6 20H19V18H31V30H29V21.4L19.4 31Z"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="pbtb_bottom">
                                    <h1>{{ $font->name }}</h1>
                                    <style>
                                        @font-face {
                                            font-family: {{ $font->name }};
                                            src: url("{{ Storage::disk('public')->url($font->front_path) }}");
                                        }
                                    </style>
                                    <h1 style="font-family: {{ $font->name }}">{{ $font->name }}</h1>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="123"
                                         viewBox="0 0 200 123"
                                         fill="none">
                                        <path
                                                d="M0 120.49L37.1115 0H71.3552L108.467 120.49H84.8503L51.7874 14.2245H56.1733L23.6164 120.49H0ZM22.2669 95.3877V74.1347H86.3685V95.3877H22.2669Z"
                                                fill="white"/>
                                        <path
                                                d="M148.887 123C142.365 123 136.826 121.773 132.272 119.318C127.773 116.808 124.343 113.489 121.982 109.361C119.676 105.178 118.523 100.576 118.523 95.5551C118.523 91.3714 119.17 87.5503 120.463 84.0918C121.757 80.6333 123.837 77.5932 126.705 74.9714C129.629 72.2939 133.537 70.0626 138.429 68.2775C141.802 67.0503 145.823 65.9626 150.49 65.0143C155.157 64.066 160.443 63.1735 166.347 62.3367C172.251 61.4442 178.745 60.468 185.83 59.4082L177.564 63.9265C177.564 58.5714 176.271 54.6388 173.685 52.1286C171.098 49.6184 166.768 48.3633 160.696 48.3633C157.322 48.3633 153.807 49.1721 150.153 50.7898C146.498 52.4075 143.939 55.2803 142.477 59.4082L121.729 52.8816C124.034 45.4068 128.364 39.3265 134.718 34.6408C141.071 29.9551 149.731 27.6122 160.696 27.6122C168.736 27.6122 175.878 28.8395 182.119 31.2939C188.361 33.7483 193.084 37.9878 196.289 44.0122C198.088 47.3592 199.157 50.7061 199.494 54.0531C199.831 57.4 200 61.1374 200 65.2653V120.49H179.926V101.914L182.794 105.763C178.352 111.844 173.544 116.25 168.371 118.984C163.254 121.661 156.76 123 148.887 123ZM153.779 105.094C157.997 105.094 161.539 104.369 164.407 102.918C167.331 101.412 169.636 99.7109 171.323 97.8143C173.066 95.9177 174.247 94.3279 174.865 93.0449C176.046 90.5905 176.721 87.7456 176.89 84.5102C177.115 81.219 177.227 78.4857 177.227 76.3102L183.975 77.9837C177.171 79.0993 171.66 80.0476 167.443 80.8286C163.226 81.5537 159.824 82.2231 157.237 82.8367C154.651 83.4503 152.374 84.1197 150.406 84.8449C148.156 85.7374 146.329 86.7136 144.923 87.7735C143.574 88.7775 142.562 89.8932 141.887 91.1204C141.268 92.3476 140.959 93.7143 140.959 95.2204C140.959 97.2844 141.465 99.0694 142.477 100.576C143.546 102.026 145.036 103.142 146.947 103.922C148.859 104.703 151.137 105.094 153.779 105.094Z"
                                                fill="white"/>
                                    </svg>
                                </div>
                            </div>
                        @endforeach

                        <a href="{{ route('catalog') }}" class="pop_b_b_small  pop_btn_to">
                            <div class="pbtb_top fe">
                                <div class="btn_to">
                                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="25" cy="25" r="25"/>
                                        <mask id="mask0_120_484" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                              x="13"
                                              y="13" width="24" height="24">
                                            <rect x="13" y="13" width="24" height="24" fill="#D9D9D9"/>
                                        </mask>
                                        <g mask="url(#mask0_120_484)">
                                            <path d="M19.4 31L18 29.6L27.6 20H19V18H31V30H29V21.4L19.4 31Z"/>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="pbbs_bottom">
                                <p class="pbbs_bottom_p">Больше популярных шрифтов</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="choose">
        <div class="container">
            <div class="choose_items">
                <div class="choose_title">
                    <h1>Шрифтовые пары</h1>
                    <p class="subtitle">Подобрать подходящий шрифт порой не просто, что уж говорить о шрифтовой
                        паре,
                        поэтому на сайте вы можете <span style="color: #EF476F;">сгенерировать</span> подходящую
                        шрифтовую
                        пару. </p>
                </div>
                @livewire('refresh-pairs')
            </div>
        </div>
    </div>
@endsection
