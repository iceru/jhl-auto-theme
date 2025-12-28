<?php

if (is_file(__DIR__ . '/vendor/autoload_packages.php')) {
    require_once __DIR__ . '/vendor/autoload_packages.php';
}

function tailpress(): TailPress\Framework\Theme
{
    return TailPress\Framework\Theme::instance()
        ->assets(
            fn($manager) => $manager
                ->withCompiler(
                    new TailPress\Framework\Assets\ViteCompiler,
                    fn($compiler) => $compiler
                        ->registerAsset('resources/css/app.css')
                        ->registerAsset('resources/js/app.js')
                        ->editorStyleFile('resources/css/editor-style.css')
                )
                ->enqueueAssets()
        )
        ->features(fn($manager) => $manager->add(TailPress\Framework\Features\MenuOptions::class))
        ->menus(fn($manager) => $manager->add('primary', __('Primary Menu', 'tailpress')))
        ->themeSupport(fn($manager) => $manager->add([
            'title-tag',
            'custom-logo',
            'post-thumbnails',
            'align-wide',
            'wp-block-styles',
            'responsive-embeds',
            'html5' => [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ]
        ]));
}

add_action('wp_ajax_filter_news', 'filter_news_func');
add_action('wp_ajax_nopriv_filter_news', 'filter_news_func');

function filter_news_func()
{
    // Sanitize and check inputs
    $post_type = isset($_POST['type']) ? sanitize_text_field($_POST['type']) : 'post';
    $brands = isset($_POST['brands']) ? $_POST['brands'] : '';

    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => 9,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC'
    );

    // If brands are selected (they come as a comma-separated string from FormData)
    if (!empty($brands)) {
        // category_name accepts a comma-separated string for "OR" logic
        $args['category_name'] = $brands;
    }

    $query = new WP_Query($args);

    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post(); ?>
            <div class="space-y-4 fade-in">
                <div class="overflow-hidden rounded-sm">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: 'https://via.placeholder.com/400x180'; ?>"
                        alt="" class="w-full h-[180px] object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <h5 class="font-bold uppercase leading-tight min-h-[3rem]"><?php the_title(); ?></h5>
                <p class="text-sm text-gray-600 line-clamp-2">
                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="text-xs font-semibold flex items-center space-x-2 group !no-underline">
                    <img class="w-1.5 h-2.5 group-hover:translate-x-0.5 transition-transform"
                        src="<?php echo get_template_directory_uri() ?>/images/c-right-black.png" alt="">
                    <span>READ MORE</span>
                </a>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    else:
        echo '<div class="col-span-3 py-10 text-center text-gray-400 italic">No posts found in this category.</div>';
    endif;

    wp_die(); // Always use wp_die() in AJAX
}

add_filter('wpcf7_form_tag', 'dynamic_dealer_dropdown_options', 10, 2);

function dynamic_dealer_dropdown_options($tag, $unused)
{
    // Check if this is the field we want to target
    if ($tag['name'] != 'dealer-list') {
        return $tag;
    }

    $args = array(
        'post_type' => 'dealers',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC',
    );

    $dealers = get_posts($args);

    if (!$dealers) {
        return $tag;
    }

    // Start with a default empty option
    $tag['raw_values'][] = '';
    $tag['values'][] = '';
    $tag['labels'][] = '--- Pilih Dealer ---';

    foreach ($dealers as $dealer) {
        $tag['raw_values'][] = $dealer->post_title;
        $tag['values'][] = $dealer->post_title;
        $tag['labels'][] = $dealer->post_title;
    }

    return $tag;
}
tailpress();
