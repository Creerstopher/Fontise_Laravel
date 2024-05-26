<div>
    <div class="filter">
        <div class="container">
            <div class="filter-items">
                {{--                <a class="filter_btn" id="filter_btn">--}}
                {{--                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">--}}
                {{--                        <path--}}
                {{--                                d="M8.5 18.5V12.5H10.5V14.5H18.5V16.5H10.5V18.5H8.5ZM0.5 16.5V14.5H6.5V16.5H0.5ZM4.5 12.5V10.5H0.5V8.5H4.5V6.5H6.5V12.5H4.5ZM8.5 10.5V8.5H18.5V10.5H8.5ZM12.5 6.5V0.5H14.5V2.5H18.5V4.5H14.5V6.5H12.5ZM0.5 4.5V2.5H10.5V4.5H0.5Z"--}}
                {{--                                fill="white"/>--}}
                {{--                    </svg>--}}
                {{--                    Фильтр--}}
                {{--                </a>--}}
                {{--                <div class="filter_search" id="filter_search">--}}
                <div class="filter_top">
                    <form>
                        <div class="search_box">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.4167 18.875L10.8542 12.3125C10.3333 12.7292 9.73437 13.059 9.05729 13.3021C8.38021 13.5451 7.65972 13.6667 6.89583 13.6667C5.00347 13.6667 3.40191 13.0113 2.09115 11.7005C0.780382 10.3898 0.125 8.78819 0.125 6.89583C0.125 5.00347 0.780382 3.40191 2.09115 2.09115C3.40191 0.780382 5.00347 0.125 6.89583 0.125C8.78819 0.125 10.3898 0.780382 11.7005 2.09115C13.0113 3.40191 13.6667 5.00347 13.6667 6.89583C13.6667 7.65972 13.5451 8.38021 13.3021 9.05729C13.059 9.73437 12.7292 10.3333 12.3125 10.8542L18.875 17.4167L17.4167 18.875ZM6.89583 11.5833C8.19792 11.5833 9.30469 11.1276 10.2161 10.2161C11.1276 9.30469 11.5833 8.19792 11.5833 6.89583C11.5833 5.59375 11.1276 4.48698 10.2161 3.57552C9.30469 2.66406 8.19792 2.20833 6.89583 2.20833C5.59375 2.20833 4.48698 2.66406 3.57552 3.57552C2.66406 4.48698 2.20833 5.59375 2.20833 6.89583C2.20833 8.19792 2.66406 9.30469 3.57552 10.2161C4.48698 11.1276 5.59375 11.5833 6.89583 11.5833Z"
                                    fill="white"/>
                            </svg>
                            <input wire:model.live.debounce.500ms="searchFont" type="text" id="simple-search"
                                   class=""
                                   placeholder="Поиск" required="">
                        </div>
                    </form>
                    <div class="filter_category">
                        <p class="white_text">Гарнитура:</p>
                        <select wire:model.live="searchCategory">
                            <option selected value="0">Все</option>
                            @foreach($categories as $id => $category)
                                <option value="{{ $id }}"> {{ $category }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="tags">
                    @foreach($languages as $id => $lang)
                        <div class=" tag">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 viewBox="0 0 20 20"
                                 fill="none">
                                <path
                                    d="M10 0C10 0 9.8682 5.62556 12.1213 7.87868C14.3744 10.1318 20 10 20 10C20 10 14.3744 9.8682 12.1213 12.1213C9.8682 14.3744 10 20 10 20C10 20 10.1318 14.3744 7.87868 12.1213C5.62556 9.8682 0 10 0 10C0 10 5.62556 10.1318 7.87868 7.87868C10.1318 5.62556 10 0 10 0Z"
                                />
                            </svg>
                            <label for="{{ $id }}">{{ $lang }}</label>
                            <input type="checkbox" id="{{ $id }}" hidden name="languages"
                                   wire:model.live="searchLanguages"
                                   value="{{ $id }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="catalog">
        <div class="container">
            <div class="catalog_items">
                @foreach ($fonts as $item)

                    <style>
                        @font-face {
                            font-family: {{ $item->name }};
                            src: url("/{{ $item->front_path }}");
                        }
                    </style>

                    <a href="{{ route('product', ['productId' => $item->id]) }}" class="pop_b_b_small">
                        <div class="pbtb_top">
                            <div class="tags">
                                @foreach($item->languages as $language)
                                    <div class="tag">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             viewBox="0 0 20 20"
                                             fill="none">
                                            <path
                                                d="M10 0C10 0 9.8682 5.62556 12.1213 7.87868C14.3744 10.1318 20 10 20 10C20 10 14.3744 9.8682 12.1213 12.1213C9.8682 14.3744 10 20 10 20C10 20 10.1318 14.3744 7.87868 12.1213C5.62556 9.8682 0 10 0 10C0 10 5.62556 10.1318 7.87868 7.87868C10.1318 5.62556 10 0 10 0Z"
                                            />
                                        </svg>
                                        <p>{{ $language->name }}</p>
                                    </div>
                                @endforeach
                            </div>
                            <div class="btn_to">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
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
                        </div>
                        <div class="pbbs_bottom">
                            <h1>{{ $item->name }}</h1>
                            <p class="pbbs_bottom_aa" style="font-family: <?= $item['name'] ?>">Aa</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
