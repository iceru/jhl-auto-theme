<?php get_header() ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <section class="w-full max-h-[500px] overflow-hidden">
            <div class="aspect-video w-full">
                <img class="w-full h-full object-cover" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
                    alt="<?php the_title(); ?>">
            </div>
        </section>


        <section class="container py-16">
            <div class="text-[10px] font-medium text-jhl-gray-1 mb-10 uppercase">
                <?php echo get_the_date('d M Y'); ?>
            </div>
            <h2 class="mb-8">
                <?php the_title(); ?>
            </h2>
            <div class="body text-black mb-20">
                <?php the_content(); ?>
            </div>

            <div class="mt-20">
                <h3 class="mb-8">Berita Lainnya</h3>
                <div class="grid md:grid-cols-3 gap-8">
                    <?php
                    $related_args = array(
                        'post_type' => get_post_type(), // Matches 'post' or 'promotion' automatically
                        'posts_per_page' => 3,
                        'post__not_in' => array(get_the_ID()), // Exclude current post
                        'orderby' => 'rand' // Show random related posts
                    );
                    $related_query = new WP_Query($related_args);

                    if ($related_query->have_posts()):
                        while ($related_query->have_posts()):
                            $related_query->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="space-y-8">
                                <div class="aspect-video overflow-hidden">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                                        alt="<?php the_title(); ?>" class="w-full h-full object-cover">
                                </div>
                                <h5 class="uppercase"><?php the_title(); ?></h5>
                                <p class="body line-clamp-2 text-ellipsis text-black">
                                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                </p>
                                <div>
                                    <span
                                        class="text-xs text-black tracking-[5%] font-semibold flex items-center space-x-2 !no-underline">
                                        <img class="w-1 h-2" src="<?php echo get_template_directory_uri() ?>/images/c-right-black.png"
                                            alt="">
                                        <span>Baca Selengkapnya</span>
                                    </span>
                                </div>
                            </a>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
            </div>
        </section>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>