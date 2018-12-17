<?php

namespace App\Http\Sections;

use App\Models\Language;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class Pages
 *
 * @property \App\Models\Page $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Pages extends Section implements Initializable
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
    protected $title = 'Text Pages';

    /**
     * @var string
     */
    protected $alias;

    protected $icon = 'fa fa-edit';

    public function initialize()
    {
        $this->addToNavigation($priority = 20);
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
                \AdminColumn::text('title', 'Title'),
                \AdminColumn::datetime('created_at', 'Created')
                    ->setFormat('d.m.Y H:i')->setWidth('150px')
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

        $elements = [];

        foreach ($languages as $slug => $language) {
            $elements['title'] = \AdminFormElement::text('title:' . $slug, 'Title')
                ->addValidationRule('max:255');
            $elements['description'] = \AdminFormElement::textarea('description:' . $slug, 'Description');
            $elements['keywords'] = \AdminFormElement::textarea('keywords:' . $slug, 'Keywords')
                ->addValidationRule('max:255');
            $elements['content'] = \AdminFormElement::textarea('content:' . $slug, 'Content');

            if ($slug === config('app.locale')) {
                foreach ($elements as $element) {
                    $element->required();
                }
            }

            $panel = new \SleepingOwl\Admin\Form\FormElements($elements);

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
