<?php namespace Keevitaja\TranslationsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Keevitaja\TranslationsModule\Commands\AddTranslationLines;

class TranslationsModuleServiceProvider extends AddonServiceProvider
{
    /**
     * Module routes
     *
     * @var array
     */
    protected $routes = [
        'admin/translations' => 
            'Keevitaja\TranslationsModule\Http\Controller\Admin\TranslatablesController@index',
        'admin/translations/create' => 
            'Keevitaja\TranslationsModule\Http\Controller\Admin\TranslatablesController@create',
        'admin/translations/edit/{id}' => 
            'Keevitaja\TranslationsModule\Http\Controller\Admin\TranslatablesController@edit',
        'admin/translations/bundles' => 
        'Keevitaja\TranslationsModule\Http\Controller\Admin\BundlesController@index',
        'admin/translations/bundles/create' => 
        'Keevitaja\TranslationsModule\Http\Controller\Admin\BundlesController@create',
        'admin/translations/bundles/edit/{id}' => 
        'Keevitaja\TranslationsModule\Http\Controller\Admin\BundlesController@edit'
    ];

    /**
     * Bindings
     *
     * @var array
     */
    protected $bindings = [
        'Keevitaja\TranslationsModule\Translatable\Contract\TranslatableInterface' =>
            'Keevitaja\TranslationsModule\Translatable\TranslatableModel',
        'Keevitaja\TranslationsModule\Translatable\Contract\TranslatableRepositoryInterface' => 
            'Keevitaja\TranslationsModule\Translatable\TranslatableRepository',
        'Keevitaja\TranslationsModule\Bundle\Contract\BundleInterface' => 
            'Keevitaja\TranslationsModule\Bundle\BundleModel',
        'Keevitaja\TranslationsModule\Bundle\Contract\BundleRepositoryInterface' => 
            'Keevitaja\TranslationsModule\Bundle\BundleRepository'
    ];

    protected $middleware = [
        'Keevitaja\TranslationsModule\Http\Middleware\LoadTranslations'
    ];
}
