<?php get_sidebar(); ?>

</main>
<footer id="footer" role="contentinfo" class="section">
    <div class="ellipse ellipse-blue"></div>
    <div class="content">
        <div class="top-content">
            <div class="main-info">
                <?php $logo = get_theme_mod('logo');
                if ($logo): ?>
                    <a class="custom-logo-link" href="<?php echo home_url(); ?>"><img class="custom-logo" src="<?= $logo ?>"
                            alt="Логотип <?php bloginfo('name'); ?>"></a>
                <?php else: ?>
                    <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                <?php endif; ?>
                <p class="text-1"><?= get_theme_mod('main_info_postcode'); ?></p>
                <a href="tel:<?= get_theme_mod('main_info_phone'); ?>" class="headline-3 phone"><?= get_theme_mod('main_info_phone'); ?></a>
            </div>
            <div class="menus">
                <div class="col">
                    <h3 class="headline-3"><?= wp_get_nav_menu_name('about'); ?></h3>
                    <ul class="menu text-2">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'about',
                            'container' => '',
                            'menu_id' => '',
                            'items_wrap' => '%3$s',
                            'add_a_class' => 'link',
                        ])
                            ?>
                    </ul>
                </div>
                <div class="col">
                    <h3 class="headline-3"><?= wp_get_nav_menu_name('products'); ?></h3>
                    <ul class="menu text-2">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'products',
                            'container' => '',
                            'menu_id' => '',
                            'items_wrap' => '%3$s',
                            'add_a_class' => 'link',
                        ])
                            ?>
                    </ul>
                </div>
                <div class="col">
                    <h3 class="headline-3"><?= wp_get_nav_menu_name('information'); ?></h3>
                    <ul class="menu text-2">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'information',
                            'container' => '',
                            'menu_id' => '',
                            'items_wrap' => '%3$s',
                            'add_a_class' => 'link',
                        ])
                            ?>
                    </ul>
                </div>
                <div class="col">
                    <h3 class="headline-3">Контакты</h3>
                    <ul class="menu text-2">
                        <li id="menu-item-106"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-106"><a
                                href="mailto:<?= get_theme_mod('main_info_email'); ?>"
                                class="link"><?= get_theme_mod('main_info_email'); ?></a>
                        </li>
                        <li id="menu-item-107"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-107"><a
                                href="<?= get_theme_mod('social_link_vk'); ?>" class="link">Вконтакте</a></li>
                        <li id="menu-item-108"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-108"><a
                                href="<?= get_theme_mod('social_link_youtube'); ?>" class="link">Youtube</a></li>
                    </ul>
                </div>
            </div>
            <a href="#top-anchor" class="button button-up animate__animated animate__fadeInDown"><svg
                    viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.5 0V24.5M11.5 24.5L22 14M11.5 24.5L1 14" stroke="#394645" stroke-width="2" />
                </svg>
            </a>
        </div>
        <div class="bottom-content">
            <div id="copyright" class="text-2">
                &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?>
                <?= get_theme_mod('main_info_copyright'); ?>
            </div>
            <div class="policy">
                <a href="<?= get_theme_mod('main_info_terms_link'); ?>" class="text-2 link">Пользовательское
                    соглашение</a>
                <a href="<?= get_theme_mod('main_info_privacy_policy_link'); ?>" class="text-2 link">Политика
                    конфиденциальности</a>
            </div>
        </div>
    </div>
</footer>
</div>
<?php get_template_part('modal'); ?>
<?php wp_footer(); ?>
</body>

</html>