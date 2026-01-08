<?php get_header(); ?>

<section class="h-[130vh] md:h-screen relative flex flex-col justify-end pb-14 md:pb-[107px]">
    <div class="absolute h-full w-full left-0 top-0">
        <?php
        $header_img = get_field('story_header_image');
        $header_img_url = $header_img ? $header_img['url'] : get_template_directory_uri() . '/images/story-header.png';
        ?>
        <img class="w-full h-full object-cover" src="<?php echo esc_url($header_img_url); ?>" alt="">
    </div>
    <div class="absolute w-[90%] left-0 top-0 h-full bg-gradient-to-r from-jhl-black to-jhl-black/0"></div>
    <div class="container z-10 relative text-white">
        <h1 class="text-[44px]">
            <?php echo get_field('story_header_title') ?: 'Awal Perjalanan'; ?>
        </h1>
        <div class="mb-4">
            <?php echo get_field('story_header_desc_1') ?: 'Setiap perjalanan besar dimulai dari satu langkah berani. Pada 12 Januari 2012, JHL Auto resmi berdiri sebagai bagian dari JHL Group, menandai awal kiprah perusahaan dalam menghadirkan pengalaman otomotif premium di Indonesia.'; ?>
        </div>
        <div>
            <?php echo get_field('story_header_desc_2') ?: 'Sejak awal, JHL Auto membawa semangat integritas, inovasi, dan pelayanan berstandar internasional, dengan tujuan menjadi mitra mobilitas terpercaya bagi masyarakat Indonesia. Dari momentum bersejarah sebagai bagian dari Jaringan resmi Jeep di Indonesia, JHL Auto terus berkembang hingga pada Maret 2024 dipercaya sebagai Authorized BAIC Dealer, memperkuat posisinya sebagai bagian dari grup otomotif besar yang dinamis dan progresif.'; ?>
        </div>
    </div>
</section>
<section class="bg-jhl-foreground py-16">
    <div id="timeline-container" class="relative w-full max-w-4xl md:left-[9%] mx-auto mb-24 h-[949.5px] md:h-[1899px]">
        <div class="absolute mx-auto h-auto md:h-[1689px] -left-27 w-[350px] md:w-[953px] mt-[110px]">
            <?php
            $jhl_bg = get_field('jhl_bg_image');
            $jhl_bg_url = $jhl_bg ? $jhl_bg['url'] : get_template_directory_uri() . '/images/jhl-bg.png';
            ?>
            <img class="w-full h-full" src="<?php echo esc_url($jhl_bg_url); ?>" alt="">
        </div>
        <svg class="absolute top-0 right-12 h-full pointer-events-none md:scale-100 w-[290px] md:w-[580px]"
            viewBox="0 0 583 1899" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path id="road-path"
                d="M2.5 2.5V349.437H515.079L553.59 558.084H256.01V617.12H565.493L579.496 827.385H173.388V1075.66H579.496C579.73 1129.3 568.294 1278.65 568.294 1278.65H256.711V1341.72H558.491L526.282 1546.33H2.5V1896.5"
                stroke="#808285" stroke-width="5" stroke-linecap="round" opacity="0.7" />
        </svg>

        <div id="car"
            class="fixed top-0 left-0 w-16 h-16 md:w-[120px] md:h-[120px] z-50 pointer-events-none flex items-center justify-center"
            style="display: none; will-change: transform;">
            <?php
            $car_icon = get_field('timeline_car_icon');
            $car_icon_url = $car_icon ? $car_icon['url'] : get_template_directory_uri() . '/images/car.png';
            ?>
            <img src="<?php echo esc_url($car_icon_url); ?>" id="car-img"
                class="object-contain rotate-180 w-[33px] md:w-[44px] h-[99px]" alt="car">
        </div>

        <div id="story-layer" class="absolute inset-0 pointer-events-none">
            <div class="story-point absolute flex opacity-0 transition-opacity duration-500" data-path-progress="0.04">
                <div
                    class="w-5 h-5 rounded-full border-2 mt-2 border-white bg-jhl-black ring-1 ring-jhl-black shrink-0">
                </div>
                <div class="w-32 border-b border-dashed border-jhl-gray-1 h-[1px] mt-4 mr-2"></div>
                <div class=" max-w-[300px]">
                    <h3>2012</h3>
                    <h4 class="font-bold text-sm my-2">Authorised Jeep Dealer</h4>
                    <p class="body hidden md:block">Dealer Otomotif pertama JHL Auto, dan memperoleh
                        penghargaan MURI untuk
                        konsep Dealer "Amazon Jungle".</p>
                </div>
            </div>

            <div class="story-point is-left absolute w-5 h-5 flex items-center justify-center opacity-0 transition-opacity duration-500"
                data-path-progress="0.21">
                <div
                    class="w-5 h-5 rounded-full border-2 border-white bg-jhl-black ring-1 ring-jhl-black shrink-0 z-10">
                </div>

                <div class="absolute right-full flex flex-row-reverse top-0 mr-2">
                    <div class="w-60 md:w-[720px] border-b border-dashed border-jhl-gray-1 h-[1px] mt-2"></div>
                    <div class="max-w-[316px] mr-4 text-right -mt-2">
                        <h3>2015</h3>
                        <h4 class="font-bold text-sm my-1">Garansindo Cup Jeep Agility</h4>
                        <p class="body hidden md:block">Menyelenggarakan event offroad skala nasional yang memperkuat
                            komunitas
                            Jeep
                            Indonesia</p>
                    </div>
                </div>
            </div>

            <div class="story-point is-left absolute w-5 h-5 flex items-center justify-center opacity-0 transition-opacity duration-500"
                data-path-progress="0.38">
                <div
                    class="w-5 h-5 rounded-full border-2 border-white bg-jhl-black ring-1 ring-jhl-black shrink-0 z-10">
                </div>

                <div class="absolute right-full flex flex-row-reverse top-0 mr-2">
                    <div class="w-60 md:w-[600px] border-b border-dashed border-jhl-gray-1 h-[1px] mt-2"></div>
                    <div class="max-w-[243px] mr-4 text-right -mt-2">
                        <h3>2017</h3>
                        <h4 class="font-bold text-sm my-1">Best Jeep Dealer</h4>
                        <p class="body hidden md:block">Meraih penghargaan "Best Jeep Dealer Indonesia" atas
                            keunggulan layanan dan
                            penjualan</p>
                    </div>
                </div>
            </div>

            <div class="story-point is-left absolute w-5 h-5 flex items-center justify-center opacity-0 transition-opacity duration-500"
                data-path-progress="0.524">
                <div
                    class="w-5 h-5 rounded-full border-2 border-white bg-jhl-black ring-1 ring-jhl-black shrink-0 z-10">
                </div>

                <div class="absolute right-full flex flex-row-reverse top-0 mr-2">
                    <div class="w-10 md:w-[300px] border-b border-dashed border-jhl-gray-1 h-[1px] mt-2"></div>
                    <div class="max-w-[291px] mr-4 text-right -mt-2">
                        <h3>2019</h3>
                        <h4 class="font-bold text-sm my-1">Best Seller at IIMS</h4>
                        <p class="body hidden md:block">Berhasil menjual 60 unit Jeep, dan juga meraih 72 pemesanan
                            selama
                            Event IIMS
                            (Indonesia
                            International Motor Show)</p>
                    </div>
                </div>
            </div>


            <div class="story-point is-left absolute w-5 h-5 flex items-center justify-center opacity-0 transition-opacity duration-500"
                data-path-progress="0.715">
                <div
                    class="w-5 h-5 rounded-full border-2 border-white bg-jhl-black ring-1 ring-jhl-black shrink-0 z-10">
                </div>

                <div class="absolute right-full flex flex-row-reverse top-0 mr-2">
                    <div class="w-20 md:w-[200px] border-b border-dashed border-jhl-gray-1 h-[1px] mt-2"></div>
                    <div class="max-w-[264px] mr-4 text-right -mt-2">
                        <h3>2021</h3>
                        <h4 class="font-bold text-sm my-1">Best Seller Jeep</h4>
                        <p class="body hidden md:block"> JHL Auto mampu mencatatkan
                            penjualan sampai 100 unit dalam
                            satu tahun saat Pandemik</p>
                    </div>
                </div>
            </div>

            <div class="story-point is-left absolute w-5 h-5 flex items-center justify-center opacity-0 transition-opacity duration-500"
                data-path-progress="0.817">
                <div
                    class="w-5 h-5 rounded-full border-2 border-white bg-jhl-black ring-1 ring-jhl-black shrink-0 z-10">
                </div>

                <div class="absolute right-full flex flex-row-reverse top-0 mr-2">
                    <div class="w-24 md:w-[820px] border-b border-dashed border-jhl-gray-1 h-[1px] mt-2"></div>
                    <div class="max-w-[317px] mr-4 text-right -mt-2">
                        <h3>2024</h3>
                        <h4 class="font-bold text-sm my-1">Authorized BAIC Dealer</h4>
                        <p class="body hidden md:block"> Berkembang menjadi Authorized BAIC Dealer di Indonesia. Dengan
                            komitmen
                            menghadirkan solusi
                            mobilitas yang unggul, relevan, dan terpercaya bagi pasar otomotif nasional.</p>
                    </div>
                </div>
            </div>

            <div class="story-point absolute flex opacity-0 transition-opacity duration-500" data-path-progress="0.97">
                <div class="w-5 h-5 rounded-full border-2 mt-2 border-white bg-jhl-black ring-1 ring-jhl-black"></div>
                <div class="w-16 md:w-32 border-b border-dashed border-jhl-gray-1 h-[1px] mt-4 mr-2"></div>
                <div class=" max-w-[300px]">
                    <h3>2025</h3>
                    <h4 class="font-bold text-sm my-2">Best Start of Business</h4>
                    <p class="body hidden md:block">
                        Pengakuan BAIC Global atas pencapaian JHL Auto sebagai dealer resmi BAIC di Indonesia
                    </p>
                </div>
            </div>
        </div>
    </div>
    <h3 class="flex justify-center text-center">
        Perjalanan Terus Berlanjut...
    </h3>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const path = document.querySelector("#road-path");
        const car = document.querySelector("#car");
        const container = document.querySelector("#timeline-container");
        const storyPoints = document.querySelectorAll(".story-point");
        const svgElement = path.ownerSVGElement;
        const pathLength = path.getTotalLength();

        function updateTimeline() {
            const rect = container.getBoundingClientRect();
            const svgRect = svgElement.getBoundingClientRect();
            const viewHeight = window.innerHeight;
            const viewBox = svgElement.viewBox.baseVal;
            const scaleX = svgRect.width / viewBox.width;
            const scaleY = svgRect.height / viewBox.height;

            // 1. Update Car Position
            let progress = (viewHeight / 2 - rect.top) / rect.height;
            progress = Math.max(0, Math.min(1, progress));

            if (progress > 0 && progress < 1) {
                car.style.display = "flex";
                const point = path.getPointAtLength(progress * pathLength);
                const nextPoint = path.getPointAtLength(Math.min(progress * pathLength + 1, pathLength));
                const x = svgRect.left + (point.x * scaleX);
                const y = svgRect.top + (point.y * scaleY);
                const angle = Math.atan2((nextPoint.y - point.y) * scaleY, (nextPoint.x - point.x) * scaleX) * 180 / Math.PI;
                car.style.transform = `translate3d(${x}px, ${y}px, 0) translate(-50%, -50%) rotate(${angle + 90}deg)`;
            } else {
                car.style.display = "none";
            }

            // 2. Position and Animate Story Points
            storyPoints.forEach(pointEl => {
                const dotProgress = parseFloat(pointEl.dataset.pathProgress);
                const pathPoint = path.getPointAtLength(dotProgress * pathLength);
                const x = svgRect.left + (pathPoint.x * scaleX);
                const y = svgRect.top + (pathPoint.y * scaleY);

                const isLeft = pointEl.classList.contains('is-left');
                const dotSize = 20;
                const dotRadius = dotSize / 2;

                pointEl.style.position = "fixed";
                pointEl.style.top = `${y}px`;

                if (isLeft) {
                    pointEl.style.left = `${x - dotRadius + 20}px`;
                    pointEl.style.transform = "translate(-100%, -50%)";
                } else {
                    pointEl.style.left = `${x + dotRadius - 20}px`;
                    pointEl.style.transform = "translate(0, -50%)";
                }

                if (progress >= dotProgress - 0.2) {
                    pointEl.classList.remove("opacity-0");
                    pointEl.classList.add("opacity-100");
                } else {
                    pointEl.classList.add("opacity-0");
                    pointEl.classList.remove("opacity-100");
                }
            });
        }

        function tick() {
            updateTimeline();
            requestAnimationFrame(tick);
        }
        tick();
        window.addEventListener("resize", updateTimeline);
    });
</script>
<section class="py-32 container md:text-center">
    <h2 class="text-2xl md:text-[44px] mb-2 font-light text-black">
        <?php echo get_field('panca_krida_title') ?: 'Panca Krida'; ?>
    </h2>
    <h4 class="mb-11 text-xl text-black">
        <?php echo get_field('panca_krida_subtitle') ?: 'The Power to Success'; ?>
    </h4>
    <p class="body mx-auto md:max-w-[859px] mb-11">
        <?php echo get_field('panca_krida_desc') ?: 'JHL Auto berpegang pada nilai-nilai Panca Krida yang menjadi dasar filosofi perusahaan. Fondasi ini selaras dengan visi, misi, dan budaya kerja yang meneguhkan identitas JHL Auto sebagai grup dealer otomotif yang inovatif dan terpercaya.'; ?>
    </p>
    <div class="grid md:grid-cols-3 gap-6 mb-6">
        <div class="bg-jhl-gray-3/20 p-7 rounded-lg text-center">
            <h3 class="mb-2 font-light text-[27px]"><?php echo get_field('krida_1_title') ?: 'Kesempatan'; ?></h3>
            <p class="mb-8 font-medium text-[10px] uppercase tracking-wide">
                <?php echo get_field('krida_1_sub') ?: 'Chance'; ?>
            </p>
            <p class="max-w-[248px] leading-6 text-xs mx-auto">
                <?php echo get_field('krida_1_desc') ?: 'Memanfaatkan setiap peluang dengan bijaksana dan bertanggung jawab.'; ?>
            </p>
        </div>
        <div class="bg-jhl-gray-3/20 p-7 rounded-lg text-center">
            <h3 class="mb-2 font-light text-[27px]"><?php echo get_field('krida_2_title') ?: 'Kerja Keras'; ?></h3>
            <p class="mb-8 font-medium text-[10px] uppercase tracking-wide">
                <?php echo get_field('krida_2_sub') ?: 'Hard Work'; ?>
            </p>
            <p class="max-w-[248px] leading-6 text-xs mx-auto">
                <?php echo get_field('krida_2_desc') ?: 'Dedikasi penuh dalam setiap langkah dan upaya tanpa kenal lelah'; ?>
            </p>
        </div>
        <div class="bg-jhl-gray-3/20 p-7 rounded-lg text-center">
            <h3 class="mb-2 font-light text-[27px]"><?php echo get_field('krida_3_title') ?: 'Kerja Cerdas'; ?></h3>
            <p class="mb-8 font-medium text-[10px] uppercase tracking-wide">
                <?php echo get_field('krida_3_sub') ?: 'Smart Work'; ?>
            </p>
            <p class="max-w-[248px] leading-6 text-xs mx-auto">
                <?php echo get_field('krida_3_desc') ?: 'Inovasi dan strategi tepat untuk mencapai hasil maksimal'; ?>
            </p>
        </div>
    </div>
    <div class="flex justify-center items-center space-y-6 md:space-y-0 md:space-x-6 w-full flex-wrap mx-auto">
        <div class="bg-jhl-gray-3/20 p-7 rounded-lg text-center w-full md:w-1/3">
            <h3 class="mb-2 font-light text-[27px]"><?php echo get_field('krida_4_title') ?: 'Kerja Tuntas'; ?></h3>
            <p class="mb-8 font-medium text-[10px] uppercase tracking-wide">
                <?php echo get_field('krida_4_sub') ?: 'Complete Work'; ?>
            </p>
            <p class="max-w-[248px] leading-6 text-xs mx-auto">
                <?php echo get_field('krida_4_desc') ?: 'Menyelesaikan setiap tugas dengan sempurna dan berkualitas'; ?>
            </p>
        </div>
        <div class="bg-jhl-gray-3/20 p-7 rounded-lg text-center w-full md:w-1/3">
            <h3 class="mb-2 font-light text-[27px]"><?php echo get_field('krida_5_title') ?: 'Loyalitas'; ?></h3>
            <p class="mb-8 font-medium text-[10px] uppercase tracking-wide">
                <?php echo get_field('krida_5_sub') ?: 'Loyalty'; ?>
            </p>
            <p class="max-w-[248px] leading-6 text-xs mx-auto">
                <?php echo get_field('krida_5_desc') ?: 'Komitmen jangka panjang kepada mitra, pelanggan, dan tim'; ?>
            </p>
        </div>
    </div>
</section>

<section class="md:h-screen w-full flex flex-col md:flex-row space-x-16 bg-[#404040] relative ">
    <div class="md:absolute h-full w-full md:w-[426px] 2xl:w-[580px] md:left-0">
        <?php
        $vm_img = get_field('vm_side_image');
        $vm_img_url = $vm_img ? $vm_img['url'] : get_template_directory_uri() . '/images/story-image-1.png';
        ?>
        <img class="w-full h-full object-cover" src="<?php echo esc_url($vm_img_url); ?>" alt="">
    </div>
    <div class="flex flex-col justify-center w-full py-7 container">
        <div class="flex flex-col md:flex-row md:space-x-6 mb-20 justify-end">
            <div class="bg-jhl-foreground p-11 rounded-lg mb-4 md:mb-0 lg:max-w-[380px] xxl:max-w-[403px] w-full">
                <h3 class="mb-8 font-light text-[27px]">Visi</h3>
                <div class="body max-w-[254px]">
                    <?php echo get_field('visi_text') ?: 'Menjadi group dealer otomotif terdepan di Indonesia dalam inovasi, kualitas, dan layanan pelanggan'; ?>
                </div>
            </div>
            <div class="bg-jhl-foreground p-11 rounded-lg lg:max-w-[380px] xxl:max-w-[403px] w-full">
                <h3 class="mb-8 font-light text-[27px]">Misi</h3>
                <div class="body max-w-[254px]">
                    <?php echo get_field('misi_text') ?: '<ul class="list-disc body pl-4"><li>Bertransformasi dari single dealer menjadi group dealer otomotif besar di Indonesia.</li><li>Mendorong pengembangan organisasi yang berkelanjutan.</li><li>Memberikan layanan pelanggan yang unggul dengan standar profesionalisme terbaik</li></ul>'; ?>
                </div>
            </div>
        </div>

        <div
            class="grid grid-cols-2 md:flex items-center justify-center md:ml-[420px] gap-y-20 md:gap-y-0 mb-14 md:mb-0 md:space-x-20">
            <?php for ($i = 1; $i <= 4; $i++):
                $icon = get_field('culture_icon_' . $i);
                $label = get_field('culture_label_' . $i);
                $def_labels = ['', 'Integritas', 'Semangat', 'Kepuasan Pelanggan', 'Kerja Sama tim'];
                $def_imgs = ['', 'Warranty.png', 'Fist.png', 'Heart.png', 'Crowd.png'];
                ?>
                <div class="flex flex-col justify-center items-center">
                    <img class="w-20 h-20 object-contain mb-7"
                        src="<?php echo $icon ? esc_url($icon['url']) : get_template_directory_uri() . '/images/' . $def_imgs[$i]; ?>"
                        alt="">
                    <span class="text-white tracking-wide max-w-[95px] block text-center">
                        <?php echo $label ?: $def_labels[$i]; ?>
                    </span>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<section class="container py-24 md:py-32 grid gap-16 md:gap-0 md:grid-cols-4">
    <?php
    $stats = [
        ['field' => 'stat_1', 'def_num' => '14', 'def_label' => 'Tahun <br /> Beroperasi'],
        ['field' => 'stat_2', 'def_num' => '4', 'def_label' => 'Dealership <br /> di Indonesia'],
        ['field' => 'stat_3', 'def_num' => '80+', 'def_label' => 'Total Karyawan'],
        ['field' => 'stat_4', 'def_num' => '1000+', 'def_label' => 'Unit <br /> Mobil Terjual'],
    ];
    foreach ($stats as $s):
        ?>
        <div>
            <h1 class="!text-[74px] !leading-none font-extralight">
                <?php echo get_field($s['field'] . '_num') ?: $s['def_num']; ?>
            </h1>
            <h5 class="text-jhl-gray-1 font-medium"><?php echo get_field($s['field'] . '_label') ?: $s['def_label']; ?></h5>
        </div>
    <?php endforeach; ?>
</section>

<section class="py-[110px] bg-jhl-foreground/30 overflow-x-hidden">
    <div class="container">
        <div class="flex flex-col md:flex-row mb-28">
            <div class="bg-jhl-gray-3/20 order-2 md:order-1 px-9 py-16 md:p-16 md:w-[60%]">
                <h3 class="mb-3"><?php echo get_field('director_name') ?: 'Johnnathan Salim'; ?></h3>
                <h5 class="mb-11"><?php echo get_field('director_title') ?: 'Direktur Utama'; ?></h5>
                <div class="body md:max-w-[494px]">
                    <?php echo get_field('director_desc') ?: 'Sebagai Direktur Utama...'; ?>
                </div>
            </div>
            <div class="bg-white md:w-[40%] pt-10 order-1 md:order-2">
                <?php
                $dir_img = get_field('director_image');
                $dir_img_url = $dir_img ? $dir_img['url'] : get_template_directory_uri() . '/images/direktur.png';
                ?>
                <img class="w-full h-full max-h-[438px] object-contain" src="<?php echo esc_url($dir_img_url); ?>" alt="">
            </div>
        </div>

        <div>
            <h2 class="mb-11"><?php echo get_field('team_section_title') ?: 'Sosok-Sosok di Balik JHL Auto'; ?></h2>
            <div class="flex justify-between items-end mb-8">
                <div class="body text-jhl-gray-1 md:max-w-[579px]">
                    <?php echo get_field('team_section_desc') ?: 'Di balik setiap pencapaian, terdapat tim yang berdedikasi. JHL Auto tumbuh bersama profesional yang kompeten dan berorientasi pada pelayanan, menjadikan sumber daya manusia sebagai pendorong utama mewujudkan visi perusahaan.'; ?>
                </div>
                <div id="team-arrows" class="flex gap-2"></div>
            </div>
        </div>
    </div>

    <div class="slider-full-right pl-4">
        <?php
        $args = array(
            'post_type' => 'team',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC',
        );

        $team_query = new WP_Query($args);

        if ($team_query->have_posts()): ?>
            <div class="teams -mx-2">
                <?php while ($team_query->have_posts()):
                    $team_query->the_post();
                    $position = get_field('position');
                    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    ?>
                    <div class="px-2 outline-none text-center ">
                        <div class="relative overflow-hidden rounded-lg">
                            <?php if ($thumbnail): ?>
                                <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title(); ?>"
                                    class="w-full object-cover transition-transform duration-500 min-h-[365px]">
                            <?php endif; ?>

                            <div class="absolute bottom-0 left-0 right-0 p-4 bg-[#2f2f2f]/20 backdrop-blur-2xl">
                                <h5 class="!text-white"><?php the_title(); ?></h5>
                                <?php if ($position): ?>
                                    <p class="body text-white"><?php echo esc_html($position); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>