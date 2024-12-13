<header class="header">
    <div class="header__container">
        <div class="header__content">
            <div class="header__logoBox">
                <a href="{{ route('front.main') }}" class="header__logo logo">
                    <img src="{{ asset('storage/img/logo.png') }}" alt="">
                </a>
            </div>
            <button id="burger" class="header__burger burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div id="menu" class="header__main">
                <nav class="header__menu menu">
                    @foreach($menu as $link_item => $menu_title)
                        <a href="#{{ $link_item }}" class="menu__link">{{ $menu_title }}</a>
                    @endforeach
                </nav>
                <div class="header__contact headerContact">
                    <a href="tel:+78123135845" target="_blank">
                        <span class="headerContact__icon">
                            <img src="{{ asset('storage/img/icon/phone.svg') }}" alt="">
                        </span>
                        +7&nbsp;(812)&nbsp;<span>313-58-45</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
