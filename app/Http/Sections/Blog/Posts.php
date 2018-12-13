<?php

namespace App\Http\Sections\Blog;

use App\Models\Blog\Category;
use App\Models\Blog\Tag;
use App\Models\User;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class Posts
 *
 * @property \App\Models\Blog\Article $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Posts extends Section implements Initializable
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
    protected $title;

    /**
     * @var string
     */
    protected $alias;

    protected $icon = 'fa fa-calendar';

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
                \AdminColumn::text('header', 'Header'),
                \AdminColumn::text('category.name', 'Category'),
                \AdminColumn::text('author.name', 'Author'),
                \AdminColumn::datetime('created_at', 'Created')
                    ->setFormat('d.m.Y H:i')->setWidth('150px')
            );

        return $display->paginate(50);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        $panelEn = \AdminForm::panel()->addBody([
            \AdminFormElement::text('header', 'Header')
                ->addValidationRule('max:255')
                ->required(),
            \AdminFormElement::text('title', 'Title')
                ->addValidationRule('max:255')
                ->required(),
            \AdminFormElement::wysiwyg('content', 'Content')
                ->required(),
            \AdminFormElement::textarea('description', 'Description')
                ->required(),
            \AdminFormElement::textarea('keywords', 'Keywords')
                ->addValidationRule('max:255')
                ->required(),
            \AdminFormElement::select('category_id', 'Category', Category::class)
                ->required()
                ->setDisplay('name'),
            \AdminFormElement::select('author_id', 'Author', User::class)
                ->required()
                ->setDefaultValue(optional(auth()->user())->id)
                ->setDisplay('name'),
            \AdminFormElement::multiselect('tags', 'Tags', Tag::class)
                ->required()
                ->setDisplay('name'),
            \AdminFormElement::image('image', 'Image')
                ->required()
                ->setUploadPath(function (\Illuminate\Http\UploadedFile $file) {
                    return 'storage/articles';
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
