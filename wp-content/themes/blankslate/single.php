<?php get_header(); ?>
<main class="main single">
    <section class="section p-96-40">
        <div class="content">
            <?= get_template_part('breadcrumb') ?>
        </div>
    </section>
    <section class="section headline">
        <div class="content">
            <h1 class="headline-2"><?= the_title() ?></h1>
        </div>
    </section>
    <section class="section main-content p-56-0">
        <div class="content l-r">
            <div class="left-side">
                <?php echo get_the_post_thumbnail(); ?>
                <p class="date text-2"><?= get_the_date('d.m.y') ?></p>
                <div class="single-content"><?= the_content() ?></div>
                <div class="share">
                    <div class="share-action">
                        <input type="checkbox" id="scales" name="scales" class="share-checkbox">
                        <label for="scales" style="
    padding: 1.6rem;
" class="button button-brown">Поделиться <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 11L11 1M11 1H2M11 1V11" stroke="white" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="bevel"></path>
                            </svg>
                        </label>
                        <div id="share-buttons" class="share-buttons">
                            <a href="https://vk.com/share.php?url=<?php echo get_permalink(); ?>" target="_blank" id="share_vk" class="share-social">
                                <svg width="5rem" height="5rem" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="41" height="41" rx="20.5" fill="#A38D44" />
                                    <rect x="0.5" y="0.5" width="41" height="41" rx="20.5" stroke="#A38D44" />
                                    <path d="M28.792 23.2762C28.4101 22.8169 28.5193 22.6125 28.792 22.2019C28.7969 22.1972 31.95 18.0478 32.2748 16.6406L32.2768 16.6397C32.4383 16.1269 32.2768 15.75 31.4962 15.75H28.9131C28.2555 15.75 27.9523 16.0734 27.7899 16.4353C27.7899 16.4353 26.4747 19.4334 24.6142 21.3769C24.0137 21.9384 23.7361 22.1184 23.4083 22.1184C23.2468 22.1184 22.9958 21.9384 22.9958 21.4256V16.6397C22.9958 16.0247 22.8117 15.75 22.2673 15.75H18.2057C17.7932 15.75 17.5481 16.0369 17.5481 16.3041C17.5481 16.8872 18.4784 17.0213 18.5748 18.6619V22.2216C18.5748 23.0016 18.4262 23.145 18.0964 23.145C17.2183 23.145 15.0871 20.1347 13.8241 16.6894C13.5691 16.0209 13.32 15.7509 12.6575 15.7509H10.0735C9.33615 15.7509 9.1875 16.0744 9.1875 16.4362C9.1875 17.0756 10.0656 20.2547 13.2708 24.4547C15.407 27.3216 18.4154 28.875 21.152 28.875C22.797 28.875 22.9978 28.53 22.9978 27.9366C22.9978 25.1972 22.8491 24.9384 23.6731 24.9384C24.055 24.9384 24.7126 25.1184 26.2483 26.5013C28.0035 28.1409 28.2919 28.875 29.2744 28.875H31.8575C32.5938 28.875 32.9669 28.53 32.7523 27.8494C32.2611 26.4178 28.9416 23.4731 28.792 23.2762Z" fill="white" />
                                </svg>
                            </a>
                            <!-- Добавьте другие кнопки социальных сетей здесь -->
                        </div>
                    </div>

                </div>

            </div>
            <div class="right-side">
                <?= get_template_part('social') ?>
            </div>
        </div>
    </section>


    <?php get_footer(); ?>