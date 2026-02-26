<?php get_header() ?>
<section data-scroll-section>
    <section class="h-[389px] w-full relative flex flex-col justify-end pb-[71px] mb-9">
        <div>
            <img class="absolute top-0 left-0 w-full h-full object-cover object-center zoom-in" data-scroll
                data-scroll-class="is-inview" src="<?php echo get_template_directory_uri() ?>/images/news-hero.jpg"
                alt="">
        </div>
        <div class="absolute left-0 bottom-0 w-full h-[80%] bg-gradient-to-t from-jhl-black to-jhl-black/0"></div>
        <div class="container text-white relative z-10 fade-down" data-scroll data-scroll-class="is-inview">
            <h2>Newsroom</h2>
        </div>
    </section>
</section>

<section class="container flex flex-col md:flex-row space-y-8 md:space-y-0 md:space-x-12 mb-20" data-scroll-section>
    <div class="w-full md:w-1/4 fade-right" data-scroll data-scroll-class="is-inview">
        <h5 class="mb-8">Filter by Brand</h5>
        <div id="brand-filters" class="flex flex-col space-y-3">
            <?php
            $categories = get_categories(array('hide_empty' => true));
            foreach ($categories as $cat): ?>
                <label class="group flex items-center cursor-pointer select-none">
                    <div class="relative">
                        <input type="checkbox" name="brand" value="<?php echo $cat->slug; ?>"
                            class="filter-checkbox sr-only peer">

                        <div class="w-5 h-5 border-2 border-gray-300 rounded-sm bg-white 
                    transition-all duration-200 
                    peer-checked:bg-black peer-checked:border-black 
                    group-hover:border-black">
                        </div>

                        <svg class="absolute top-1 left-1 w-3 h-3 text-white opacity-0 transition-opacity peer-checked:opacity-100"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>

                    <span class="ml-3 text-sm font-medium text-gray-700 group-hover:text-black transition-colors">
                        <?php echo $cat->name; ?>
                    </span>
                </label>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="flex-1 fade-left" data-scroll data-scroll-class="is-inview">
        <div class="flex space-x-6 mb-9" id="type-toggle">
            <button data-type="post"
                class="type-btn active uppercase bg-black text-white border-black border rounded-4xl w-[143px] flex justify-center py-[18px] text-xs transition-all">
                News 
            </button>
            <button data-type="promotion"
                class="type-btn uppercase bg-white border-jhl-gray-2 text-jhl-gray-2 border rounded-4xl w-[143px] flex justify-center py-[18px] text-xs transition-all">
                Promotions
            </button>
        </div>

        <div class="grid md:grid-cols-3 gap-12 md:gap-8" id="news-container">
            <template id="skeleton-card">
                <div class="space-y-4 animate-pulse">
                    <div class="w-full h-[180px] bg-gray-200 rounded-sm"></div>
                    <div class="h-6 bg-gray-200 rounded w-3/4"></div>
                    <div class="space-y-2">
                        <div class="h-4 bg-gray-200 rounded w-full"></div>
                        <div class="h-4 bg-gray-200 rounded w-5/6"></div>
                    </div>
                    <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                </div>
            </template>
        </div>
    </div>
</section>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        const container = document.getElementById('news-container');
        const buttons = document.querySelectorAll('.type-btn');
        const checkboxes = document.querySelectorAll('.filter-checkbox');

        let currentType = 'post';

        function fetchPosts() {
            const container = document.getElementById('news-container');
            const skeletonTemplate = document.getElementById('skeleton-card');

            if (!container) return; // Exit if container isn't found

            container.innerHTML = '';

            // Only try to use the template if it actually exists in the HTML
            if (skeletonTemplate) {
                for (let i = 0; i < 6; i++) {
                    container.appendChild(skeletonTemplate.content.cloneNode(true));
                }
            } else {
                container.innerHTML = 'Loading..'; // Fallback if template is missing
            }

            // Get all checked values and join them with commas
            const selectedBrands = Array.from(document.querySelectorAll('.filter-checkbox:checked'))
                .map(input => input.value)
                .join(','); // Creates "brand-a,brand-b"

            const formData = new FormData();
            formData.append('action', 'filter_news');
            formData.append('type', currentType); // 'post' or 'promotion'
            formData.append('brands', selectedBrands);

            fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                method: 'POST',
                body: formData
            })
                .then(res => res.text())
                .then(data => {
                    // Remove trailing '0' if WP sends it, then update HTML
                    container.innerHTML = data;
                })
                .catch(err => {
                    console.error("Error fetching posts:", err);
                    container.innerHTML = "Error loading content.";
                });
        }
        // Button Toggle Logic
        buttons.forEach(btn => {
            btn.addEventListener('click', function () {
                buttons.forEach(b => {
                    b.classList.remove('active', 'bg-black', 'text-white');
                    b.classList.add('bg-white', 'text-jhl-gray-2', 'border-jhl-gray-2');
                });

                this.classList.add('active');
                currentType = this.dataset.type;
                fetchPosts();
            });
        });

        // Checkbox Change Logic
        checkboxes.forEach(box => {
            box.addEventListener('change', fetchPosts);
        });

        // Initial Load
        fetchPosts();
    });
</script>

<style>
    /* Helper for active state */
    .type-btn.active {
        background-color: black !important;
        color: white !important;
        border-color: black !important;
    }

    #news-container {
        transition: opacity 0.3s ease-in-out;
    }

    /* Shimmer Animation */
    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: .5;
        }
    }

    /* Active Button State (Standardizing the class) */
    .type-btn.active {
        background-color: black !important;
        color: white !important;
        border-color: black !important;
    }
</style>

<?php get_footer(); ?>