<?php
/**
 * Theme header template.
 *
 * @package TailPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-zinc-900 antialiased'); ?>>
    <?php do_action('tailpress_site_before'); ?>

    <div id="page" class="min-h-screen flex flex-col">
        <?php do_action('tailpress_header'); ?>

        <header class="fixed z-40 top-4 left-1/2 -translate-x-1/2 max-w-[1200px] w-full">

            <div class="flex items-center justify-between text-white rounded-full py-[11px] px-[35px] isolate w-full">
                <div class="absolute inset-0 bg-[#171717]/30 backdrop-blur-2xl rounded-full -z-10"></div>

                <div>
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" class="h-7" alt="">
                </div>
                <div class="hidden md:block">
                    <nav>
                        <ul class="flex items-center space-x-10 text-sm font-medium">
                            <li><a href="/" class="uppercase text-[13px] !no-underline">Home</a></li>

                            <li class="group relative py-2">
                                <div class="uppercase text-[13px] !no-underline">About Us</div>

                                <ul
                                    class="absolute left-0 top-full py-6 w-48 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-0">
                                    <div class="p-[18px] space-y-3 isolate relative">
                                        <div
                                            class="absolute inset-0 mb-0 bg-[#171717]/30 backdrop-blur-2xl rounded-xl shadow-2xl -z-10 border border-white/10">
                                        </div>

                                        <div class="relative z-10">
                                            <a href="/our-story"
                                                class="text-xs uppercase flex justify-between items-center !no-underline mb-5 pb-5 border-b border-white/10">
                                                <span>Our Story</span>
                                                <img src="<?php echo get_template_directory_uri() ?>/images/chevron-right.png"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="relative z-10">
                                            <a href="/career"
                                                class="text-xs uppercase flex justify-between items-center !no-underline">
                                                <span>Career</span>
                                                <img src="<?php echo get_template_directory_uri() ?>/images/chevron-right.png"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </ul>
                            </li>

                            <li class="group relative py-2">
                                <div class="uppercase text-[13px] !no-underline">Brands</div>

                                <ul
                                    class="absolute left-0 top-full py-6 w-48 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-0">
                                    <div class="p-[18px] space-y-3 isolate relative">
                                        <div
                                            class="absolute inset-0 mb-0 bg-[#171717]/30 backdrop-blur-2xl rounded-xl shadow-2xl -z-10 border border-white/10">
                                        </div>

                                        <div class="relative z-10">
                                            <a href="#"
                                                class="text-xs uppercase flex justify-between items-center !no-underline mb-5 pb-5 border-b border-white/10">
                                                <span>BAIC</span>
                                                <img src="<?php echo get_template_directory_uri() ?>/images/chevron-right.png"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="relative z-10">
                                            <a href="/service-center"
                                                class="text-xs uppercase flex justify-between items-center !no-underline">
                                                <span>Service Center</span>
                                                <img src="<?php echo get_template_directory_uri() ?>/images/chevron-right.png"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </ul>
                            </li>


                            <li>
                                <a href="/news" class="uppercase text-[13px] font-medium !no-underline">News &
                                    Promotion</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div>
                    <a href="#" class="text-[13px] font-medium flex items-center !no-underline space-x-1">
                        <img src="<?php echo get_template_directory_uri() ?>/images/icon-contact.png" class="size-3"
                            alt="">
                        <span>Contact</span>
                    </a>
                </div>
            </div>
        </header>

        <div id="content" class="site-content grow">
            <?php if (is_front_page()): ?>
            <?php endif; ?>

            <?php do_action('tailpress_content_start'); ?>
            <main>