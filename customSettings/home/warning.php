<?php


function fields_to_warning()
{
    $setting = get_option('my-plugin-settings');
?>
    <input type="text" name="store_warnings" value="<?php echo isset($setting) ? esc_attr($setting) : ''; ?>">
<?php
}


add_action('admin_init', 'warning_actionn');

function warning_actionn()
{

    register_setting('home-settings', 'store_warnings');

    add_settings_section(
        'warning_settings_section',
        '',
        '',
        'my-plugin-settings'
    );

    add_settings_field(
        'store_warnings',
        'Texto do aviso',
        'fields_to_warning',
        'my-plugin-settings',
        'warning_settings_section'
    );
}


function show_warning__content()
{
?>
    <div class="wrap">
        <h2>Faixa de avisos</h2>
        <?php
        do_settings_sections('my-plugin-settings');
        ?>
    </div>
<?php
}
