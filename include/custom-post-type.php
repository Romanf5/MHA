<?php
/**
 * Create custom post types.
 */
add_action('init', 'create_posttype');

function create_posttype()
{
    register_post_type('testimonials',
        array(
            'supports' => array('title', 'editor'),
            'labels' => array(
                'name' => __('Testimonials'),
                'singular_name' => __('Testimonial')
            ),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-format-quote',
            'rewrite' => array('slug' => 'testimonials'),
        )
    );

    register_post_type('logo',
        array(
            'supports' => array('title', 'editor'),
            'labels' => array(
                'name' => __('Logo'),
                'singular_name' => __('Logo')
            ),
            'public' => true,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-images-alt2',
            'rewrite' => array('slug' => 'logo'),
        )
    );

    register_post_type('Team', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'labels' => array(
            'name' => 'Team',
            'singular_name' => __('Team')
        ),
        'public' => true,
        'menu_position' => 6,
        'rewrite' => array('slug' => 'member'),
        'taxonomies' => array('category')
    ) );

    register_post_type('Image gallery', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'labels' => array(
            'name' => 'Image gallery',
            'singular_name' => __('Image gallery')
        ),
        'public' => true,
        'menu_position' => 5,
        'rewrite' => array('slug' => 'member'),
        'taxonomies' => array('category')
    ) );

    register_post_type('News', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'labels' => array(
            'name' => 'News',
            'singular_name' => __('News')
        ),
        'public' => true,
        'menu_position' => 5,
        'rewrite' => array('slug' => 'member'),
        'taxonomies' => array('category')
    ) );

    register_post_type('Statistic', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'labels' => array(
            'name' => 'Statistic',
            'singular_name' => __('Statistic')
        ),
        'public' => true,
        'menu_position' => 5,
        'rewrite' => array('slug' => 'member'),
        'taxonomies' => array('category')
    ) );

    register_post_type('Contact', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'labels' => array(
            'name' => 'Contact',
            'singular_name' => __('Contact')
        ),
        'public' => true,
        'menu_position' => 5,
        'rewrite' => array('slug' => 'member'),
        'taxonomies' => array('category')
    ) );
}