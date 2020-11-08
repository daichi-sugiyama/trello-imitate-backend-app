<?php declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RequestLogger
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (config('logging.enable_request_log')) {
            $this->writeLog($request);
        }

        return $next($request);
    }

    /**
     * @param Request $request
     * @return void
     */
    private function writeLog(Request $request): void
    {
        Log::debug($request->method(), ['url' => $request->fullUrl(), 'request' => $request->all()]);
    }
}