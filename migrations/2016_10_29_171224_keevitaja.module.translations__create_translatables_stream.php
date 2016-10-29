<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class KeevitajaModuleTranslationsCreateTranslatablesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'translatables',
        'title_column' => 'slug',
        'translatable' => true,
        'trashable'    => true,
        'searchable'   => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'string' => [
            'required' => true,
            'translatable' => true
        ],
        'slug' => [
            'required' => true,
            'config' => [
                'slugify' => 'string'
            ]
        ],
        'bundle' => [
            'required' => true
        ]
    ];

}
