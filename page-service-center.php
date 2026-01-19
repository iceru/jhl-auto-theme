<?php get_header(); ?>

<?php
/**
 * ACF Fields with Hardcoded Fallbacks
 */
$hero_bg_field = get_field('service_hero_image');
$hero_bg_url = $hero_bg_field ? esc_url($hero_bg_field['url']) : get_template_directory_uri() . '/images/service-hero.png';
$hero_bg_alt = $hero_bg_field ? esc_attr($hero_bg_field['alt']) : 'JHL Auto Service Center';

$hero_title = get_field('service_hero_title') ?: 'JHL Auto Service Center';

$service_desc = get_field('service_description') ?: 'Bengkel resmi JHL Auto memberikan perawatan purna jual berstandar global untuk BAIC, serta layanan servis khusus untuk kendaraan unik Premium Car (service only). Fasilitas kami dilengkapi peralatan modern dan teknisi bersertifikat untuk memastikan kendaraan Anda selalu dalam kondisi optimal.';

$promo_title = get_field('service_promotions_title') ?: 'PROMOTIONS';
?>

<section class="h-[389px] w-full relative flex flex-col justify-end pb-[71px]">
    <div>
        <img class="absolute top-0 left-0 w-full h-full object-cover object-[30%_center] md:object-center"
            src="<?php echo $hero_bg_url; ?>" alt="<?php echo $hero_bg_alt; ?>">
    </div>
    <div class="absolute left-0 bottom-0 w-full h-[80%] bg-gradient-to-t from-jhl-black to-jhl-black/0"></div>
    <div class="container text-white relative z-10">
        <h2><?php echo esc_html($hero_title); ?></h2>
    </div>
</section>

<section class="container py-20 overflow-hidden">
    <div class="flex justify-between items-end mb-10">
        <p class="body max-w-[638px] text-jhl-gray-1">
            <?php echo nl2br(esc_html($service_desc)); ?>
        </p>
        <div id="service-arrows" class="flex gap-2"></div>
    </div>

    <div id="services-slider" class="-mx-3">
        <?php
        $service_query = new WP_Query([
            'post_type' => 'services',
            'posts_per_page' => -1,
        ]);

        if ($service_query->have_posts()):
            while ($service_query->have_posts()):
                $service_query->the_post(); ?>
                <div class="px-3 outline-none">
                    <div class="flex flex-col h-full">
                        <div class="rounded-lg overflow-hidden mb-4">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('large', ['class' => 'w-[384px] h-[426px] rounded object-cover']); ?>
                            <?php else: ?>
                                <div class="w-full h-full bg-gray-200 flex items-center justify-center">No Image</div>
                            <?php endif; ?>
                        </div>
                        <h4 class="text-xl mb-2"><?php the_title(); ?></h4>
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
        <div class="text-[28px] leading-[30px] mb-12">
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
                    <div class="flex-none w-[75%] snap-start md:w-full">
                        <div class="mb-8">
                            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url('large'); ?>" class="rounded-lg w-full object-cover">
                            <?php endif; ?>
                        </div>
                        <h5 class="leading-[22px] font-medium mb-6 !text-white">
                            <?php the_title(); ?>
                        </h5>
                        <a href="<?php the_permalink(); ?>"
                            class="text-xs flex items-center space-x-2 text-jhl-gray-1 font-semibold tracking-wide !no-underline">
                            <img src="<?php echo get_template_directory_uri() ?>/images/chevron-right.png" alt="">
                            <span>Learn More</span>
                        </a>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>