<?php

namespace Keevitaja\TranslationsModule\Commands;

use Illuminate\Translation\Translator;
use Keevitaja\TranslationsModule\Bundle\Contract\BundleRepositoryInterface;

class AddTranslationLines
{
    /**
     * Add translation lines to Laravel Translator system
     *
     * @param \Keevitaja\TranslationsModule\Bundle\Contract\BundleRepositoryInterface $bundle
     * @param \Illuminate\Translation\Translator $translator
     *
     * @return void
     */
    public function handle(BundleRepositoryInterface $bundle, Translator $translator)
    {
        $locales = config('streams::locales.enabled', []);
        $default = config('streams::locales.default');
        $container = [];

        $cacheExpires = config('keevitaja.module.translations::configuration.cache_expires');
        
        $bundles = cache()->remember('keevitaja.translations', $cacheExpires, function() use($bundle) {
            return $bundle->all()->load('translatables', 'translatables.translations');
        });

        foreach($locales as $locale) {
            foreach ($bundles as $b) {
                foreach ($b->translatables as $t) {
                    $key = $b->slug.'.'.$t->slug;
                    
                    $translated = $t->translate($locale);

                    if (isset($translated->string)) {
                        $container[$locale][$key] = $translated->string;
                    } else {
                        $translated = $t->translate($default);

                        if (isset($translated->string)) {
                            $container[$locale][$key] = $translated->string;
                        }
                    }
                }
            }
        }

        foreach ($container as $locale => $lines) {
            $translator->addLines($lines, $locale);
        }
    }
}
