<?php namespace Keevitaja\TranslationsModule\Http\Controller\Admin;

use Keevitaja\TranslationsModule\Translatable\Form\TranslatableFormBuilder;
use Keevitaja\TranslationsModule\Translatable\Table\TranslatableTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class TranslatablesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param TranslatableTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TranslatableTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param TranslatableFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(TranslatableFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param TranslatableFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(TranslatableFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
