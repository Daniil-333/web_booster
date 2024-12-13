<section id="faq" class="faq section">
    <img src="{{ asset('storage/img/faq_bg.svg') }}" alt="" class="faq__bg section__bg">
    <img src="{{ asset('storage/img/faq_mask.png') }}" alt="" class="faq__bg section__bg">
    <div class="faq__container">
        <div class="faq__content">
            <h2 class="faq__title title">Ответы на самые популярные вопросы в сфере</h2>
            <div data-acrd="{{ uniqid('acrd') }}" class="faq__items">
                @foreach([
                   1 => [
                       'title' => 'Lorem ipsum dolor sit amet consectetur. Ultrices aliquam1?',
                       'txt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur fugiat iure mollitia nisi odio. Eum, rerum, suscipit? Adipisci architecto eius iure praesentium, recusandae rerum soluta ullam!'
                   ],
                   2 => [
                       'title' => 'Lorem ipsum dolor sit amet consectetur. Ultrices aliquam12',
                       'txt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea exercitationem incidunt itaque molestias praesentium provident quaerat repudiandae sequi. Alias asperiores cumque deserunt et maxime velit veniam. Dolorem quos veritatis voluptatem! A accusamus atque distinctio dolores ducimus eius enim eos laboriosam, maxime nam necessitatibus nesciunt nihil numquam officia perspiciatis porro praesentium quae quas quidem sit soluta unde ut velit veritatis!',
                       'open' => true
                   ],
                   3 => [
                       'title' => 'Lorem ipsum dolor sit amet consectetur. Ultrices aliquam3?',
                       'txt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur consequuntur dolor illum non numquam officia quia voluptates. Adipisci amet impedit officiis sequi ut. Blanditiis incidunt labore odio totam vero.'
                   ],
                   4 => [
                       'title' => 'Lorem ipsum dolor sit amet consectetur. Ultrices aliquam4?',
                       'txt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam at consequatur cumque eligendi, eos ex excepturi explicabo incidunt itaque iure labore libero minima natus, neque odio officiis omnis pariatur quis quisquam, quos sapiente sed sunt tenetur ut velit vitae.'
                   ],
                   5 => [
                       'title' => 'Lorem ipsum dolor sit amet consectetur. Ultrices aliquam5?',
                       'txt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores beatae dicta distinctio doloremque doloribus earum eligendi enim, eveniet excepturi neque nihil nobis nostrum omnis placeat possimus qui quia quibusdam, quidem quo quod ratione reiciendis repellendus repudiandae saepe sapiente tenetur unde voluptas voluptatibus, voluptatum. A aliquam corporis dolorem facere illum maiores nostrum, omnis quo sequi.'
                   ],
               ] as $keyfaq => $itemfaq)
                    <div data-acrd-block class="faq__item faqItem @if(array_key_exists('open', $itemfaq)) _open @endif">
                        <div data-acrd-btn class="faqItem__head">
                            <p class="faqItem__heading">{{ $itemfaq['title'] }}</p>
                            <span class="faqItem__icon"><x-arrow></x-arrow></span>
                        </div>

                        <div data-acrd-body class="faqItem__body" @if(!array_key_exists('open', $itemfaq)) style="display: none;" @endif>
                            <p class="faqItem__txt">{{ $itemfaq['txt'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>