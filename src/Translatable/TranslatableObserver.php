<?php namespace Keevitaja\TranslationsModule\Translatable;

use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\Streams\Platform\Entry\EntryObserver;

class TranslatableObserver extends EntryObserver
{
    public function saved(EntryInterface $entry)
    {
        cache()->flush();

        parent::saved($entry);
    }
}