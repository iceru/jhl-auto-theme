<?php get_header(); ?>

<section class="h-[389px] w-full relative flex flex-col justify-end pb-[71px]">
    <div>
        <img class="absolute top-0 left-0 w-full h-full object-cover object-center"
            src="<?php echo get_template_directory_uri() ?>/images/service-hero.png" alt="">
    </div>
    <div class="absolute left-0 bottom-0 w-full h-[80%] bg-gradient-to-t from-jhl-black to-jhl-black/0"></div>
    <div class="container text-white relative z-10">
        <h2>
            JHL Auto Service Center
        </h2>
    </div>
</section>

<section class="container py-20 overflow-hidden">
    <div class="flex justify-between items-end mb-10">
        <p class="body max-w-[638px] text-jhl-gray-1">
            Bengkel resmi JHL Auto memberikan perawatan purna jual berstandar global untuk BAIC, serta layanan servis
            khusus
            untuk kendaraan unik Premium Car (service only). Fasilitas kami dilengkapi peralatan modern dan teknisi
            bersertifikat untuk memastikan kendaraan Anda selalu dalam kondisi optimal.
        </p>
        <div id="service-arrows" class="flex gap-2"></div>
    </div>

    <div id="services-slider" class="-mx-3">
        <?php
        $service_query = new WP_Query([
            'post_type' => 'services', // Change this to your actual CPT slug
            'posts_per_page' => -1,
        ]);

        if ($service_query->have_posts()) : 
            while ($service_query->have_posts()) : $service_query->the_post(); ?>

        <div class="px-3 outline-none">
            <div class="flex flex-col h-full">
                <div class="rounded-lg overflow-hidden aspect-video mb-4">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover']); ?>
                    <?php else : ?>
                    <div class="w-full h-full bg-gray-200 flex items-center justify-center">No Image</div>
                    <?php endif; ?>
                </div>

                <h3 class="text-xl font-bold mb-2"><?php the_title(); ?></h3>
                <div class="text-jhl-gray-1 text-sm line-clamp-3">
                    <?php echo get_the_excerpt(); ?>
                </div>
            </div>
        </div>

        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
</section>

<section class="py-20 bg-beijing-black">
    <div class="container text-white">
        <div class="text-[28px] leading-[30px] mb-12">PROMOTIONS</div>
        <div class="grid grid-cols-2  md:grid-cols-5 gap-[14px]">
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/images/promo-1.png"
                    class="rounded-lg w-full object-cover mb-8" alt="">
                <h5 class="mb-8 !text-white">
                    Discover innovation and adventure at the Mall Exhi...
                </h5>
                <a href="" class="text-xs text-jhl-gray-1 font-semibold uppercase tracking-wide !no-underline">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>
<?php get_footer();