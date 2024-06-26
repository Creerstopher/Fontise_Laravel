@extends('layouts.app')

@section('title', 'Добавление')

@section('content')
    <form action="{{ route('admin.product.store') }}" method="post" name="add" enctype="multipart/form-data">
        <div class="main_font">
            <div class="container">
                <div class="mp_items">
                    <div class="mp_font_img">
                        <input type="text" name="name" placeholder="Название" value="{{ old('name') }}">
                    </div>
                    <div class="mp_font_info">
                        <div class="mp_fi_top">
                            <div class="mf_ft_bb">
                                <p class="mf_ft_bb_title white_text">Информация</p>
                                <input type="text" name="information" class="p mf_ft_bb_subtext white_text"
                                       placeholder="Введите информацию" value="{{ old('information') }}">
                            </div>
                            <div class="pop_b_b_small pop_btn_to">
                                <div class="pbtb_top fe">
                                    <a href="" class="btn_to">
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
                                    <input type="submit" name="add" value="Добавить" class="pbbs_bottom_p">
                                </div>
                            </div>
                        </div>
                        <div class="mp_fi_middle">
                            <div class="mf_fm_bs red">
                                <div class="mf_fm_bs_t">
                                    <p class="sb_title white_text">Стоимость</p>
                                </div>
                                <div class="mf_fm_bs_b">
                                    <input type="text" name="price" placeholder="Введите стоимость" class="white_text"
                                           value="{{ old('price') }}">
                                </div>
                            </div>
                            <div class="mf_fm_bs yellow">
                                <div class="mf_fm_bs_t">
                                    <p class="sb_title">Категория</p>
                                </div>
                                <div class="mf_fm_bs_b">
                                    <select name="category" id="">
                                        <option value="" disabled selected>Выберите категорию</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mf_fm_bs green">
                                <div class="mf_fm_bs_t">
                                    <p class="sb_title white_text">Лицензия</p>
                                </div>
                                <div class="mf_fm_bs_b">
                                    <select name="license" id="">
                                        <option value="" disabled selected>Выберите лицензию</option>
                                        @foreach($licenses as $licence)
                                            <option value="{{ $licence->id }}">{{ $licence->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mp_fi_bottom">
                            <div class="w mf_fm_bs white">
                                <div class="mf_fm_bs_t">
                                    <p class="sb_title black_text">Стили</p>
                                </div>
                                <div class="mf_fm_bs_b">
                                    <div class="multiselect mf_fm_bs_b">
                                        <div class="selectBox" onclick="showCheckboxes()">
                                            <select>
                                                <option>Выберите стили</option>
                                            </select>
                                            <div class="mf_fm_bs_b overSelect"></div>
                                        </div>
                                        <div id="checkboxes">
                                            @foreach($styles as $style)
                                                <label for="{{ $style->id }}">
                                                    <input type="checkbox" name="styles"
                                                           class="black_text" value="{{ $style->id }}"/>{{$style->name}}
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mf_fm_bs gray">
                                <div class="mf_fm_bs_t">
                                    <p class="sb_title white_text">Файл для скачивания</p>
                                </div>
                                <label class="mf_fm_bs_b">
                                    <input type="file" name="file_download">
                                    <span>Выберите файл</span>
                                </label>
                            </div>
                            <div class="mf_fm_bs red">
                                <div class="mf_fm_bs_t">
                                    <p class="sb_title white_text">Файл для отображения</p>
                                </div>
                                <label class="mf_fm_bs_b">
                                    <input type="file" name="file">
                                    <span>Выберите файл</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
