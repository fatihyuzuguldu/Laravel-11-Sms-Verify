<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CapitalizeFirstLetter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next)
    {
        $path = $request->path();
        $capitalizedPath = collect(explode('/', $path))
            ->map(function ($segment) {
                return Str::ucfirst($segment);
            })
            ->implode('/');

        if ($path !== $capitalizedPath) {
            return redirect($capitalizedPath);
        }

        return $next($request);
    }
}
