<?php get_header() ?>

<section>
    <div>
        <?php
        $hero_video = get_field('hero_video_url');
        ?>
        <video src="<?php echo esc_url($hero_video); ?>" autoplay muted loop playsinline
            class="w-full h-full object-cover"></video>
    </div>
</section>

<section class="grid md:grid-cols-2 md:h-screen bg-jhl-foreground/30">
    <div class="flex flex-col justify-center px-4 md:px-20 py-20 md:py-0">
        <h2 class="text-2xl md:text-[44px] mb-11 font-light">
            <?php echo get_field('about_title') ?: 'Sekilas Tentang Kami'; ?>
        </h2>
        <div class="body mb-14 md:mb-[73px]">
            <?php echo get_field('about_description') ?: 'Sejak 2012, JHL Auto sebagai bagian dari JHL Group berkomitmen menghadirkan pengalaman otomotif premium di Indonesia. Kini, melalui jaringan merek global seperti Jeep dan BAIC, JHL Auto terus memperkuat posisinya sebagai mitra mobilitas yang tepercaya dan progresif di Indonesia.'; ?>
        </div>
        <?php
        $about_link = get_field('about_link_url') ?: '';
        ?>
        <a href="/our-story"
            class="text-xs flex items-center space-x-2 uppercase text-jhl-gray-2 font-semibold tracking-wide !no-underline">
            <img src="<?php echo get_template_directory_uri() ?>/images/chevron-right.png" alt="">
            <span>
                Pelajari
            </span>
        </a>
    </div>
    <div>
        <?php
        $about_img = get_field('about_image');
        $about_img_url = $about_img ? $about_img['url'] : get_template_directory_uri() . '/images/home-1.png';
        ?>
        <img src="<?php echo esc_url($about_img_url); ?>" alt="Sekilas Tentang Kami"
            class=" top-0 left-0 w-full h-full object-cover">
    </div>
</section>

<section class="container py-20 md:pt-32 md:pb-20">
    <div class="md:text-center mb-12">
        <h2 class="text-2xl md:text-[44px] mb-6 font-light">
            <?php echo get_field('promo_title') ?: 'Promo Terbaru'; ?>
        </h2>
        <p class="text-jhl-gray-1 body max-w-[290px] md:max-w-none">
            <?php echo get_field('promo_subtitle') ?: 'Nikmati penawaran terbaik kami hanya untuk Anda. <br class="hidden md:block" /> Manfaatkan promonya dan segera dapatkan kendaraan baru yang Anda impikan!'; ?>
        </p>
    </div>

    <div class="flex overflow-x-auto snap-x snap-mandatory md:grid md:grid-cols-4 gap-6 no-scrollbar pb-6">
        <?php
        $args = array(
            'post_type' => 'promotion',
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $promo_query = new WP_Query($args);

        if ($promo_query->have_posts()):
            while ($promo_query->have_posts()):
                $promo_query->the_post(); ?>

                <div class="flex-none w-[75%] snap-start md:w-full">
                    <div class="mb-8">
                        <?php if (has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('large'); ?>" class="rounded-lg w-full object-cover">
                        <?php endif; ?>
                    </div>

                    <h5 class="leading-[22px] font-medium mb-8 !text-jhl-black">
                        <?php the_title(); ?>
                    </h5>

                    <a href="<?php the_permalink(); ?>"
                        class="text-xs flex items-center space-x-2 text-jhl-gray-1 font-semibold tracking-wide !no-underline">
                        <img src="<?php echo get_template_directory_uri() ?>/images/chevron-right.png" alt="">
                        <span>
                            Learn More
                        </span>
                    </a>
                </div>

            <?php endwhile;
            wp_reset_postdata();
        endif; ?>
    </div>
</section>

<section class="py-20 md:pt-32 md:pb-20 bg-black/80 text-white">
    <div class="container">
        <div class="md:text-center mb-12">
            <h2 class="text-2xl md:text-[44px] mb-6 font-light">
                <?php echo get_field('branches_title') ?: 'Cabang Kami'; ?>
            </h2>
            <p class="body md:max-w-[486px] mx-auto">
                <?php echo get_field('branches_description') ?: 'Rasakan pengalaman profesional JHL Auto di berbagai lokasi strategis terdekat yang siap melayani kebutuhan mobilitas Anda setiap saat.'; ?>
            </p>
        </div>

        <div class="flex overflow-x-auto snap-x snap-mandatory md:grid md:grid-cols-4 gap-4 no-scrollbar pb-6">
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

                        <h4 class="leading-7 text-xl mb-4">
                            <?php the_title(); ?>
                        </h4>

                        <div class="body text-jhl-gray-1">
                            <?php the_content(); ?>
                        </div>
                    </div>

                <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</section>

<style>
    /* Add this to your CSS file to hide the scrollbars while keeping functionality */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

<section class="py-20 md:pt-32 md:pb-20 bg-jhl-foreground">
    <div class="container flex flex-wrap md:flex-nowrap justify-between items-center">
        <div class="mb-12">
            <h2 class="text-2xl md:text-[44px] mb-6 font-light">
                <?php echo get_field('awards_title') ?: 'Penghargaan Kami'; ?>
            </h2>
            <p class="body md:max-w-[426px] mx-auto">
                <?php echo get_field('awards_description') ?: 'Perjalanan kami di industri otomotif telah diakui melalui berbagai penghargaan bergengsi. 
                Berikut deretan pencapaian yang mencerminkan komitmen kami terhadap kualitas dan layanan terbaik.'; ?>
            </p>
        </div>
        <div
            class="awards-container grid w-full md:w-fit grid-cols-2 gap-11 md:flex items-start md:space-x-14 md:gap-0">
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

                        <p class="award-title body <?php echo $is_first ? 'block' : 'hidden'; ?>">
                            <?php the_title(); ?>
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

            $(this).find('.award-image-wrapper').addClass('opacity-100').removeClass('opacity-40');
            $(this).find('.award-title').removeClass('hidden').addClass('block');
        });
    });
</script>

<section class="py-20 md:pt-32 md:pb-20 bg-jhl-gray-3">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-[44px] mb-6 font-light">
                <?php echo get_field('news_title') ?: 'Berita Terbaru'; ?>
            </h2>
            <p class="body md:max-w-[547px] mx-auto mb-6">
                <?php echo get_field('news_subtitle') ?: 'Jadilah yang pertama tahu mengenai JHL Auto. Peluncuran model kendaraan terkini, aktivitas dealer resmi, hingga layanan dan inovasi, semua ada di sini.'; ?>
            </p>
            <a href="/news"
                class="text-xs flex items-center justify-center space-x-2 text-jhl-black font-semibold tracking-wide !no-underline uppercase">
                <img src="<?php echo get_template_directory_uri() ?>/images/chevron-right.png" class="brightness-20"
                    alt="">
                <span>
                    Telusuri
                </span>
            </a>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <?php
            $args = array('post_type' => 'post', 'posts_per_page' => 3);
            $news_query = new WP_Query($args);

            if ($news_query->have_posts()):
                while ($news_query->have_posts()):
                    $news_query->the_post(); ?>

                    <div class="bg-[#060606]/20 backdrop-blur-xl text-white rounded-lg">
                        <div class="mb-4">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="rounded-lg w-full">
                        </div>
                        <div class="py-6 px-8">
                            <small class="text-[10px] uppercase tracking-wide block mb-3">
                                <?php echo get_the_date('d F Y'); ?>
                            </small>
                            <h3 class="leading-7 text-[27px] mb-3 font-light">
                                <?php the_title(); ?>
                            </h3>
                            <p class="text-xs leading-6 mb-12 line-clamp-2">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>"
                                class="text-xs pt-3 border-t pr-14 inline-block border-white font-semibold uppercase tracking-wide !no-underline">
                                Read More
                            </a>
                        </div>
                    </div>

                <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</section>

<section class="relative md:h-[70vh] w-full py-16">
    <?php
    $loyalty_bg = get_field('loyalty_bg');
    $loyalty_bg_url = $loyalty_bg ? $loyalty_bg['url'] : get_template_directory_uri() . '/images/header-home-1.png';
    ?>
    <img src="<?php echo esc_url($loyalty_bg_url); ?>" alt="Hero Image"
        class="hidden md:block top-0 left-0 w-full h-full object-cover absolute">
    <div class="container flex flex-col justify-center h-full p-4 md:p-0">
        <div
            class="md:bg-jhl-background/20 md:backdrop-blur-2xl p-7 text-white w-full md:w-[486px] rounded-xl flex space-x-4 relative z-10">

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
                    <a href="<?php echo get_field('app_store_url') ?: '#'; ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/images/app-store.png" alt="App Store">
                    </a>
                    <a href="<?php echo get_field('play_store_url') ?: '#'; ?>">
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