<?php

namespace App\Http\Middleware;

use Closure;

class Censure
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    public function handle($request, Closure $next)
    {
        $a = $request->content;

        $censure = [
            'hate',
            'idiot',
            'stupid'
        ];
        foreach ($censure as $word) {
            if (strpos($a, $word ) !== false) {
                return redirect('/forbbiden-comment');
            }
        }

        return $next($request);
    }
    
}
