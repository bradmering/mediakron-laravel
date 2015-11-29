<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Auth;

class SiteAccess
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
	    $site = $request->site;
	    $user = Auth::user();
	    
	    //$siteAccess = DB::
	    
        return $next($request);
    }
}
