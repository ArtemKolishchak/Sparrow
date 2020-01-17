<?php
/**
 * sparrow Theme Customizer
 *
 * @package sparrow
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sparrow_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'sparrow_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'sparrow_customize_partial_blogdescription',
		) );
	}


   //All our sections, settings, and controls will be added here

	$wp_customize->add_setting( 'facebook_social' , array(
        'default'   => __( 'Url Facebook', 'sparrow' ),
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( 'twitter_social' , array(
        'default'   => __( 'Url Twitter', 'sparrow' ),
        'transport' => 'refresh',
    ) );

    $wp_customize->add_setting( 'google_plus_social' , array(
        'default'   => __( 'Url Google Plus', 'sparrow' ),
        'transport' => 'refresh',
    ) );

   $wp_customize->add_setting( 'linkedin_social' , array(
        'default'   => __( 'Url Linkedin', 'sparrow' ),
        'transport' => 'refresh',
    ) );

   $wp_customize->add_setting( 'skype_social' , array(
        'default'   => __( 'Url Skype', 'sparrow' ),
        'transport' => 'refresh',
    ) );

   $wp_customize->add_setting( 'noname_social' , array(
        'default'   => __( 'Url NoName', 'sparrow' ),
        'transport' => 'refresh',
    ) );

   $wp_customize->add_setting( 'footer_copy_1' , array(
        'default'   => __( 'Copyright © 2014 Sparrow' ),
        'transport' => 'refresh',
    ) );

   $wp_customize->add_setting( 'footer_copy_2' , array(
        'default'   => __( 'Design by Styleshout' ),
        'transport' => 'refresh',
    ) );

   $wp_customize->add_section( 'social_section' , array(
    'title'      => __( 'Social Settings', 'sparrow' ),
    'priority'   => 30,
	) );

   $wp_customize->add_section( 'footer_settings' , array(
        'title'      => __( 'Footer Settings', 'sparrow' ),
        'priority'   => 31,
    ) );

   $wp_customize->add_control(
        'facebook_social', 
        array(
            'label'    => __( 'Facebook profile url', 'sparrow' ),
            'section'  => 'social_section',
            'settings' => 'facebook_social',
            'type'     => 'text',
    ) );

   $wp_customize->add_control(
        'twitter_social', 
        array(
            'label'    => __( 'Twitter profile url', 'sparrow' ),
            'section'  => 'social_section',
            'settings' => 'twitter_social',
            'type'     => 'text',
    ) );

   $wp_customize->add_control(
        'google_plus_social', 
        array(
            'label'    => __( 'Google Plus profile url', 'sparrow' ),
            'section'  => 'social_section',
            'settings' => 'google_plus_social',
            'type'     => 'text',
    ) );

   $wp_customize->add_control(
        'linkedin_social', 
        array(
            'label'    => __( 'LinkedIn profile url', 'sparrow' ),
            'section'  => 'social_section',
            'settings' => 'linkedin_social',
            'type'     => 'text',
    ) );

   $wp_customize->add_control(
        'skype_social', 
        array(
            'label'    => __( 'Skype profile url', 'sparrow' ),
            'section'  => 'social_section',
            'settings' => 'skype_social',
            'type'     => 'text',
    ) );

    $wp_customize->add_control(
        'noname_social', 
        array(
            'label'    => __( 'NoName profile url', 'sparrow' ),
            'section'  => 'social_section',
            'settings' => 'noname_social',
            'type'     => 'text',
    ) );

    $wp_customize->add_control(
        'footer_copy_1', 
        array(
            'label'    => __( 'Footer settings part 1', 'sparrow' ),
            'section'  => 'footer_settings',
            'settings' => 'footer_copy_1',
            'type'     => 'textarea',
    ) );

    $wp_customize->add_control(
        'footer_copy_2', 
        array(
            'label'    => __( 'Footer settings part 2', 'sparrow' ),
            'section'  => 'footer_settings',
            'settings' => 'footer_copy_2',
            'type'     => 'textarea',
    ) );
}

add_action( 'customize_register', 'sparrow_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function sparrow_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function sparrow_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sparrow_customize_preview_js() {
	wp_enqueue_script( 'sparrow-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'sparrow_customize_preview_js' );
