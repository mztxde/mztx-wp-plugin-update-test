<?php

/**
 * The plugin bootstrap file
 *
 * @wordpress-plugin
 * Plugin Name:       mztx Plugin Update Test
 * Plugin URI:        https://mztx.de
 * Description:       Nur ein Test. Hat keine sinnvolle Funktionalität, außer, dass es sich selbst updaten kann.
 * Version:           {{ version }}
 * Author:            Michael Zapf
 * Author URI:        https://mztx.de
 * Update URI:        https://mztxde.github.io/mztx-wp-plugin-update-test/manifest.json
 * License:           BSD-3-Clause
 * License URI:       https://raw.githubusercontent.com/mztxde/mztx-wp-plugin-update-test/refs/heads/main/LICENSE
 */

declare(strict_types=1);

const MZTX_WP_PLUGIN_UPDATE_TEST_PLUGIN_VERSION = '{{ version }}';

require_once __DIR__ . '/update.php';

$mztxWpPluginUpdateTestUpdater = new \mztx\WpPluginUpdateTest\Updater(
    \basename(__DIR__),
    MZTX_WP_PLUGIN_UPDATE_TEST_PLUGIN_VERSION,
);
