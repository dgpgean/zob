<?php


function fields_to_banner_main()
{
    $setting = get_option('banner_main_settings_field');
?>
    <input type="text" name="banner_main_settings_field" value="<?php echo isset($setting) ? esc_attr($setting) : ''; ?>" ;>
<?php
}


add_action('admin_init', 'banner_main_action');

function banner_main_action()
{

    register_setting('home-settings', 'banner_main_settings_field');

    add_settings_section(
        'section_banner_main',
        '',
        '',
        'banner-main-settings'
    );

    add_settings_field(
        'banner_main_settings_field',
        'Shortcode',
        'fields_to_banner_main',
        'banner-main-settings',
        'section_banner_main'
    );
}


function show_banner_main_content()
{
?>
    <div class=" wrap">
        <h2>Banner Principal</h2>
        <?php
        do_settings_sections('banner-main-settings');
        ?>
    </div>
<?php
}
