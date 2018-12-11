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
    protected $title = 'Поддерживаемые языки';

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
                \AdminColumn::text('name', 'Язык'),
                \AdminColumn::text('slug', 'Код ISO 639-1 (1998)'),
                \AdminColumn::custom('Флаг', function (Language $lang) {
                    return \HTML::image($lang->getFlagUrl(), null, ['width' => 32]);
                })
            );

        return $display
            ->setApply(function ($query) {
                $query->orderBy('slug', 'asc');
            })
            ->paginate(20);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        $panelMain = \AdminForm::panel()->addBody([
            \AdminFormElement::text('name', 'Язык')
                ->required(),
            \AdminFormElement::text('slug', 'Код ISO 639-1 (1998)')
                ->required()
                ->unique('Данный код занят'),
            \AdminFormElement::image('flag', 'Флаг')
                ->required()
                ->setUploadPath(function (\Illuminate\Http\UploadedFile $file) {
                    return 'storage/languages'; // public/files
                }),
        ]);

        return $panelMain;
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
