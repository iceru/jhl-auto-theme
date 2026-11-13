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
    $add_tab = static function ($key, $label) use (&$fields) {
        $fields[] = [
            'key' => 'field_our_story_tab_' . $key,
            'label' => $label,
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ];
    };
    $add_field = static function ($key, $label, $name, $type = 'text', $extra = []) use (&$fields) {
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
