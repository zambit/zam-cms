<?php

namespace App\Http\Middleware;

use App\Models\Language;
use Closure;

class SetApiLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $lang = $request->input('lang', 'en');

        $avaiableLanguages = Language::all()->pluck('slug')->toArray();

        if (in_array($lang, $avaiableLanguages)) {
            \App::setLocale($lang);
        }

        return $next($request);
    }
}
