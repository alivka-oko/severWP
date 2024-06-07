<?php
class Custom_News_Widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
            'custom_news_widget', // Base ID
            __('Custom News Widget', 'text_domain'), // Name
            array('description' => __('Custom widget for displaying news in specific format', 'text_domain'),) // Args
        );
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];

        $query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => $instance['number_of_posts'],
        ));

        $current_post_id = get_the_ID();
        // Формируем аргументы запроса для WP_Query
        $category = !empty($instance['category']) ? $instance['category'] : '';

        $query_args = array(
            'post_type' => 'post',
            'posts_per_page' => $instance['number_of_posts'],
            'post__not_in' => array($current_post_id), // Исключаем текущую страницу из списка
        );

        // Если выбрана категория, добавляем ее в аргументы запроса
        if (!empty($category)) {
            $query_args['cat'] = $category;
        }

        $query = new WP_Query($query_args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
?>
                <article class="news-item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="news__card">
                            <div class="news__card-img" style="background:url(<?= get_the_post_thumbnail_url() ?>)">
                            </div>
                            <div class="news__card-headline">
                                <span class="news__card-date"><?php the_date('d-m-Y'); ?></span>
                                <p class="news__card-text"><?php the_title(); ?></p>
                                <div class="news__card-arrow">
                                    <span class="news__card-more"><?php _e('Читать дальше', 'text_domain'); ?></span>
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.76471 11L11.1765 1M11.1765 1H1.76471M11.1765 1V11" stroke="#BD9D62" stroke-width="2" stroke-linecap="square" stroke-linejoin="bevel"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </article>
        <?php
            }
            wp_reset_postdata(); // Сбросить данные запроса
        }
        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : __('Latest News', 'text_domain');
        $number_of_posts = !empty($instance['number_of_posts']) ? $instance['number_of_posts'] : 5;
        $category = !empty($instance['category']) ? $instance['category'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('number_of_posts'); ?>"><?php _e('Number of posts:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('number_of_posts'); ?>" name="<?php echo $this->get_field_name('number_of_posts'); ?>" type="text" value="<?php echo esc_attr($number_of_posts); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Category:', 'text_domain'); ?></label>
            <select class="widefat" id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>">
                <option value=""><?php _e('All Categories', 'text_domain'); ?></option>
                <?php
                $categories = get_categories();
                foreach ($categories as $cat) {
                    $selected = ($cat->cat_ID == $category) ? 'selected' : '';
                    echo '<option value="' . $cat->cat_ID . '" ' . $selected . '>' . $cat->name . '</option>';
                }
                ?>
            </select>
        </p>
<?php
    }
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['number_of_posts'] = (!empty($new_instance['number_of_posts'])) ? strip_tags($new_instance['number_of_posts']) : '';
        $instance['category'] = (!empty($new_instance['category'])) ? $new_instance['category'] : ''; // Добавляем сохранение категории
        return $instance;
    }
}

function register_custom_news_widget()
{
    register_widget('Custom_News_Widget');
}
add_action('widgets_init', 'register_custom_news_widget');