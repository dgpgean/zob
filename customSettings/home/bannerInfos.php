<?php

function show_banner_infos_content()
{
?>
    <div class="wrap">
        <h2>Banner de informações</h2>

        <?php
        do_settings_sections('banner-info-settings');
        ?>
    </div>



<?php
}


add_action('admin_init', 'banner_info_settings');

function banner_info_settings()
{
    register_setting('home-settings', 'banner_icon1');
    register_setting('home-settings', 'banner_text1');
    register_setting('home-settings', 'banner_icon2');
    register_setting('home-settings', 'banner_text2');
    register_setting('home-settings', 'banner_icon3');
    register_setting('home-settings', 'banner_text3');
    register_setting('home-settings', 'banner_color');

    add_settings_section(
        'banner_settings_section',
        '',
        '',
        'banner-info-settings'
    );

    add_settings_field(
        'banner_icon1',
        'Icone 1',
        'banner_settings_icon1',
        'banner-info-settings',
        'banner_settings_section'
    );
    add_settings_field(
        'banner_text1',
        'Texto 1',
        'banner_settings_text1',
        'banner-info-settings',
        'banner_settings_section'
    );
    add_settings_field(
        'banner_icon2',
        'Icone 2',
        'banner_settings_icon2',
        'banner-info-settings',
        'banner_settings_section'
    );
    add_settings_field(
        'banner_text2',
        'Texto 2',
        'banner_settings_text2',
        'banner-info-settings',
        'banner_settings_section'
    );
    add_settings_field(
        'banner_icon3',
        'Icone 3',
        'banner_settings_icon3',
        'banner-info-settings',
        'banner_settings_section'
    );
    add_settings_field(
        'banner_text3',
        'Texto 3',
        'banner_settings_text3',
        'banner-info-settings',
        'banner_settings_section'
    );
    add_settings_field(
        'banner_color',
        'Cor de fundo',
        'banner_settings_color',
        'banner-info-settings',
        'banner_settings_section'
    );
}



function banner_settings_icon1()
{
    $setting = get_option('banner_icon1');
?>
    <input type="text" name="banner_icon1" value="<?php echo isset($setting) ? esc_attr($setting) : ''; ?>">
<?php }


function banner_settings_text1()
{
    $setting = get_option('banner_text1');
?>
    <input type="text" name="banner_text1" value="<?php echo isset($setting) ? esc_attr($setting) : ''; ?>">
<?php }

function banner_settings_icon2()
{
    $setting = get_option('banner_icon2');
?>
    <input type="text" name="banner_icon2" value="<?php echo isset($setting) ? esc_attr($setting) : ''; ?>">
<?php }


function banner_settings_text2()
{
    $setting = get_option('banner_text2');
?>
    <input type="text" name="banner_text2" value="<?php echo isset($setting) ? esc_attr($setting) : ''; ?>">
<?php }

function banner_settings_icon3()
{
    $setting = get_option('banner_icon3');
?>
    <input type="text" name="banner_icon3" value="<?php echo isset($setting) ? esc_attr($setting) : ''; ?>">
<?php }


function banner_settings_text3()
{
    $setting = get_option('banner_text3');
?>
    <input type="text" name="banner_text3" value="<?php echo isset($setting) ? esc_attr($setting) : ''; ?>">
<?php }

function banner_settings_color()
{
    $setting = get_option('banner_color');
?>
    <input type="text" name="banner_color" value="<?php echo isset($setting) ? esc_attr($setting) : ''; ?>">
<?php }
