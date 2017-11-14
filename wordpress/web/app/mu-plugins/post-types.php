<?php

add_action('init', function () {
    register_post_type('slide', [
        'labels' => [
            'name' => __('Slides'),
            'singular_name' => __('Slide'),
            'add_new_item' => __('Add a New Slide'),
            'edit_item' => __('Edit Slide'),
        ],
        'supports' => ['title', 'thumbnail'],
        'public' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'rest_base' => 'slides',
    ]);
});
