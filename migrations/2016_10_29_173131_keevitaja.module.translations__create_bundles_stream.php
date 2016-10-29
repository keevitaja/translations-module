<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class KeevitajaModuleTranslationsCreateBundlesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'bundles',
        'title_column' => 'name',
        'trashable'    => true,
        'searchable'   => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name' => [
            'required' => true
        ],
        'slug' => [
            'required' => true,
            'config' => [
                'slugify' => 'name'
            ]
        ]
    ];

}
