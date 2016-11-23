<?php namespace Keevitaja\TranslationsModule\Bundle;

use Keevitaja\TranslationsModule\Bundle\Contract\BundleInterface;
use Anomaly\Streams\Platform\Model\Translations\TranslationsBundlesEntryModel;

class BundleModel extends TranslationsBundlesEntryModel implements BundleInterface
{
    /**
     * Translatables relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function translatables()
    {
        return $this->hasMany(
            'Keevitaja\TranslationsModule\Translatable\TranslatableModel', 
            'bundle_id'
        );
    }
}
