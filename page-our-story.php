<?php get_header(); ?>

<section class="h-[130vh] md:h-screen relative flex flex-col justify-end pb-14 md:pb-[107px]">
    <div class="absolute h-full w-full left-0 top-0" data-aos="zoom-out">
        <?php
        $header_img = get_field('story_header_image');
        $header_img_url = $header_img ? $header_img['url'] : get_template_directory_uri() . '/images/story-header.png';
        ?>
        <img class="w-full h-full object-cover" src="<?php echo esc_url($header_img_url); ?>" alt="">
    </div>
    <div class="absolute w-[90%] left-0 top-0 h-full bg-gradient-to-r from-jhl-black to-jhl-black/0"></div>
    <div class="container z-10 relative text-white">
        <h1 class="text-[44px] font-light" data-aos="fade-right">
            <?php echo get_field('story_header_title') ?: 'Awal Perjalanan'; ?>
        </h1>
        <div class="mb-4" data-aos="fade-right" data-aos-delay="200">
            <?php echo get_field('story_header_desc_1') ?: 'Setiap perjalanan besar selalu dimulai dari satu keyakinan. 
Pada 12 Januari 2012, JHL Auto berdiri sebagai bagian dari JHL Group dengan visi menghadirkan standar baru dalam pengalaman otomotif di Indonesia.'; ?>
        </div>
        <div data-aos="fade-right" class="mb-4" data-aos-delay="200">
            <?php echo get_field('story_header_desc_2') ?: 'Berawal dari kepercayaan sebagai bagian dari jaringan resmi Jeep di Indonesia, JHL Auto membangun fondasi yang kuat melalui integritas, inovasi, dan pelayanan berkelas internasional. Perjalanan tersebut menjadi titik awal transformasi kami.'; ?>
        </div>
        <div data-aos="fade-right" data-aos-delay="200">
            <?php echo get_field('story_header_desc_3') ?: 'Seiring waktu, kami terus berkembang dan beradaptasi dengan dinamika industri. Pada Maret 2024, JHL Auto dipercaya sebagai Authorized BAIC Dealer, menandai babak baru dalam perjalanan kami sebagai mitra mobilitas premium yang progresif dan visioner.'; ?>
        </div>
    </div>
</section>
<section class="bg-jhl-foreground py-16">
    <div id="timeline-container" class="relative w-full max-w-4xl lg:left-[9%] mx-auto mb-24 h-[2401px] lg:h-[1899px]">
        <div class="absolute mx-auto hidden lg:block h-[1689px] -left-27 w-[953px] mt-[110px]">
            <?php
            $jhl_bg = get_field('jhl_bg_image');
            $jhl_bg_url = $jhl_bg ? $jhl_bg['url'] : get_template_directory_uri() . '/images/jhl-bg.png';
            ?>
            <img class="w-full h-full" src="<?php echo esc_url($jhl_bg_url); ?>" alt="">
        </div>

        <div class="absolute mx-auto lg:hidden h-[67px] left-[40px] top-[160px]">
            <img class="w-full h-full" src="<?php echo get_template_directory_uri() . '/images/timeline/j.png' ?>"
                alt="">
        </div>
        <div class="absolute mx-auto lg:hidden h-[101px] left-[20px] top-[1009px]">
            <img class="w-full h-full" src="<?php echo get_template_directory_uri() . '/images/timeline/h.png' ?>"
                alt="">
        </div>
        <div class="absolute mx-auto lg:hidden h-[68px] left-[40px] top-[1728px]">
            <img class="w-full h-full" src="<?php echo get_template_directory_uri() . '/images/timeline/l.png' ?>"
                alt="">
        </div>
        <svg class="absolute hidden lg:block top-0 right-12 h-full pointer-events-none lg:scale-100 w-[290px] lg:w-[580px]"
            viewBox="0 0 583 1899" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path id="road-path"
                d="M2.5 2.5V349.437H515.079L553.59 558.084H256.01V617.12H565.493L579.496 827.385H173.388V1075.66H579.496C579.73 1129.3 568.294 1278.65 568.294 1278.65H256.711V1341.72H558.491L526.282 1546.33H2.5V1896.5"
                stroke="#808285" stroke-width="5" stroke-linecap="round" opacity="0.7" />
        </svg>

        <svg class="absolute block lg:hidden left-[73px]" width="93" height="2401" viewBox="0 0 93 2401" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.7" id="road-path-mobile"
                d="M1.50009 1.5V194.612H80.5634L86.5035 227H1.5V1007.9H88.3395L90.4995 1040.54H27.8589V1079.08H90.4995C90.5355 1087.41 88.7715 1110.59 88.7715 1110.59H1.608L1.60791 1728H87.2594L82.2914 1759.76H1.5V2399"
                stroke="#808285" stroke-width="3" stroke-linecap="round" />
        </svg>


        <div id="car"
            class="fixed top-0 left-0 w-16 h-16 lg:w-[120px] lg:h-[120px] z-50 pointer-events-none flex items-center justify-center"
            style="display: none; will-change: transform;">
            <?php
            $car_icon = get_field('timeline_car_icon');
            $car_icon_url = $car_icon ? $car_icon['url'] : get_template_directory_uri() . '/images/car-2.png';
            ?>
            <img src="<?php echo esc_url($car_icon_url); ?>" id="car-img"
                class="object-contain rotate-180 w-[33px] lg:w-[47px] h-[93px]" alt="car">
        </div>

        <!-- Desktop Story Layer -->
        <div id="story-layer-desktop" class="absolute inset-0 pointer-events-none hidden lg:block">
            <div class="story-point absolute flex opacity-0 transition-opacity duration-500" data-path-progress="0.04">
                <div
                    class="w-5 h-5 rounded-full border-2 mt-2 border-jhl-foreground bg-jhl-black ring-1 ring-jhl-black shrink-0">
                </div>
                <div class="w-32 border-b border-dashed border-jhl-gray-1 h-[1px] mt-4 mr-2"></div>
                <div class=" max-w-[300px]">
                    <h3>2012</h3>
                    <h4 class="font-bold text-sm my-2">Authorized Jeep Dealer</h4>
                    <p class="body">Menjadi dealer otomotif pertama JHL Auto sekaligus memperoleh penghargaan MURI atas
                        konsep dealer inovatif <i>“Amazon Jungle”</i>, menandai awal komitmen menghadirkan pengalaman
                        otomotif
                        yang berbeda di Indonesia</p>
                </div>
            </div>

            <div class="story-point is-left absolute w-5 h-5 flex items-center justify-center opacity-0 transition-opacity duration-500"
                data-path-progress="0.21">
                <div
                    class="w-5 h-5 rounded-full border-2 border-jhl-foreground bg-jhl-black ring-1 ring-jhl-black shrink-0 z-10">
                </div>
                <div class="absolute right-full flex flex-row-reverse top-0 mr-2">
                    <div class="w-60 lg:w-[720px] border-b border-dashed border-jhl-gray-1 h-[1px] mt-2"></div>
                    <div class="max-w-[316px] mr-4 text-right -mt-2">
                        <h3>2015</h3>
                        <h4 class="font-bold text-sm my-1">Strengthening the Jeep Community</h4>
                        <p class="body">Berpartisipasi dalam ajang nasional Garansindo Cup <i>“Jeep Agility Off Road
                                Competition”</i> sebagai wujud komitmen dalam memperkuat kolaborasi dan eksistensi
                            komunitas
                            Jeep Indonesia
                        </p>
                    </div>
                </div>
            </div>

            <div class="story-point is-left absolute w-5 h-5 flex items-center justify-center opacity-0 transition-opacity duration-500"
                data-path-progress="0.38">
                <div
                    class="w-5 h-5 rounded-full border-2 border-jhl-foreground bg-jhl-black ring-1 ring-jhl-black shrink-0 z-10">
                </div>
                <div class="absolute right-full flex flex-row-reverse top-0 mr-2">
                    <div class="w-60 lg:w-[600px] border-b border-dashed border-jhl-gray-1 h-[1px] mt-2"></div>
                    <div class="max-w-[243px] mr-4 text-right -mt-2">
                        <h3>2017</h3>
                        <h4 class="font-bold text-sm my-1">Best Authorized Jeep Dealer – Indonesia</h4>
                        <p class="body">Menerima penghargaan <i>“Best Jeep Dealer
                                Indonesia”</i> sebagai pengakuan atas
                            konsistensi performa, standar layanan premium, serta pencapaian penjualan unggul di tingkat
                            nasional
                        </p>
                    </div>
                </div>
            </div>

            <div class="story-point is-left absolute w-5 h-5 flex items-center justify-center opacity-0 transition-opacity duration-500"
                data-path-progress="0.524">
                <div
                    class="w-5 h-5 rounded-full border-2 border-jhl-foreground bg-jhl-black ring-1 ring-jhl-black shrink-0 z-10">
                </div>
                <div class="absolute right-full flex flex-row-reverse top-0 mr-2 ">
                    <div class="w-10 lg:w-[300px] border-b border-dashed border-jhl-gray-1 h-[1px] mt-2"></div>
                    <div class="max-w-[291px] mr-4 text-right -mt-2">
                        <h3>2019</h3>
                        <h4 class="font-bold text-sm my-1">Best Seller Award – IIMS</h4>
                        <p class="body">Mencapai penjualan 60 unit Jeep dan 72 pemesanan selama ajang <i>“Indonesia
                                International Motor Show”</i>, memperkuat posisi JHL Auto sebagai salah satu dealer
                            dengan
                            performa terbaik secara nasional
                        </p>
                    </div>
                </div>
            </div>

            <div class="story-point is-left absolute w-5 h-5 flex items-center justify-center opacity-0 transition-opacity duration-500"
                data-path-progress="0.715">
                <div
                    class="w-5 h-5 rounded-full border-2 border-jhl-foreground bg-jhl-black ring-1 ring-jhl-black shrink-0 z-10">
                </div>
                <div class="absolute right-full flex flex-row-reverse top-0 mr-2">
                    <div class="w-20 lg:w-[200px] border-b border-dashed border-jhl-gray-1 h-[1px] mt-2"></div>
                    <div class="max-w-[264px] mr-4 text-right -mt-2">
                        <h3>2021</h3>
                        <h4 class="font-bold text-sm my-1">Outstanding Jeep Sales Performance
                        </h4>
                        <p class="body">Mencatatkan pencapaian hingga 100 unit penjualan dalam satu tahun di tengah
                            tantangan pandemi, menunjukkan ketahanan bisnis dan kepercayaan pasar yang kuat
                        </p>
                    </div>
                </div>
            </div>

            <div class="story-point is-left absolute w-5 h-5 flex items-center justify-center opacity-0 transition-opacity duration-500"
                data-path-progress="0.817">
                <div
                    class="w-5 h-5 rounded-full border-2 border-jhl-foreground bg-jhl-black ring-1 ring-jhl-black shrink-0 z-10">
                </div>
                <div class="absolute right-full flex flex-row-reverse top-0 mr-2">
                    <div class="w-24 lg:w-[820px] border-b border-dashed border-jhl-gray-1 h-[1px] mt-2"></div>
                    <div class="max-w-[317px] mr-4 text-right -mt-2">
                        <h3>2024</h3>
                        <h4 class="font-bold text-sm my-1">Authorized BAIC Dealer</h4>
                        <p class="body">Memulai babak baru sebagai Authorized BAIC Dealer di Indonesia dengan
                            komitmen menghadirkan solusi mobilitas yang unggul, relevan, dan terpercaya bagi pasar
                            otomotif nasional
                        </p>
                    </div>
                </div>
            </div>

            <div class="story-point absolute flex opacity-0 transition-opacity duration-500" data-path-progress="0.97">
                <div
                    class="w-5 h-5 rounded-full border-2 mt-2 border-jhl-foreground bg-jhl-black ring-1 ring-jhl-black">
                </div>
                <div class="w-16 lg:w-32 border-b border-dashed border-jhl-gray-1 h-[1px] mt-4 mr-2"></div>
                <div class=" max-w-[300px]">
                    <h3>2025</h3>
                    <h4 class="font-bold text-sm my-2">Best Start of Business</h4>
                    <p class="body">Mendapatkan pengakuan dari BAIC Global atas pencapaian JHL Auto sebagai dealer resmi
                        BAIC di Indonesia, menandai langkah strategis dalam ekspansi dan transformasi brand</p>
                </div>
            </div>
        </div>

        <!-- Mobile Story Layer -->
        <div id="story-layer-mobile" class="absolute inset-0 pointer-events-none block lg:hidden">
            <div class="story-point  flex opacity-0 transition-opacity duration-500" data-path-progress="0.05">
                <div
                    class="w-6 h-6 rounded-full border-2 mt-2 border-jhl-foreground bg-jhl-black ring-1 ring-jhl-black shrink-0">
                </div>
                <div class="w-20 shrink-0 border-b border-dashed border-jhl-gray-1 h-[1px] mt-5 mx-2"></div>
                <div class="w-[160px] pr-4 flex-shrink-0">
                    <h3 class="text-lg">2012</h3>
                    <h4 class="font-bold text-base my-1">Authorized Jeep Dealer</h4>
                    <p class="body text-[10px] leading-relaxed">Menjadi dealer otomotif pertama JHL Auto sekaligus
                        memperoleh penghargaan MURI atas konsep dealer inovatif <i>“Amazon Jungle”</i>, menandai awal
                        komitmen
                        menghadirkan pengalaman otomotif yang berbeda di Indonesia
                    </p>
                </div>
            </div>
            <div class="story-point flex opacity-0 transition-opacity duration-500" data-path-progress="0.24">
                <div
                    class="w-6 h-6 rounded-full border-2 mt-2 border-jhl-foreground bg-jhl-black ring-1 ring-jhl-black shrink-0">
                </div>
                <div class="w-20 shrink-0 border-b border-dashed border-jhl-gray-1 h-[1px] mt-5 mx-2"></div>
                <div class="w-[160px] pr-4 flex-shrink-0">
                    <h3 class="text-lg">2015</h3>
                    <h4 class="font-bold text-base my-1">Strengthening the Jeep Community</h4>
                    <p class="body text-[10px] leading-relaxed">Berpartisipasi dalam ajang nasional Garansindo Cup
                        <i>“Jeep
                            Agility Off Road Competition”</i> sebagai wujud komitmen dalam memperkuat kolaborasi dan
                        eksistensi
                        komunitas Jeep Indonesia
                    </p>
                </div>
            </div>
            <div class="story-point flex opacity-0 transition-opacity duration-500" data-path-progress="0.35">
                <div
                    class="w-6 h-6 rounded-full border-2 mt-2 border-jhl-foreground bg-jhl-black ring-1 ring-jhl-black shrink-0">
                </div>
                <div class="w-20 shrink-0 border-b border-dashed border-jhl-gray-1 h-[1px] mt-5 mx-2"></div>
                <div class="w-[160px] pr-4 flex-shrink-0">
                    <h3 class="text-lg">2017</h3>
                    <h4 class="font-bold text-base my-1">Best Authorized Jeep Dealer – Indonesia</h4>
                    <p class="body text-[10px] leading-relaxed">Menerima penghargaan <i>“Best Jeep Dealer
                            Indonesia”</i>
                        sebagai pengakuan atas konsistensi performa, standar layanan premium, serta pencapaian penjualan
                        unggul di tingkat nasional
                    </p>
                </div>
            </div>
            <div class="story-point flex  !left-[100px] opacity-0 transition-opacity duration-500"
                data-path-progress="0.539">
                <div
                    class="w-6 h-6 rounded-full border-2 mt-2 border-jhl-foreground bg-jhl-black ring-1 ring-jhl-black shrink-0">
                </div>
                <div class="w-14 shrink-0 border-b border-dashed border-jhl-gray-1 h-[1px] mt-5 mx-2"></div>
                <div class="w-[160px] pr-4 flex-shrink-0">
                    <h3 class="text-lg">2019</h3>
                    <h4 class="font-bold text-base my-1">Best Seller Award – IIMS</h4>
                    <p class="body text-[10px] leading-relaxed">Mencapai penjualan 60 unit Jeep dan 72 pemesanan selama
                        ajang <i>“Indonesia International Motor Show”</i>, memperkuat posisi JHL Auto sebagai salah
                        satu dealer
                        dengan performa terbaik secara nasional
                    </p>
                </div>
            </div>
            <div class="story-point flex opacity-0 transition-opacity duration-500" data-path-progress="0.63">
                <div
                    class="w-6 h-6 rounded-full border-2 mt-2 border-jhl-foreground bg-jhl-black ring-1 ring-jhl-black shrink-0">
                </div>
                <div class="w-20 shrink-0 border-b border-dashed border-jhl-gray-1 h-[1px] mt-5 mx-2"></div>
                <div class="w-[160px] pr-4 flex-shrink-0">
                    <h3 class="text-lg">2021</h3>
                    <h4 class="font-bold text-base my-1">Outstanding Jeep Sales Performance
                    </h4>
                    <p class="body text-[10px] leading-relaxed">Mencatatkan pencapaian hingga 100 unit penjualan dalam
                        satu tahun di tengah tantangan pandemi, menunjukkan ketahanan bisnis dan kepercayaan pasar yang
                        kuat
                    </p>
                </div>
            </div>
            <div class="story-point flex opacity-0 transition-opacity duration-500" data-path-progress="0.8">
                <div
                    class="w-6 h-6 rounded-full border-2 mt-2 border-jhl-foreground bg-jhl-black ring-1 ring-jhl-black shrink-0">
                </div>
                <div class="w-20 shrink-0 border-b border-dashed border-jhl-gray-1 h-[1px] mt-5 mx-2"></div>
                <div class="w-[160px] pr-4 flex-shrink-0">
                    <h3 class="text-lg">2024</h3>
                    <h4 class="font-bold text-base my-1">Authorized BAIC Dealer</h4>
                    <p class="body text-[10px] leading-relaxed">Memulai babak baru sebagai Authorized BAIC Dealer di
                        Indonesia dengan komitmen menghadirkan solusi mobilitas yang unggul, relevan, dan terpercaya
                        bagi pasar otomotif nasional
                    </p>
                </div>
            </div>
            <div class="story-point flex opacity-0 transition-opacity duration-500" data-path-progress="0.94">
                <div
                    class="w-6 h-6 rounded-full border-2 mt-2 border-jhl-foreground bg-jhl-black ring-1 ring-jhl-black shrink-0">
                </div>
                <div class="w-20 shrink-0 border-b border-dashed border-jhl-gray-1 h-[1px] mt-5 mx-2"></div>
                <div class="w-[160px] pr-4 flex-shrink-0">
                    <h3 class="text-lg">2025</h3>
                    <h4 class="font-bold text-base my-1 mb-2">Best Start of Business</h4>
                    <p class="body text-[10px] leading-relaxed">Mendapatkan pengakuan dari BAIC Global atas pencapaian
                        JHL Auto sebagai dealer resmi BAIC di Indonesia, menandai langkah strategis dalam ekspansi dan
                        transformasi brand</p>
                </div>
            </div>
        </div>
    </div>
    <h3 class="flex justify-center text-center">
        Perjalanan ini Terus Berlanjut
    </h3>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const pathDesktop = document.querySelector("#road-path");
        const pathMobile = document.querySelector("#road-path-mobile");
        const car = document.querySelector("#car");
        const container = document.querySelector("#timeline-container");

        // Variables to hold current active state
        let path, svgElement, pathLength, storyPoints;

        function initTimelineState() {
            const isMobile = window.innerWidth < 958;
            if (isMobile) {
                path = pathMobile;
                storyPoints = document.querySelectorAll("#story-layer-mobile .story-point");
            } else {
                path = pathDesktop;
                storyPoints = document.querySelectorAll("#story-layer-desktop .story-point");
            }

            if (path) {
                svgElement = path.ownerSVGElement;
                pathLength = path.getTotalLength();
            }
        }

        function updateTimeline() {
            if (!path || !svgElement || !storyPoints) return;

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
                const angle = Math.atan2((nextPoint.y - point.y) * scaleY, (nextPoint.x - point.x) * scaleX) *
                    180 / Math.PI;
                car.style.transform =
                    `translate3d(${x}px, ${y}px, 0) translate(-50%, -50%) rotate(${angle + 90}deg)`;
            } else {
                car.style.display = "none";
            }

            storyPoints.forEach(pointEl => {
                const dotProgress = parseFloat(pointEl.dataset.pathProgress);
                const pathPoint = path.getPointAtLength(dotProgress * pathLength);

                const x = svgRect.left + (pathPoint.x * scaleX);
                const y = svgRect.top + (pathPoint.y * scaleY);

                const isLeft = pointEl.classList.contains('is-left');
                const isMobile = window.innerWidth < 958;

                pointEl.style.position = "fixed";
                pointEl.style.top = `${y}px`;
                pointEl.style.left = `${x}px`;

                if (isMobile) {
                    pointEl.style.transform = `translate(-12px, -50%)`;
                } else {
                    if (isLeft) {
                        pointEl.style.transform = "translate(-100%, -50%)";
                        pointEl.style.marginLeft = "10px";
                    } else {
                        pointEl.style.transform = "translate(-10px, -50%)";
                    }
                }

                if (progress >= dotProgress - 0.15) {
                    pointEl.style.opacity = "1";
                    pointEl.style.pointerEvents = "auto";
                } else {
                    pointEl.style.opacity = "0";
                    pointEl.style.pointerEvents = "none";
                }
            });
        }

        initTimelineState();

        function tick() {
            updateTimeline();
            requestAnimationFrame(tick);
        }
        tick();

        window.addEventListener("resize", function () {
            initTimelineState();
            updateTimeline();
        });
    });
</script>
<section class="py-32 container md:text-center">
    <h2 class="text-2xl md:text-[44px] mb-2 font-light text-black" data-aos="fade-down">
        <?php echo get_field('panca_krida_title') ?: 'Pancakrida'; ?>
    </h2>
    <h4 class="mb-11 text-xl text-black" data-aos="fade-down" data-aos-delay="200">
        <?php echo get_field('panca_krida_subtitle') ?: 'The Power to Success'; ?>
    </h4>
    <p class="body mx-auto md:max-w-[859px] mb-11" data-aos="fade-down" data-aos-delay="400">
        <?php echo get_field('panca_krida_desc') ?: 'JHL Auto berpegang pada nilai-nilai Pancakrida yang menjadi dasar filosofi perusahaan. Fondasi ini selaras dengan visi, misi, dan budaya kerja yang meneguhkan identitas JHL Auto sebagai grup dealer otomotif yang inovatif dan terpercaya.'; ?>
    </p>
    <div class="grid md:grid-cols-3 gap-6 mb-6">
        <div class="bg-jhl-gray-3/20 p-7 rounded-lg text-center" data-aos="fade-right" data-aos-delay="600">
            <h3 class="mb-2 font-light text-[27px]"><?php echo get_field('krida_1_title') ?: 'Kesempatan'; ?></h3>
            <p class="font-medium text-[10px] uppercase tracking-wide">
                <?php echo get_field('krida_1_sub') ?: 'Opportunity'; ?>
            </p>
            <!-- <p class="max-w-[248px] leading-6 text-xs mx-auto">
                <?php echo get_field('krida_1_desc') ?: 'Memanfaatkan setiap peluang dengan bijaksana dan bertanggung jawab.'; ?>
            </p> -->
        </div>
        <div class="bg-jhl-gray-3/20 p-7 rounded-lg text-center" data-aos="fade-down" data-aos-delay="800">
            <h3 class="mb-2 font-light text-[27px]"><?php echo get_field('krida_2_title') ?: 'Kerja Keras'; ?></h3>
            <p class="font-medium text-[10px] uppercase tracking-wide">
                <?php echo get_field('krida_2_sub') ?: 'Work Hard'; ?>
            </p>
            <!-- <p class="max-w-[248px] leading-6 text-xs mx-auto">
                <?php echo get_field('krida_2_desc') ?: 'Dedikasi penuh dalam setiap langkah dan upaya tanpa kenal lelah'; ?>
            </p> -->
        </div>
        <div class="bg-jhl-gray-3/20 p-7 rounded-lg text-center" data-aos="fade-left" data-aos-delay="1000">
            <h3 class="mb-2 font-light text-[27px]"><?php echo get_field('krida_3_title') ?: 'Kerja Cerdas'; ?></h3>
            <p class="font-medium text-[10px] uppercase tracking-wide">
                <?php echo get_field('krida_3_sub') ?: 'Work Smart'; ?>
            </p>
            <!-- <p class="max-w-[248px] leading-6 text-xs mx-auto">
                <?php echo get_field('krida_3_desc') ?: 'Inovasi dan strategi tepat untuk mencapai hasil maksimal'; ?>
            </p> -->
        </div>
    </div>
    <div class="flex justify-center items-center space-y-6 md:space-y-0 md:space-x-6 w-full flex-wrap mx-auto">
        <div class="bg-jhl-gray-3/20 p-7 rounded-lg text-center w-full md:w-1/3" data-aos="fade-right"
            data-aos-delay="1200">
            <h3 class="mb-2 font-light text-[27px]"><?php echo get_field('krida_4_title') ?: 'Kerja Tuntas'; ?></h3>
            <p class="font-medium text-[10px] uppercase tracking-wide">
                <?php echo get_field('krida_4_sub') ?: 'Work Thoroughly'; ?>
            </p>
            <!-- <p class="max-w-[248px] leading-6 text-xs mx-auto">
                <?php echo get_field('krida_4_desc') ?: 'Menyelesaikan setiap tugas dengan sempurna dan berkualitas'; ?>
            </p> -->
        </div>
        <div class="bg-jhl-gray-3/20 p-7 rounded-lg text-center w-full md:w-1/3" data-aos="fade-left"
            data-aos-delay="1200">
            <h3 class="mb-2 font-light text-[27px]"><?php echo get_field('krida_5_title') ?: 'Loyalitas'; ?></h3>
            <p class="font-medium text-[10px] uppercase tracking-wide">
                <?php echo get_field('krida_5_sub') ?: 'Loyalty'; ?>
            </p>
            <!-- <p class="max-w-[248px] leading-6 text-xs mx-auto">
                <?php echo get_field('krida_5_desc') ?: 'Komitmen jangka panjang kepada mitra, pelanggan, dan tim'; ?>
            </p> -->
        </div>
    </div>
</section>

<section class="md:h-screen w-full flex flex-col md:flex-row space-x-16 bg-[#404040] relative" data-scroll-section>
    <div class="md:absolute h-full w-full md:w-[426px] 2xl:w-[580px] md:left-0">
        <?php
        $vm_img = get_field('vm_side_image');
        $vm_img_url = $vm_img ? $vm_img['url'] : get_template_directory_uri() . '/images/story-image-2.jpg';
        ?>
        <img class="w-full h-full object-cover" src="<?php echo esc_url($vm_img_url); ?>" alt="">
    </div>
    <div class="flex flex-col justify-center w-full py-7 container">
        <div class="flex flex-col md:flex-row md:space-x-6 mb-20 md:ml-[420px] justify-center">
            <div class="bg-jhl-foreground p-11 rounded-lg mb-4 md:mb-0 lg:max-w-[380px] xxl:max-w-[403px] w-full"
                data-aos="fade-right">
                <h3 class="mb-8 font-light text-[27px]">Visi</h3>
                <div class="body max-w-[254px]">
                    <?php echo get_field('visi_text') ?: 'Menjadi group dealer otomotif terdepan di Indonesia dalam inovasi, kualitas, dan layanan pelanggan'; ?>
                </div>
            </div>
            <div class="bg-jhl-foreground p-11 rounded-lg lg:max-w-[380px] xxl:max-w-[403px] w-full"
                data-aos="fade-left">
                <h3 class="mb-8 font-light text-[27px]">Misi</h3>
                <div class="body max-w-[254px]">
                    <?php echo get_field('misi_text') ?: '<ul class="list-disc body pl-4"><li>Bertransformasi dari single dealer menjadi group dealer otomotif besar di Indonesia.</li><li>Mendorong pengembangan organisasi yang berkelanjutan.</li><li>Memberikan layanan pelanggan yang unggul dengan standar profesionalisme terbaik</li></ul>'; ?>
                </div>
            </div>
        </div>

        <div
            class="grid grid-cols-2 md:flex items-center justify-center md:ml-[420px] gap-y-20 md:gap-y-0 mb-14 md:mb-0">
            <?php for ($i = 1; $i <= 4; $i++):
                $icon = get_field('culture_icon_' . $i);
                $label = get_field('culture_label_' . $i);
                $def_labels = ['', 'Integritas', 'Semangat', 'Kepuasan Pelanggan', 'Kerja Sama tim'];
                $def_imgs = ['', 'Warranty.png', 'Fist.png', 'Heart.png', 'Crowd.png'];
                ?>
            <div class="flex flex-col justify-center items-center mx-10" data-aos="fade-down"
                data-aos-delay="<?php echo $i * 100; ?>">
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
    $args = array(
        'post_type' => 'statistic',
        'posts_per_page' => 4,
        'orderby' => 'menu_order',
        'order' => 'ASC',
    );
    $stats_query = new WP_Query($args);
    $delay = 100;

    if ($stats_query->have_posts()):
        while ($stats_query->have_posts()):
            $stats_query->the_post();
            $number = strip_tags(get_the_content()) ?: '0';
            $label = get_field('label') ?: get_the_title();
            $max_w = get_field('max_width');
            $max_w_class = $max_w ? 'max-w-[' . $max_w . ']' : '';
            ?>
    <div data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
        <h1 class="!text-[74px] !leading-none font-extralight">
            <?php echo $number; ?>
        </h1>
        <h5 class="text-jhl-gray-1 font-medium <?php echo $max_w_class; ?>"><?php echo $label; ?></h5>
    </div>
    <?php
            $delay += 100;
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</section>

<section class="py-[110px] bg-jhl-foreground/30 overflow-x-hidden" data-scroll-section>
    <div class="container">
        <div class="flex flex-col md:flex-row mb-28">
            <div class="bg-jhl-gray-3/20 order-2 md:order-1 px-9 py-16 md:p-16 md:w-[50%]">
                <h3 class="mb-3" data-aos="fade-right"><?php echo get_field('director_name') ?: 'Johnnathan Salim'; ?>
                </h3>
                <h5 class="mb-11" data-aos="fade-right" data-aos-delay="100">
                    <?php echo get_field('director_title') ?: 'President Director'; ?>
                </h5>
                <div class="body md:max-w-[494px]" data-aos="fade-right" data-aos-delay="200">
                    <?php echo get_field('director_desc') ?: 'Sebagai entrepreneur muda di industri otomotif, Johnnathan Salim memimpin JHL Auto dengan visi menghadirkan standar baru dalam pengalaman otomotif premium di Indonesia. Berbekal lebih dari satu dekade pengalaman serta kedekatannya dengan komunitas otomotif melalui platform digital, ia menggabungkan perspektif bisnis dengan passion terhadap dunia kendaraan. <br /> <br />
                    Di bawah kepemimpinannya, JHL Auto terus bertransformasi menjadi perusahaan yang progresif, adaptif, dan terhubung dengan generasi baru pecinta otomotif. Ia meyakini bahwa masa depan industri otomotif dibangun melalui inovasi, konektivitas digital, dan kedekatan yang autentik dengan komunitas.'; ?>
                </div>
            </div>
            <div class="md:w-[50%] h-full order-1 md:order-2" data-aos="fade-left">
                <?php
                $dir_img = get_field('director_image');
                $dir_img_url = $dir_img ? $dir_img['url'] : get_template_directory_uri() . '/images/direktur-3.jpg';
                ?>
                <img class="w-full h-full object-cover max-h-[550px] md:max-h-[600px]"
                    src="<?php echo esc_url($dir_img_url); ?>" alt="">
            </div>
        </div>

        <div>
            <h2 class="mb-11" data-aos="fade-down">
                <?php echo get_field('team_section_title') ?: 'Tim Manajemen'; ?>
            </h2>
            <div class="flex justify-between items-end mb-8" data-aos="fade-down" data-aos-delay="200">
                <div class="body text-jhl-gray-1 md:max-w-[579px]">
                    <?php echo get_field('team_section_desc') ?: 'Di balik transformasi JHL Auto, berdiri 
                    tim manajemen yang memimpin dengan visi strategis dan standar profesionalisme tinggi. 
                    Dengan pendekatan modern dan orientasi pada pertumbuhan berkelanjutan, mereka memastikan 
                    perusahaan terus berkembang sebagai pemain otomotif yang kompetitif dan terpercaya.'; ?>
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
        <div class="teams -mx-2" data-aos="fade-down" data-aos-delay="400">
            <?php while ($team_query->have_posts()):
                    $team_query->the_post();
                    $position = get_field('position');
                    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    ?>
            <div class="px-2 outline-none text-center ">
                <div class="relative overflow-hidden rounded-lg">
                    <?php if ($thumbnail): ?>
                    <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title(); ?>"
                        class="w-full object-cover object-top transition-transform duration-500 h-[365px]">
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