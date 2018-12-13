<?php

namespace App\Http\Sections\Blog;

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
        $panelEn = \AdminForm::panel()->addBody([
            \AdminFormElement::text('name', 'Tag')
                ->addValidationRule('max:80')
                ->unique()
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
