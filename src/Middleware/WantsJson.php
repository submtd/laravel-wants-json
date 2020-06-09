<?php

namespace Submtd\LaravelWantsJson\Middleware;

use Closure;
use Illuminate\Http\Request;

class WantsJson
{
    /**
     * Handle.
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return \Closure
     */
    public function handle(Request $request, Closure $next)
    {
        $request->headers->add(['Accept' => 'application/json']);

        return $next($request);
    }
}
