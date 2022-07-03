@extends('base')

@section('content')

<div>{{$book->user->lname}}, {{$book->user->fname}} <br />
    {{$book->created_at->format('F d, Y g:i A')}}
</div>
<hr>
<table class="table table-bordered bg-primary">
    <thead>
      <tr>
        <th scope="row">{{$book->id}}</th>
        <th scope="col">TITLE</th>
        <th scope="col">AUTHOR</th>
        <th scope="col">GENRE</th>
        <th scope="col">DESCRIPTION</th>
        <th scope="col">YEAR</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{$book->id}}</th>
        <td>{{$book->title}}</td>
        <td>{{$book->authors_name}}</td>
        <td>{{$book->genre}}</td>
        <td>{{$book->description}}</td>
        <td>{{$book->year_published}}</td>
      </tr>
  </tbody>
</table>
@endsection
