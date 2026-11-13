<?php
/**
 * ACF fields for the Our Story page template.
 *
 * The group deliberately uses only field types available in ACF Free. Fixed
 * collections (timeline and company values) are represented by numbered
 * fields instead of repeaters.
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', function () {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    $fields = [];
    $placeholders = [
        'story_header_title' => 'Awal Perjalanan',
        'story_header_desc_1' => 'Setiap perjalanan besar selalu dimulai dari satu keyakinan. Pada 12 Januari 2012, JHL Auto berdiri sebagai bagian dari JHL Group dengan visi menghadirkan standar baru dalam pengalaman otomotif di Indonesia.',
        'story_header_desc_2' => 'Berawal dari kepercayaan sebagai bagian dari jaringan resmi Jeep di Indonesia, JHL Auto membangun fondasi yang kuat melalui integritas, inovasi, dan pelayanan berkelas internasional. Perjalanan tersebut menjadi titik awal transformasi kami.',
        'story_header_desc_3' => 'Seiring waktu, kami terus berkembang dan beradaptasi dengan dinamika industri. Pada Maret 2024, JHL Auto dipercaya sebagai Authorized BAIC Dealer, menandai babak baru dalam perjalanan kami sebagai mitra mobilitas premium yang progresif dan visioner.',
        'timeline_closing_text' => 'Perjalanan ini Terus Berlanjut',
        'panca_krida_title' => 'Pancakrida',
        'panca_krida_subtitle' => 'The Power to Success',
        'panca_krida_desc' => 'JHL Auto berpegang pada nilai-nilai Pancakrida yang menjadi dasar filosofi perusahaan. Fondasi ini selaras dengan visi, misi, dan budaya kerja yang meneguhkan identitas JHL Auto sebagai grup dealer otomotif yang inovatif dan terpercaya.',
        'krida_1_title' => 'Kesempatan',
        'krida_1_sub' => 'Opportunity',
        'krida_2_title' => 'Kerja Keras',
        'krida_2_sub' => 'Work Hard',
        'krida_3_title' => 'Kerja Cerdas',
        'krida_3_sub' => 'Work Smart',
        'krida_4_title' => 'Kerja Tuntas',
        'krida_4_sub' => 'Work Thoroughly',
        'krida_5_title' => 'Loyalitas',
        'krida_5_sub' => 'Loyalty',
        'vision_heading' => 'Visi',
        'visi_text' => 'Menjadi group dealer otomotif terdepan di Indonesia dalam inovasi, kualitas, dan layanan pelanggan',
        'mission_heading' => 'Misi',
        'misi_text' => 'Bertransformasi dari single dealer menjadi group dealer otomotif besar di Indonesia. Mendorong pengembangan organisasi yang berkelanjutan. Memberikan layanan pelanggan yang unggul dengan standar profesionalisme terbaik.',
        'culture_label_1' => 'Integritas',
        'culture_label_2' => 'Semangat',
        'culture_label_3' => 'Kepuasan Pelanggan',
        'culture_label_4' => 'Kerja Sama tim',
        'director_name' => 'Johnnathan Salim',
        'director_title' => 'President Director',
        'director_desc' => 'Sebagai entrepreneur muda di industri otomotif, Johnnathan Salim memimpin JHL Auto dengan visi menghadirkan standar baru dalam pengalaman otomotif premium di Indonesia. Berbekal lebih dari satu dekade pengalaman serta kedekatannya dengan komunitas otomotif melalui platform digital, ia menggabungkan perspektif bisnis dengan passion terhadap dunia kendaraan. Di bawah kepemimpinannya, JHL Auto terus bertransformasi menjadi perusahaan yang progresif, adaptif, dan terhubung dengan generasi baru pecinta otomotif. Ia meyakini bahwa masa depan industri otomotif dibangun melalui inovasi, konektivitas digital, dan kedekatan yang autentik dengan komunitas.',
        'team_section_title' => 'Tim Manajemen',
        'team_section_desc' => 'Di balik transformasi JHL Auto, berdiri tim manajemen yang memimpin dengan visi strategis dan standar profesionalisme tinggi. Dengan pendekatan modern dan orientasi pada pertumbuhan berkelanjutan, mereka memastikan perusahaan terus berkembang sebagai pemain otomotif yang kompetitif dan terpercaya.',
    ];

    $timeline_placeholders = [
        ['2012', 'Authorized Jeep Dealer', 'Menjadi dealer otomotif pertama JHL Auto sekaligus memperoleh penghargaan MURI atas konsep dealer inovatif “Amazon Jungle”, menandai awal komitmen menghadirkan pengalaman otomotif yang berbeda di Indonesia'],
        ['2015', 'Strengthening the Jeep Community', 'Berpartisipasi dalam ajang nasional Garansindo Cup “Jeep Agility Off Road Competition” sebagai wujud komitmen dalam memperkuat kolaborasi dan eksistensi komunitas Jeep Indonesia'],
        ['2017', 'Best Authorized Jeep Dealer', 'Menerima penghargaan “Best Jeep Dealer Indonesia” sebagai pengakuan atas konsistensi performa, standar layanan premium, serta pencapaian penjualan unggul di tingkat nasional'],
        ['2019', 'Best Seller Award – IIMS', 'Mencapai penjualan 60 unit Jeep dan 72 pemesanan selama ajang “Indonesia International Motor Show”, memperkuat posisi JHL Auto sebagai salah satu dealer dengan performa terbaik secara nasional'],
        ['2021', 'Outstanding Jeep Sales Performance', 'Mencatatkan pencapaian hingga 100 unit penjualan dalam satu tahun di tengah tantangan pandemi, menunjukkan ketahanan bisnis dan kepercayaan pasar yang kuat'],
        ['2024', 'Authorized BAIC Dealer', 'Memulai babak baru sebagai Authorized BAIC Dealer di Indonesia dengan komitmen menghadirkan solusi mobilitas yang unggul, relevan, dan terpercaya bagi pasar otomotif nasional'],
        ['2025', 'Best Start of Business', 'Mendapatkan pengakuan dari BAIC Global atas pencapaian JHL Auto sebagai dealer resmi BAIC di Indonesia, menandai langkah strategis dalam ekspansi dan transformasi brand'],
    ];
    foreach ($timeline_placeholders as $index => $values) {
        $number = $index + 1;
        $placeholders['timeline_' . $number . '_year'] = $values[0];
        $placeholders['timeline_' . $number . '_title'] = $values[1];
        $placeholders['timeline_' . $number . '_description'] = $values[2];
    }
    $add_tab = static function ($key, $label) use (&$fields) {
        $fields[] = [
            'key' => 'field_our_story_tab_' . $key,
            'label' => $label,
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ];
    };
    $add_field = static function ($key, $label, $name, $type = 'text', $extra = []) use (&$fields, &$placeholders) {
        if ($name && isset($placeholders[$name])) {
            if (in_array($type, ['text', 'textarea'], true)) {
                $extra['placeholder'] = $placeholders[$name];
            } elseif ($type === 'wysiwyg') {
                $extra['instructions'] = 'Current default: ' . $placeholders[$name];
            }
        }
        $fields[] = array_merge([
            'key' => 'field_our_story_' . $key,
            'label' => $label,
            'name' => $name,
            'type' => $type,
        ], $extra);
    };

    $image_settings = ['return_format' => 'array', 'preview_size' => 'medium', 'library' => 'all'];
    $wysiwyg_settings = ['tabs' => 'all', 'toolbar' => 'basic', 'media_upload' => 0];

    $add_tab('hero', 'Hero');
    $add_field('hero_image', 'Background Image', 'story_header_image', 'image', $image_settings);
    $add_field('hero_title', 'Title', 'story_header_title');
    for ($i = 1; $i <= 3; $i++) {
        $add_field('hero_text_' . $i, 'Paragraph ' . $i, 'story_header_desc_' . $i, 'textarea', ['rows' => 4, 'new_lines' => 'br']);
    }

    $add_tab('timeline', 'Timeline');
    $add_field('timeline_background', 'Desktop Background Image', 'jhl_bg_image', 'image', $image_settings);
    $add_field('timeline_mobile_j', 'Mobile J Image', 'timeline_mobile_j_image', 'image', $image_settings);
    $add_field('timeline_mobile_h', 'Mobile H Image', 'timeline_mobile_h_image', 'image', $image_settings);
    $add_field('timeline_mobile_l', 'Mobile L Image', 'timeline_mobile_l_image', 'image', $image_settings);
    $add_field('timeline_car', 'Car Icon', 'timeline_car_icon', 'image', $image_settings);
    for ($i = 1; $i <= 7; $i++) {
        $add_field('timeline_' . $i . '_heading', 'Milestone ' . $i, '', 'accordion', ['open' => $i === 1, 'multi_expand' => 1]);
        $add_field('timeline_' . $i . '_year', 'Year', 'timeline_' . $i . '_year', 'text', ['wrapper' => ['width' => '20']]);
        $add_field('timeline_' . $i . '_title', 'Title', 'timeline_' . $i . '_title', 'text', ['wrapper' => ['width' => '40']]);
        $add_field('timeline_' . $i . '_description', 'Description', 'timeline_' . $i . '_description', 'textarea', ['rows' => 4, 'new_lines' => 'br', 'wrapper' => ['width' => '40']]);
    }
    $add_field('timeline_accordion_end', 'End Timeline Milestones', '', 'accordion', ['endpoint' => 1]);
    $add_field('timeline_end', 'Timeline Closing Text', 'timeline_closing_text');

    $add_tab('pancakrida', 'Pancakrida');
    $add_field('pancakrida_title', 'Title', 'panca_krida_title');
    $add_field('pancakrida_subtitle', 'Subtitle', 'panca_krida_subtitle');
    $add_field('pancakrida_description', 'Description', 'panca_krida_desc', 'textarea', ['rows' => 4, 'new_lines' => 'br']);
    for ($i = 1; $i <= 5; $i++) {
        $add_field('krida_' . $i . '_title', 'Value ' . $i . ' Title', 'krida_' . $i . '_title', 'text', ['wrapper' => ['width' => '50']]);
        $add_field('krida_' . $i . '_subtitle', 'Value ' . $i . ' English Subtitle', 'krida_' . $i . '_sub', 'text', ['wrapper' => ['width' => '50']]);
    }

    $add_tab('vision', 'Vision, Mission & Culture');
    $add_field('vm_image', 'Side Image', 'vm_side_image', 'image', $image_settings);
    $add_field('vision_heading', 'Vision Heading', 'vision_heading');
    $add_field('vision_text', 'Vision Text', 'visi_text', 'wysiwyg', $wysiwyg_settings);
    $add_field('mission_heading', 'Mission Heading', 'mission_heading');
    $add_field('mission_text', 'Mission Text', 'misi_text', 'wysiwyg', $wysiwyg_settings);
    for ($i = 1; $i <= 4; $i++) {
        $add_field('culture_' . $i . '_icon', 'Culture ' . $i . ' Icon', 'culture_icon_' . $i, 'image', array_merge($image_settings, ['wrapper' => ['width' => '50']]));
        $add_field('culture_' . $i . '_label', 'Culture ' . $i . ' Label', 'culture_label_' . $i, 'text', ['wrapper' => ['width' => '50']]);
    }

    $add_tab('statistics', 'Statistics');
    $add_field('statistics_note', 'Statistics Content', '', 'message', [
        'message' => 'Statistic cards are managed under the Statistics post type. Each item supports its number, label, order, and maximum label width.',
    ]);

    $add_tab('leadership', 'Leadership & Team');
    $add_field('director_name', 'Director Name', 'director_name');
    $add_field('director_title', 'Director Title', 'director_title');
    $add_field('director_description', 'Director Description', 'director_desc', 'wysiwyg', $wysiwyg_settings);
    $add_field('director_image', 'Director Image', 'director_image', 'image', $image_settings);
    $add_field('team_title', 'Team Section Title', 'team_section_title');
    $add_field('team_description', 'Team Section Description', 'team_section_desc', 'textarea', ['rows' => 5, 'new_lines' => 'br']);
    $add_field('team_note', 'Team Members', '', 'message', [
        'message' => 'Management cards are managed under the Team post type. Each member supports a name, featured image, position, and display order.',
    ]);

    $locations = [[[
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-our-story.php',
    ]]];

    // page-our-story.php can also be selected automatically by WordPress from
    // the page slug, in which case no _wp_page_template value is stored.
    $our_story_page = get_page_by_path('our-story', OBJECT, 'page');
    if ($our_story_page) {
        $locations[] = [[
            'param' => 'page',
            'operator' => '==',
            'value' => (string) $our_story_page->ID,
        ]];
    }

    acf_add_local_field_group([
        'key' => 'group_our_story_page',
        'title' => 'Our Story Page Content',
        'fields' => $fields,
        'location' => $locations,
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'active' => true,
        'show_in_rest' => 0,
    ]);
});
