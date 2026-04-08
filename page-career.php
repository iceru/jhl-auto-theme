<?php
get_header();

/**
 * Helper to fetch ACF field with a hardcoded fallback
 */
function get_jhl_field($field_name, $fallback)
{
    $value = get_field($field_name);
    return !empty($value) ? $value : $fallback;
}

// Assets Path
$theme_uri = get_template_directory_uri();

// Fallback Variables
$hero_img = get_jhl_field('hero_image', $theme_uri . '/images/career-hero.webp');
$hero_ttl = get_jhl_field('hero_title', 'Tumbuh dan Berkarya Bersama JHL Auto');
$hero_desc = get_jhl_field('hero_description', 'Di JHL Auto, kami percaya bahwa karier yang bermakna dibangun melalui kesempatan, kepercayaan, dan ruang untuk berkembang. Kami membuka peluang bagi individu yang ingin bertumbuh, berkontribusi nyata, dan menjadi bagian dari perjalanan kami dalam membangun standar baru di industri otomotif. Di sini, setiap peran memiliki dampak, setiap ide dihargai, dan setiap pencapaian adalah hasil kerja bersama.');

// Gallery Images
$g1 = get_jhl_field('gallery_img_1', $theme_uri . '/images/event.jpg');
$g2 = get_jhl_field('gallery_img_2', $theme_uri . '/images/award-photo.jpg');
$g3 = get_jhl_field('gallery_img_3', $theme_uri . '/images/red-car.png');
$g4 = get_jhl_field('gallery_img_4', $theme_uri . '/images/blue-car.png');
$g5 = get_jhl_field('gallery_img_5', $theme_uri . '/images/opening.png');
$g6 = get_jhl_field('gallery_img_6', $theme_uri . '/images/baic-front.png');
$g7 = get_jhl_field('gallery_img_7', $theme_uri . '/images/start.png');
$g8 = get_jhl_field('gallery_img_8', $theme_uri . '/images/podium.png');
$g9 = get_jhl_field('gallery_img_9', $theme_uri . '/images/start.png');
$g10 = get_jhl_field('gallery_img_10', $theme_uri . '/images/event-2.jpg');
?>

<section class="h-[170vh] md:h-[120vh] w-full relative flex flex-col justify-end pb-[123px] bg-jhl-black">
    <div>
        <img class="absolute -top-4 left-0 w-full h-screen md:h-[90vh] object-[75%_25%] object-cover zoom-blur-out"
            src="<?php echo esc_url($hero_img); ?>" alt="" data-scroll data-scroll-speed="-2"
            data-scroll-class="is-inview">
    </div>
    <div class="absolute md:hidden left-0 bottom-[40%] w-full h-[30%] bg-gradient-to-t from-jhl-black to-jhl-black/0">
    </div>

    <div class="absolute left-0 bottom-[20%] w-full h-[30%] bg-gradient-to-t from-jhl-black to-jhl-black/0"></div>
    <div class="absolute left-0 bottom-0 w-full h-[90%] bg-gradient-to-t from-jhl-black to-jhl-black/0"></div>
    <div class="container text-white relative z-10 px-6 text-center">
        <h2 class="mb-12 max-w-[302px] mx-auto md:max-w-none fade-down" data-scroll data-scroll-class="is-inview">
            <?php echo esc_html($hero_ttl); ?>
        </h2>
        <h3 class="!text-[20px] md:!text-[27px] !leading-[27px] md:!leading-[36px] md:max-w-[995px] mx-auto fade-up"
            data-scroll data-scroll-class="is-inview">
            <?php echo esc_html($hero_desc); ?>
        </h3>
    </div>
</section>

<section class="bg-jhl-black w-full overflow-hidden pb-16" data-scroll-section>
    <div class="flex gap-x-3 md:gap-x-6 container mx-auto relative  md:px-6">
        <div class="rounded-2xl overflow-hidden mt-12 w-[40%] absolute -left-[42%] fade-up" data-scroll
            data-scroll-class="is-inview">
            <div>
                <img src="<?php echo esc_url($g1); ?>" class="w-full h-full object-cover rounded-2xl" alt="Event Image">
            </div>
            <div class="mt-6">
                <img src="<?php echo esc_url($g2); ?>" class="w-full h-full object-cover rounded-2xl" alt="Event Image">
            </div>
        </div>

        <div class="rounded-2xl overflow-hidden absolute -left-[21%] md:left-0 md:static w-[40%] md:w-[30.8%] fade-down"
            data-scroll data-scroll-class="is-inview">
            <div>
                <img src="<?php echo esc_url($g3); ?>"
                    class="w-full h-full object-cover rounded-2xl aspect-square md:aspect-auto" alt="Red Car">
            </div>
            <div class="mt-6">
                <img src="<?php echo esc_url($g4); ?>"
                    class="w-full h-full object-cover rounded-2xl aspect-[3/5] md:aspect-auto" alt="Blue Car">
            </div>
        </div>

        <div class="rounded-2xl overflow-hidden mx-auto w-[60%] md:w-[30.5%] fade-up" data-scroll
            data-scroll-class="is-inview">
            <div>
                <img src="<?php echo esc_url($g5); ?>" class="w-full h-full object-cover rounded-2xl"
                    alt="Opening Banner">
            </div>
            <div class="mt-3 md:mt-6">
                <img src="<?php echo esc_url($g6); ?>" class="w-full h-full object-cover rounded-2xl" alt="Podium">
            </div>
        </div>

        <div class="rounded-2xl overflow-hidden absolute -right-[20%] md:left-0 md:static w-[40%] md:w-[38.7%] mt-4 md:mt-10 fade-down"
            data-scroll data-scroll-class="is-inview">
            <div>
                <img src="<?php echo esc_url($g7); ?>"
                    class="w-full h-full object-cover rounded-2xl aspect-square md:aspect-auto" alt="Start Line">
            </div>
            <div class="mt-6">
                <img src="<?php echo esc_url($g8); ?>"
                    class="w-full h-full object-cover rounded-2xl aspect-[3/4] md:aspect-auto" alt="Podium">
            </div>
        </div>

        <div class="rounded-2xl overflow-hidden w-[40%] absolute -right-[42%] mt-20 fade-up" data-scroll
            data-scroll-class="is-inview">
            <div>
                <img src="<?php echo esc_url($g9); ?>" class="w-full h-full object-cover rounded-2xl" alt="Start Line">
            </div>
            <div class="mt-6">
                <img src="<?php echo esc_url($g10); ?>" class="w-full h-full object-cover rounded-2xl" alt="Speaker">
            </div>
        </div>
    </div>
</section>

<section class="py-[90px] container" data-scroll-section>
    <div class="flex flex-wrap md:flex-nowrap space-y-6 md:space-x-6 md:space-y-0">
        <div class="w-full md:w-[60%] fade-up" data-scroll data-scroll-class="is-inview">
            <h2 class="mb-11">
                <?php echo esc_html(get_jhl_field('benefits_main_title', 'Tumbuh dan Berkarya Bersama JHL Auto')); ?>
            </h2>
            <p class="body fade-down" data-scroll data-scroll-class="is-inview">
                <?php echo esc_html(get_jhl_field('benefits_main_description', 'Di JHL Auto, kami percaya bahwa kinerja terbaik lahir dari lingkungan yang menghargai setiap individu. Karena itu, kami menghadirkan berbagai manfaat yang mendukung keseimbangan hidup, pertumbuhan profesional, dan kenyamanan dalam bekerja.')); ?>
            </p>
            <div class=" bg-jhl-foreground my-6 rounded-lg flex flex-wrap md:flex-nowrap fade-right" data-scroll
                data-scroll-class="is-inview">
                <div class="w-full md:w-[60%] p-8 fade-right" data-scroll data-scroll-class="is-inview">
                    <h3 class="mb-5">
                        <?php echo esc_html(get_jhl_field('benefit_5_title', 'Apresiasi Berbasis Kinerja')); ?>
                    </h3>
                    <p class="body !font-semibold mb-2">
                    </p>
                    <p class="body mb-2">

                        <?php echo esc_html(get_jhl_field('benefit_5_description', 'Kami menerapkan sistem penilaian
                         kinerja (KPI) yang transparan dan terukur, dilengkapi dengan insentif, program loyalitas, 
                         serta peluang promosi yang selaras dengan pencapaian individu. Setiap kontribusi nyata 
                         akan mendapatkan penghargaan yang setimpal.')); ?>
                    </p>
                </div>
                <div class="w-full md:w-[40%] relative fade-left" data-scroll data-scroll-class="is-inview">
                    <div
                        class="absolute bg-gradient-to-b md:bg-gradient-to-r from-jhl-foreground to-transparent w-full md:w-[70%] h-[40%] md:h-full z-10 top-0 left-0">
                    </div>
                    <img src="<?php echo esc_url(get_jhl_field('benefit_1_image', $theme_uri . '/images/benefit-1.png')); ?>"
                        class="w-full opacity-70 md:opacity-40 h-full object-cover rounded-b-lg" alt="Benefit">
                </div>
            </div>
            <div class="flex flex-wrap md:flex-nowrap space-y-6 md:space-x-6 md:space-y-0">
                <div class="w-full md:w-[60%] bg-jhl-foreground p-8 rounded-lg fade-right" data-scroll
                    data-scroll-class="is-inview">
                    <h3 class="mb-5">
                        <?php echo esc_html(get_jhl_field('benefit_2_title', 'Aktivitas Kebersamaan Tim')); ?>
                    </h3>
                    <p class="body !font-semibold mb-2">
                        <?php echo esc_html(get_jhl_field('benefit_2_subdesc', 'Sehat, Solid, dan Kompetitif')); ?>
                    </p>
                    <p class="body">
                        <?php echo esc_html(get_jhl_field('benefit_2_description', 'Kami menyediakan jadwal olahraga rutin antar karyawan 
                        JHL Auto seperti badminton, voli, dan mini soccer. Lebih dari sekadar aktivitas fisik, ini adalah ruang 
                        untuk mempererat hubungan, membangun kekompakan, dan menumbuhkan semangat kolaborasi.')); ?>
                    </p>
                </div>
                <div class="w-full md:w-[40%] bg-jhl-foreground rounded-lg fade-left flex flex-col justify-between"
                    data-scroll data-scroll-class="is-inview">
                    <h3 class="p-8">
                        <?php echo esc_html(get_jhl_field('benefit_3_title', 'BPJS Kesehatan & Ketenagakerjaan')); ?>
                    </h3>
                    <div class="relative w-full">
                        <div
                            class="absolute bg-gradient-to-b from-jhl-foreground to-transparent w-full h-[50%] z-10 top-0 left-0">
                        </div>
                        <img src="<?php echo esc_url(get_jhl_field('benefit_3_image', $theme_uri . '/images/benefit-2.jpg')); ?>"
                            class="w-full opacity-40 h-[116px] object-cover rounded-b-lg" alt="Benefit">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:w-[40%]">
            <div class="p-8 bg-jhl-foreground mb-6 rounded-lg fade-down" data-scroll data-scroll-class="is-inview">
                <h3 class="mb-5">
                    <?php echo esc_html(get_jhl_field('benefit_1_title', 'Diskon Karyawan')); ?>
                </h3>
                <p class="body !font-semibold mb-2">
                    <?php echo esc_html(get_jhl_field('benefit_1_subdesc', 'Privilege di Seluruh Jaringan JHL Group')); ?>
                </p>
                <p class="body">

                    <?php echo esc_html(get_jhl_field('benefit_1_description', 'Sebagai bagian dari JHL Group, karyawan JHL Auto berhak mendapatkan potongan harga khusus di berbagai jaringan JHL Group. Sebuah nilai tambah yang memungkinkan Anda menikmati berbagai layanan dan fasilitas dengan benefit eksklusif.')); ?>
                </p>
            </div>
            <div class=" bg-jhl-foreground mb-6 rounded-lg fade-up" data-scroll data-scroll-class="is-inview">
                <div class="pt-8 px-8">
                    <h3 class="mb-5">
                        <?php echo esc_html(get_jhl_field('benefit_4_title', 'Pengembangan Karier & Kompetensi')); ?>
                    </h3>
                    <p class="body !font-semibold mb-2">
                        <?php echo esc_html(get_jhl_field('benefit_4_subdesc', 'Tumbuh dengan Arah yang Jelas')); ?>

                        <?php echo esc_html(get_jhl_field('benefit_1_subdesc', 'Privilege di Seluruh Jaringan JHL Group')); ?>
                    </p>
                    <p class="body mb-5">
                        <?php echo esc_html(get_jhl_field('benefit_4_description', 'Kami mendukung perjalanan profesional 
                    Anda melalui perencanaan karier yang terstruktur, pendampingan, serta peluang pengembangan kompetensi 
                    yang disesuaikan dengan potensi dan tujuan individu. 
                    Di JHL Auto, pertumbuhan bukan kebetulan—melainkan proses yang dirancang.')); ?>
                    </p>
                </div>
                <div class="relative w-full">
                    <div
                        class="absolute bg-gradient-to-b from-jhl-foreground to-transparent w-full h-[50%] z-10 top-0 left-0">
                    </div>
                    <img src="<?php echo esc_url(get_jhl_field('benefit_5_image', $theme_uri . '/images/benefit-1.jpg')); ?>"
                        class="w-full opacity-20 h-[200px] object-cover rounded-b-lg" alt="Benefit">
                </div>
            </div>
        </div>

    </div>
</section>

<section class="bg-jhl-gray-2 text-white py-20" data-scroll-section>
    <div class="container mx-auto">
        <h2 class="mb-24 text-4xl font-bold fade-down" data-scroll data-scroll-class="is-inview">
            Mulai Perjalanan Kariermu Bersama Kami
        </h2>

        <?php
        $args = array(
            'post_type' => 'vacancies',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $vacancies_query = new WP_Query($args);
        $vacancies = $vacancies_query->posts;

        if ($vacancies): ?>
        <div id="vacancies" class="grid grid-cols-1 md:grid-cols-12 gap-8">

            <div class="md:col-span-4 flex flex-col p-4 md:p-8 border border-white/20 rounded-2xl fade-right relative"
                data-scroll data-scroll-class="is-inview">
                <div class="absolute right-4 top-10 bottom-10 w-[3px] bg-white rounded-full"></div>
                <h5 class="font-bold uppercase mb-6 md:mb-10 !text-white tracking-widest">Roles</h5>
                <div class="flex flex-col gap-8 px-6">
                    <?php foreach ($vacancies as $index => $vacancy):
                            $active_class = ($index === 0) ? 'is-active opacity-100' : 'opacity-40 hover:opacity-70';
                            ?>
                    <button data-target="vacancy-<?php echo $vacancy->ID; ?>"
                        class="vacancy-trigger text-left transition-all duration-300 group relative flex items-start <?php echo $active_class; ?>">
                        <span
                            class="absolute -left-7 top-1 opacity-0 group-[.is-active]:opacity-100 transition-all duration-300 transform group-[.is-active]:translate-x-1">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 18L15 12L9 6" stroke="white" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        <h5 class="!text-white !m-0 !leading-tight">
                            <?php echo get_the_title($vacancy->ID); ?>
                        </h5>
                    </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="md:col-span-8  rounded-lg relative min-h-[400px] vacancy-text fade-left" data-scroll
                data-scroll-class="is-inview">
                <?php foreach ($vacancies as $index => $vacancy):
                        $display_style = ($index === 0) ? 'display: block;' : 'display: none;';
                        ?>
                <div id="vacancy-<?php echo $vacancy->ID; ?>" class="vacancy-content"
                    style="<?php echo $display_style; ?>">

                    <div class="body">
                        <?php echo apply_filters('the_content', $vacancy->post_content); ?>
                    </div>

                    <a href="<?php echo get_permalink($vacancy->ID); ?>"
                        class="inline-block mt-14 px-4 py-2 bg-jhl-black text-white font-semibold text-xs rounded-sm hover:bg-jhl-black/80 uppercase transition-colors">
                        Apply Now
                    </a>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
        <?php wp_reset_postdata(); endif; ?>
    </div>
</section>
<?php get_footer(); ?>