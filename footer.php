<?php
/**
 * Theme footer template.
 *
 * @package TailPress
 */
?>
</main>

<?php do_action('tailpress_content_end'); ?>
</div>

<?php do_action('tailpress_content_after'); ?>

<footer class="bg-jhl-black text-white pt-16 pb-8" role="contentinfo">
    <div class="container">
        <div class="flex justify-between">
            <div class="flex items-center" id="logo">
                <div class="pr-10 mr-10 border-r border-jhl-gray-2">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="" class="mb-5">
                    <p class="text-xs text-center">
                        Service You Can Trust, <br /> Peace of Mind You Deserve
                    </p>
                </div>
                <div>
                    <p class="font-bold text-[13px] mb-4">
                        JHL AUTO - Head Office
                    </p>
                    <p class="text-xs leading-6">
                        Jl. Jalur Sutera Boulevard Kav. 30 <br />
                        Kota Tangerang, Banten - 15143
                    </p>
                </div>
            </div>
            <div class="flex space-x-16" id="footer-nav">
                <div>

                </div>
            </div>
        </div>
        <div class="container mx-auto py-12">
            <?php do_action('tailpress_footer'); ?>
            <div class="text-sm text-zinc-700">
                &copy; <?php echo esc_html(date_i18n('Y')); ?> - <?php bloginfo('name'); ?>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>