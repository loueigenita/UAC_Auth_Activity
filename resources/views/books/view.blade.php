@extends('base')

@section('content')

<div>{{$book->user->lname}}, {{$book->user->fname}} <br />
    {{$book->created_at->format('F d, Y g:i A')}}
</div>
<hr>
    <table class="table table-striped table-bordered bg-primary text-center">
      <thead class="table-dark">
        <th>ID</th>
        <th>TITLE</th>
        <th>AUTHOR</th>
        <th>TYPE</th>
        <th>DESCRIPTION</th>
        <th>YEAR</th>
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

<div class="d-flex justify-content-end">
  
  <a href="{{url('/books/edit/' . $book->id)}}" class="btn btn-sm btn-dark" style="margin: 0.5%"> Edit </a>
  <a href="{{url('/books/open/' . $book->id)}}" class="btn btn-sm btn-danger" style="margin: 0.5%"> Delete </a>
  <a href="{{'/books/recent'}}" class="btn btn-sm btn-primary" style="margin: 0.5%">Back</a>
  
@endsection
