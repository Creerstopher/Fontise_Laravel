@extends('layouts.app')

@section('title', 'Каталог')

@section('content')
    <div class="filter">
        <div class="container">
            <div class="filter-items">
                <a class="filter_btn" id="filter_btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                        <path
                            d="M8.5 18.5V12.5H10.5V14.5H18.5V16.5H10.5V18.5H8.5ZM0.5 16.5V14.5H6.5V16.5H0.5ZM4.5 12.5V10.5H0.5V8.5H4.5V6.5H6.5V12.5H4.5ZM8.5 10.5V8.5H18.5V10.5H8.5ZM12.5 6.5V0.5H14.5V2.5H18.5V4.5H14.5V6.5H12.5ZM0.5 4.5V2.5H10.5V4.5H0.5Z"
                            fill="white"/>
                    </svg>
                    Фильтр
                </a>
                <div class="filter_search" id="filter_search">
                    <div class="filter_category">
                        <a id="styles">Стили</a>
                        <a id="languages">Языки</a>
                    </div>
                    <div class="filter_categories_selector">
                        <a href="">Sans-serif</a>
                        <a href="">Serif</a>
                        <a href="">Display</a>
                        <a href="">Monospace</a>
                        <a href="">Slab</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="catalog">
        <div class="container">
            <div class="catalog_items">
                <?php foreach ($catalog as $item): ?>

                <style>
                    @font-face {
                        font-family: <?= $item['name']; ?>;
                        src: url("<?= {{  }} ?>");
                    }
                </style>

                    <?php $categories = $database->query('SELECT * FROM `categores` WHERE `id` = ' . $item['category'])->fetch(2) ?>
                <a href="?page=fontpage&id=<?= $item['id']; ?>" class="pop_b_b_small">
                    <div class="pbtb_top">
                        <div class="tags">
                            <div class="tag">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                     fill="none">
                                    <path
                                        d="M10 0C10 0 9.8682 5.62556 12.1213 7.87868C14.3744 10.1318 20 10 20 10C20 10 14.3744 9.8682 12.1213 12.1213C9.8682 14.3744 10 20 10 20C10 20 10.1318 14.3744 7.87868 12.1213C5.62556 9.8682 0 10 0 10C0 10 5.62556 10.1318 7.87868 7.87868C10.1318 5.62556 10 0 10 0Z"
                                    />
                                </svg>
                                <p><?= $categories['name']; ?></p>
                            </div>
                        </div>
                        <div href="?page=fontpage&id=<?= $item['id']; ?>" class="btn_to">
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
                        <h1><?= $item['name']; ?></h1>
                        <p class="pbbs_bottom_aa" style="font-family: <?= $item['name'] ?>">Aa</p>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
@endsection
