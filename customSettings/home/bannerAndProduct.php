<?php

function banner_file_display()
{
    $setting = get_option('banner1-image');
?>
    <input type="file" name="banner1-file" value="<?php echo isset($setting) ? $setting : '' ?>" />

    <?php echo $setting ?>
<?php
}

function shelf_title_field_display()
{
    $setting = get_option('banner1-title-products-settings');
?>
    <input type="text" name="banner1-title-products-settings" value="<?php echo isset($setting) ?  esc_attr($setting)  : '' ?>" />

<?php
}

function shelf_category_field_display()
{
    $setting = get_option('banner1-category-products-settings');
?>
    <input type="text" name="banner1-category-products-settings" value="<?php echo isset($setting) ?  esc_attr($setting)  : '' ?>" />

<?php
}


function handle_file_upload($option)
{
    if (!empty($_FILES["banner1-file"]["tmp_name"])) {
        $urls = wp_handle_upload($_FILES["banner1-file"], array('test_form' => FALSE));
        $temp = $urls["url"];
        return $temp;
    }

    return get_option('banner1-image');
}

add_action('admin_init', 'banner1_action');


function banner1_action()
{
    register_setting('home-settings', 'banner1-image', 'handle_file_upload');
    register_setting('home-settings', 'banner1-title-products-settings');
    register_setting('home-settings', 'banner1-category-products-settings');

    add_settings_section(
        'banner1_settings_section',
        '',
        '',
        'section-banner'
    );

    add_settings_field(
        'banner1-image',
        'Imagem do banner',
        'banner_file_display',
        'section-banner',
        'banner1_settings_section'
    );

    add_settings_field(
        'banner1-title-products-settings',
        'Título da Shelf',
        'shelf_title_field_display',
        'section-banner',
        'banner1_settings_section'
    );

    add_settings_field(
        'banner1-category-products-settings',
        'Categoria dos produtos',
        'shelf_category_field_display',
        'section-banner',
        'banner1_settings_section'
    );
}


function show_banner1_content()
{
?>
    <div class="wrap">
        <h1>Banner com produtos</h1>

        <?php
        do_settings_sections("section-banner");


        ?>

    </div>
<?php
}
