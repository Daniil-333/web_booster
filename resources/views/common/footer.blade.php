<footer id="contacts" class="footer">
    <div class="footer__container">
        <div class="footer__content">
            <div class="footer__left">
                <div class="footer__logoBox">
                    <a href="{{ route('front.main') }}" class="header__logo logo">
                        <img src="{{ asset('storage/img/logo.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="footer__center">
                <nav class="footer__menu menu">
                    @foreach($menu as $link_item => $menu_title)
                        @if($link_item == 'faq') @continue @endif
                        <a href="#{{ $link_item }}" class="menu__link">{{ $menu_title }}</a>
                    @endforeach
                </nav>
            </div>
            <div class="footer__right">
                <button type="button" class="footer__btn btn">Оставить заявку</button>
            </div>
        </div>
    </div>
</footer>
