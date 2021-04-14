<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Analytics;
use Illuminate\Http\Request;

class AnalyzeRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $response = $next($request);

        $from = $request->f ?? '';
        $type_short = $request->t ?? '';

        $source = [
            'h' => 'home',
            's' => 'section',
            't' => 'tool',
            'a' => 'article',
            'm' => 'mentoring',
        ];

        $type_long = [
            'c' => 'cta',
            'l' => 'link',
        ];

        Analytics::create([
            'from' => $source[$from] ?? '',
            'event_type' => $type_long[$type_short] ?? '',
            'fingerprint' => $request->fingerprint(),
            'to' => $request->path(),
        ]);

        return $response;
        
    }
}
