<?php

/**
 * Plugin Name: FBPurge
 */

function removeSettings()
{
    $options = [
        "facebook_config",
        "pixel_id",
        "use_pii",
        "pixel_render",
        "no_script_render",
        "fb_info_banner_last_query_time",
        "fb_cart_url",
        "fb_disable_sync_on_dev_environment",
        "woocommerce_fb_autosync_time",
        "fb_info_banner_last_best_tip",
        "fb_info_banner_last_query_time",
        "fb_wmpl_language_visibility",
        "fb_test_pass",
        "woocommerce_facebookcommerce_settings",
        "facebook_admins",
    ];
    ?>
    <div class="notice notice-success">
        <?php foreach ($options as $option) : ?>
            <?php if (delete_option($option)) : ?>
                Option <?= $option ?> removed
            <?php else : ?>
                Option <?= $option ?> not removed (not found or forbidden)
            <?php endif; ?>
            <br />
        <?php endforeach; ?>
    </div>;
<?php
}

add_action('admin_notices', 'removeSettings');
