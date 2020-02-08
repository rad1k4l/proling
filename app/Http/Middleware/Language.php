<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\URL;

class Language
{

    public $default = 'az';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $path = $request->path();
        $first_segment = request()->segment(1);
        if (!in_array($first_segment, config("app.locales"))) {
            return redirect("/{$this->default}/{$path}", 301);
        }
        URL::defaults([ 'main_lang' => $this->default ]);
        app()->setLocale($first_segment);
        return $next($request);
    }
}
