<?php
/**
* Juliane Customizer
*
*@package Juliane
**/

add_action( 'customize_register', 'juliane_customizer' );
function juliane_customizer( $wp_customize ) {

    //Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => 'Copyright Settings',
            'description' => 'Copyright section'
        )
    );

    //Field 1 Copyright Text box
    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright',
        array(
            'label' => 'Copyright',
            'description' => 'Please add your copyright information here',
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );

    /*--------------------------------------------------*/
    //Slider Section 1
    $wp_customize->add_section(
        'sec_slider',
        array(
            'title' => 'Slider Settings',
            'description' => 'Slider section'
        )
    );
    //Field 1 Slider page number 1
    $wp_customize->add_setting(
        'set_slider_page1',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );
        $wp_customize->add_control(
        'set_slider_page1',
        array(
            'label' => 'Set Slider page1',
            'description' => 'Set Slider page1',
            'section' => 'sec_slider',
            'type' => 'dropdown-pages'
        )
    );
    //Field 2 Slider page number 1
    $wp_customize->add_setting(
        'set_slider_button_text1',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
        $wp_customize->add_control(
        'set_slider_button_text1',
        array(
            'label' => 'Button Text for page1',
            'description' => 'Button Text for page1',
            'section' => 'sec_slider',
            'type' => 'text'
        )
    );
    //Field 3 Slider page number 1
    $wp_customize->add_setting(
        'set_slider_button_url1',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );
        $wp_customize->add_control(
        'set_slider_button_url1',
        array(
            'label' => 'Url for page1',
            'description' => 'Url for page1',
            'section' => 'sec_slider',
            'type' => 'url'
        )
    );

    /*--------------------------------------------------*/
    //Slider Section 2
    $wp_customize->add_section(
        'sec_slider',
        array(
            'title' => 'Slider Settings',
            'description' => 'Slider section'
        )
    );
    //Field 1 Slider page number 2
    $wp_customize->add_setting(
        'set_slider_page2',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );
        $wp_customize->add_control(
        'set_slider_page2',
        array(
            'label' => 'Set Slider page2',
            'description' => 'Set Slider page2',
            'section' => 'sec_slider',
            'type' => 'dropdown-pages'
        )
    );
    //Field 2 Slider page number 2
    $wp_customize->add_setting(
        'set_slider_button_text2',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
        $wp_customize->add_control(
        'set_slider_button_text2',
        array(
            'label' => 'Button Text for page2',
            'description' => 'Button Text for page2',
            'section' => 'sec_slider',
            'type' => 'text'
        )
    );
    //Field 3 Slider page number 2
    $wp_customize->add_setting(
        'set_slider_button_url2',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );
        $wp_customize->add_control(
        'set_slider_button_url2',
        array(
            'label' => 'Url for page2',
            'description' => 'Url for page2',
            'section' => 'sec_slider',
            'type' => 'url'
        )
    );
    /*--------------------------------------------------*/
    //Slider Section 3
    $wp_customize->add_section(
        'sec_slider',
        array(
            'title' => 'Slider Settings',
            'description' => 'Slider section'
        )
    );
    //Field 1 Slider page number 3
    $wp_customize->add_setting(
        'set_slider_page3',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );
        $wp_customize->add_control(
        'set_slider_page3',
        array(
            'label' => 'Set Slider page3',
            'description' => 'Set Slider page3',
            'section' => 'sec_slider',
            'type' => 'dropdown-pages'
        )
    );
    //Field 2 Slider page number 3
    $wp_customize->add_setting(
        'set_slider_button_text3',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
        $wp_customize->add_control(
        'set_slider_button_text3',
        array(
            'label' => 'Button Text for page3',
            'description' => 'Button Text for page3',
            'section' => 'sec_slider',
            'type' => 'text'
        )
    );
    //Field 3 Slider page number 3
    $wp_customize->add_setting(
        'set_slider_button_url3',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );
        $wp_customize->add_control(
        'set_slider_button_url3',
        array(
            'label' => 'Url for page3',
            'description' => 'Url for page3',
            'section' => 'sec_slider',
            'type' => 'url'
        )
    );
}