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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-zinc-900 antialiased'); ?>>
    <?php do_action('tailpress_site_before'); ?>

    <div id="page" class="min-h-screen flex flex-col">
        <?php do_action('tailpress_header'); ?>

        <header class="fixed z-40 top-4 left-1/2 -translate-x-1/2 max-w-[1200px] hidden md:block w-full">

            <div class="flex items-center justify-between text-white rounded-full py-[11px] px-[35px] isolate w-full">
                <div class="absolute inset-0 bg-[#171717]/30 backdrop-blur-2xl rounded-full -z-10"></div>

                <a href="/">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" class="h-7" alt="">
                </a>
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
                                            <a href="https://baic.codeomnia.com"
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
                    <a href="javascript:void(0)" id="open-contact"
                        class="text-[13px] font-medium flex items-center !no-underline space-x-1">
                        <img src="<?php echo get_template_directory_uri() ?>/images/icon-contact.png" class="size-3"
                            alt="">
                        <span>Contact</span>
                    </a>
                </div>
            </div>
        </header>

        <header
            class="md:hidden w-full absolute left-0 top-0 px-4 py-11 bg-gradient-to-b from-black to-transparent flex justify-between items-center z-50">
            <div class="space-y-1.5 cursor-pointer" id="sidebar-btn">
                <div class="h-[1px] w-8 bg-white"></div>
                <div class="h-[1px] w-8 bg-white"></div>
            </div>
            <div>
                <a href="/">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" class="h-7" alt="">
                </a>
            </div>
        </header>

        <aside id="main-sidebar"
            class="fixed inset-0 z-[60] bg-jhl-gray-1 transform -translate-x-full transition-transform duration-300 ease-in-out">
            <div class="flex flex-col justify-between items-center h-full pt-[22px] pb-36 px-4">

                <div class="flex justify-between items-center w-full px-4" id="sidebar-header">
                    <div id="back-container" class="invisible opacity-0 transition-opacity duration-200 cursor-pointer">
                        <div class="back-to-main text-white text-sm uppercase tracking-widest font-medium">← Back</div>
                    </div>
                    <div id="close-sidebar"
                        class="text-white text-sm uppercase tracking-widest font-medium cursor-pointer">✕</div>
                </div>

                <div>
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" class="h-14" alt="">
                </div>

                <div class="w-full relative overflow-hidden h-[300px]">
                    <ul id="menu-main"
                        class="flex flex-col space-y-8 justify-center items-center px-10 text-center transition-all duration-300">
                        <li><a href="/" class="text-white uppercase font-medium tracking-widest">Home</a></li>
                        <li><a href="javascript:void(0)" data-target="submenu-about"
                                class="submenu-trigger text-white uppercase font-medium tracking-widest">About Us</a>
                        </li>
                        <li><a href="javascript:void(0)" data-target="submenu-brands"
                                class="submenu-trigger text-white uppercase font-medium tracking-widest">Brands</a></li>
                        <li><a href="/news" class="text-white uppercase font-medium tracking-widest">News &
                                Promotion</a></li>
                    </ul>

                    <ul id="submenu-about"
                        class="hidden absolute inset-0 flex flex-col space-y-8 justify-center items-center px-10 text-center transition-all duration-300">
                        <li><a href="/our-story" class="text-white uppercase font-medium tracking-widest">Our Story</a>
                        </li>
                        <li><a href="/career" class="text-white uppercase font-medium tracking-widest">Career</a></li>
                    </ul>

                    <ul id="submenu-brands"
                        class="hidden absolute inset-0 flex flex-col space-y-8 justify-center items-center px-10 text-center transition-all duration-300">
                        <li><a href="https://baic.codeomnia.com"
                                class="text-white uppercase font-medium tracking-widest">BAIC</a></li>
                        <li><a href="/service-center" class="text-white uppercase font-medium tracking-widest">Service
                                Center</a></li>
                    </ul>
                </div>

                <div>
                    <a href="javascript:void(0)" id="open-contact"
                        class="text-[13px] font-medium flex items-center !no-underline space-x-1 text-white">
                        <img src="<?php echo get_template_directory_uri() ?>/images/icon-contact.png"
                            class="size-3 invert" alt="">
                        <span>Contact</span>
                    </a>
                </div>
            </div>
        </aside>

        <script>
            $(document).ready(function () {
                // Function to reset menu state
                function resetMenu() {
                    $('#back-container').addClass('invisible opacity-0');
                    $('[id^="submenu-"]').addClass('hidden').hide();
                    $('#menu-main').show().css('opacity', '1');
                }

                // Open Sidebar
                $('#sidebar-btn').on('click', function () {
                    $('#main-sidebar').removeClass('-translate-x-full');
                });

                // Close Sidebar
                $('#close-sidebar').on('click', function () {
                    $('#main-sidebar').addClass('-translate-x-full');
                    // Reset to main menu after slide-out animation completes
                    setTimeout(resetMenu, 300);
                });

                // Open Submenu
                $('.submenu-trigger').on('click', function () {
                    const target = $(this).data('target');

                    $('#menu-main').fadeOut(200, function () {
                        $('#' + target).removeClass('hidden').fadeIn(200);
                        // Show Back button in header
                        $('#back-container').removeClass('invisible opacity-0');
                    });
                });

                // Back to Main Menu
                $('.back-to-main').on('click', function () {
                    const visibleSubmenu = $('[id^="submenu-"]:visible');

                    visibleSubmenu.fadeOut(200, function () {
                        $(this).addClass('hidden');
                        $('#menu-main').fadeIn(200);
                        // Hide Back button in header
                        $('#back-container').addClass('invisible opacity-0');
                    });
                });
            });
        </script>

        <div id="contact-popup" class="fixed inset-0 z-[100] hidden items-center justify-center">
            <div class="absolute inset-0 bg-black/40" id="close-overlay"></div>

            <div class="relative bg-white w-full max-w-4xl  py-16 px-24 shadow-2xl border-jhl-gray-3 border-5 z-10">
                <button id="close-contact" class="absolute top-4 right-4 text-white/50 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <div class="text-[28px] mb-12 uppercase">Contact Us</div>

                <div class="cf7-popup-wrapper">
                    <?php echo do_shortcode('[contact-form-7 id="YOUR_FORM_ID" title="Contact Form Home"]'); ?>
                </div>
            </div>
        </div>

        <div class="fixed bottom-6 right-6 z-[999] flex flex-col items-end space-y-4">
            <button id="social-toggle"
                class="w-11 h-11 rounded-full bg-jhl-gray-1 flex items-center justify-center transition-transform duration-300">
                <svg id="toggle-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 15l-6-6-6 6" />
                </svg>
                <img id="toggle-share" src="<?php echo get_template_directory_uri(); ?>/images/icons/share.png"
                    class="w-5 h-5 rotate-180 hidden" alt="share">
            </button>
            <div id="social-expandable" class="flex flex-col space-y-4 mb-2">
                <a href="mailto:<?php echo get_field('contact_email', 'option') ?: 'info@jhlauto.co.id'; ?>"
                    class="w-11 h-11 rounded-full bg-jhl-gray-1 flex items-center justify-center hover:bg-[#808285] transition-colors">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/email.png" class="w-5 h-5"
                        alt="Email">
                </a>

                <a href="<?php echo get_field('instagram_url', 'option') ?: '#'; ?>" target="_blank"
                    class="w-11 h-11 rounded-full bg-jhl-gray-1 flex items-center justify-center hover:bg-[#808285] transition-colors">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/instagram.png" class="w-5 h-5"
                        alt="Instagram">
                </a>

                <a href="<?php echo get_field('tiktok_url', 'option') ?: '#'; ?>" target="_blank"
                    class="w-11 h-11 rounded-full bg-jhl-gray-1 flex items-center justify-center hover:bg-[#808285] transition-colors">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/tiktok.png" class="w-5 h-5"
                        alt="TikTok">
                </a>

                <a href="<?php echo get_field('facebook_url', 'option') ?: '#'; ?>" target="_blank"
                    class="w-11 h-11 rounded-full bg-jhl-gray-1 flex items-center justify-center hover:bg-[#808285] transition-colors">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook.png" class="w-5 h-5"
                        alt="Facebook">
                </a>
            </div>


            <a href="https://wa.me/<?php echo get_field('whatsapp_number', 'option') ?: '628123456789'; ?>"
                target="_blank" class="flex items-center  rounded-md  transition-all group !no-underline">
                <div class="bg-jhl-black rounded-full p-1 mr-3 h-16 w-16 flex justify-center items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/whatsapp.png" class="w-9 h-9"
                        alt="WhatsApp">
                </div>
                <span class=" bg-jhl-foreground p-[9px] rounded font-bold text-sm tracking-widest uppercase">Chat
                    Now</span>
            </a>
        </div>

        <script>
            $(document).ready(function ($) {
                // Open Popup
                $('#open-contact').on('click', function () {
                    $('#contact-popup').removeClass('hidden').addClass('flex');
                    $('body').addClass('overflow-hidden'); // Disable scroll
                });

                // Close Popup (Button or Overlay)
                $('#close-contact, #close-overlay').on('click', function () {
                    $('#contact-popup').addClass('hidden').removeClass('flex');
                    $('body').removeClass('overflow-hidden');
                });

                // Close on ESC key
                $(document).keyup(function (e) {
                    if (e.key === "Escape") {
                        $('#close-contact').click();
                    }
                });
                $('#social-toggle').css('transform', 'rotate(180deg)');
                $('#social-toggle').on('click', function () {
                    const $btn = $(this);
                    const $container = $('#social-expandable');
                    const $iconArrow = $('#toggle-icon');
                    const $iconShare = $('#toggle-share');

                    // Toggle a state class on the button
                    $btn.toggleClass('is-open');

                    // Animation
                    $container.slideToggle(300);

                    if ($btn.hasClass('is-open')) {
                        // EXPANDED STATE
                        $iconArrow.hide();
                        $iconShare.show();
                    } else {
                        // CLOSED STATE
                        $iconShare.hide();
                        $iconArrow.show();
                    }
                });
            });
        </script>

        <div id="content" class="site-content grow">
            <?php if (is_front_page()): ?>
            <?php endif; ?>

            <?php do_action('tailpress_content_start'); ?>
            <main>