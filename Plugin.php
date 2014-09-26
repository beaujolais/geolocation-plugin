<?php namespace Responsiv\Geolocation;

use System\Classes\PluginBase;

/**
 * Geolocation Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Geolocation',
            'description' => 'No description provided yet...',
            'author'      => 'Responsiv',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Responsiv\Geolocation\FormWidgets\GeoAddress' => [
                'label' => 'Geo Address',
                'alias' => 'geoaddress'
            ],
        ];
    }

}
