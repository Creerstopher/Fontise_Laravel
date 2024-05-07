@php use App\Enums\UserRoleEnum;use Illuminate\Support\Facades\Auth; @endphp
<header>
    <div class="container">
        <div class="header-items">
            <a class="logo" href="/">FONTISE</a>
            <div class="header_menu">
                @auth()
                    <a class="btn reg" href="/logout">Выйти</a>
                @endauth
                @guest()
                    <a class="btn reg" href="/login">Вход</a>
                @endguest
                <a href="#" id="open-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                        <rect width="55" height="55" rx="10" fill="white"/>
                        <path d="M17 35V32.5H38V35H17ZM17 28.75V26.25H38V28.75H17ZM17 22.5V20H38V22.5H17Z"
                              fill="#333333"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>
<div id="menu" class="animate__fadeIn">
    <div class="container">
        <button id="close-menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                <rect width="55" height="55" rx="10" fill="white"/>
                <path d="M19 36L28 27M28 27L37 18M28 27L19 18M28 27L37 36" stroke="#333333" stroke-width="3.4375"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <ul>
            @auth()
                <li><a href="/profile">Профиль</a></li>
            @endauth
            @guest()
                <a class="adreg" href="{{ route('auth.login.view') }}">Вход</a>
            @endguest

            <li><a href="{{ route('home') }}">Главная</a></li>
            @if(Auth::check() && Auth::user()->role === UserRoleEnum::ADMIN)
                <li><a href="{{ route('admin.admin') }}">Админ-панель</a></li>
            @endif
            <li><a href="{{ route('catalog') }}">Каталог</a></li>
            @auth()
                <a class="adreg" href="/logout">Выйти</a>
            @endauth
        </ul>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const openMenuButton = document.getElementById('open-menu')
        const closeMenuButton = document.getElementById('close-menu')
        const menu = document.getElementById('menu')

        openMenuButton.addEventListener('click', function () {
            menu.style.display = 'block'
        })

        closeMenuButton.addEventListener('click', function () {
            menu.style.display = 'none'
        })
    })
</script>
