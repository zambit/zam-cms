<?php

namespace App\Http\Sections;

use App\Models\Language;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class Languages
 *
 * @property \App\Models\Language $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Languages extends Section implements Initializable
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
    protected $title = 'Languages';

    /**
     * @var string
     */
    protected $alias;

    protected $icon = 'fa fa-flag';

    public function initialize()
    {
        $this->addToNavigation($priority = 40);
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
                \AdminColumn::text('name', 'Language'),
                \AdminColumn::text('slug', 'ISO 639-1 (1998)'),
                \AdminColumn::custom('Flag icon', function (Language $lang) {
                    return \HTML::image($lang->getFlagUrl(), null, ['width' => 32]);
                })
            );

        return $display->paginate(20);
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

        if (empty($languages)) {
            $languages = ['en' => 'English'];
        }

        $form->addHeader([
            \AdminFormElement::text('slug', 'ISO 639-1 (1998)')
                ->required()
                ->addValidationRule('size:2')
                ->unique('Данный код занят'),
            \AdminFormElement::image('flag', 'Flag icon')
                ->required()
                ->setUploadPath(function (\Illuminate\Http\UploadedFile $file) {
                    return 'storage/languages';
                }),
        ]);

        foreach ($languages as $slug => $language) {
            $panel = new \SleepingOwl\Admin\Form\FormElements([
                \AdminFormElement::text('name:' . $slug, 'Language')
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
