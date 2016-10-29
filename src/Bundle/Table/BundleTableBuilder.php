<?php namespace Keevitaja\TranslationsModule\Bundle\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class BundleTableBuilder extends TableBuilder
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
                'name'
            ]
        ]
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'name',
        'slug'
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
            'name' => 'ASC'
        ]
    ];
}
