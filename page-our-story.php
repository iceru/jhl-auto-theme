<?php get_header(); ?>

<section id="timeline-container" class="relative w-full max-w-4xl mx-auto h-[3000px]">

    <svg class="absolute top-0 left-0 w-full h-full pointer-events-none" xmlns="http://www.w3.org/2000/svg">
        <path id="road-path" d="M 450 0 
                   V 400 
                   H 750 
                   V 1200 
                   H 150 
                   V 2000 
                   H 450 
                   V 3000" fill="none" stroke="#9ca3af" stroke-width="12" stroke-linecap="round" class="shadow-xl" />
    </svg>

    <div id="car" class="fixed top-0 left-0 w-12 h-20 z-50 transition-transform duration-75 ease-linear origin-center"
        style="display: none;">
        <img src="<?php echo get_template_directory_uri() ?>/images/car.png" alt="">
    </div>

    <div class="absolute top-[400px] left-[520px] w-80 p-6">
        <div class="border-l-4 border-gray-400 pl-4">
            <h2 class="text-4xl font-light text-gray-600 mb-1">2012</h2>
            <h3 class="text-xl font-bold text-gray-800">Authorised Jeep Dealer</h3>
            <p class="text-sm text-gray-600 mt-2">Dealer Otomotif pertama JHL Auto, dan memperoleh penghargaan MURI.
            </p>
        </div>
        <div class="absolute top-8 -left-[70px] w-[70px] h-[2px] border-t-2 border-dashed border-gray-500"></div>
        <div class="absolute top-[26px] -left-[78px] w-4 h-4 bg-black rounded-full border-4 border-gray-300"></div>
    </div>

    <div class="absolute top-[1200px] right-[550px] text-right w-80 p-6">
        <div class="border-r-4 border-gray-400 pr-4">
            <h2 class="text-4xl font-light text-gray-600 mb-1">2015</h2>
            <h3 class="text-xl font-bold text-gray-800">Garansindo Cup Jeep</h3>
            <p class="text-sm text-gray-600 mt-2">Menyelenggarakan event offroad skala nasional yang memperkuat
                komunitas.</p>
        </div>
        <div class="absolute top-8 -right-[200px] w-[200px] h-[2px] border-t-2 border-dashed border-gray-500"></div>
        <div class="absolute top-[26px] -right-[208px] w-4 h-4 bg-black rounded-full border-4 border-gray-300">
        </div>
    </div>

    <div class="absolute top-[2000px] right-[550px] text-right w-80 p-6">
        <div class="border-r-4 border-gray-400 pr-4">
            <h2 class="text-4xl font-light text-gray-600 mb-1">2017</h2>
            <h3 class="text-xl font-bold text-gray-800">Best Jeep Dealer</h3>
            <p class="text-sm text-gray-600 mt-2">Meraih penghargaan "Best Jeep Dealer Indonesia" atas keunggulan
                layanan.</p>
        </div>
        <div class="absolute top-8 -right-[500px] w-[500px] h-[2px] border-t-2 border-dashed border-gray-500"></div>
        <div class="absolute top-[26px] -right-[508px] w-4 h-4 bg-black rounded-full border-4 border-gray-300">
        </div>
    </div>

</section>

<section class="py-32">
    <h2 class="text-2xl md:text-[44px] mb-6 font-light">
        Panca Krida
    </h2>
    <h5>
        The Power to Success
    </h5>
    <p>
        JHL Auto berpegang pada nilai-nilai Panca Krida yang menjadi dasar filosofi perusahaan. Fondasi ini selaras
        dengan visi, misi, dan budaya kerja yang meneguhkan identitas JHL Auto sebagai grup dealer otomotif yang
        inovatif dan terpercaya.
    </p>
    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-jhl-gray-3 p-7 rounded-lg text-center">
            <h3 class="mb-2 font-light text-[27px]">Kesempatan</h3>
            <p class="mb-10 font-medium text-[10px] uppercase tracking-wide">Chance</p>
            <p class="max-w-[248px] leading-6 text-xs">
                Memanfaatkan setiap peluang dengan bijaksana dan bertanggung
                jawab.
            </p>
        </div>
        <div class="bg-jhl-gray-3 p-7 rounded-lg text-center">
            <h3 class="mb-2 font-light text-[27px]">Kerja Keras</h3>
            <p class="mb-10 font-medium text-[10px] uppercase tracking-wide">HARD WORK</p>
            <p class="max-w-[248px] leading-6 text-xs">
                Dedikasi penuh dalam setiap langkah dan upaya tanpa kenal lelah
            </p>
        </div>
        <div class="bg-jhl-gray-3 p-7 rounded-lg text-center">
            <h3 class="mb-2 font-light text-[27px]">Kerja Cerdas</h3>
            <p class="mb-10 font-medium text-[10px] uppercase tracking-wide">SMART WORK</p>
            <p class="max-w-[248px] leading-6 text-xs">
                Inovasi dan strategi tepat untuk mencapai hasil maksimal
            </p>
        </div>
    </div>
    <div class="flex justify-center items-center space-x-6 w-full mx-auto">
        <div class="bg-jhl-gray-3 p-7 rounded-lg text-center w-1/3">
            <h3 class="mb-2 font-light text-[27px]">Kerja Tuntas</h3>
            <p class="mb-10 font-medium text-[10px] uppercase tracking-wide">Complete Work</p>
            <p class="max-w-[248px] leading-6 text-xs">
                Menyelesaikan setiap tugas dengan sempurna dan berkualitas
            </p>
        </div>
        <div class="bg-jhl-gray-3 p-7 rounded-lg text-center w-1/3">
            <h3 class="mb-2 font-light text-[27px]">Loyalitas</h3>
            <p class="mb-10 font-medium text-[10px] uppercase tracking-wide">Loyalty</p>
            <p class="max-w-[248px] leading-6 text-xs">
                Komitmen jangka panjang kepada mitra, pelanggan, dan tim
            </p>
        </div>
    </div>
</section>

<section class="h-screen w-full">
    <div class="h-full w-[426px]">
        <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri() ?>/images/promo-1.png"
            alt="">
    </div>
    <div class="bg-[#404040] flex flex-col justify-center">
        <div class="flex">

        </div>
    </div>
</section>

<script>
    const container = document.getElementById('timeline-container');
    const path = document.getElementById('road-path');
    const car = document.getElementById('car');

    // Get the total length of the path in pixels
    const pathLength = path.getTotalLength();

    function moveCar() {
        // 1. Calculate how far we have scrolled relative to the container
        const containerRect = container.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        // Start moving when the container top enters the viewport
        // 'startOffset' pushes the start point down a bit if needed
        const startOffset = windowHeight / 2;

        // Calculate progress (0 to 1)
        // We use -containerRect.top because as we scroll down, top becomes negative
        let scrollPercentage = (windowHeight / 2 - containerRect.top) / container.offsetHeight;

        // Clamp value between 0 and 1
        scrollPercentage = Math.max(0, Math.min(1, scrollPercentage));

        // Show car only when inside the timeline area
        if (scrollPercentage > 0 && scrollPercentage < 1) {
            car.style.display = 'block';
        } else {
            car.style.display = 'none';
        }

        // 2. Get the specific point on the SVG path based on percentage
        const movePoint = pathLength * scrollPercentage;
        const p = path.getPointAtLength(movePoint);

        // 3. Calculate Rotation (Car Facing Direction)
        // We look slightly ahead (e.g., 2px) to calculate the angle
        const pNext = path.getPointAtLength(movePoint + 2);
        const angle = Math.atan2(pNext.y - p.y, pNext.x - p.x) * 180 / Math.PI;

        // Add 90 degrees because our car image points UP by default
        // If your car image points RIGHT by default, remove the + 90
        const rotation = angle + 90;

        // 4. Apply Styles
        // We use fixed positioning, so we need to offset by the container's position relative to viewport
        // Actually, simpler approach: The SVG is relative to container. 
        // So we can set car to absolute (relative to container) and just use p.x and p.y directly.

        // Let's switch car to absolute positioning inside the container for easier sync
        car.style.position = 'absolute';
        car.style.left = '0px';
        car.style.top = '0px';

        // Apply translation and rotation
        // translate(${p.x}px, ${p.y}px) moves it to the point
        // -translate-x-1/2 centers it on the line
        car.style.transform = `translate(${p.x}px, ${p.y}px) translate(-50%, -50%) rotate(${rotation}deg)`;
    }

    // Run on scroll
    window.addEventListener('scroll', moveCar);
    // Run on load to set initial position
    window.addEventListener('load', moveCar);
    window.addEventListener('resize', moveCar);
</script>

<?php get_footer();