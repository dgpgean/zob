<?php


function fields_to_banner_section()
{
    $setting = get_option('banner_section_settings_field');
?>
    <input type="text" name="banner_section_settings_field" value="<?php echo isset($setting) ? esc_attr($setting) : ''; ?>" ;>
<?php
}


add_action('admin_init', 'banner_section_action');

function banner_section_action()
{

    register_setting('home-settings', 'banner_section_settings_field');

    add_settings_section(
        'section_banner_section',
        '',
        '',
        'banner-section-settings'
    );

    add_settings_field(
        'banner_section_settings_field',
        'Texto do aviso',
        'fields_to_banner_section',
        'banner-section-settings',
        'section_banner_section'
    );
}


function show_banner_section_content()
{
?>
    <div class=" wrap">
        <h2>Banner da Sessão</h2>
        <?php
        do_settings_sections('banner-section-settings');
        ?>
    </div>
<?php
}
