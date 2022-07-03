<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','title', 'authors_name','genre','description','year_published'];

    public function user() {
        return $this->belongsTo('App\Models\User');

    }
    public function isEditable(){
        $book = request()->route('book');
        
       return auth()->user()->role=='editor' || auth()->user()->id==$book->user_id;
    }
    public function isDeleteable(){
        $book = request()->route('book');
        
       return auth()->user()->role=='editor' || auth()->user()->id==$book->user_id;
    }
}
