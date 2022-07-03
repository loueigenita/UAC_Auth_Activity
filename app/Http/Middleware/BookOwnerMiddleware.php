<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BookOwnerMiddleware
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

        if($book->user_id != auth()->user()->id){

            return redirect('/books/book')->with('Error', 'You are not allowed to edit this post');
        }
        return $next($request);     
    }
}
