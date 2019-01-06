<?php
namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
{

    public function handle($request, Closure $next)
    {
        $headers = [
          // 'Access-Control-Allow-Credentials' => 'true',
          // 'Access-Control-Max-Age'           => '86400',
            'Access-Control-Allow-Origin'      => '*',
            'Access-Control-Allow-Methods'     => 'POST, GET, OPTIONS',
            'Access-Control-Allow-Headers'     => 'Content-Type, token'// X-Requested-With'
        ];

        if ($request->isMethod('OPTIONS'))
        {
                  $response = response("",201);
        }else{
                  $response = $next($request);
        }

        return $response->withHeaders($headers);
    }

}
