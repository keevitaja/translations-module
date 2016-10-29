<?php namespace Keevitaja\TranslationsModule\Translatable\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class TranslatableTableBuilder extends TableBuilder
{
    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [
        'search' => [
            'columns' => [
                'slug',
                'string'
            ]
        ],
        'bundle'
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'slug', 'string', 'bundle'
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [
        'order_by' => [
            'slug' => 'ASC'
        ]
    ];
}
