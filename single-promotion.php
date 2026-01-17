<?php get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
        <section class="container pt-40 pb-20 grid md:grid-cols-2 gap-14">
            <div>
                <img class="w-full h-full object-contain rounded-lg"
                    src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>">
            </div>
            <div>
                <div class="text-[10px] font-medium text-jhl-gray-1 mb-6 md:mb-10 uppercase">
                    <?php echo get_the_date('d M Y'); ?>
                </div>
                <h2 class="mb-8">
                    <?php the_title(); ?>
                </h2>
                <div class="body text-black mb-20">
                    <?php the_content(); ?>
                </div>
            </div>

        </section>

        <?php
        $related_args = array(
            'post_type' => get_post_type(), // Matches 'post' or 'promotion' automatically
            'posts_per_page' => 4,
            'post__not_in' => array(get_the_ID()),
            'orderby' => 'rand' // Show random related posts
        );
        $related_query = new WP_Query($related_args);

        if ($related_query->have_posts()): ?>
            <section class="container">
                <div class="mb-20 mt-10">
                    <h3 class="mb-8">Latest Promo</h3>
                    <div class="grid md:grid-cols-4 gap-4">
                        <?php while ($related_query->have_posts()):
                            $related_query->the_post(); ?>
                            <div class="space-y-8">
                                <div>
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                                        alt="<?php the_title(); ?>" class="w-full h-[359px] object-cover rounded-lg">
                                </div>
                                <h5 class="!text-jhl-black text-base">
                                    <?php the_title(); ?>
                                </h5>
                                <div>
                                    <a href="<?php the_permalink(); ?>"
                                        class="text-xs text-jhl-gray-1 tracking-[5%] font-semibold flex items-center space-x-2 !no-underline">
                                        <img class="w-1 h-2" src="<?php echo get_template_directory_uri() ?>/images/c-right-black.png"
                                            alt="">
                                        <span>Learn More</span>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>