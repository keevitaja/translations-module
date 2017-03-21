<?php namespace Keevitaja\TranslationsModule\Bundle;

use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\Streams\Platform\Entry\EntryObserver;

class BundleObserver extends EntryObserver
{
    public function saved(EntryInterface $entry)
    {
        cache()->flush();

        parent::saved($entry);
    }
}