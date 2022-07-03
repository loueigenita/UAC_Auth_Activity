@extends('base')

@section('content')

<div class="row">
 <div class="col-md-6 offset-md-3">
 <h1> EDIT BOOKS</h1>
    <hr>
<div class="card mt-5 border-dark">
 <div class="card-body">

    {!! Form::model($book, ['url' => '/books/' . $book->id, 'method'=>'put']) !!}
    <div class="mb-2">
        {!! Form::label("title", "Title",) !!}
        {!! Form::text("title", null, ['class'=>'form-control']) !!}
        </div>
    
        <div class="mb-2">
        {!! Form::label("authors_name", "Author's Name",) !!}
        {!! Form::text("authors_name", null, ['class'=>'form-control']) !!}
        </div>
        <div class="mb-2">
        {!! Form::label("genre", "Genre",) !!}
        {!! Form::text("genre", null, ['class'=>'form-control']) !!}
        </div>
        <div class="mb-2">
        {!! Form::label("description", "Description",) !!}
        {!! Form::text("description", null, ['class'=>'form-control']) !!}
        </div>
        <div class="mb-2">
        {!! Form::label("year_published", "Year",) !!}
        {!! Form::text("year_published", null, ['class'=>'form-control']) !!}
        </div>
        
    <div class="mb-2 d-flex justify-content-end">
        <button class=" btn btn-success" type="submit" >
            Update Info
        </button>
        
    </div>
    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>



@endsection