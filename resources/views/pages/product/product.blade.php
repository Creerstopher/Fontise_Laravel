@extends('layouts.app')

@section('title', "$font->name ")

@section('content')
    @php
        /** @var App\Models\Font $font */
    @endphp

    <style>
        @font-face {
            font-family: {{ $font->name }};
            src: url("{{ Storage::disk('public')->url($font->front_path) }}");
        }
    </style>

    <div class="main_font">
        <div class="container">
            <div class="mp_items">
                <div class="mp_font_img">
                    <p style="font-family: {{ $font->name }}; ">{{ $font->name }}</p>
                </div>
                <div class="mp_font_info">
                    <div class="tags">
                        @foreach($font->languages as $lang)
                            <div class="tag">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20"
                                     fill="none">
                                    <path
                                        d="M10 0C10 0 9.8682 5.62556 12.1213 7.87868C14.3744 10.1318 20 10 20 10C20 10 14.3744 9.8682 12.1213 12.1213C9.8682 14.3744 10 20 10 20C10 20 10.1318 14.3744 7.87868 12.1213C5.62556 9.8682 0 10 0 10C0 10 5.62556 10.1318 7.87868 7.87868C10.1318 5.62556 10 0 10 0Z"
                                    />
                                </svg>
                                <p>{{ $lang->name }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="mp_fi_top">
                        <div class="mf_ft_bb">
                            <p class="mf_ft_bb_title white_text">Информация</p>
                            <p class="p mf_ft_bb_subtext white_text">
                                {{ $font->information }}
                            </p>
                        </div>
                        <div class="pop_b_b_small pop_btn_to">
                            <div class="pbtb_top fe">
                                <a href="{{ config('filesystems.disks.public.url') . '/' . $font->zip_path }}"
                                   class="btn_to">
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
                                <a href="{{ route('download', ['productId' => $font->id]) }}"
                                   class="pbbs_bottom_p" target="_blank">Скачать шрифт</a>
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
                                <h2 class="white_text">{{ $font->price !== "0.00" ? $font->price : 'Бесплатно' }}</h2>
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
                                <h2 class="white_text">{{ $font->category->name }}</h2>
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
                                <h2 class="white_text">{{ $font->license->name }}</h2>
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
                                @foreach($font->styles as $style)
                                    <h2 class="black_text">{{ $style->name }}</h2>
                                @endforeach
                            </div>
                        </div>
                        <div class="w mf_fb_bb gray">
                            <p class="sb_title white_text">Введите ваш текст</p>
                            <textarea style="font-family: {{ $font->name }}">Съешь ещё этих мягких французских булок, да выпей же чаю</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <code>
        <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($font->zip_path) }}">

        body{
            font-family: {{ $font->name }}, {{ $font->category->name }}
        }
    </code>
@endsection
