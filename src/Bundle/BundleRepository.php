<?php namespace Keevitaja\TranslationsModule\Bundle;

use Keevitaja\TranslationsModule\Bundle\Contract\BundleRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class BundleRepository extends EntryRepository implements BundleRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var BundleModel
     */
    protected $model;

    /**
     * Create a new BundleRepository instance.
     *
     * @param BundleModel $model
     */
    public function __construct(BundleModel $model)
    {
        $this->model = $model;
    }
}
