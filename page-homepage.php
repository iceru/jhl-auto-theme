<?php get_header() ?>

<section>
    <div>
        <video src=""></video>
    </div>
</section>

<section class="grid md:grid-cols-2 md:h-screen bg-jhl-foreground/30">
    <div class="flex flex-col justify-center px-20">
        <h2 class="text-2xl md:text-[44px] mb-11 font-light">
            Sekilas Tentang Kami
        </h2>
        <p class="body md:mb-[73px]">
            Sejak 2012, JHL Auto sebagai bagian dari JHL Group berkomitmen menghadirkan pengalaman otomotif premium di
            Indonesia. Kini, melalui jaringan merek global seperti Jeep dan BAIC, JHL Auto terus memperkuat posisinya
            sebagai mitra mobilitas yang tepercaya dan progresif di Indonesia.
        </p>
        <a href="" class="text-xs text-jhl-gray-2 font-semibold uppercase tracking-wide">
            Pelajari
        </a>
    </div>
    <div>
        <img src="<?php echo get_template_directory_uri() ?>/images/home-1.png" alt="Sekilas Tentang Kami"
            class=" top-0 left-0 w-full h-full object-cover">
    </div>
</section>

<section class="container pt-32 pb-20">
    <div class="text-center mb-12">
        <h2 class="text-2xl md:text-[44px] mb-6 font-light">
            Promo Terbaru
        </h2>
        <p class="text-jhl-gray-1 body">
            Nikmati penawaran terbaik kami hanya untuk Anda. <br />
            Manfaatkan promonya dan segera dapatkan kendaraan baru yang Anda impikan!
        </p>
    </div>

    <div class="grid md:grid-cols-4 gap-6">
        <?php
        $args = array(
            'post_type'      => 'promotions',
            'posts_per_page' => 4,
            'orderby'        => 'date',
            'order'          => 'DESC'
        );
        $promo_query = new WP_Query($args);

        if ($promo_query->have_posts()) :
            while ($promo_query->have_posts()) : $promo_query->the_post(); ?>

        <div>
            <div class="mb-8">
                <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" class="rounded-lg">
                <?php endif; ?>
            </div>

            <h5 class="leading-[22px] font-medium mb-8">
                <?php the_title(); ?>
            </h5>

            <a href="<?php the_permalink(); ?>" class="text-xs text-jhl-gray-2 font-semibold uppercase tracking-wide">
                Learn More
            </a>
        </div>

        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
</section>

<section class="pt-32 pb-20 bg-black/80 text-white">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-[44px] mb-6 font-light">
                Cabang Kami
            </h2>
            <p class="body md:max-w-[486px] mx-auto">
                Rasakan pengalaman profesional JHL Auto di berbagai lokasi strategis terdekat yang siap melayani
                kebutuhan mobilitas Anda setiap saat.
            </p>
        </div>
        <div class="grid md:grid-cols-4 gap-4">
            <?php
            $args = array(
                'post_type'      => 'dealers',
                'posts_per_page' => -1,
                'orderby'        => 'title',
                'order'          => 'ASC'
            );
            $dealers_query = new WP_Query($args);

            if ($dealers_query->have_posts()) :
            while ($dealers_query->have_posts()) : $dealers_query->the_post(); ?>

            <div>
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

            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>
</section>

<section class="pt-32 pb-20 bg-jhl-foreground">
    <div class="container flex justify-between items-center">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-[44px] mb-6 font-light">
                Penghargaan Kami
            </h2>
            <p class="body md:max-w-[426px] mx-auto">
                Perjalanan kami di industri otomotif telah diakui melalui berbagai penghargaan bergengsi.
            </p>
        </div>
        <div class="awards-container flex flex-wrap items-start space-x-14 gap-4">
            <?php
            $args = array(
                'post_type'      => 'awards',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC'
            );
            $awards_query = new WP_Query($args);

            if ($awards_query->have_posts()) :
                $count = 0;
                while ($awards_query->have_posts()) : $awards_query->the_post(); 
                    $is_first = ($count === 0);
                    ?>

            <div class="award-item text-center group cursor-pointer <?php echo $is_first ? 'active' : ''; ?>">
                <div class="award-image-wrapper mb-4 <?php echo $is_first ? 'opacity-100' : 'opacity-40'; ?>">
                    <img class="w-[140px] h-auto object-contain"
                        src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>">
                </div>

                <p class="award-title body <?php echo $is_first ? 'block' : 'hidden'; ?>">
                    <?php the_title(); ?>
                </p>
            </div>

            <?php $count++; endwhile; wp_reset_postdata(); ?>
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

<section class="pt-32 pb-20 bg-jhl-gray-3">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-[44px] mb-6 font-light"> Berita Terbaru </h2>
            <p class="body md:max-w-[547px] mx-auto"> Jadilah yang pertama tahu mengenai JHL Auto. </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <?php
            $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
            $news_query = new WP_Query($args);

            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post(); ?>

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
                    <p class="text-xs leading-6 mb-12">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>"
                        class="text-xs pt-3 border-t pr-14 inline-block border-white font-semibold uppercase tracking-wide">
                        Read More
                    </a>
                </div>
            </div>

            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>
</section>

<section class="relative h-[70vh] w-full py-16">
    <img src="<?php echo get_template_directory_uri() ?>/images/header-home-1.png" alt="Hero Image"
        class=" top-0 left-0 w-full h-full object-cover absolute">
    <div class="container flex flex-col justify-center h-full">
        <div
            class="bg-jhl-background/20 backdrop-blur-2xl p-7 text-white w-full md:w-[486px] rounded-xl flex space-x-4 relative z-10">
            <div>
                <p class="mb-5 text-[10px] tracking-wider">Loyalty</p>
                <h4 class="text-[44px] mb-6">MYJHL</h4>
                <p class="mb-8 font-medium leading-[22px]">Your gateway to exclusive experience and limitless leisure
                </p>
                <p class="mb-10 text-xs leading-6">Berbagai keistimewaan, kemudahan, dan layanan spesial.</p>
                <p>Download Now</p>
                <div class="flex space-x-4 items-center">
                    <img src="<?php echo get_template_directory_uri() ?>/images/app-store.png" alt="App Store">
                    <img src="<?php echo get_template_directory_uri() ?>/images/google-play.png" alt="Google Play">
                </div>
            </div>
            <div class="shrink-0">
                <img src="<?php echo get_template_directory_uri() ?>/images/my-jhl.svg" class="w-14" alt="MyJHL App">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>