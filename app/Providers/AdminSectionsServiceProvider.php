<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        \App\Models\User::class => 'App\Http\Sections\Users',
        \App\Models\Language::class => 'App\Http\Sections\Languages',
        \App\Models\Page::class => 'App\Http\Sections\Pages',
        \App\Models\Blog\Category::class => 'App\Http\Sections\Blog\Categories',
        \App\Models\Blog\Tag::class => 'App\Http\Sections\Blog\Tags',
        \App\Models\Blog\Article::class => 'App\Http\Sections\Blog\Posts',
    ];

    /**
     * Register sections.
     *
     * @param \SleepingOwl\Admin\Admin $admin
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
