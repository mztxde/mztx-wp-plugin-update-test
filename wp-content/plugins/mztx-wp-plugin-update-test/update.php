<?php

declare(strict_types=1);

namespace mztx\WpPluginUpdateTest;

/**
 * Based on https://webfoersterei.de/blog/wordpress-plugins-update-hook/
 */
readonly class Updater
{
    public function __construct(
        private string $slug,
        private string $version,
    ) {
        add_filter('update_plugins_mztxde.github.io', [$this, 'plugin_update_handler'], 10, 4);
    }

    public function plugin_update_handler($updateInfo, $pluginHeaders, $pluginFile, $language)
    {
        $requestedSlug = basename($pluginFile);
        if ($requestedSlug !== $this->slug) {
            return false;
        }

        // @TODO Error handling etc.
        $response = file_get_contents($pluginHeaders['UpdateURI']);
        return json_decode($response);
    }
}
