@extends('layouts.app')

@section('title', 'Админ-панель')

@section('content')
    <style>
        @font-face {
            font-family: {{ $product->name }};
            src: url("{{ $product->localurl }}");
        }
    </style>

    <div class="main_font">
        <div class="container">
            <div class="mp_items">
                <div class="mp_font_img">
                    <p style="font-family: {{ $product->name }}; ">{{ $product->name }}</p>
                </div>
                <div class="mp_font_info">
                    <div class="mp_fi_top">
                        <div class="mf_ft_bb">
                            <p class="mf_ft_bb_title white_text">Информация</p>
                            <p class="p mf_ft_bb_subtext white_text">
                                {{ $product->information }}
                            </p>
                        </div>
                        <div class="pop_b_b_small pop_btn_to">
                            <div class="pbtb_top fe">
                                <a href="{{ $product->localurl }}" class="btn_to">
                                    <svg class="arrow" width="50" height="50" viewBox="0 0 50 50" fill="none"
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
                            <div class="pbbs_bottom">
                                <p class="pbbs_bottom_p">Скачать шрифт</p>
                            </div>
                        </div>
                    </div>
                    <div class="mp_fi_middle">
                        <div class="mf_fm_bs red">
                            <div class="mf_fm_bs_t">
                                <p class="sb_title white_text">Стоимость</p>
                                <svg class="arrow" width="50" height="50" viewBox="0 0 50 50" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25"/>
                                    <mask id="mask0_120_484" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="13"
                                          y="13" width="24" height="24">
                                        <rect x="13" y="13" width="24" height="24" fill="#D9D9D9"/>
                                    </mask>
                                    <g mask="url(#mask0_120_484)">
                                        <path d="M19.4 31L18 29.6L27.6 20H19V18H31V30H29V21.4L19.4 31Z"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="mf_fm_bs_b">
                                <h2 class="white_text">{{ $product->price }}</h2>
                            </div>
                        </div>
                        <div class="mf_fm_bs yellow">
                            <div class="mf_fm_bs_t">
                                <p class="sb_title">Категория</p>
                                <svg class="arrow" width="50" height="50" viewBox="0 0 50 50" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25"/>
                                    <mask id="mask0_120_484" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="13"
                                          y="13" width="24" height="24">
                                        <rect x="13" y="13" width="24" height="24" fill="#D9D9D9"/>
                                    </mask>
                                    <g mask="url(#mask0_120_484)">
                                        <path d="M19.4 31L18 29.6L27.6 20H19V18H31V30H29V21.4L19.4 31Z"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="mf_fm_bs_b">
                                <h2 class="white_text">{{ $product->categories }}</h2>
                            </div>
                        </div>
                        <div class="mf_fm_bs green">
                            <div class="mf_fm_bs_t">
                                <p class="sb_title white_text">Лицензия</p>
                                <svg class="arrow" width="50" height="50" viewBox="0 0 50 50" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25"/>
                                    <mask id="mask0_120_484" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="13"
                                          y="13" width="24" height="24">
                                        <rect x="13" y="13" width="24" height="24" fill="#D9D9D9"/>
                                    </mask>
                                    <g mask="url(#mask0_120_484)">
                                        <path d="M19.4 31L18 29.6L27.6 20H19V18H31V30H29V21.4L19.4 31Z"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="mf_fm_bs_b">
                                <h2 class="white_text">{{ $product->license }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="mp_fi_bottom">
                        <div class="w mf_fm_bs white">
                            <div class="mf_fm_bs_t">
                                <p class="sb_title black_text">Стили</p>
                                <svg class="arrow" width="50" height="50" viewBox="0 0 50 50" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25"/>
                                    <mask id="mask0_120_484" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="13"
                                          y="13" width="24" height="24">
                                        <rect x="13" y="13" width="24" height="24" fill="#D9D9D9"/>
                                    </mask>
                                    <g mask="url(#mask0_120_484)">
                                        <path d="M19.4 31L18 29.6L27.6 20H19V18H31V30H29V21.4L19.4 31Z"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="mf_fm_bs_b">
                                <h2 class="black_text">{{ $product->styles }}</h2>
                            </div>
                        </div>
                        <div class="w mf_fb_bb gray">
                            <p class="sb_title white_text">Введите ваш текст</p>
                            <input style="font-family: {{ $product->name }}"
                                   value="Съешь ещё этих мягких французских булок, да выпей же чаю">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
