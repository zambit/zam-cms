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
        $panelEn = \AdminForm::panel()->addBody([
            \AdminFormElement::text('name', 'Language')
                ->required(),
            \AdminFormElement::text('slug', 'ISO 639-1 (1998)')
                ->required()
                ->unique('Данный код занят'),
            \AdminFormElement::image('flag', 'Flag icon')
                ->required()
                ->setUploadPath(function (\Illuminate\Http\UploadedFile $file) {
                    return 'storage/languages';
                }),
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
