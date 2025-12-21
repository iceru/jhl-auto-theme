<?php get_header(); ?>

<section class="h-screen relative flex flex-col justify-end pb-[107px]">
    <div class="absolute h-full w-full left-0 top-0">
        <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri() ?>/images/story-header.png"
            alt="">
    </div>
    <div class="absolute w-[90%] left-0 top-0 h-full bg-gradient-to-r from-jhl-black to-jhl-black/0">

    </div>
    <div class="container z-10 relative text-white">
        <h1 class="text-[44px]">
            Awal Perjalanan
        </h1>
        <p class="mb-4">
            Setiap perjalanan besar dimulai dari satu langkah berani. Pada 12 Januari 2012, JHL Auto resmi berdiri
            sebagai
            bagian dari JHL Group, menandai awal kiprah perusahaan dalam menghadirkan pengalaman otomotif premium di
            Indonesia.
        </p>
        <p>
            Sejak awal, JHL Auto membawa semangat integritas, inovasi, dan pelayanan berstandar internasional, dengan
            tujuan
            menjadi mitra mobilitas terpercaya bagi masyarakat Indonesia. Dari momentum bersejarah sebagai bagian dari
            Jaringan resmi Jeep di Indonesia, JHL Auto terus berkembang hingga pada Maret 2024 dipercaya sebagai
            Authorized
            BAIC Dealer, memperkuat posisinya sebagai bagian dari grup otomotif besar yang dinamis dan progresif.
        </p>
    </div>
</section>
<section id="timeline-container" class="relative w-full max-w-4xl mx-auto mt-16" style="height: 1899px;">
    <svg class="absolute top-0 right-0 h-full pointer-events-none scale-70 md:scale-100" width="580"
        viewBox="0 0 583 1899" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path id="road-path"
            d="M2.5 2.5V349.437H515.079L553.59 558.084H256.01V617.12H565.493L579.496 827.385H173.388V1075.66H579.496C579.73 1129.3 568.294 1278.65 568.294 1278.65H256.711V1341.72H558.491L526.282 1546.33H2.5V1896.5"
            stroke="#808285" stroke-width="5" stroke-linecap="round" opacity="0.7" />
    </svg>
    <div id="car"
        class="fixed top-0 left-0 w-[120px] h-[120px] z-50 pointer-events-none flex items-center justify-center"
        style="display: none; will-change: transform;">


        <img src="<?php echo get_template_directory_uri() ?>/images/car.png" id="car-img"
            style="width: 44px; height: 99px; transform: translateY(0px);" class="object-contain rotate-180" alt="car">
    </div>

</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const path = document.querySelector("#road-path");
        const car = document.querySelector("#car");
        const container = document.querySelector("#timeline-container");
        const svgElement = path.ownerSVGElement;
        const pathLength = path.getTotalLength();

        function updateCarPosition() {
            const rect = container.getBoundingClientRect();
            const svgRect = svgElement.getBoundingClientRect();
            const viewHeight = window.innerHeight;

            let progress = (viewHeight / 2 - rect.top) / rect.height;
            progress = Math.max(0, Math.min(1, progress));

            if (progress > 0 && progress < 1) {
                car.style.display = "flex";

                const point = path.getPointAtLength(progress * pathLength);
                const nextPoint = path.getPointAtLength(Math.min(progress * pathLength + 1, pathLength));

                const viewBox = svgElement.viewBox.baseVal;
                const scaleX = svgRect.width / viewBox.width;
                const scaleY = svgRect.height / viewBox.height;

                // MATH FIX:
                // Based on your screenshot, the dot is about 5-10px too low.
                // We add yOffset to nudge the red dot exactly onto the gray line.
                const yOffset = 0; // <--- Adjust this value until the red dot is on the line

                const x = svgRect.left + (point.x * scaleX);
                const y = svgRect.top + (point.y * scaleY) + yOffset;

                const angle = Math.atan2((nextPoint.y - point.y) * scaleY, (nextPoint.x - point.x) * scaleX) * 180 / Math.PI;

                // Apply transform
                car.style.transform = `translate3d(${x}px, ${y}px, 0) translate(-50%, -50%) rotate(${angle + 90}deg)`;
            } else {
                car.style.display = "none";
            }
        }

        function tick() {
            updateCarPosition();
            requestAnimationFrame(tick);
        }
        tick();
        window.addEventListener("resize", updateCarPosition);
    });
</script>

<section class="py-32 container text-center">
    <h2 class="text-2xl md:text-[44px] mb-6 font-light text-black">
        Panca Krida
    </h2>
    <h5 class="mb-11 text-xl text-black">
        The Power to Success
    </h5>
    <p class="body mx-auto md:max-w-[859px] mb-11">
        JHL Auto berpegang pada nilai-nilai Panca Krida yang menjadi dasar filosofi perusahaan. Fondasi ini selaras
        dengan visi, misi, dan budaya kerja yang meneguhkan identitas JHL Auto sebagai grup dealer otomotif yang
        inovatif dan terpercaya.
    </p>
    <div class="grid md:grid-cols-3 gap-6 mb-6">
        <div class="bg-jhl-gray-3/20 p-7 rounded-lg text-center">
            <h3 class="mb-2 font-light text-[27px]">Kesempatan</h3>
            <p class="mb-8 font-medium text-[10px] uppercase tracking-wide">Chance</p>
            <p class="max-w-[248px] leading-6 text-xs mx-auto">
                Memanfaatkan setiap peluang dengan bijaksana dan bertanggung
                jawab.
            </p>
        </div>
        <div class="bg-jhl-gray-3/20 p-7 rounded-lg text-center">
            <h3 class="mb-2 font-light text-[27px]">Kerja Keras</h3>
            <p class="mb-8 font-medium text-[10px] uppercase tracking-wide">Hard Work</p>
            <p class="max-w-[248px] leading-6 text-xs mx-auto">
                Dedikasi penuh dalam setiap langkah dan upaya tanpa kenal lelah
            </p>
        </div>
        <div class="bg-jhl-gray-3/20 p-7 rounded-lg text-center">
            <h3 class="mb-2 font-light text-[27px]">Kerja Cerdas</h3>
            <p class="mb-8 font-medium text-[10px] uppercase tracking-wide">Smart Work</p>
            <p class="max-w-[248px] leading-6 text-xs mx-auto">
                Inovasi dan strategi tepat untuk mencapai hasil maksimal
            </p>
        </div>
    </div>
    <div class="flex justify-center items-center space-y-6 md:space-y-0 md:space-x-6 w-full flex-wrap mx-auto">
        <div class="bg-jhl-gray-3/20 p-7 rounded-lg text-center w-full md:w-1/3">
            <h3 class="mb-2 font-light text-[27px]">Kerja Tuntas</h3>
            <p class="mb-8 font-medium text-[10px] uppercase tracking-wide">Complete Work</p>
            <p class="max-w-[248px] leading-6 text-xs mx-auto">
                Menyelesaikan setiap tugas dengan sempurna dan berkualitas
            </p>
        </div>
        <div class="bg-jhl-gray-3/20 p-7 rounded-lg text-center w-full md:w-1/3">
            <h3 class="mb-2 font-light text-[27px]">Loyalitas</h3>
            <p class="mb-8 font-medium text-[10px] uppercase tracking-wide">Loyalty</p>
            <p class="max-w-[248px] leading-6 text-xs mx-auto">
                Komitmen jangka panjang kepada mitra, pelanggan, dan tim
            </p>
        </div>
    </div>
</section>

<section class="h-screen w-full flex space-x-16 bg-[#404040] relative ">
    <div class="absolute h-full w-[426px] 2xl:w-[580px] left-0">
        <img class="w-full h-full object-cover"
            src="<?php echo get_template_directory_uri() ?>/images/story-image-1.png" alt="">
    </div>
    <div class=" flex flex-col justify-center w-full container">
        <div class="flex space-x-6 mb-20 justify-end">
            <div class="bg-jhl-foreground p-11 rounded-lg lg:max-w-[380px] xxl:max-w-[403px] w-full">
                <h3 class="mb-8 font-light text-[27px]">
                    Visi
                </h3>
                <p class="body max-w-[254px]">
                    Menjadi group dealer otomotif terdepan di Indonesia dalam inovasi, kualitas, dan layanan
                    pelanggan
                </p>
            </div>
            <div class="bg-jhl-foreground p-11 rounded-lg lg:max-w-[380px] xxl:max-w-[403px] w-full">
                <h3 class="mb-8 font-light text-[27px]">
                    Misi
                </h3>
                <p class="body max-w-[254px]">
                <ul class="list-disc body pl-4">
                    <li>Bertransformasi dari single dealer menjadi group dealer otomotif besar di Indonesia.
                    </li>
                    <li>
                        Mendorong pengembangan organisasi yang berkelanjutan.
                    </li>
                    <li>
                        Memberikan layanan pelanggan yang unggul dengan standar profesionalisme terbaik
                    </li>
                </ul>
                </p>
            </div>
        </div>

        <div class="flex items-center justify-center md:ml-[420px] space-x-20">
            <div>
                <img class="w-20 h-20 object-contain mb-7"
                    src="<?php echo get_template_directory_uri() ?>/images/Warranty.png" alt="">
                <span class="text-white tracking-wide max-w-[95px] block text-center">Integritas</span>
            </div>
            <div>
                <img class="w-20 h-20 object-contain mb-7"
                    src="<?php echo get_template_directory_uri() ?>/images/Fist.png" alt="">
                <span class="text-white tracking-wide max-w-[95px] block text-center">Semangat</span>
            </div>
            <div>
                <img class="w-20 h-20 object-contain mb-7"
                    src="<?php echo get_template_directory_uri() ?>/images/Heart.png" alt="">
                <span class="text-white tracking-wide max-w-[95px] block text-center">Kepuasan
                    Pelanggan </span>
            </div>
            <div>
                <img class="w-20 h-20 object-contain mb-7"
                    src="<?php echo get_template_directory_uri() ?>/images/Crowd.png" alt="">
                <span class="text-white tracking-wide max-w-[95px] block text-center">
                    Kerja Sama tim
                </span>
            </div>
        </div>
    </div>
</section>

<section class="container py-32 grid md:grid-cols-4">
    <div>
        <h2 class="text-[74px] font-extralight">
            14
        </h2>
        <h5 class="text-jhl-gray-1 font-medium ">
            Tahun <br />
            Beroperasi
        </h5>
    </div>
    <div>
        <h2 class="text-[74px] font-extralight">
            4
        </h2>
        <h5 class="text-jhl-gray-1 font-medium">
            Dealership <br />
            di Indonesia
        </h5>
    </div>
    <div>
        <h2 class="text-[74px] font-extralight">
            80+
        </h2>
        <h5 class="text-jhl-gray-1 font-medium">
            Total Karyawan
        </h5>
    </div>
    <div>
        <h2 class="text-[74px] font-extralight">
            1000+
        </h2>
        <h5 class="text-jhl-gray-1 font-medium">
            Unit <br />
            Mobil Terjual
        </h5>
    </div>
</section>

<section class="py-[110px] bg-jhl-foreground/30">
    <div class="container">
        <div class="flex mb-28">
            <div class="bg-jhl-gray-3/20 p-16 md:w-[60%]">
                <h3 class="mb-3">Johnnathan Salim</h3>
                <h5 class="mb-11">Direktur Utama</h5>
                <p class="body md:max-w-[494px]">
                    Sebagai Direktur Utama yang visioner, Johnnathan Salim memimpin JHL Auto dengan komitmen terhadap
                    inovasi berkelanjutan dan pengembangan industri otomotif di Indonesia. Berbekal lebih dari sepuluh
                    tahun pengalaman, beliau berhasil memposisikan JHL Auto sebagai perusahaan yang tangguh dan adaptif,
                    memperluas jaringan distribusi, meningkatkan standar pelayanan, serta membangun kemitraan strategis
                    untuk menghadirkan kendaraan premium ke Indonesia. Dedikasi ini memastikan JHL Auto tetap berada di
                    garis terdepan dalam menyediakan solusi otomotif berkualitas tinggi.
                </p>
            </div>
            <div class="bg-white md:w-[40%] pt-10">
                <img class="w-full h-full  max-h-[438px] object-contain"
                    src="<?php echo get_template_directory_uri() ?>/images/direktur.png" alt="">
            </div>
        </div>
        <div>
            <h2 class="mb-11">
                Sosok-Sosok di Balik JHL Auto
            </h2>
            <p class="body text-jhl-gray-1 md:max-w-[579px]">
                Di balik setiap pencapaian, terdapat tim yang berdedikasi. JHL Auto tumbuh bersama profesional yang
                kompeten dan berorientasi pada pelayanan, menjadikan sumber daya manusia sebagai pendorong utama
                mewujudkan visi perusahaan.
            </p>
        </div>
    </div>
</section>

<?php get_footer();