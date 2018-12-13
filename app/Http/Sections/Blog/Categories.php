<?php

namespace App\Http\Sections\Blog;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class Categories
 *
 * @property \App\Models\Blog\Category $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Categories extends Section implements Initializable
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
    protected $title = 'Blog Categories';

    /**
     * @var string
     */
    protected $alias;

    protected $icon = 'fa fa-list';

    public function initialize()
    {
        $this->addToNavigation($priority = 70);
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
        $panelEn = \AdminForm::panel()->addBody([
            \AdminFormElement::text('name', 'Tag')
                ->addValidationRule('max:80')
                ->unique()
                ->required(),
            \AdminFormElement::textarea('description', 'Description')
                ->required(),
        ]);

        $tabs = \AdminDisplay::tabbed();

        $tabs->appendTab($panelEn, 'English');

        return $tabs;
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
