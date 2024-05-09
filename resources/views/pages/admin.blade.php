@extends('layouts.app')

@section('title', 'Админ-панель')

@section('content')
    <div class="admin">
        <div class="container">
            <div class="admin_items">
                <h1>Админ-панель</h1>
                <div class="admin_items_cards">
                    <div class="mf_fm_bs red" id="fonts">
                        <div class="mf_fm_bs_t">
                            <p class="sb_title white_text"></p>
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
                            <h2 class="white_text">Шрифты</h2>
                        </div>
                    </div>
                    <div class="mf_fm_bs yellow" id="font_pairs">
                        <div class="mf_fm_bs_t">
                            <p class="sb_title white_text"></p>
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
                            <h2 class="white_text">Шрифтовые пары</h2>
                        </div>
                    </div>
                    <div class="mf_fm_bs green" id="users">
                        <div class="mf_fm_bs_t">
                            <p class="sb_title white_text"></p>
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
                            <h2 class="white_text">Пользователи</h2>
                        </div>
                    </div>
                </div>
                <div style="display: none" class="ap_table animate__fadeIn" id="fonts_table">
                    <div class="ap_tt">
                        <h1>Шрифты</h1>
                        <a class="btn" href="{{ route('admin.product.create') }}">Добавить</a>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th style="width: 2vw;">ID</th>
                            <th style="width: 30vw;">Название</th>
                            <th style="width: 30vw;">Автор</th>
                            <th style="width: 21vw;">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><a style="color: #FFFFFF"
                                       href="?page=fontpage&id={{ $product->id }}">{{ $product->name }}</a></td>
                                <td>Карим Загидуллин</td>
                                <td class="table_actions">
                                    <a href="?page=delete&font_id={{ $product->id }}">Удалить</a>
                                    <a href="{{ route('admin.product.edit', ['productId' => $product->id]) }}">Редактировать</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div style="display: none" class="ap_table animate__fadeIn" id="fonts_pairs_table">
                    <h1>Шрифтовые пары</h1>
                    <table>
                        <thead>
                        <tr>
                            <th style="width: 2vw;">ID</th>
                            <th style="width: 30vw;">Шрифт 1</th>
                            <th style="width: 30vw;">Шрифт 2</th>
                            <th style="width: 21vw;">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pairs as $pair)
                            <tr>
                                <td>{{ $pair->id }}</td>
                                <td>{{ $pair->first_pair }}</td>
                                <td>{{ $pair->second_pair }}</td>
                                <td class="table_actions">
                                    <a href="?page=delete&id={{ $pair->id }}">Удалить</a>
                                    <a href="?page=edit&id={{ $pair->id }}">Редактировать</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div style="display: none" class="ap_table animate__fadeIn" id="users_table">
                    <h1>Пользователи</h1>
                    <table>
                        <thead>
                        <tr>
                            <th style="width: 2vw;">ID</th>
                            <th style="width: 30vw;">Имя</th>
                            <th style="width: 30vw;">Почта</th>
                            <th style="width: 21vw;">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->fname }} {{ $user->lname }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="table_actions">
                                    <a href="?page=delete&id={{ $user->id }}">Удалить</a>
                                    <a href="?page=edit&id={{ $user->id }}">Редактировать</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
