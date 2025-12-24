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
                    <p class="font-medium text-[10px] text-jhl-gray-1 uppercase leading-[27px] tracking-widest mb-6">
                        NAVIGASI
                    </p>
                    <ul class="text-white space-x-6">
                        <li>
                            <a href="/our-story" class="text-xs">
                                Our Story
                            </a>
                        </li>
                        <li>
                            <a href="/career" class="text-xs">
                                Career
                            </a>
                        </li>
                        <li>
                            <a href="/career" class="text-xs">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-medium text-[10px] text-jhl-gray-1 uppercase leading-[27px] tracking-widest mb-6">
                        Brands
                    </p>
                    <ul class="text-white space-x-6">
                        <li>
                            <a href="/our-story" class="text-xs">
                                BAIC
                            </a>
                        </li>
                        <li>
                            <a href="/service-center" class="text-xs">
                                Service Center
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-medium text-[10px] text-jhl-gray-1 uppercase leading-[27px] tracking-widest mb-6">
                        Updates
                    </p>
                    <ul class="text-white space-x-6">
                        <li>
                            <a href="/news" class="text-xs">
                                News
                            </a>
                        </li>
                        <li>
                            <a href="/news?type=promo" class="text-xs">
                                Promo
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mx-auto pt-6 border-b mt-20 border-jhl-gray-1">
            <div class="text-xs text-[#939598]">
                &copy; JHL Auto <?php echo esc_html(date_i18n('Y')); ?> - | All Rights Reserved
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>