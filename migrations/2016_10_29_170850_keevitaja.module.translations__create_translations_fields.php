<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class KeevitajaModuleTranslationsCreateTranslationsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'string' => 'anomaly.field_type.text',
        'name' => 'anomaly.field_type.text',
        'slug' => 'anomaly.field_type.text',
        'bundle' => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Keevitaja\TranslationsModule\Bundle\BundleModel',
            ],
        ]
    ];

}
