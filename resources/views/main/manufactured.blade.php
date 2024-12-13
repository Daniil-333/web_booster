<section id="manufactured" class="manufactured section">
    <img src="{{ asset('storage/img/manufactured_bg.svg') }}" alt="" class="manufactured__bg section__bg">
    <img src="{{ asset('storage/img/manufactured_mask.png') }}" alt="" class="manufactured__bg section__bg">
    <div class="manufactured__container">
        <div class="manufactured__content">
            <h2 class="manufactured__title title">Наши производители</h2>
            <div class="manufactured__items splide js-manufactured-slider">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach([
                                1 => 'Eaier',
                                2 => 'Foryard',
                                3 => 'Fujicon',
                                4 => 'JS Artifical Grass',
                                5 => 'Marquis',
                                6 => 'Eaier',
                            ] as $keyManufactured => $titleManufactured)
                            <li class="splide__slide">
                                <div class="manufactured__icon">
                                    <img src="{{ asset("storage/img/manufacturers/{$keyManufactured}.png") }}" alt="{{ $titleManufactured }}">
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev">
                        <img src="{{ asset('storage/img/icon/arr_l.svg') }}" alt="">
                    </button>
                    <button class="splide__arrow splide__arrow--next">
                        <img src="{{ asset('storage/img/icon/arr_l.svg') }}" alt="">
                    </button>
                </div>
            </div>
            <p class="manufactured__desc">Lorem ipsum dolor sit amet consectetur. Non eget blandit in euismod felis id quisque nunc. Non orci lacus elit mauris velit gravida imperdiet id. Ipsum pulvinar ac ut sociis. Sed magna gravida consequat et euismod aenean quis mauris. Ut etiam egestas ultrices faucibus ultrices nisl enim consequat faucibus. Nibh id leo ullamcorper eleifend. Id at commodo interdum et leo.</p>
        </div>
    </div>
</section>