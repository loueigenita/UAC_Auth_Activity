@extends('base')

@section('content')

<div class="float-end mt-2">
   <a href="{{'/books/create'}}" class="btn btn-primary">
       ADD BOOKS
   </a>
</div>

<h1>MY BOOKS</h1>
<hr>

<div class="row row-cols-1 row row-cols-md-2 g-1 d-flex justify-content-between">
  @foreach($bookList as $book)

  <div class="card align-self-stretched border-warning mb-3 " style="width: 31%">
    <div class="card-header bg-dark text-white text-center">Book Information</div>
       <div class="card-body bg-primary">
            <div class="card-title">
            <table class="table table-bordered bg-secondary">
                <tr>
                    <th scope = "row"> Title :</th><td>{{$book->title}}</td>
                    </tr>
                    <tr>
                    <th scope = "row"> Author :</th><td>{{$book->authors_name}}</td>
                    <tr>
                      <th scope = "row"> Year :</th><td>{{$book->year_published}}</td>
                    </tr>
                    <tr>
                      <th scope = "row"> Type :</th><td>{{$book->genre}}</td>
                    </tr>
                    </tr>
              </table>
               
            </div>
            <div class="mb-2 d-flex justify-content-center">
                <a href="{{url('/books/edit/' . $book->id)}}" class="btn btn-sm btn-dark" style="margin: 1%"> Edit </a>
                <a href="{{url('/books/list/' . $book->id)}}" class="btn btn-sm btn-warning" style="margin: 1%"> Open </a>
                <a href="{{url('/books/open/' . $book->id)}}" class="btn btn-sm btn-danger" style="margin: 1%"> Delete </a>
            </div>
            
       </div>
  </div>
  @endforeach
</div>
<style>
  h1{
      font-family: 'Times New Roman', Times, serif;
      font-size: 4vw;
  }
</style>



@endsection