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
        <p class="font-medium text-[13px] leading-6 md:mb-[73px]">
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
        <p class="text-jhl-gray-1 text-[13px] font-medium leading-6">
            Nikmati penawaran terbaik kami hanya untuk Anda. <br />
            Manfaatkan promonya dan segera dapatkan kendaraan baru yang Anda impikan!
        </p>
    </div>
    <div class="grid md:grid-cols-4">
        <div>
            <div class="mb-8">
                <img src="<?php echo get_template_directory_uri() ?>/images/promo-1.png" alt="" class="rounded-lg">
            </div>
            <h5 class="leading-[22px] font-medium mb-8">
                Discover innovation and adventure at the Mall Exhibition with BAIC JHL Auto
            </h5>
            <a href="" class="text-xs text-jhl-gray-2 font-semibold uppercase tracking-wide">
                Learn More
            </a>
        </div>
    </div>
</section>

<section class="pt-32 pb-20 bg-black/80 text-white">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-[44px] mb-6 font-light">
                Cabang Kami
            </h2>
            <p class="text-[13px] font-medium leading-6 md:max-w-[486px] mx-auto">
                Rasakan pengalaman profesional JHL Auto di berbagai lokasi strategis terdekat yang siap melayani
                kebutuhan
                mobilitas Anda setiap saat.
            </p>
        </div>
        <div class="grid md:grid-cols-4 gap-4">
            <div>
                <div class="mb-4">
                    <img src="<?php echo get_template_directory_uri() ?>/images/alsut.png" alt=""
                        class="rounded-lg h-[318px] object-cover w-full">
                </div>
                <h4 class="leading-7 text-xl mb-4">
                    BAIC Alam Sutera
                </h4>
                <p class="text-[13px] font-medium leading-6">
                    Dealer Resmi 3S dan Head Office JHL Auto dengan fasilitas bengkel bersertifikasi internasional untuk
                    layanan premium & aman.
                </p>
            </div>
        </div>
    </div>
</section>

<section class=" pt-32 pb-20 bg-jhl-gray-3 ">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-[44px] mb-6 font-light">
                Berita Terbaru
            </h2>
            <p class="text-[13px] font-medium leading-6  md:max-w-[547px] mx-auto">
                Jadilah yang pertama tahu mengenai JHL Auto. Peluncuran model kendaraan terkini, aktivitas dealer resmi,
                hingga layanan dan inovasi, semua ada di sini.
            </p>
        </div>
        <div class="grid md:grid-cols-3">
            <div class="bg-[#060606]/20 backdrop-blur-xl text-white rounded-lg">
                <div class="mb-4">
                    <img src="<?php echo get_template_directory_uri() ?>/images/promo-1.png" alt="" class="rounded-lg">
                </div>
                <div class="py-6 px-8">
                    <small class="text-[10px] uppercase tracking-wide block mb-3">
                        12 October 2025
                    </small>
                    <h3 class="leading-7 text-[27px] mb-3 font-light">
                        Headline Sample Text
                    </h3>
                    <p class="text-xs leading-6 mb-12">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc blandit risus pellentesqu...
                    </p>
                    <a href=""
                        class="text-xs pt-3 border-t pr-14 inline-block border-white font-semibold uppercase tracking-wide">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();