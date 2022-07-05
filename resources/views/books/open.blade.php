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
  <a href="{{'/books/book'}}" class="btn btn-sm btn-primary" style="margin: 0.5%">Back</a>
                  <button type="button" class="btn btn-sm btn-danger" style="margin: 0.5%" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Delete
                  </button>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel ">Delete Book?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Are you sure you want to delete this book?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-success" data-bs-dismiss="modal">Close</button>
                    <a href="{{url('/books/delete/' . $book->id)}}" class="btn btn-sm btn-info btn-danger" style="margin: 0.5%">Delete</a>
                  </div>
                </div>
              </div>
<style>
  h1{
    color: rgb(255, 255, 255);
    font-family: 'Courier New', Courier, monospace;
  }
</style>

@endsection