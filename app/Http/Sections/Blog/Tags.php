<?php

namespace App\Http\Sections\Blog;

use App\Models\Language;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class Tags
 *
 * @property \App\Models\Blog\Tag $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Tags extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Blog Tags';

    /**
     * @var string
     */
    protected $alias;

    protected $icon = 'fa fa-tags';

    public function initialize()
    {
        $this->addToNavigation($priority = 80);
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $display = \AdminDisplay::table()
            ->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                \AdminColumn::text('id', '#')->setWidth('30px'),
                \AdminColumn::text('name', 'Name')
            );

        return $display->paginate(100);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        $form = \AdminForm::panel();

        $tabs = \AdminDisplay::tabbed();

        $languages = Language::all()->pluck('name', 'slug')->toArray();

        foreach ($languages as $slug => $language) {
            $panel = new \SleepingOwl\Admin\Form\FormElements([
                \AdminFormElement::text('name:' . $slug, 'Tag')
                    ->addValidationRule('max:80')
                    ->required(),
            ]);

            $tabs->appendTab($panel, $language);
        }

        $form->addElement($tabs);

        return $form;
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
