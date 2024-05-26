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
                <div class="w-full md:w-1/2">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                     fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <input wire:model.live.debounce.500ms="searchFont" type="text" id="simple-search"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                   placeholder="Search Book..." required="">
                        </div>
                    </form>
                </div>
                <select wire:model.live="searchCategory"
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option value="0">Выберите Категорию</option>
                    @foreach($categories as $id => $category)
                        <option value="{{ $id }}"> {{ $category }} </option>
                    @endforeach
                </select>
                @foreach($languages as $id => $lang)
                    <label>
                        <p>{{ $lang }}</p>
                        <input type="checkbox" name="languages" wire:model.live="searchLanguages" value="{{ $id }}">
                    </label>
                @endforeach
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
