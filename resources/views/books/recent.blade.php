@extends('base')

@section('content')

<h1>RECENT BOOKS</h1>
<hr>

<div class="d-flex justify-content-between">
  @foreach($recentBook as $book)

  <div class="card align-self-stretched border-warning mb-3 " style="width: 31%">
    <div class="card-header bg-dark text-white text-center">Book Information</div>
       <div class="card-body bg-primary">
            <div class="card-title">
            <table class="table table-bordered bg-light">
                <tr>
                    <th scope = "row"> Title :</th><td>{{$book->title}}</td>
                    </tr>
                    <tr>
                    <th scope = "row"> Author :</th><td>{{$book->authors_name}}</td>
                    <tr>
                      <th scope = "row"> Year :</th><td>{{$book->year_published}}</td>
                    </tr>
                    <tr>
                      <th scope = "row"> GENRE :</th><td>{{$book->genre}}</td>
                    </tr>
                    </tr>
              </table>
               
            </div>
            <div class="d-flex justify-content-center ">
                <a href="{{url('/books/edit/' . $book->id)}}" class="btn btn-sm btn-dark" style="margin: 1%"> Edit </a>
                <a href="{{url('/books/list/' . $book->id)}}" class="btn btn-sm btn-warning" style="margin: 1%"> Open </a>
                <a href="{{url('/books/open/' . $book->id)}}" class="btn btn-sm btn-danger" style="margin: 1%"> Delete </a>
            </div>
            
       </div>
  </div>
  @endforeach
</div>



@endsection