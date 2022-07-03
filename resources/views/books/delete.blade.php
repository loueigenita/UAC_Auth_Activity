@extends('base')

@section('content')

<h1>{{$books->title}}</h1>
<h1>{{$books->authors_name}}</h1>
<h1>{{$books->genre}}</h1>
<h1>{{$books->description}}</h1>
<h1>{{$books->year_published}}</h1>
<div>{{$books->user->lname}}, {{$book->user->fname}} <br />
    {{$books->created_at->format('F d, Y g:i A')}}
</div>
<hr>
<div class="card-footer">
                  <a href="{{url('/books/delete/' . $book->id)}}" class="btn btn-info btn-sm justify-content-between"> Delete </a>
            </div>




@endsection