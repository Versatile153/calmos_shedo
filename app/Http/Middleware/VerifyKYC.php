<?php



namespace App\Http\Middleware;

use Closure;

class VerifyKYC
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated and not verified
        if (auth()->check() && !auth()->user()->verified) {
            // Set a session message
            session()->flash('info', 'KYC Verification is required.');

            // Redirect to the KYC page
            return redirect('/kyc');
        }

        // Continue to the next middleware or route
        return $next($request);
    }
}
