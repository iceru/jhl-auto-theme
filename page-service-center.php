<?php get_header(); ?>

<?php
/**
 * ACF Fields with Hardcoded Fallbacks
 */
$hero_bg_field = get_field('service_hero_image');
$hero_bg_url = $hero_bg_field ? esc_url($hero_bg_field['url']) : get_template_directory_uri() . '/images/service-center.jpg';
$hero_bg_alt = $hero_bg_field ? esc_attr($hero_bg_field['alt']) : 'JHL Auto Service Center';

$hero_title = get_field('service_hero_title') ?: 'JHL Auto Service Center';

$service_desc = get_field('service_description') ?: 'JHL Auto Service Center menghadirkan layanan purna jual berstandar global untuk BAIC serta perawatan khusus bagi kendaraan premium (service only). Didukung fasilitas modern dan teknisi bersertifikasi, setiap proses dirancang untuk menjaga performa, keamanan, dan nilai kendaraan Anda secara optimal.';

$promo_title = get_field('service_promotions_title') ?: 'Penawaran Eksklusif';
?>

<section class="h-[389px] w-full relative flex flex-col justify-end pb-[71px]" data-scroll-section>
    <div>
        <img class="absolute top-0 left-0 w-full h-full object-cover object-[30%_center] md:object-center zoom-out"
            data-scroll data-scroll-class="is-inview" src="<?php echo $hero_bg_url; ?>"
            alt="<?php echo $hero_bg_alt; ?>">
    </div>
    <div class="absolute left-0 bottom-0 w-full h-[80%] bg-gradient-to-t from-jhl-black to-jhl-black/0"></div>
    <div class="container text-white relative z-10">
        <h2 class="fade-down" data-scroll data-scroll-class="is-inview"><?php echo esc_html($hero_title); ?></h2>
    </div>
</section>

<section class="container py-20 overflow-hidden">
    <div class="flex justify-between items-end mb-10">
        <p class="body max-w-[638px] text-jhl-gray-1 fade-down" data-scroll data-scroll-class="is-inview">
            <?php echo nl2br(esc_html($service_desc)); ?>
        </p>
        <div id="service-arrows" class="flex gap-2"></div>
    </div>

    <div class="grid md:grid-cols-4 gap-6">
        <?php
        $service_query = new WP_Query([
            'post_type' => 'services',
            'posts_per_page' => -1,
        ]);

        if ($service_query->have_posts()):
            while ($service_query->have_posts()):
                $service_query->the_post(); ?>
                <div class="outline-none">
                    <div class="flex flex-col h-full fade-right" data-scroll data-scroll-class="is-inview">
                        <div class="rounded-lg overflow-hidden mb-4">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('large', ['class' => 'w-full h-[325px] rounded object-cover']); ?>
                            <?php else: ?>
                                <div class="w-full h-full bg-gray-200 flex items-center justify-center">No Image</div>
                            <?php endif; ?>
                        </div>
                        <h4 class="text-xl mb-2 h-16 line-clamp-2"><?php the_title(); ?></h4>
                        <p class="body text-jhl-gray-1 text-sm">
                            <?php echo get_the_excerpt(); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif; ?>
    </div>
</section>

<section class="py-20 bg-beijing-black">
    <div class="container text-white">
        <div class="text-[28px] leading-[30px] mb-12 fade-down uppercase" data-scroll data-scroll-class="is-inview">
            <?php echo esc_html($promo_title); ?>
        </div>
        <div class="flex overflow-x-auto snap-x snap-mandatory md:grid md:grid-cols-5 gap-[14px]">
            <?php
            $promo_query = new WP_Query([
                'post_type' => 'promotion',
                'posts_per_page' => 5,
                'orderby' => 'date',
                'order' => 'DESC'
            ]);

            if ($promo_query->have_posts()):
                while ($promo_query->have_posts()):
                    $promo_query->the_post(); ?>
                    <div class="flex-none w-[75%] snap-start md:w-full fade-right" data-scroll data-scroll-class="is-inview">
                        <div class="mb-8">
                            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url('large'); ?>" class="rounded-lg w-full object-cover">
                            <?php endif; ?>
                        </div>
                        <h5 class="leading-[22px] font-medium mb-6 !text-white line-clamp-3 h-16">
                            <?php the_title(); ?>
                        </h5>
                        <a href="<?php the_permalink(); ?>"
                            class="text-xs flex items-center space-x-2 text-jhl-gray-1 font-semibold tracking-wide !no-underline">
                            <img src="<?php echo get_template_directory_uri() ?>/images/chevron-right.png" alt="">
                            <span>Lihat Detail</span>
                        </a>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>