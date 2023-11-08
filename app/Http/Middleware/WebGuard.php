<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WebGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        echo 'Global middleware ';
        echo '<br>';
$age =  $request->age ;
if($age){
            if ($age >= 18) {
                echo '<br>';
                echo 'eligible for driving license';
                echo '<br>';

            } else {
                echo '<br>';

                echo 'Not eligible for driving license';
                echo '<br>';

            }
        }
        return $next($request);

}
       
}
