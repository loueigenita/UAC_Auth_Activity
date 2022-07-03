<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DeleteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $book = $request->route('book');

        if(!$book->isDeleteable()){
            
            return redirect('/books/book')->with('Error', 'Your Not Allowed To Delete This Post.');
        }
        return $next($request);
    }
}
