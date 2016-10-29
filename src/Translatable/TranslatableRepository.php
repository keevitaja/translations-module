<?php namespace Keevitaja\TranslationsModule\Translatable;

use Keevitaja\TranslationsModule\Translatable\Contract\TranslatableRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class TranslatableRepository extends EntryRepository implements TranslatableRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var TranslatableModel
     */
    protected $model;

    /**
     * Create a new TranslatableRepository instance.
     *
     * @param TranslatableModel $model
     */
    public function __construct(TranslatableModel $model)
    {
        $this->model = $model;
    }
}
