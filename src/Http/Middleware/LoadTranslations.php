<?php

namespace Keevitaja\TranslationsModule\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Keevitaja\TranslationsModule\Commands\AddTranslationLines;

class LoadTranslations
{
    public function handle(Request $request, Closure $next)
    {
        if ( ! auth()->user()->translator) dispatch(new AddTranslationLines);

        return $next($request);
    }
}

