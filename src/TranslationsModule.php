<?php namespace Keevitaja\TranslationsModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class TranslationsModule extends Module
{
    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'translatables' => [
            'buttons' => [
                'new_translatable'
            ]
        ],
        'bundles' => [
            'buttons' => [
                'new_bundle'
            ]
        ]
    ];
}
