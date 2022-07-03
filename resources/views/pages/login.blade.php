@extends('base')

@section('content')
<div class="row">
    <div class="col-md-4 offset-md-4">
        <h1 class="mt-5 text-center">USER LOGIN</h1>
        <hr>
        <div class="card mt-2 bg-primary">
            <div class="card-body">
                {!! Form::open(['url'=>'/login','method'=>'post']) !!}

                <div class="mb-3">
                    {!! Form::label("username", "User Name") !!}
                    {!! Form::text("username", null, ['class'=>'form-control']) !!}
                </div>
                <div class="mb-3">
                    {!! Form::label("password", "Password") !!}
                    {!! Form::password("password", ['class'=>'form-control']) !!}
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <button class="btn btn-warning " type="submit">
                        LOGIN
                    </button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<style>
     h1{text-align: center; font-family: 'Times New Roman', Times, serif; font-size: 4vw;}
</style>

@endsection
