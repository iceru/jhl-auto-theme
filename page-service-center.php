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

<section class="container py-20">
    <p class="body max-w-[638px]">
        Bengkel resmi JHL Auto memberikan perawatan purna jual berstandar global untuk BAIC, serta layanan servis khusus
        untuk kendaraan unik Premium Car (service only). Fasilitas kami dilengkapi peralatan modern dan teknisi
        bersertifikat untuk memastikan kendaraan Anda selalu dalam kondisi optimal.
    </p>
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