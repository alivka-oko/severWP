<?php get_header(); ?>
<main class="main single">
    <section class="section p-96-40">
        <div class="content">
            <?= get_template_part('breadcrumb') ?>
        </div>
    </section>
    <section class="section product-main">
        <div class="content">
            <div class="left-side">
                <h1 class="headline-2"><?= the_title() ?></h1>
                <?= the_content() ?>
                <?= button_brown('#', 'Задать вопрос') ?>
            </div>
            <div class="right-side">
                <div class="swiper swiper-product">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><a href="https://teh-dom.ru/upload/images/old/13121.jpg"
                                class="glightbox" data-gallery="myGallery">
                                <img src="https://teh-dom.ru/upload/images/old/13121.jpg" alt="Image 1 description">
                            </a>
                        </div>
                        <div class="swiper-slide"><a
                                href="https://teplo4life.ru/wp-content/uploads/2021/11/woodpellets1-1200x800-1.jpg"
                                class="glightbox" data-gallery="myGallery">
                                <img src="https://teplo4life.ru/wp-content/uploads/2021/11/woodpellets1-1200x800-1.jpg"
                                    alt="Image 1 description">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper swiper-thumbnail"> <!-- added-->
                    <div class="swiper-wrapper"> <!-- added-->
                        <div class="swiper-slide"><img src="https://teh-dom.ru/upload/images/old/13121.jpg"></div>
                        <!-- added-->
                        <div class="swiper-slide"><img
                                src="https://teplo4life.ru/wp-content/uploads/2021/11/woodpellets1-1200x800-1.jpg">
                        </div> <!-- added-->
                    </div> <!-- added-->
                </div>
            </div>
        </div>
    </section>
    <section class="section main-content p-56-0">
        <div class="content l-r">
            <div class="left-side">
                <?php echo get_the_post_thumbnail(); ?>
                <p class="date text-2">28.10.2024</p>
                <div class="single-content"><?= the_content() ?></div>
            </div>
            <div class="right-side">
                <article class="card-add">
                    <p class="text-1">Следите за новостями компании также в социальных сетях</p>
                    <div class="socials">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" fill="white" />
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#BFBFBF" />
                            <path
                                d="M21.9368 17.7343C21.6458 17.3843 21.729 17.2286 21.9368 16.9157C21.9405 16.9121 24.3428 13.7507 24.5904 12.6786L24.5919 12.6779C24.7149 12.2871 24.5919 12 23.9971 12H22.029C21.528 12 21.297 12.2464 21.1732 12.5221C21.1732 12.5221 20.1712 14.8064 18.7537 16.2871C18.2961 16.715 18.0846 16.8521 17.8349 16.8521C17.7119 16.8521 17.5206 16.715 17.5206 16.3243V12.6779C17.5206 12.2093 17.3804 12 16.9656 12H13.871C13.5567 12 13.37 12.2186 13.37 12.4221C13.37 12.8664 14.0787 12.9686 14.1522 14.2186V16.9307C14.1522 17.525 14.039 17.6343 13.7877 17.6343C13.1187 17.6343 11.4949 15.3407 10.5326 12.7157C10.3384 12.2064 10.1486 12.0007 9.64384 12.0007H7.67502C7.11325 12.0007 7 12.2471 7 12.5229C7 13.01 7.66902 15.4321 10.1111 18.6321C11.7387 20.8164 14.0307 22 16.1158 22C17.3691 22 17.5221 21.7371 17.5221 21.285C17.5221 19.1979 17.4089 19.0007 18.0366 19.0007C18.3276 19.0007 18.8287 19.1379 19.9987 20.1914C21.336 21.4407 21.5558 22 22.3043 22H24.2723C24.8334 22 25.1176 21.7371 24.9541 21.2186C24.5799 20.1279 22.0508 17.8843 21.9368 17.7343Z"
                                fill="#5D5D5D" fill-opacity="0.66" />
                        </svg>
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" fill="white" />
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#BFBFBF" />
                            <path
                                d="M25.1957 11.3882C24.9796 10.5849 24.3463 9.95174 23.5432 9.73544C22.0759 9.33398 16.2068 9.33398 16.2068 9.33398C16.2068 9.33398 10.3379 9.33398 8.87068 9.72022C8.08298 9.93629 7.43422 10.5851 7.21815 11.3882C6.83203 12.8553 6.83203 15.898 6.83203 15.898C6.83203 15.898 6.83203 18.9559 7.21815 20.4077C7.43445 21.2109 8.06754 21.8441 8.8708 22.0604C10.3534 22.462 16.207 22.462 16.207 22.462C16.207 22.462 22.0759 22.462 23.5432 22.0757C24.3464 21.8595 24.9796 21.2263 25.1959 20.4232C25.5819 18.9559 25.5819 15.9134 25.5819 15.9134C25.5819 15.9134 25.5974 12.8553 25.1957 11.3882ZM14.3382 18.7089V13.0871L19.2187 15.898L14.3382 18.7089Z"
                                fill="#5D5D5D" fill-opacity="0.66" />
                        </svg>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>