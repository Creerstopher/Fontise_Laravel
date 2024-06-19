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
                        @foreach($fonts as $key => $font)
                            @php /** @var Font $font */ @endphp
                            <div class="
                                @if($key == 0) pop_b_t_big @endif
                                @if($key == 1) pop_b_t_medium @endif
                                @if($key >= 3) pop_b_b_small @endif">
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
                                    <p class="pbbs_bottom_aa" style="font-family: {{ $font->name }}">Aa</p>
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
