<?php namespace Keevitaja\TranslationsModule\Http\Controller\Admin;

use Keevitaja\TranslationsModule\Bundle\Form\BundleFormBuilder;
use Keevitaja\TranslationsModule\Bundle\Table\BundleTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class BundlesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param BundleTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(BundleTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param BundleFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(BundleFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param BundleFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(BundleFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
