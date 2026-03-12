<?php get_header() ?>
<section data-scroll-section>
    <section class="relative w-full h-screen" data-scroll data-scroll-speed="-2">
        <div class="absolute inset-0 -top-4 zoom-blur-out" data-scroll data-scroll-class="is-inview">
            <?php

            $hero_video_url = get_field('hero_video_file');
            if ($hero_video_url):
                ?>
                <video autoplay muted loop playsinline class="w-full h-full object-cover">
                    <source src="<?php echo esc_url($hero_video_url); ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            <?php endif; ?>
        </div>
    </section>
</section>

<section class="bg-[#F4F4F4] relative md:h-screen z-10">
    <div class="container grid md:grid-cols-2 md:h-screen">
        <div class="flex flex-col justify-center md:pr-20 py-20 md:py-0">
            <h2 class="text-2xl md:text-[44px] mb-11 font-light fade-right" data-scroll data-scroll-class="is-inview">
                <?php echo get_field('about_title') ?: 'Tentang JHL Auto'; ?>
            </h2>
            <div class="body mb-14 md:mb-[73px] fade-up" data-scroll data-scroll-class="is-inview">
                <?php echo get_field('about_description') ?: 'JHL Auto bukan sekadar dealer otomotif. Kami adalah bagian dari transformasi industri, menghadirkan standar layanan yang terukur, pengalaman premium yang konsisten, dan visi ekspansi jangka panjang sebagai group dealer otomotif terdepan di Indonesia.'; ?>
            </div>
            <?php
            $about_link = get_field('about_link_url') ?: '';
            ?>
            <a href="/our-story"
                class="text-xs flex items-center space-x-2 uppercase text-jhl-gray-2 font-semibold tracking-wide !no-underline fade-up"
                data-scroll data-scroll-class="is-inview">
                <img src="<?php echo get_template_directory_uri() ?>/images/chevron-right.png" alt="">
                <span>
                    Pelajari
                </span>
            </a>
        </div>
        <div class="md:absolute md:right-0 md:top-0 md:w-1/2 h-full -mx-4 md:mx-0 overflow-hidden">
            <?php
            $about_img = get_field('about_image');
            $about_img_url = $about_img ? $about_img['url'] : get_template_directory_uri() . '/images/homepage-1.webp';
            ?>
            <img src="<?php echo esc_url($about_img_url); ?>" alt="Sekilas Tentang Kami"
                class="absolute left-0 w-full h-[110%] -top-[20%] object-cover" data-scroll data-scroll-speed="-2">
        </div>
    </div>

</section>

<section class="container pr-0 md:pr-4 py-20 md:pt-32 md:pb-20" data-scroll-section>
    <div class="md:text-center mb-12 pr-4 md:pr-0">
        <h2 class="text-2xl md:text-[44px] mb-6 font-light fade-down" data-scroll data-scroll-class="is-inview">
            <?php echo get_field('promo_title') ?: 'Penawaran Eksklusif'; ?>
        </h2>
        <p class="text-jhl-gray-1 body max-w-[290px] md:max-w-[554px] mx-auto fade-up" data-scroll
            data-scroll-class="is-inview">
            <?php echo get_field('promo_subtitle') ?: 'Temukan berbagai program spesial dari JHL Auto yang dirancang untuk memberikan nilai lebih dalam setiap perjalanan Anda.'; ?>
        </p>
    </div>

    <div class="flex overflow-x-auto snap-x snap-mandatory md:grid md:grid-cols-4 gap-6 no-scrollbar pb-6 fade-right"
        data-scroll data-scroll-class="is-inview">
        <?php
        $args = array(
            'post_type' => 'promotion',
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'ASC'
        );
        $promo_query = new WP_Query($args);

        if ($promo_query->have_posts()):
            while ($promo_query->have_posts()):
                $promo_query->the_post(); ?>

                <a href="<?php the_permalink(); ?>" class="flex-none w-[75%] snap-start md:w-full">
                    <div class="mb-8 block">
                        <?php if (has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('large'); ?>" class="rounded-lg w-full h-[358px] object-cover">
                        <?php endif; ?>
                    </div>
                    <div class="block">
                        <h5 class="leading-[22px] font-medium mb-8 !text-jhl-black line-clamp-3 h-[66px]">
                            <?php the_title(); ?>
                        </h5>
                    </div>
                    <divd class="text-xs flex items-center space-x-2 text-jhl-gray-1 font-semibold tracking-wide !no-underline">
                        <img src="<?php echo get_template_directory_uri() ?>/images/chevron-right.png" alt="">
                        <span>
                            Lihat Detail
                        </span>
                </a>
                </a>

            <?php endwhile;
            wp_reset_postdata();
        endif; ?>
    </div>
</section>

<section class="py-20 md:pt-32 md:pb-20 bg-black/80 text-white" data-scroll-section>
    <div class="container pr-0 md:pr-4">
        <div class="md:text-center mb-12 pr-4 md:pr-0">
            <h2 class="text-2xl md:text-[44px] mb-6 font-light fade-down" data-scroll data-scroll-class="is-inview">
                <?php echo get_field('branches_title') ?: 'Jaringan Dealer Kami'; ?>
            </h2>
            <p class="body md:max-w-[486px] mx-auto fade-up" data-scroll data-scroll-class="is-inview">
                <?php echo get_field('branches_description') ?: 'Dengan jaringan dealer resmi yang terus berkembang, JHL Auto memastikan standar layanan, profesionalisme, dan pengalaman premium dapat Anda rasakan di setiap lokasi kami.'; ?>
            </p>
        </div>

        <div class="flex overflow-x-auto snap-x snap-mandatory md:grid md:grid-cols-4 gap-4 no-scrollbar pb-6 fade-right"
            data-scroll data-scroll-class="is-inview">
            <?php
            $args = array(
                'post_type' => 'dealer',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $dealers_query = new WP_Query($args);

            if ($dealers_query->have_posts()):
                while ($dealers_query->have_posts()):
                    $dealers_query->the_post(); ?>

                    <div class="flex-none w-[75%] snap-start md:w-full">
                        <div class="mb-4">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
                                alt="<?php the_title(); ?>" class="rounded-lg h-[318px] object-cover w-full">
                        </div>

                        <h4 class="leading-7 text-xl mb-4 fade-up" data-scroll data-scroll-class="is-inview">
                            <?php the_title(); ?>
                        </h4>

                        <div class="body text-jhl-gray-1 fade-up mb-4" data-scroll data-scroll-class="is-inview">
                            <?php the_content(); ?>
                        </div>
                        <a href="https://baic.codeomnia.com/service/"
                            class="text-xs flex items-center space-x-2 text-jhl-gray-1 font-semibold tracking-wide !no-underline">
                            <img src="<?php echo get_template_directory_uri() ?>/images/chevron-right.png" alt="">
                            <span>
                                Lihat Detail
                            </span>
                        </a>
                    </div>

                <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</section>
<section class="py-20 md:pt-32 md:pb-20 bg-jhl-foreground" data-scroll-section>
    <div class="container flex flex-wrap md:flex-nowrap justify-between items-center">
        <div class="mb-12">
            <h2 class="text-2xl md:text-[44px] mb-6 font-light fade-right" data-scroll data-scroll-class="is-inview">
                <?php echo get_field('awards_title') ?: 'Prestasi & Penghargaan'; ?>
            </h2>
            <p class="body md:max-w-[426px] mx-auto fade-up" data-scroll data-scroll-class="is-inview">
                <?php echo get_field('awards_description') ?: 'Perjalanan kami di industri otomotif ditandai 
                dengan berbagai penghargaan bergengsi yang menjadi bukti komitmen terhadap kualitas, inovasi, 
                dan standar layanan premium.'; ?>
            </p>
        </div>
        <div class="awards-container grid w-full md:w-fit grid-cols-2 gap-6 md:flex items-start md:gap-12 fade-left"
            data-scroll data-scroll-class="is-inview">
            <?php
            $args = array(
                'post_type' => 'awards',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );
            $awards_query = new WP_Query($args);

            if ($awards_query->have_posts()):
                $count = 0;
                while ($awards_query->have_posts()):
                    $awards_query->the_post();
                    $is_first = ($count === 0);
                    ?>

                    <div class="award-item text-center group cursor-pointer <?php echo $is_first ? 'active' : ''; ?>">
                        <div
                            class="award-image-wrapper flex justify-center mb-4 transition <?php echo $is_first ? 'opacity-100' : 'opacity-40'; ?>">
                            <img class="w-auto h-[130px] object-contain"
                                src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>">
                        </div>

                        <p class="award-title body max-w-[180px] <?php echo $is_first ? 'block' : 'hidden'; ?>">
                            <?php the_title(); ?>
                        </p>
                        <p class="award-description body max-w-[180px] <?php echo $is_first ? 'block' : 'hidden'; ?>">
                            <?php echo strip_tags(get_the_content()); ?>
                        </p>
                    </div>

                    <?php $count++;
                endwhile;
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
    jQuery(document).ready(function ($) {
        $('.award-item').on('click', function () {
            $('.award-image-wrapper').removeClass('opacity-100').addClass('opacity-40');
            $('.award-title').addClass('hidden').removeClass('block');
            $('.award-description').addClass('hidden').removeClass('block');

            $(this).find('.award-image-wrapper').addClass('opacity-100').removeClass('opacity-40');
            $(this).find('.award-title').removeClass('hidden').addClass('block');
            $(this).find('.award-description').removeClass('hidden').addClass('block');
        });
    });
</script>

<section class="py-20 md:pt-32 md:pb-20 bg-jhl-gray-3" data-scroll-section>
    <div class="container">
        <div class="md:text-center mb-12">
            <h2 class="text-2xl md:text-[44px] mb-6 font-light fade-up" data-scroll data-scroll-class="is-inview">
                <?php echo get_field('news_title') ?: 'Update & Aktivitas'; ?>
            </h2>
            <p class="body md:max-w-[547px] mx-auto mb-6 fade-up" data-scroll data-scroll-class="is-inview">
                <?php echo get_field('news_subtitle') ?: 'Ikuti berbagai perkembangan terbaru seputar JHL Auto, mulai dari peluncuran produk, aktivitas dealer, hingga inovasi layanan yang terus berkembang.'; ?>
            </p>
            <a href="/news"
                class="text-xs flex items-center md:justify-center space-x-2 text-jhl-black font-semibold tracking-wide !no-underline uppercase fade-up"
                data-scroll data-scroll-class="is-inview">
                <img src="<?php echo get_template_directory_uri() ?>/images/chevron-right.png" class="brightness-20"
                    alt="">
                <span>
                    Lihat Semua Artikel
                </span>
            </a>
        </div>

        <div class="flex overflow-x-auto -mr-4 md:mr-0 snap-x snap-mandatory md:grid md:grid-cols-3 gap-4 no-scrollbar fade-up"
            data-scroll data-scroll-class="is-inview">
            <?php
            $args = array('post_type' => 'post', 'posts_per_page' => 3);
            $news_query = new WP_Query($args);

            if ($news_query->have_posts()):
                while ($news_query->have_posts()):
                    $news_query->the_post(); ?>

                    <a href="<?php the_permalink(); ?>"
                        class="bg-[#060606]/20 backdrop-blur-xl flex-none w-[75%] snap-start md:w-full text-white rounded-lg">
                        <div class="mb-4 block aspect-video overflow-hidden rounded-lg">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="py-4 md:py-6 px-6 md:px-8">
                            <div class="h-[220px]">
                                <small class="text-[10px] uppercase tracking-wide block mb-3">
                                    <?php echo get_the_date('d F Y'); ?>
                                </small>
                                <div class="block">
                                    <h3 class="leading-7 text-[27px] mb-3 font-light line-clamp-2">
                                        <?php the_title(); ?>
                                    </h3>
                                </div>
                                <p class="text-xs leading-6 line-clamp-2 h-12">
                                    <?php echo get_the_excerpt(); ?>
                                </p>
                            </div>
                            <div
                                class="text-xs pt-3 border-t pr-14 inline-block border-white font-semibold uppercase tracking-wide !no-underline">
                                Baca Selengkapnya
                            </div>
                        </div>
                    </a>

                <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</section>

<section class="relative md:min-h-[70vh] w-full py-16" data-scroll-section>
    <?php
    $loyalty_bg = get_field('loyalty_bg');
    $loyalty_bg_url = $loyalty_bg ? $loyalty_bg['url'] : get_template_directory_uri() . '/images/header-home-1.png';
    ?>
    <img src="<?php echo esc_url($loyalty_bg_url); ?>" alt="Hero Image"
        class="hidden md:block top-0 left-0 w-full h-full object-cover absolute">
    <div class="container flex flex-col justify-center h-full p-4">
        <div class="md:bg-jhl-background/20 md:backdrop-blur-2xl p-7 text-white w-full md:w-[486px] rounded-xl flex space-x-4 relative z-10 fade-right"
            data-scroll data-scroll-class="is-inview">

            <div class="md:hidden absolute z-0 w-full h-full left-0 top-0">
                <img src="<?php echo get_template_directory_uri() ?>/images/mobile-loyalty.png" alt=""
                    class="w-full h-full object-cover rounded-lg">
            </div>
            <div class="relative z-10">
                <div class="flex justify-between">
                    <div>
                        <p class="mb-5 text-[10px] tracking-wider uppercase">
                            <?php echo get_field('loyalty_tag_text') ?: 'Loyalty'; ?>
                        </p>
                        <h2 class="text-[44px] mb-6"><?php echo get_field('loyalty_title') ?: 'MYJHL'; ?></h2>
                    </div>
                    <div class="shrink-0 block md:hidden">
                        <?php
                        $loyalty_logo = get_field('loyalty_logo');
                        $loyalty_logo_url = $loyalty_logo ? $loyalty_logo['url'] : get_template_directory_uri() . '/images/my-jhl.svg';
                        ?>
                        <img src="<?php echo esc_url($loyalty_logo_url); ?>" class="w-14" alt="MyJHL App">
                    </div>
                </div>
                <p class="mb-8 font-medium leading-[22px]">
                    <?php echo get_field('loyalty_tagline') ?: 'Your gateway to exclusive experience and limitless leisure'; ?>
                </p>
                <p class="mb-10 text-xs leading-6">
                    <?php echo get_field('loyalty_description') ?: 'Berbagai keistimewaan, kemudahan, dan layanan spesial yang menemani 
                    setiap langkah Anda dapat Anda rasakan dalam ekosistem JHL Group.'; ?>
                </p>
                <p><?php echo get_field('loyalty_cta_text') ?: 'Download Now'; ?></p>
                <div class="flex space-x-4 items-center">
                    <a href="<?php echo get_field('app_store_url') ?: '#'; ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri() ?>/images/app-store.png" alt="App Store">
                    </a>
                    <a href="<?php echo get_field('play_store_url') ?: '#'; ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri() ?>/images/google-play.png" alt="Google Play">
                    </a>
                </div>
            </div>
            <div class="shrink-0 hidden md:block">
                <?php
                $loyalty_logo = get_field('loyalty_logo');
                $loyalty_logo_url = $loyalty_logo ? $loyalty_logo['url'] : get_template_directory_uri() . '/images/my-jhl.svg';
                ?>
                <img src="<?php echo esc_url($loyalty_logo_url); ?>" class="w-14" alt="MyJHL App">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>