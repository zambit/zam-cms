<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class Users
 *
 * @property \App\Models\User $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Users extends Section implements Initializable
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
    protected $title = 'Users';

    /**
     * @var string
     */
    protected $alias;

    protected $icon = 'fa fa-users';

    public function initialize()
    {
        $this->addToNavigation($priority = 10);
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
                \AdminColumn::text('name', 'Name'),
                \AdminColumn::email('email', 'Email'),
                \AdminColumn::datetime('created_at', 'Created')
                    ->setFormat('d.m.Y H:i')->setWidth('150px')
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
        $panelMain = \AdminForm::panel()->addBody([
            \AdminFormElement::text('name', 'Nameя')
                ->required(),
            \AdminFormElement::text('email', 'Email')
                ->required()
                ->unique('Данный e-mail занят'),
            \AdminFormElement::password('password', 'Password')
                ->setHelpText('Оставьте пустым если не хотите менять пароль')
                ->hashWithBcrypt()
                ->allowEmptyValue(),
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
