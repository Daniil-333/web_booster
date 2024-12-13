<section class="promo section">
    <img src="{{ asset('storage/img/promo_bg.png') }}" alt="" class="section__bg">
    <img src="{{ asset('storage/img/promo_mask.png') }}" alt="" class="section__bg">
    <div class="promo__container">
        <div class="promo__content">
            <div class="promo__left">
                <h1 class="promo__title title">Оптовые поставки <span>электронных компонентов</span> из&nbsp;Китая день в день</h1>
                <p class="promo__subtitle">Комплексные поставки электронных компонентов и оборудования. Подберем аналоги популярных брендов из Европы в условиях санкций.</p>
                <div class="promo__desc">
                    <ul>
                        <li>Отсрочка платежей для постоянных клиентов</li>
                        <li>Бесплатная доставка по Москве и СПБ в течение 2х часов</li>
                        <li>Квалифицированный персональный менеджер</li>
                    </ul>
                </div>
            </div>
            <div class="promo__right">
                <form class="promo__form formPromo" method="post" action="#" autocomplete="off">
                    @csrf
                    <div class="formPromo__head">
                        <p>Закажите обратный звонок</p>
                    </div>
                    <div class="formPromo__main">
                        <div class="ui-input">
                            <label>
                                <span class="ui-input__label">Ваше имя*</span>
                                <input type="text" placeholder="Петров Петр" name="name" autocomplete="off">
                            </label>
                        </div>
                        <div class="ui-input">
                            <label>
                                <span class="ui-input__label">Ваш номер*</span>
                                <input type="tel" placeholder="+7 (999) 000-00-00" name="phone" autocomplete="off">
                            </label>
                        </div>
                        <button type="button" class="formPromo__button btn"><span>Заказать звонок</span></button>
                        <div class="formPromo__agree">
                            <img src="{{ asset('storage/img/icon/lock.svg') }}" alt="">
                            Мы гарантируем конфиденциальность данных
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
