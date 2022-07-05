@extends('base')

@section('content')

<div class="row">
 <div class="col-md-6 offset-md-3">
 <h1 class="text-center"> EDIT BOOK</h1>
    <hr>
<div class="card mt-5 bg-primary">
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
        {!! Form::label("genre", "Type",) !!}
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
        <button class=" btn btn-sm btn-warning" type="submit" >
            Update
        </button>
        
    </div>
    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<style>
    h1{
        font-family: 'Times New Roman', Times, serif;
        font-size: 4vw;
    }
</style>



@endsection